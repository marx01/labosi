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
	        <a href="login.html"><button type="button" class="bttn" >Odjava</button></a>
	     </div>
		 
         <div class="korisnik column column-3">
	   
                 
		   <?php  

             session_start();
			 
			 $pravoime='marko';
			 $pass='marko';
             $ime = $_GET['username'];
			 $lozinka = $_GET['password'];
			 if($ime==$pravoime && $lozinka==$pass){
             echo $ime;
			 } else {
			 
			 
			 echo "<script type='text/javascript'>alert('Wrong Username or Password');
                  window.location='login.html';
                   </script>";
			   }

             $_SESSION['pac'] =  $ime;					

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
         

            <div class="izborni row">
		   
		    <div class="sidro column column-3">
			 <a href="#1">Osobni podaci</a>			 
			</div>
		    
			<div class="sidro column column-3">
			 <a href="#2">Školovanje</a>			 
			</div>
			
			<div class="sidro column column-3">
			 <a href="#3">Radno iskustvo</a>
			 
			</div>			
			<div class="sidro column column-3">
			 <a href="#4">Znanja i vještne</a>
			</div>
		   
		  </div>
		 
		 
         </br>
		  <h5><a name="1">Osobni podaci:</a></h5>
	 
	 <p>Marko Gasparovic, Slunj, 01.06.1992</p></br></br></br></br></br>
	 
	 <h5><a name="2">Školovanje:</a></h5>
	 
	 <p>Osnovna škola Slunj, </br>Srednja škola: Gimnazija, Slunj </br>Fakultet: TVZ</p></br></br></br></br></br>

     <h5><a name="3">Radno iskustvo:</a></h5>

     <p>Operater u t-comu, instruktor penjanja</p></br></br></br></br></br>

     <h5><a name="4">Znanja i vještine:</a></h5>

     <p>MS Excel</br>
	    MS Word</br>
		MS PowerPoint/br></br>
		C</br>
		C++</br>
		...
		
	 </p>	
		 
		 
		
	  
     </div>

  </section>
  
</body>
</html>