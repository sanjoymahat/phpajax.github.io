<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Upload Using PHP & Ajax</title>
  <!-- Import jQuery -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <link rel="stylesheet" href="css/style3.css">
</head>
<body>
  <div id="main">
    <div id="header">
      <h1>Upload & Remove Files<br> Using PHP & jQuery Ajax</h1>
    </div>
    <div id="content">
      <form id="submit_form" enctype="multipart/form-data"> <!-- Add enctype attribute -->
        <div class="form-group">  
          <label for="upload_file">Select Image</label>  
          <input type="file" name="file" id="upload_file" />  
          <span class="help-block">Allowed File Type - jpg, jpeg, png, gif</span>  
        </div>  
        <input type="submit" name="upload_button" id="upload_btn" value="Upload" />  
      </form>  
      <br />  
      <div id="preview">
        <h3>Image Preview</h3>  
        <div id="image_preview"></div> 
      </div> 
    </div>
  </div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    //Uplaod Image
    $("#submit_form").on("submit", function(e){
        //when submit_form is clicked on("submit",functiion(e)) event work
      e.preventDefault();
      //type="submit" this type bydefault submit function not work so we are use e.preventDefault() function

      var formData = new FormData(this);
      //FormData is a object he is peck every data live string array input anything when create object first we are new object(this):this is a which value you are selcted;

      $.ajax({
        url : "upload.php",
        type :"POST",
        data :formData,
        //which data we are send formdata so here we are mentioned data:formData
        //when we are upload some data we are mentioned two parameters 1.contentType and 2.processData
        contentType:false,
         //contentType:multipart/form-data:- multipart/form-data not neshare if you mention false that means same. here we are mentioned contentType  which is we are upload data 
        processData:false,
        //processData: bydefault true when we are send string and object but here we are sending file so here have false;
        success: function(data){
          $("#preview").show();
          $("#image_preview").html(data);
          $("#upload_file").val('');
        //   //here we are upload_file want 
        }
      });
    });

    //Delete Image
    $(document).on("click","#delete_btn", function(){
        //
      if(confirm("Are you sure you want to remove this image?")){
        var path = $("#delete_btn").data("path");

        $.ajax({
          url:'delete.php',
          type : "POST",
          data : {path : path},
          success: function(data){
            if(data != ""){
              $("#preview").hide();
              $("#image_preview").html('');
            }
          }
        });
      }
    });
  });
</script>
</body>
</html>