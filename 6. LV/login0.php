<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>ZKD</title>

  <!-- Učitavanje stilskih datoteka -->
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="stil.css" />

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>
<body>
  <header class="site-header">
   
  </header>

  <section class="gray-boxes row">
    <div class="column column-5">
      <img src="images/logo.png">
      <h1>“Dominica sancta, quid remediis sunt.”</h1>
    </div>
        
		<?php
		session_start();
		   session_destroy();
		   
		     
		?>
	
	
    <div class="forma column column-5">
        
		<form action="login.php" method="post">
            

          <label for="ime">Korisničko ime:</label></br>
          <input id="ime" type="text" name="username" /></br></br></br>
          <label for="lozinka">Lozinka:</label></br>
          <input id="lozinka" type="password" name="password" /></br></br></br>
       
          <p><input type="submit" value="Login" class="InputButton" /></p>
        </form>   

	</div>

	
	
	<a href="registracija.php">registracija</a>
	
	
 
  </section>

  
  <footer class="site-footer">
  
	<hr>
    <p>Copyright &copy; ZKD, 2014</p>
  </footer>
</body>
</html>