<!DOCTYPE html>
<?php
  $bdhost = '192.168.0.6';
  $username = 'epiz_23108305';
  $password = 'pxU0H40M1Q9JKR';
  $db = 'epiz_23108305';

  $connection = mysqli_connect($hbhost, $username, $password,$db)
   or die("Connect failed");

   $query = "select * from Users";
   mysqli_query($connection, $query) or die ('Error querying database.');
   $result = mysqli_query($connection, $query);
   $row = mysqli_fetch_array($result);

   while ($row = mysqli_fetch_array($result)){
     echo $row['fname'] . ' ' . $row['lname'] . '<br />';
   }

   mysqli_close($connection);
?>
<html lang="en">
<head>
  <title>RU FIT Login</title>s
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="jumbotron text-center "style=background-color:rgb(194,1,27)>
  <h1>RU FIT</h1>
  <p>The Radford is Reason</p>
</div>

<div class="container">
  <div class="col-sm-4 col-centered">
  </div>
    <div class="col-sm-4 col-centered">
      <div class="form-group">
        <p><br></p>
        <label for="usr">Username:</label>
        <input type="text" class="form-control" id="usr">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd">
        <p><br></p>
      </div>
      <a class="btn btn-default btn-lg btn-block" href="Home.html" role="button">Login</a>
    </div>
    <div class="col-sm-4 col-centered">
    </div>
  </div>


</body>
</html>
