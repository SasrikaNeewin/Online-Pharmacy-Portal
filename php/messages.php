
<!DOCTYPE html>
<html>
<head>
    <title>Online Pharmacy Portal</title>
    <link rel="stylesheet" href="../Online Pharmacy Portal/CSS/messages.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- Head Part -->
    <header class="header">
        <a href="../html/home.html">
        <div id="logo">
            <img src="../Online Pharmacy Portal/images/logo.png" width="50px">
            <h4>Medi Good <br>Pharmacy</h4>
            
        </div>
        </a>
    
        <nav class="navbar">
            <a href="home.html">Home</a>
            <a href="product.html">Product</a>
            <a href="#">About Us</a>
            <a href="contactus.html">Contact Us</a>
        </nav>
    
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars icn" ></div>
            <div id="cart-btn" class="fas fa-cart-shopping icn"></div>
            <div id="login-btn" class="fas fa-user icn"></div>
        </div> <!-- icons -->
    
        <form method="get" action="https://www.youtube.com/" class="search-form">
            <input type="search" placeholder="search here..." id="search-box">
            <button class="fas fa-search"></button>
        </form>
    </header> <br><!-- header end -->

<!--HEADER-->

<div class="box">
	
	<?php
		
		
		require 'connection.php';
		
			//select stored data from database
			$sql = "SELECT * FROM enquiry";
			
			$result = $con->query($sql);
			
			if ($result->num_rows > 0) {
				
				echo 
				"<table style=width:100% table id='Ctable' border='1'>
              <thead>
                <tr>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Contact</th>
				<th>Message</th>
				
                </tr>
              </thead>";
			
			while($row = $result->fetch_assoc()) {
				

				echo "<tr>",">",
				
				"<td>". $row['firstName']. "</td>",
				"<td>" . $row['lastName'] . "</td>",
				"<td>" . $row['email'] . "</td>",
				"<td>" . $row['contact'] . "</td>",
				"<td>" . $row['message'] . "</td>",
				 
				 "<td>"," <form action='https://mail.google.com/mail/u/2/?ogbl#inbox'>
					      <input type='submit' class='Sbutton' value='Reply' />
					      </form>",	
				
				"</tr>";
			}
			
			echo ("</table>");
			}
			else {
			echo "No any Result here <BR />"; 
			
			}
				
	?>
</div>	
			
<!--FOOTER-->
<!-- Foot Part -->
<div class="footer">
    <div class="foot">
        <div class="qr">
            <img src="../Online Pharmacy Portal/images/qr code.png" alt="qr">
        </div> <!-- qr -->

        <div class="call-us">
            <h3>Call Us</h3>
            <p>Tel : +9411243156</p>
            <p>Fax : +9411243156</p>
            <p>Email : medigoodpharmacy5.2@gmail.com</p>
        </div> <!-- call-us -->

        <div class="address">
            <h2>Medi Good</h2>
            <p>Online Pharmacy Service</p>
            <p id="p-1">No. 12/3, Galle Road,</p>
            <p id="p-2">Colombo 07.</p>
        </div> <!-- address -->

        <div class="socail-media">
            <hr id="line">
            <a href="#"><i class="fa-brands fa-facebook-square fa-2x"></i></a>
            <a href="#"><i class="fa-brands fa-twitter fa-2x"></i></a>
            <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a>
            <a href="#"><i class="fa-brands fa-google-plus-g fa-2x"></i></a>

        </div> <!-- social-media -->

        <div class="badje">
            <img src="../Online Pharmacy Portal/images/badje.png" alt="logo">
        </div> <!-- badje -->
    </div> <!-- foot -->

    <div class="copy-right">
        <p>Copyright &copy 2021 MediGoodPharmacy</p>
    </div> <!-- copy-right -->
</div> <!-- footer end -->        
   

    
    
    </body>
	
	
    </html>

			
			