<!DOCTYPE html>   <?php include '../../../dbconnect.php'; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simple Bootgrid example with add,edit and delete using PHP,MySQL and AJAX</title>
<link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">
<link href="dist/jquery.bootgrid.css" rel="stylesheet" />


<script src="dist/jquery-1.11.1.min.js"></script>
<script src="dist/bootstrap.min.js"></script>
<script src="dist/jquery.bootgrid.min.js"></script>

<script type="text/javascript">

   function enterNumber(){

  var e = document.getElementById('amount2');

  if (!/^[0-9]+$/.test(e.value)) 
{ 
alert("Please enter only number.");
e.value = e.value.substring(0,e.value.length-1);
}
}   
</script>
<script>
  


function colFunction(){
  alert("HELLO");
}

</script>
</head>
  <section class="">
    <?php
    $servername = "localhost";
                                        $username = "root";
                                        $password = "password";
                                        $dbname = "asset";
                                        $devicename="";
                                        $devicetype="";
                                        $amount="";
                                        $raminfo="";
                                        $mhzinfo="";
                                        $slot="";
                                        $currentram="";
                                        $maxram="";
                                        $building="";
                                        $floor="";
                                        $room="";
                                        $roomnum="";
                                        $type="";
                                        $rows=1;

                                        // Create connection
                                         
                                        $sql = "SELECT `purchase_date` FROM `hardware` WHERE 1";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {

                                                $paydate=$row["purchase_date"];
                                                $datetime1 = new DateTime();
                                                $datetime2 = new DateTime($paydate);
                                                $interval = $datetime1->diff($datetime2);
                                                $elapsed2 = $interval->format('%y');
                                                $sql2 = "UPDATE `hardware` set `age` ='$elapsed2' WHERE  `purchase_date`= '$paydate'";
                                                $result2 =  mysql_query($sql2);
//                                                 print '<script type="text/javascript">';
// print 'alert("The email address '. $elapsed2.' is already registered")';
// print '</script>';  
                                                

                                            }

                                            }
                                            ?>
  <div class="">
      <div class="">
        
        <div class="col-sm-18">

    <div id="a2">
    <table id="employee_grid" class="table table-condensed table-hover table-striped table-bordered" width="60%" cellspacing="0" data-toggle="bootgrid">
      <div id="a1">
      <br>
      <div style="float:right; padding-right: 15px"><button type="button" class="btn btn-xs btn-primary" id="command-add" data-row-id="0">
      <span class="glyphicon glyphicon-plus"></span> ADD INFORMATION </button></div>
      <!--<div style="float:right; padding-right: 15px"><button type="button" class="btn btn-xs btn-primary" id="command-bulk-edit" data-row-id="0">
      <span class="glyphicon glyphicon-plus"></span> BULK EDIT </button></div>-->

        <!--<div class='container-box'>
<button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>Contact Us</button>
</div>
<div id='myModal' class='modal fade' role='dialog'>
  <div class='modal-dialog'><div class='modal-content'>
<div class='modal-header'>
<button type='button' class='close' data-dismiss='modal'>×</button>
<h6 class='modal-title'>Contact Us</h6>
</div>
<div class='modal-body'>

        <form role='form' action= method='post' id='reused_form'>
        <p id="choose">
            Send your message in the form below and we will get back to you as early as possible.
        </p>

        <div class='form-group'>
            <label for='names'>
                Name:</label>
            <input type='text' class='form-control'
            id='hwnames' name='hwnames' required maxlength='50'><p id="choose"></p></input>

        </div>

        <div class='form-group'>
            <label for='types'>
                Name:</label>
            <input type='text' class='form-control'
            id='hwtypes' name='hwtypes'required maxlength='50'>

        </div>

        <div class='form-group'>
            <label for='amounts'>
                Name:</label>
            <input type='text' class='form-control'
            id='amounts' name='amounts' required maxlength='50'>

        </div>


        <div class='form-group'>
            <label for='email'>
                Email:</label>
            <input type='email' class='form-control'
            id='email' name='email' required maxlength='50'>
        </div>
        <div class='form-group'>
            <label for='name'>
                Message:</label>
            <textarea class='form-control' type='textarea' name='message'
            id='message' placeholder='Your Message Here'
            maxlength='6000' rows='7'></textarea>
        </div>
        <button type='submit' class='btn btn-lg btn-success btn-block' id='btnContactUs'>Post It! →</button>

    </form>
    <div id='success_message' style='width:100%; height:100%; display:none; '>
        <h3>Sent your message successfully!</h3>
    </div>
    <div id='error_message'
    style='width:100%; height:100%; display:none;' >
        <h3>Error</h3>
        Sorry there was an error sending your form.

    </div>
