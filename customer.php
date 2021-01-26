
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Basic banking system</title>
  <link rel="stylesheet" href="styles2.css">

  <!-- icon -->
  <link rel="icon" href="w..png">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- Font-awesome -->
  <script src="https://use.fontawesome.com/07d62e5a9f.js"></script>

</head>

<body>

  <!-- First-section -->
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
      <div class="col-lg-6">
        <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public"><img src=".jpg" class="title-image" alt="customer-satisfaction" width="100%"></a>
        <p class="covid-text">Stay Safe.</p>
      </div>
    </div>
    <script>
      function openForm() {
        document.getElementById("myForm").style.display = "block";
      }

      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      }
    </script>


  </section>


  <!-- customer table -->
  <section id="customer-table">
    <h1>Information</h1>
    <table id="employee_grid" class="table" width="100%" cellspacing="0">
		    <tr>
			    <th>Name</th>
			    <th>Email</th>
			    <th>Balance</th>
		    </tr> 
<?php
   $host        = "host = ec2-52-73-199-211.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d8h0u8kh19dh36";
   $credentials = "user = qownjuhbawznbz password=368dd7b964487933e40c9d030fd89399ae054c69a15b3f210ad7eea2917bebde";

   $db = pg_connect( "$host $port $dbname $credentials"  );


			$query = "SELECT * FROM customers"; 
			$rs = pg_query($db, $query);
			if(!$rs)
			{ echo "failed";}
			 $bp = pg_fetch_row($rs);
			 if(!$bp)
				 {
   		   echo "Fetch failed";
   		} 
				 

			while ($row = pg_fetch_row($rs))  	
			 { echo "<tr><td>"; echo "$row[0]"; echo "</td> <td>"; echo "$row[1]"; echo "</td> <td>"; echo"$row[2]"; echo"</td></tr>"; }
			 echo "</table>";	
pg_close($db);		 

?>


</table>

</section>
 


    <!-- Call to Action -->

    <section id="cta" class="coloured-section">
      <h3 class="main-text">Basic Banking System.The Spark Foundationk[.</h3>
      <a href="https://candy-6646.github.io/Personal-website/"><button type="button" class="btn btn-dark btn-lg download-button"><i class="fa fa-globe" aria-hidden="true"></i> Developer</button></a>
    </section>


    <!-- Footer -->

    <footer id="footer" class="white-section">
      <i class="social-icon fa fa-twitter" aria-hidden="true"></i>
      <i class="social-icon fa fa-facebook-square" aria-hidden="true"></i>
      <i class="social-icon fa fa-instagram" aria-hidden="true"></i>
      <i class="social-icon fa fa-envelope" aria-hidden="true"></i>
      <p>© Copyright 2020 SUS Bank.</p>
    </footer>

</body>

</html>

