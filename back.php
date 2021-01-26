<html>
<head>
<title>Basic Banking System</title>
<link rel="stylesheet" href="css/sty.css" >
<!-- CSS -->
<link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<section id="title">
    <div class="row">
      <div class="col-lg-6">
        <a href="index.html"><img src="xx.jpg" alt=""></a>
        <h1 class="main-text">Customers</h1>
        <a href="index.html"><button type="button" class="btn btn-dark btn-lg download-button"><i class="fa fa-home" aria-hidden="true"></i> Home</button></a>
        <button type="button" class="btn btn-outline-dark btn-lg download-button" onclick="openForm()"><i class="fa fa-money" aria-hidden="true"></i> Transfer Money</button>
        <div class="form-popup" id="myForm">
          <form action="response.php" method="post" class="form-container">

            <label for="E-mail"><b>Transfer from:</b></label>
            <input id= "E-mail" type="text" placeholder="Enter Your Email" name="emailfrom" required>
            
            <label for="E-mail"><b>Transfer To:</b></label>
            <input id= "E-mail" type="text" placeholder="Enter Your Email" name="emailto" required>


            <label for="amount"><b>Amount:</b></label>
            <input id="amount" type="text" placeholder="Enter Amount(rs)" name="amount" required>

            <button type="submit" class="btn">Transfer</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
          </form>
        </div>
      </div>