</div>

</div>

 </div>
</div>-->

    </div>
      <br>
      </div>
      <thead>
        
        <tr>
          <th data-column-id="commands" data-formatter="commands" data-sortable="false">ACTION</th>
          <th data-column-id="id" data-type="numeric" data-identifier="true">ID</th>

          <th data-column-id="hw_name">DEVICE</th>
          <th data-column-id="hw_type">TYPE</th>
          <th data-column-id="amount">AMOUNT</th>
          <th data-column-id="ram_info">RAM(i)</th>
          <th data-column-id="mhz_info">MHZ</th>
          <th data-column-id="slot_number">SLOT</th>
          <th data-column-id="current_ram">CURRENT RAM</th>
          <th data-column-id="max_ram">MAX RAM</th>
          <th data-column-id="spec_link">LINK</th>
          <th data-column-id="building">BUILDING</th>
          <th data-column-id="floor">FLOOR</th>
          <th data-column-id="room_number">ROOM NUMBER</th>
          <th data-column-id="room_name">ROOM NAME</th>
          <th data-column-id="purchase_date">YEAR</th>
          <th data-column-id="user_type">USER TYPE</th>
        </tr>

      </thead>

    </table>
  </div>
    </div>
      </div>
    </div>
</section>  
<div id="add_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Employee</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="frm_add">
        <input type="hidden" value="add" name="action" id="action">
                  <div class="form-group">
                    <label for="name" class="control-label">HW NAME:</label>
                    <input type="text" class="form-control" id="hw_name" name="hw_name"/>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">HW TYPE:</label>
                    <input type="text" class="form-control" id="hw_type" name="hw_type"/>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">AMOUNT:</label>
                    <input type="text" class="form-control" id="amount" name="amount"/>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">RAM INFO:</label>
                    <input type="text" class="form-control" id="ram_info" name="ram_info"/>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">MHZ INFO:</label>
                    <input type="text" class="form-control" id="mhz_info" name="mhz_info"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">SLOT:</label>
                    <input type="text" class="form-control" id="slot_number" name="slot_number"/>
                  </div>
          <div class="form-group">
                    <label for="salary" class="control-label">CRR RAM:</label>
                    <input type="text" class="form-control" id="current_ram" name="current_ram"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">MAX RAM:</label>
                    <input type="text" class="form-control" id="max_ram" name="max_ram"/>
                  </div>
          <div class="form-group">
                    <label for="salary" class="control-label">FULL LINK:</label>
                    <input type="text" class="form-control" id="link" name="link"/>
                  </div>
                <div class="form-group">
                    <label for="salary" class="control-label">BUILDING:</label>
                    <input type="text" class="form-control" id="building" name="building"/>
                  </div>
          <div class="form-group">
                    <label for="salary" class="control-label">FLOOR:</label>
                    <input type="text" class="form-control" id="floor" name="floor"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">ROOM NUM:</label>
                    <input type="text" class="form-control" id="room_num" name="room_num"/>
                  </div>
          <div class="form-group">
                    <label for="salary" class="control-label">ROOM NAME:</label>
                    <input type="text" class="form-control" id="room_name" name="room_name"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">YEAR:</label>
                    <input type="text" class="form-control" id="year" name="year"/>
                  </div>
          <div class="form-group">
                    <label for="salary" class="control-label">USER TYPE:</label>
                    <input type="text" class="form-control" id="type" name="type"/>
                  </div>
                
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn_add" class="btn btn-primary">Save</button>
            </div>
      </form>
        </div>
    </div>
</div>

