<?php
date_default_timezone_set('Africa/Johannesburg');
if (isset($_COOKIE["Petcoin_LANG"]))
{
	if ($_COOKIE["Petcoin_LANG"] == "en")
	{
		header('Location: /home');
		die();
	}
	else
	{
		header('Location: /'.$_COOKIE["Petcoin_LANG"]);
		die();
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Petcoin - secure, private, and untraceable</title>
	<meta name="description" content="Petcoin is a digital currency that is secure, private, and untraceable.">
	<meta name="keywords" content="Petcoin, xmr, bitPetcoin, cryptocurrency">

    <meta property="og:title" content="Petcoin - secure, private, untraceable"/>
    <meta property="og:description" content="Petcoin is a digital currency that is secure, private, and untraceable.">
    <meta property="og:image" content="http://static.getPetcoin.org/images/opengraph/logo.png">
    <meta property="og:site_name" content="getPetcoin.org, The Petcoin Project">
    <meta property="og:url" content="https://getPetcoin.org/language.php">
    <meta property="og:type" content="website">

    <link href="//static.getPetcoin.org/style.css?1" rel="stylesheet">
  </head>

  <body class="body-language">
    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container" style="padding-bottom: 0px;">
        <div class="navbar-header">
          <a class="navbar-brand" href="/"><img class="logo" src="//static.getPetcoin.org/images/logo.svg"></a>
        </div>
      </div>
    </div>

    <div class="container main-content">
      <div class="row">
        <div class="col-md-4 col-md-offset-2">
          <ul class="nav nav-pills nav-stacked flag-select">
            <li><a href="/home"><h3><img class="flag" src="//static.getPetcoin.org/images/flags/english_combined.png"> English</h3></a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="nav nav-pills nav-stacked flag-select">
            <li><h3 style="line-height: 50px; padding: 10px 20px;"><img class="flag" src="//static.getPetcoin.org/images/flags/allflags.png"> More to come...</h3></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="container">
        <p>
          Copyright &copy; <strong>The Petcoin Project, <?php echo date("Y"); ?></strong>
        </p>
      </div>
    </div>


    <!-- JS -->
    <script src="//static.getPetcoin.org/scripts.js"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53312765-1', 'auto');
		ga('require', 'linkid', 'linkid.js');
		ga('send', 'pageview');
	</script>
  </body>
</html>
