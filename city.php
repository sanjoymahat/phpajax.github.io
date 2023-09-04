<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP & Ajax CRUD</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <table id="main" border="0" cellspacing="0">
    <tr>
      <td id="header">
        <h1>PHP city loader</h1>
      </td>
    </tr>
    <tr>
      <td id="table-form">
        <form id="addForm" >
         Select City:<select id=  city-box>
            <option value="">SELECT</option>
         </select>
        </form>
        
      </td>
    </tr>
    <tr>
      <td id="table-data">
        <table width="100%" cellpadding="10px" >
          <tbody id="load-table">
            
          </tbody>
        </table>
      </td>
    </tr>
  </table>

  <div id="error-message" class="messages"></div>
  <div id="success-message" class="messages"></div>

  
  </div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $.ajax({
        url:"city-load.php",
        type:"POST",
        dataType:"JSON",
        success:function(data){
            $.each(data,function(key,value){
                $("#city-box").append("<option>" + value.city + "</option>");
            });
        }
    });
   
    // Load Table Data
    $("#city-box").change(function(){
      var city = $(this).val();

      if(city == ""){
        $("#table-data").html("");
      }else{
        $.ajax({
          url : "city-table-load.php",
          type : "POST",
          data : { city : city },
          success : function(data){
            $("#table-data").html(data);
          }
        });
      }
    })
     });


  
</script>
</body>
</html>
