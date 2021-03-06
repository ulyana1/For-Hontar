<?php
session_start();
if(isset($_SESSION['errorel'])){
  $error = $_SESSION['errorel'];
}else{
  $error = '';
}
?>
<html>
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>NaUKMA Eelection</title>
    <meta name="description" content="Sistem Pencalonan MPP ILP Ledang">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Bootstrap -->
    <!-- CSS -->
    <link rel="stylesheet" type="text/css"  href="css/index.css">
    <script src="js/jquery.js"></script>
    <script src="js/tether.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
<?php include("navbar.php");?>

<div class="col-lg-6 col-lg-offset-3" style = "margin-top:50px;">
<form action="addpersons.php" method="post" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="name">Title</label>
    <input type="name" class="form-control" name = "name" id="name" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Organisation</label>
    <input type="name" class="form-control" name = "organisation" id="organisation" placeholder="Enter name of organisation">
  </div>
  <div class="form-group">
    <label for="textarea">Description</label>
    <textarea class="form-control" name = "description" id="description" rows="3"></textarea>
  </div>
  <div class="form-group">
  <label>End date</label>
    <input type="date" class="form-control" name = "enddate" id="enddate">
  </div>
  <div class="form-group">
    <label for="inputfile">Logo input</label>
    <input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">The selected picture must be a JPG / GIF / PNG format.</small>
  </div>
  <button type="submit" name = "submit" class="btn btn-primary" style="background-color:#e6eeff; color:black; border-color:#80aaff;">Submit</button>
  <p class = "errormas text-center" style = "color:#ff9999;"><br><br><?php echo $error?></p>
</form>
</div>       
            
</body>
</html>