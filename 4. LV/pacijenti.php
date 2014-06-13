<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>ZKD</title>

  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="stil.css" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.js"></script>


<script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
var $rows = $('#table tr');
$('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});
});//]]>  

</script>
  
  
  

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


  <section class="gray-boxes row">
    <div class="meni column column-3">
      
	  <div class="izbor column column 2">
            
		  <a href="pacijenti.php">Pacijenti</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		  <a href="unos.php">Unos</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		     <a href="forma.php">Forma</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		  <a href="login.php">Životopis</a>
		
      </div>
     
    </div>

    <div class="sadrzaj2 column column-9">
      
		
		 
		     <input type="text" id="search" placeholder="Pretraži" />
                   <table id="table" border="2" width="100%">
			    
					<tr>
					
					
					
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
				         '<tr>'.
						'<td>'. $row['ime'] .'</td>'.
                     	 '<td>'.$row['prezime'].'</td>'.		   
				         '<td>'.$row['spol'].'</td>'.
						 '<td>'.$row['datumrodenja'] .'</td>'.
						 '<td>'.$row['mobitel'] .'</td>'.
						'<td>'. $row['adresa'] .'</td>'.
						'<td>'. $row['mjesto'] .'</td>'.
						'</tr>';
				    } 

				  
				mysqli_close($con);
		
		         ?>
           
		      </tr>
		     
			 
			</table>
					
		
	  
     </div>

  </section>


  
</body>
</html>