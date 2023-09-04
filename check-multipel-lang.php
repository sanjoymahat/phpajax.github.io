<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP & Ajax</title>
  <link rel="stylesheet" href="css/style5.css">
</head>
<body>
  <div id="main">
    <div id="header">
        <h1>Insert Checkbox values in Database<br>using PHP & Ajax</h1>
    </div>
    <div id="content">
        <form id="student-form">
        <table>
          <tr>
            <td><label>Name</label></td>
            <td><input type="text" id="first-name" autocomplete="off"></td>
          </tr>
          <tr>
            <td valign="top"><label>Languages</label></td>
            <td>
              <input type="checkbox" class="lang" value="PHP" />PHP <br />  
              <input type="checkbox" class="lang" value="Python" />Python <br />
              <input type="checkbox" class="lang" value="C++" />C++ <br />
              <input type="checkbox" class="lang" value="Java" />Java <br />
              <input type="checkbox" class="lang" value="C#" />C# <br />
              <input type="checkbox" class="lang" value="Ruby" />Ruby <br />
              <input type="checkbox" class="lang" value="JavaScript" />JavaScript <br />
              <input type="checkbox" class="lang" value="Swift" />Swift <br />

            </td>
          </tr>
          <tr>
            <td></td>
            <td><button id="submit">Submit</button></td>
          </tr>
        </table>
    </div>
  </div>
    
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#student-form').submit(function(e){
        //submit function newa hoi form ke submit korar jono
      e.preventDefault();
      //if default submit have this event stop it

      var fname = $('#first-name').val();
      //this variable use user name and valu pich kora jono
      var languages = [];
      //if multiple valu select then we are use  [] this type of variable

      $(".lang").each(function(){
        if($(this).is(":checked")){
            //is event use check every lang id check or not so use it
          languages.push($(this).val());
        }
      });

      languages = languages.toString();
      //here languages is array but we are send as a string so use language.toString(); event

      if(fname != '' && languages.length !== 0){
        $.ajax({
          url : "check-insert-data.php",
          method : "POST",
          data : {name : fname, languages: languages},
          //here we are send data name and languages
          success : function(data){
            $('#student-form').trigger('reset');
            //trigger event is when click reset data are reset;
            alert(data);
          }
        });
      }else{
        alert("Please fill the required form fields.");
      }
    });
  });
</script>
</body>

</html>