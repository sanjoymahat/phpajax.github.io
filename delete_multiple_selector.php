<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Delete Multiple Data</title>
  <link rel="stylesheet" href="css/style2.css">
</head>
<body>
  <div id="main">
    <div id="header">
        <h1>Delete Multiple Data with <br>PHP & Ajax CRUD</h1>
    </div>
    <div id="sub-header">
      <button id="delete-btn">Delete</button>
    </div>
    <div id="table-data"></div>
  </div>

  <div id="error-message"></div>
  <div id="success-message"></div>
  
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      //here to all data fetech in data base deltedata.php
      function loadData(){
        //loadData(); load all data in table
        $.ajax({
          url : "deletedata.php",
          type : "POST",
          //here method is post
          success : function(data){
            //when deletedata.php data successfully come in successfully peremether in function(data)
            $("#table-data").html(data);
            //here selector selector table-data data select and .html(data)
          }
        });
      }
      loadData();

      $("#delete-btn").on("click",function(){
        var id = [];
        //all select id store in array  which is push the value when each (function ()) works

        $(".checkboxToDelete:checked").each(function(){
          id.push($(this).val());
        });

        if(id.length === 0){
          alert("Please Select at least one checkbox.");
        }else{
          if(confirm("Do you really want to delete these records?")){
            $.ajax({
              url : "deletemultiple.php",
              type : "POST",
              data : {id : id},
              success : function(data){
                if(data == 1){
                  //when deleemultiple.php data send 1 then work this conditon
                  $("#success-message").html("Data deleted successfully.").slideDown();
                  $("#error-message").slideUp();
                  loadData();
                  setTimeout(function(){
                    $("#success-message").slideUp();
                  }, 4000);
                }else{
                  // //when deleemultiple.php data send 0 then work this conditon
                  $("#error-message").html("Can't Delete Data.").slideDown();
                  $("#success-message").slideUp();
                  setTimeout(function(){
                    $("#error-message").slideUp();
                  }, 4000);
                }
              }
            });
          }
        }
      });
    });
  </script>
</body>
</html>
