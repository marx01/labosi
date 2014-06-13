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

 
  </section>

  
</body>
</html>