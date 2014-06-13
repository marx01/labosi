<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>ZKD</title>

  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="stil.css" />


</head>
<body>
  <header class="site-header">
   
  </header>

  <section class="gray-boxes row">
    <div class="column column-5">
      <img src="images/logo.png">
    </div>
        <!-- PHP ZA SPREMANJE KORISNIKA U BAZU-->
		<?php
		session_start();
		   session_destroy();
		   
		      $ime = $_POST['usernam'];
			  $prezime=$_POST['passwor'];
			 
			  if(!empty($ime)&&!empty($prezime)) { 
			  
					 

				  
            $con=mysqli_connect("localhost","root","root","zdk");
                // provjera konekcije
            if (mysqli_connect_errno())
              {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                 }
      
               mysqli_query($con,"SET NAMES 'utf8'");
			    mysqli_query($con,"SET CHARACTER_SET 'utf8'");
   
               $passwordHash = sha1($_POST['passwor']);



        $query = "INSERT INTO korisnici(username,password) VALUES ('$ime','$passwordHash')";





        $result = mysqli_query($con, $query);

        mysqli_close($con);

               echo "<script type='text/javascript'>
						  
						  alert('Dobrodošli, $ime uspješno ste se registrirali');
						   window.location='login0.php';
						   </script>";


					
		  }                    
		  
		   else {
			 echo "<script type='text/javascript'>alert('Molimo popunite sve podatke');
						  window.location='registracija.php';
						   </script>";
			 
		 }
		?>

 
  </section>

  
</body>
</html>