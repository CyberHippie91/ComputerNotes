<!DOCTYPE html>
<HTML Lang="en">
<head>
  <title> Group B </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="src/groupb.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
  <div class="wrapper fade-in">

    <!-----------------------------------NAV BAR------------------------------------>
    <div class="jumbotron jumbotron-fluid" id="header">
      <nav class="navbar navbar-expand-lg navbar-toggleable-lg" id="navigation">
        <button class="navbar-toggler navbar-toggler-right custom-nav-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active fade-in homeni">
              <a href="index.php">HOME<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item fade-in connorni">
              <a href="connor.php">CONNOR</a>
            </li>
            <li class="nav-item fade-in martinni">
              <a href="martin.php">MARTIN</a>
            </li>
            <li class="nav-item fade-in amyni">
              <a href="amy.php">AMY</a>
            </li>
            <li class="nav-item fade-in monitorni">
              <a href="monitor.php">MONITOR TOOL</a>
            </li>
            <li class="nav-item fade-in configni">
              <a href="config.php">CONFIG TOOL</a>
            </li>
			 <li class="nav-item fade-in proni">
              <a href="production.php">PRO LOG</a>
            </li>
			 <li class="nav-item fade-in testni">
              <a href="testlog.php">TEST LOG</a>
            </li>

          </ul>

        </div>
      </nav>
    </div>

    <!-----------------------------------END OF NAV BAR-------------------------->
	



	<!-----------------------------------ANIMATION-------------------------->

<script>
  window.onscroll = function() {myFunction()};
  var navbar = document.getElementById("navigation");
  var sticky = navbar.offsetTop;
  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky","blue","logohidden");
    } else {
      navbar.classList.remove("sticky","blue","logohidden");
    }
  }
</script>

	<!-----------------------------------SCRIPTS-------------------------->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="src/groupb.js"></script>

	<!-----------------------------------END-------------------------->
</body>
</html>
	
	
	
	
	