<div id="edit_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button"  class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Employee</h4>
            </div>
            <div class="modal-body">
                <form action="/kis/admin1/pages/tables/editlog.php" method="post"  id="frm_edit" >
        <input type="hidden" value="edit" name="action" id="action">
        <input type="hidden" value="0" name="edit_id" id="edit_id">
                  <div class="form-group">
                    <label for="name" class="control-label">HW NAME:</label>
                    <input type="text" class="form-control" id="hw_name2" name="hw_name2"/>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">HW TYPE:</label>
                    <select class="form-control" id="hw_type" name="hw_type"/>
                    <option value="Computer">Computer</option>
                    <option value="Monitor">Monitor</option>
                    <option value="Printer">Printer</option>
                    <option value="Scanner">Scanner</option>
                    </select> 
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">AMOUNT:</label>
                    <input type="number" onkeyup="enterNumber()" class="form-control" id="amount2" name="amount2" />
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">RAM INFO:</label>
                    <input type="text" class="form-control" id="ram_info2" name="ram_info2"/>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">MHZ INFO:</label>
                    <input type="text" class="form-control" id="mhz_info2" name="mhz_info2"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">SLOT:</label>
                    <input type="text" class="form-control" id="slot_number2" name="slot_number2"/>
                  </div>
          <div class="form-group">
                    <label for="salary" class="control-label">CRR RAM:</label>
                    <input type="text" class="form-control" id="current_ram2" name="current_ram2"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">MAX RAM:</label>
                    <input type="text" class="form-control" id="max_ram2" name="max_ram2"/>
                  </div>
          <div class="form-group">
                    <label for="salary" class="control-label">FULL LINK:</label>
                    <input type="text" class="form-control" id="link2" name="link2"/>
                  </div>
                <div class="form-group">
                    <label for="salary" class="control-label">BUILDING:</label>
                    <input type="text" class="form-control" id="building2" name="building2"/>
                  </div>
          <div class="form-group">
                    <label for="salary" class="control-label">FLOOR:</label>
                    <input type="text" class="form-control" id="floor2" name="floor2"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">ROOM NUM:</label>
                    <input type="text" class="form-control" id="room_num2" name="room_num2"/>
                  </div>
          <div class="form-group">
                    <label for="salary" class="control-label">ROOM NAME:</label>
                    <input type="text" class="form-control" id="room_name2" name="room_name2"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">YEAR:</label>
                    <select id="yearx">
                      <option value='2018'>2018</option>
                      <option value='2017'>2017</option>
                    </select>
                    <select id="monthx">
                      <option value='12'>12</option>
                      <option value='11'>11</option>
                    </select>
                    <select id="datex">
                      <option value='30'>30</option>
                      <option value='29'>29</option>
                    </select>
                    <input type="date" class="form-control" id="year2" name="year2" />
                    
                  </div>
          <div class="form-group">
                    <label for="salary" class="control-label">USER TYPE:</label>
                    <input type="text" class="form-control" id="type2" name="type2"/>
                  </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="btn_edit" class="btn btn-primary">Save</button>
            </div>
      </form>
        </div>
    </div>
</div>

<div id="bulk_edit_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Bulk Edit Data</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="frm_bulk_edit">
        <input type="hidden" value="bulk_edit" name="action" id="action">
        <input type="hidden" value="0" name="bulk_edit_id" id="bulk_edit_id">
                  <div class="form-group">
                    <label for="name" class="control-label">HW NAME:</label>
                    <input type="text" class="form-control" id="hw_name3" name="hw_name3"/>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">HW TYPE:</label>
                    <input type="text" class="form-control" id="hw_type3" name="hw_type3"/>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">AMOUNT:</label>
                    <input type="text" class="form-control" id="amount3" name="amount3"/>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">RAM INFO:</label>
                    <input type="text" class="form-control" id="ram_info3" name="ram_info3"/>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">MHZ INFO:</label>
                    <input type="text" class="form-control" id="mhz_info3" name="mhz_info3"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">SLOT:</label>
                    <input type="text" class="form-control" id="slot_number3" name="slot_number3"/>
                  </div>
          <div class="form-group">
                    <label for="salary" class="control-label">CRR RAM:</label>
                    <input type="text" class="form-control" id="current_ram3" name="current_ram3"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">MAX RAM:</label>
                    <input type="text" class="form-control" id="max_ram3" name="max_ram3"/>
                  </div>
          <div class="form-group">
                    <label for="salary" class="control-label">FULL LINK:</label>
                    <input type="text" class="form-control" id="link3" name="link3"/>
                  </div>
                <div class="form-group">
                    <label for="salary" class="control-label">BUILDING:</label>
                    <input type="text" class="form-control" id="building3" name="building3"/>
                  </div>
          <div class="form-group">
                    <label for="salary" class="control-label">FLOOR:</label>
                    <input type="text" class="form-control" id="floor3" name="floor3"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">ROOM NUM:</label>
                    <input type="text" class="form-control" id="room_num3" name="room_num3"/>
                  </div>
          <div class="form-group">
                    <label for="salary" class="control-label">ROOM NAME:</label>
                    <input type="text" class="form-control" id="room_name3" name="room_name3"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label">YEAR:</label>
                    <input type="text" class="form-control" id="year3" name="year3"/>
                  </div>
          <div class="form-group">
                    <label for="salary" class="control-label">USER TYPE:</label>
                    <input type="text" class="form-control" id="type3" name="type3"/>
                  </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn_bulk_edit" class="btn btn-primary">Save</button>
            </div>
      </form>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">


