<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/index.css"/>
<link rel="stylesheet" href="css/style1.css"/>
<style>
.form-row{
 background-image:url("image/bg.png");
  background-repeat: no-repeat, repeat;
  height:400px;
  background-size: cover;
}
</style>
</head>
<body>
   <div class = "container-fluid">
    <div class ="row form-row " >
<div class = "col-xs-12 col-sm-12 col-lg-12 col-md-12  bg-info form-row">
    <h5 class = "get_in_title">
        <span class= "text-bold">contact us</span>
    </h5>
    <div class = "form-container">
        <h2>get in tuch</h2>
        <hr style="background-color: rgba(0,0,0,.5); max-width: 90%;">
        <form id="get_in_form" action="#">

 <div class="input-g">
    <label for="Location">Location</label>
    <input type="text" name="Location">
</div>
<div class="input-g">
    <label for="Email">Email</label>
    <input type="text" name="Email">
</div>
<div class="input-g">
    <label for="Company">Company</label>
    <input type="text" name="fCompany">
</div>
</div>
</div>

    </div>
   </div>
   <?php
   include_once('footer.php');
   ?>
</body>
</html>