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
        
		<form action="registracija2.php" method="post">
            

          <label for="ime">Željeno Ime:</label></br>
          <input id="ime" type="text" name="usernam" /></br></br></br>
          <label for="lozinka">Lozinka:</label></br>
          <input id="lozinka" type="password" name="passwor" /></br></br></br>
          <label for="lozinka">Lozinka:</label></br>
          <input id="lozinka" type="password" name="passwor" /></br></br></br>
          <p><input type="submit" value="Login" class="InputButton" /></p>
        </form>   

	</div>
<a href="login0.php">login</a>
 
  </section>

 
</body>
</html>