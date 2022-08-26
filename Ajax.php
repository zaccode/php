<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class = "container my-3">
<table class="table">
    <button type="button" class="btn btn-secondary" id ="load-button">Load</button>
    <hr>
<div id="table-data">
  <!-- <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Roll No</th>
      <th scope="col">Names</th>
      <th scope="col">subject</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <th scope="row">15</th>
      <td>Mark zukerberg</td>
      <td>math</td>
     
    </tr>
    <tr>
      <th scope="row">2</th>
      <th scope="row">22</th>
      <td>steve jobs</td>
      <td>science</td>
     
    </tr>

  </tbody> -->
</div>
</table>
</div>

<script  src="jquery-3.6.0.min.js">
    $(document.)ready(function(){
       
            $.ajax({
                url : "Ajax2.php",
                type : "POST",
                success : function(data){
                    $("#table-data").html(data);
                }
            })
        });
    </script>
</body>
</html>