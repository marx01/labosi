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
     <div class="row">
         <img src="images/logo.png">
   
         <div class="gumb column column-2">
	        <a href="login0.php"><button type="button" class="bttn" >Odjava</button></a>
	     </div>
		 
         <div class="korisnik column column-3">
	     
    		
         
		   <?php  
            session_start();
            if(isset($_SESSION['pac'])){
		   
            echo $_SESSION['pac'];
			}
			
			else {
			 
			 
			 echo "<script type='text/javascript'>alert('Niste ulogirani, molim ulogirajte se');
                  window.location='login0.php';
                   </script>";
				

			   }

            ?>
		  
			
	     </div>	 
	
     </div> 
  </header>


  <section class="gray-boxes row">
    <div class="meni column column-3">
      
	  <div class="izbor column column 2">
            
		  <a href="login.php">Životopis</a>
		
      </div>	  
	  
	  <div class="izbor column column 2">
            
		  <a href="pacijenti.php">Pacijenti</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		  <a href="unos.php">Unos</a>
		
      </div>
	  	  	  <div class="izbor column column 2">
            
		  <a href="unos-m.php">Unos-mobile</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		   <a href="forma.php">Forma pdf</a>
		
      </div>
	  
  	  <div class="izbor column column 2">
            
		<a href="grafikon.php">Graf</a>
		
      </div>
     
	  
	  <div class="izbor column column 2">
            
		<a href="trazi.php">Traži doktora</a>
		
      </div>
	  
	 <div class="izbor column column 2">
            
		<a href="jsonfromdatabases.php">Json iz baze</a>
		
      </div>	  
     
    </div>

    <div class="sadrzaj column column-9">
         

          <div class="izborni row">
		   
		   
		  <form action="pdf.php" method="post">
            

          <label for="ime">Ime:</label></br>
          <input id="ime" type="text" name="name" /></br></br>
		  
          <label for="prezime">Prezime:</label></br>
          <input id="prezime" type="text" name="lastname" /></br></br>
		  
		  
		  <label for="grupa">Krvna grupa:</label></br></br>
		  <input id="grupa" type="radio" name="krv" value="A"/>A
          <input id="grupa" type="radio" name="krv" value="B"/>B
		  <input id="grupa" type="radio" name="krv" value="AB"/>AB
		  <input id="grupa" type="radio" name="krv" value="0"/>0</br>
		  <input id="grupa+" type="radio" name="krv+" value="+"/>+
		  <input id="grupa-" type="radio" name="krv+" value="-"/>-</br></br>
		  
		  
          <p><input type="submit" value="Pošalji" class="InputButton" /></p>
		  
        </form>   
		
		   
		  </div>
		  
		  <div class="php column column-9">
		  

			   </div>
		
	  
     </div>

  </section>

 
</body>
</html>