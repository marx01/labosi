<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>ZKD</title>

  <!-- Učitavanje stilskih datoteka -->
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="stil.css" />

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,latin-ext" rel="stylesheet" type="text/css">

  	 
                   			 
			      
</head>
<body>

  <header class="site-header">
     <div class="row">
         <img src="images/logo.png">
   
         <div class="gumb column column-2">
	        <a href="login0.php"><button type="button" class="bttn" >Odjava</button></a>
	     </div>
		 
         <div class="korisnik column column-3">
	     
    		 <h2>
                 
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
	</h2> 
	     </div>	 
	
     </div> 
  </header>


  <section class="gray-boxes row">
    <div class="meni column column-3">
      
	  <div class="izbor column column 2">
            
		  <a href="login.php">životopis</a>
		
      </div>	  
	  
	  <div class="izbor column column 2">
            
		  <a href="pacijenti.php">Pacijenti</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		  <a href="unos.php">Unos</a>
		
      </div>
	   <div class="izbor column column 2">
            
		  <a href="unos-m.php">Unos-m</a>
		
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
            
		<a href="jsonfromdatabases.php">Json IZ baze</a>
		
      </div>
     
    </div>

    <div class="sadrzaj column column-9">
         

          <div class="izborni row">
		   
          </div>
		  
		 
		  
		 	<?php

	
                  $con=mysqli_connect("localhost","root","123","zdk");
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
			 
			 
		
							//var_dump($arrson);
						/* 	for($i=0;$i<count($arrson);$i++)
							{
							$array = $arrson[$i];
							$firstname = $array['ime'];
							$lastname = $array['prezime'];
							
							echo $firstname . ' ';
							echo $lastname . '<br/>';			
				            }
								 */	 
								 
								 
								
                       echo '<div id="json">
					          
					         
							 </div>
							 
			           ';
                       			 
					
					  
					  mysqli_close($con);


		   

 
                    ?>
					  <button id="prije" type="button" onclick="myFunction2()">prije</button>
		      <button id="dalje" type="button" onclick="myFunction()">dalje</button>
			 
	 
     </div>

  </section>

 

  <footer class="site-footer">
  
	<hr>
    <p>Copyright &copy; ZKD, 2014</p>
  </footer>

             <script>
			 var js_var = <?php echo json_encode($arrson);?>;
			var len=Object.keys(js_var);
			var k=len.length;
			 var curr = 0;
			 
						function myFunction(){
							curr++;
				   /*      if(curr==k){
							document.getElementById("json").innerHTML= js_var[curr].prezime;
							document.getElementById("dalje").style.display = "none";
							} */
					   document.getElementById("json").innerHTML= 'Pacijent: '+ js_var[curr].ime + ' ' + js_var[curr].prezime +'<br> Spol: ' + js_var[curr].spol;

							
						
                       }
                          
				   
				  
						function myFunction2(){
						
				curr--;
		/* 		if(curr==0){
				document.getElementById("prije").style.display = "none";
				document.getElementById("inline").style.display = "inline";
				}
				if(curr>0){
				document.getElementById("prije").style.display = "inline";
				} */
						    document.getElementById("json").innerHTML= 'Pacijent: '+ js_var[curr].ime + ' ' + js_var[curr].prezime +'<br> Spol: ' + js_var[curr].spol;
							//document.getElementById("json").innerHTML= js_var[curr].prezime;
                       }
            </script>


</body>
</html>