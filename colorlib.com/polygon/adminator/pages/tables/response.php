
<?php
	//include connection file 
	include_once("connection.php");
	
	$db = new dbObj();
	$connString =  $db->getConnstring();

	$params = $_REQUEST;
	
	$action = isset($params['action']) != '' ? $params['action'] : '';
	$empCls = new Employee($connString);

	switch($action) {
	 case 'add':
		$empCls->insertEmployee($params);
	 break;
	 case 'edit':
		$empCls->updateEmployee($params);
	 break;
	 case 'edit2':
		$empCls->bupdateEmployee($params);
	 break;
	 case 'delete':
		$empCls->deleteEmployee($params);
	 break;
	 default:
	 $empCls->getEmployees($params);
	 return;
	}
	
	class Employee {
	protected $conn;
	protected $data = array();
	function __construct($connString) {
		$this->conn = $connString;
	}
	public function updateLog($params){


	}
	public function getEmployees($params) {
		
		// $its = $_POST['its'];
		// echo($its);
		$this->data = $this->getRecords($params);
		
		echo json_encode($this->data);
	}
	function insertEmployee($params) {
		$data = array();;
		$sql = "INSERT INTO `hardware`(`hw_name`, `hw_type`, `amount`,`ram_info`,`mhz_info`,`slot_number`,`current_ram`,`max_ram`,`spec_link`,`building`,`floor`,`room_number`,`room_name`,`year`,`type`) VALUES ('" . $params["hw_name"] . "', '" . $params["hw_type"] . "','". $params["amount"] . "', '". $params["ram_info"] . "', '". $params["mhz_info"] . "', '". $params["slot_number"] . "', '". $params["current_ram"] . "', '". $params["max_ram"] . "', '". $params["link"] . "', '". $params["building"] . "', '". $params["floor"] . "', '". $params["room_number"] . "', '". $params["room_name"] . "', '". $params["year"] .  "', '" . $params["type"] . "');  ";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to insert employee data");
		
	}
	
	
	function getRecords($params) {
		$rp = isset($params['rowCount']) ? $params['rowCount'] : 10;
		
		if (isset($params['current'])) { $page  = $params['current']; } else { $page=1; };  
        $start_from = ($page-1) * $rp;
		
		$sql = $sqlRec = $sqlTot = $where = '';
		
		if( !empty($params['searchPhrase']) ) {   
			$where .=" WHERE ";
			$where .=" ( hw_name LIKE '".$params['searchPhrase']."%' ";    
			$where .=" OR hw_type LIKE '".$params['searchPhrase']."%' ";

			$where .=" OR amount LIKE '".$params['searchPhrase']."%' )";
	   }
	   if( !empty($params['sort']) ) {  
			$where .=" ORDER By ".key($params['sort']) .' '.current($params['sort'])." ";
		}
	   // getting total number records without any search
		$sql = "SELECT * FROM `hardware` ";
		$sqlTot .= $sql;
		$sqlRec .= $sql;
		
		//concatenate search sql if value exist
		if(isset($where) && $where != '') {

			$sqlTot .= $where;
			$sqlRec .= $where;
		}
		if ($rp!=-1)
		$sqlRec .= " LIMIT ". $start_from .",".$rp;
		
		
		$qtot = mysqli_query($this->conn, $sqlTot) or die("error to fetch tot employees data");
		$queryRecords = mysqli_query($this->conn, $sqlRec) or die("error to fetch employees data");
		
		while( $row = mysqli_fetch_assoc($queryRecords) ) { 
			$data[] = $row;
		}

		$json_data = array(
			"current"            => intval($params['current']), 
			"rowCount"            => 10, 			
			"total"    => intval($qtot->num_rows),
			"rows"            => $data   // total data array
			);
		
		return $json_data;
	}
	function updateEmployee($params) {
		$data = array();
		//print_R($_POST);die;
		

                                                $datetime1 = new DateTime();
                                                $datetime2 = new DateTime($params["year2"]);
                                                $interval = $datetime1->diff($datetime2);
                                                $elapsed2 = $interval->format('%y');
                                                
                                        

		$sql = "Update `hardware` set hw_name = '" . $params["hw_name2"] . "', hw_type ='" . $params["hw_type2"]."', amount ='" . $params["amount2"] . "', ram_info ='" . $params["ram_info2"]. "', mhz_info ='" . $params["mhz_info2"]. "', slot_number ='" . $params["slot_number2"]. "', current_ram ='" . $params["current_ram2"]. "', max_ram ='" . $params["max_ram2"]. "', spec_link ='" . $params["link2"]. "', building ='" . $params["building2"]. "', floor ='" . $params["floor2"]. "', room_number ='" . $params["room_number2"]. "', room_name ='" . $params["room_name2"] . "', year ='" . $params["year2"]. "', age ='" . $elapsed2 . "' WHERE id='".$_POST["edit_id"]."'";

		
		echo $result = mysqli_query($this->conn, $sql) or die("error to update employee data");
	}
	// function updateLog($params) {
	// 	$data = array();
	// 	//print_R($_POST);die;
	// 	$sql="INSERT INTO `hardwares`(`hw_name`, `hw_type`, `amount`) VALUES ('".$params["hw_name2"]."', hw_type ='" . $params["hw_type2"]."', amount ='" . $params["amount2"] . "' WHERE id='".$_POST["edit_id"]."'";
	// 	echo $result = mysqli_query($this->conn, $sql) or die("error to update employee data");
	// }
	
	function deleteEmployee($params) {
		$data = array();
		//print_R($_POST);die;
		$sql = "delete from `hardware` WHERE id='".$params["id"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to delete employee data");
		echo("HI");
	}
}
?>
	