$(document).ready(function(){
  $("#btn").click(function(){
    
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var mob = $("#phoneNo").val();
    var email = $("#email").val();
    var add1 = $("#add1").val();
    var radiobtn = $("#radiobtn:checked").val();
  if(fname==''||lname==''||mob==''||email=='' ||add1=='' ||radiobtn=='')
  {
  alert("Please Fill All Fields");
  }
  else
  {
  // AJAX Code To Submit Form.
  var formData = new FormData($("form")[0]);
  ///alert(formData);
  $.ajax({
  type: "POST",
  url: "add_data.php",
  data: formData,
  processData: false,
  contentType: false,
  cache: false,
  success: function(result){
    
  alert("success==="+result);
  window.location.href = './index.php';
                   
  }
  });
  }
  return false;
  });
  });

  function deleteEmp(id) {
    if (confirm("Do you want to delete this record!!")) {
         
var rowId='rowId'+id;  //rowId17
// Current button 
var obj = this;
        $.ajax({
            url: "delete_data.php",
            type: "POST",
            data: {'id':id},
           dataType:"text",
            success: function (result) {
                
            // Remove HTML row
            $("#"+rowId).remove();
            
            },
            error: function (err) {
              
                alert('error'+err);
                // check the err for error details
            }
        });
    } else {
    }
    return false;
}


