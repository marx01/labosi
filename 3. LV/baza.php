<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>ZKD</title>
   
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="stil.css" />


</head>
<body>

  <header class="site-header">
     <div class="row">
         <img src="images/logo.png">
   
         <div class="gumb column column-2">
	        <a href="login.html"><button type="button" class="bttn" >Odjava</button></a>
	     </div>
		 
         <div class="korisnik column column-3">

		   <?php  
            session_start();
            echo $_SESSION['pac'];

            ?>

	     </div>	 
	
     </div> 
  </header>


  <section class="gray-boxes row">
    <div class="meni column column-3">
      
	  <div class="izbor column column 2">
            
		  <a href="pacijenti.php">Pacijenti</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		  <a href="unos.php">Unos</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		   <a href="#">Meni</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		  <a href="#">Meni</a>
		
      </div>
     
    </div>

    <div class="sadrzaj column column-9">
         

            <?php 
			  
		
					
			/* spajanje na bazu */
	   
            $con=mysqli_connect("localhost","root","root","zdk");
                // provjera konekcije
            if (mysqli_connect_errno())
              {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                 }
				 
				 
			    mysqli_query($con,"SET NAMES 'utf8'");
			    mysqli_query($con,"SET CHARACTER_SET 'utf8'");
			/* povlače se podaci iz baze */
			    $result = mysqli_query($con,"SELECT * FROM pacijenti");
             /* ime odredišta koje je kliknuto se traži u bazi i ispisuje se određeni sadržaj */
			  while($row = mysqli_fetch_array($result))
			    { 
			   echo 
			         
					'</br>'. $row['ime'] .'</br>'.
                 	$row['prezime'] .'</br>'	. 			   
			         $row['spol'] .'</br>'.
					 $row['datumrodenja'] .'</br>'.
					 $row['mobitel'] .'</br>'.
					 $row['adresa'] .'</br>'.
					 $row['mjesto'] .'</br>';
			    } 

			  
			mysqli_close($con);
	
	?>
 
  

     </div>

  </section>

 
</body>
</html>