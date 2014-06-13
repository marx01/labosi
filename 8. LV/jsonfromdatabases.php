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
	     
    		
         <!-- PHP ZA KORISNIČKO IME-->
		 <?php 
            session_start();
           /*  $ime = $_GET['username']; */
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

<!-- NAVIGACIJA-->
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



<!-- SADRŽAJ-->
    <div class="sadrzaj column column-9">
         

          <div class="izborni row">
		   
          </div>
		  <!-- JSON IZ BAZE-->
		 
		  
		 	<?php

	
          $con=mysqli_connect("localhost","root","root","zdk");
                // provjera konekcije
            if (mysqli_connect_errno())
              {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                 }
				 
				 
			    mysqli_query($con,"SET NAMES 'utf8'");
			    mysqli_query($con,"SET CHARACTER_SET 'utf8'");
			/* povlače se podaci iz baze */
			 $json = array();
			    $result = mysqli_query($con,"SELECT * FROM unos");
             /* ime odredišta koje je kliknuto se traži u bazi i ispisuje se određeni sadržaj */

			  while($row = mysqli_fetch_array($result))
			   { 
						$bus = array(
						'ime' => $row['ime'],
						'prezime' => $row['prezime'],
						'spol' => $row['spol']
					                );
					array_push($json, $bus);
				}

				$jsonstring = json_encode($json);
				//echo $jsonstring;
				
				//var_dump ($json[0]);
										
			  $arrson = json_decode($jsonstring,true);
	 
			 
		
						
								 
								
               echo '<div id="json">
			          
			         
					 </div>
					 
	           ';
               			 
			
			  
			  mysqli_close($con);


		   

 
            ?>
			  <button id="prije" type="button" onclick="myFunction2()">prije</button>
      <button id="dalje" type="button" onclick="myFunction()">dalje</button>
			 
	 
     </div>

  </section>

 

             <script>
			 var js_var = <?php echo json_encode($arrson);?>;
			var len=Object.keys(js_var);
			var k=len.length;
			 var curr = 0;
			 
				function myFunction(){
					curr++;
		   
			   document.getElementById("json").innerHTML= 'Pacijent: '+ js_var[curr].ime + ' ' + js_var[curr].prezime +'<br> Spol: ' + js_var[curr].spol;

					
				
               }
                  
		   
		  
				function myFunction2(){
				
		curr--;

				    document.getElementById("json").innerHTML= 'Pacijent: '+ js_var[curr].ime + ' ' + js_var[curr].prezime +'<br> Spol: ' + js_var[curr].spol;
					//document.getElementById("json").innerHTML= js_var[curr].prezime;
               }
    </script>


</body>
</html>