$( document ).ready(function() {
  var listItem = new Array();
  var grid = $("#employee_grid").bootgrid({
    ajax: true,
    rowSelect: true,
    colSelect: true,
    post: function ()
    {
      /* To accumulate custom parameter with the request object */
      return {
        id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
      };
    },
    
    url: "response.php",
    formatters: {
            "commands": function(column, row)
            {
                return "<button type=\"button\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-edit\"></span></button> " + 
                    "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
            }
        }
   }).on("loaded.rs.jquery.bootgrid", function()
{
    /* Executes after data is loaded and rendered */
    grid.find(".command-edit").on("click", function(e)
    {
        //alert("You pressed edit on row: " + $(this).data("row-id"));
      var ele =$(this).parent();
      var g_id = $(this).parent().siblings(':nth-of-type(2)').html();
            var g_name = $(this).parent().siblings(':nth-of-type(3)').html();
console.log(g_id);
                    console.log(g_name);

    //console.log(grid.data());//
    $('#edit_model').modal('show');
          if($(this).data("row-id") >0) {
              
                                // collect the data
                                $('#edit_id').val(ele.siblings(':nth-of-type(2)').html());
                                var one = $('#edit_id').val(ele.siblings(':nth-of-type(2)').html()); // in case we're changing the key
                                $('#hw_name2').val(ele.siblings(':nth-of-type(3)').html());
                                var two = $('#hw_name2').val(ele.siblings(':nth-of-type(3)').html());

                                $('#hw_type2').val(ele.siblings(':nth-of-type(4)').html());
                                var three = $('#hw_type2').val(ele.siblings(':nth-of-type(4)').html());

                                $('#amount2').val(ele.siblings(':nth-of-type(5)').html());
                                var four = $('#amount2').val(ele.siblings(':nth-of-type(5)').html());
                                $('#ram_info2').val(ele.siblings(':nth-of-type(6)').html());
                                var five = $('#ram_info2').val(ele.siblings(':nth-of-type(6)').html());
                                $('#mhz_info2').val(ele.siblings(':nth-of-type(7)').html());
                                var six = $('#mhz_info2').val(ele.siblings(':nth-of-type(7)').html());
                                $('#slot_number2').val(ele.siblings(':nth-of-type(8)').html());
                                var seven = $('#slot_number2').val(ele.siblings(':nth-of-type(8)').html());
                                $('#current_ram2').val(ele.siblings(':nth-of-type(9)').html());
                                var eight = $('#current_ram2').val(ele.siblings(':nth-of-type(9)').html());
                                $('#max_ram2').val(ele.siblings(':nth-of-type(10)').html());
                                var nine = $('#max_ram2').val(ele.siblings(':nth-of-type(10)').html());
                                $('#link2').val(ele.siblings(':nth-of-type(11)').html());
                                var ten = $('#link2').val(ele.siblings(':nth-of-type(11)').html());
                                $('#building2').val(ele.siblings(':nth-of-type(12)').html());
                                var eleven = $('#building2').val(ele.siblings(':nth-of-type(12)').html());
                                $('#floor2').val(ele.siblings(':nth-of-type(13)').html());
                                var twelve = $('#floor2').val(ele.siblings(':nth-of-type(13)').html());
                                $('#room_num2').val(ele.siblings(':nth-of-type(14)').html());
                                var thirteen = $('#room_num2').val(ele.siblings(':nth-of-type(14)').html());
                                $('#room_name2').val(ele.siblings(':nth-of-type(15)').html());
                                var fourteen = $('#room_name2').val(ele.siblings(':nth-of-type(15)').html());
                                $('#year2').val(ele.siblings(':nth-of-type(16)').html());
                                var fifteen = $('#year2').val(ele.siblings(':nth-of-type(16)').html());
                               
                                
                                
                                
                                
                                
                                
                                
                                

          } else {
           alert('Now row selected! First select row, then click edit button');
          }
    }).end().find(".command-delete").on("click", function(e)
    {
  
    var conf = confirm('Delete '  + ' items id : '+ $(this).data("row-id")+'?');
          alert(conf);
                    if(conf){
                                $.post('response.php', { id: $(this).data("row-id"), action:'delete'}
                                    , function(){
                                        // when ajax returns (callback), 
                    $("#employee_grid").bootgrid('reload');
                                }); 
                //$(this).parent('tr').remove();
                //$("#employee_grid").bootgrid('remove', $(this).data("row-id"))
                    }
    });
});
    /*.end().find(".command-check").on("click", function(e)
    {
    var getId = $(this).data("row-id");
    var out ="";
    /*var conf = confirm('Checked '  + ' items id : '+ $(this).data("row-id")+'?');
    if(listItem.indexOf(getId)> -1){
          alert("THIS ID IS ALREADY CHECKED");
      }
    
    else{
    listItem.push(getId);
    var out="CHECKED LIST ID : ";
          for (var i = 0; i < listItem .length; i ++ ){
            if(i==1){
              out = out+listItem[i]+" ";
            }
            else{
            out = out+listItem[i]+" ";
          }
          }
        var conf = confirm('Bulk edit all '  + out+'?');

        if(conf){
          /*var e1,e2,e3,e4,e5,e6,e7,e8,e9,e10,e11,e12,e13,e14,e15,e16="";
          e1=prompt("Bulk device name/next to skip bulk edit","-");
          e2=prompt("Bulk device type/next to skip bulk edit","-");
          document.getElementById("choose").innerHTML = out;
          window.location.href = "/kis/admin1/pages/tables/bulk.php?list=" + listItem[1];
          /*e3=prompt("Bulk device amount/next to skip bulk edit","-");
          e4=prompt("Bulk device ram info/next to skip bulk edit","-");
          e5=prompt("Bulk device mhz info/next to skip bulk edit","-");
          e6=prompt("Bulk device slot number/next to skip bulk edit","-");
          e7=prompt("Bulk device crr ram/next to skip bulk edit","-");
          e8=prompt("Bulk device max ram/next to skip bulk edit","-");
          e9=prompt("Bulk device link/next to skip bulk edit","-");
          e10=prompt("Bulk device mhz info/next to skip bulk edit","-");

          e11=prompt("Bulk device building/next to skip bulk edit","-");
          e12=prompt("Bulk device floor/next to skip bulk edit","-");
          e13=prompt("Bulk device room number/next to skip bulk edit","-");
          e14=prompt("Bulk device room name/next to skip bulk edit","-");

          e15=prompt("Bulk device year/next to skip bulk edit","-");
          e16=prompt("Bulk device type/next to skip bulk edit","-");*/

function logFunction() { 
  var javascriptVariable = "John";
  window.location.href = "/kis/admin1/pages/tables/editlog.php?its=" + javascriptVariable; 
}



function showBox() { 
  alert("EDIT COMPLETE WITH SECURE RECORDS");
}

function ajaxAction(action) {
        data = $("#frm_"+action).serializeArray();
        $.ajax({
          type: "POST",  
          url: "response.php",  
          data: data,
          dataType: "json",       
          success: function(response)  
          {
          $('#'+action+'_model').modal('hide');
          $("#employee_grid").bootgrid('reload');
          }   
        });
      }
      
      $( "#command-add" ).click(function() {
        $('#add_model').modal('show');
      });
      $( "#btn_add" ).click(function() {
        ajaxAction('add');
      });
      $( "#btn_edit" ).click(function() {
        ajaxAction('edit');
      });
      $( "#command_bulk_edit" ).click(function() {
        ajaxAction('edit2');
      });
});
</script>

