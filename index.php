<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Who is Luca Markio?">
    <meta name="author" content="Luca Marchiorello">
    <!-- link rel="icon" href="../../favicon.ico" -->

    <title>Who is Luca Markio?</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lobster|Pinyon+Script" rel="stylesheet" type="text/css">
    
    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
    
    <link href="stylesheet.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Begin page content -->
    <div class="container">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="header">
                    <img src="images/lucamarkio_logo_half_transparent.png" alt="lucamarkio.com logo" class="img-responsive"/>
                    <h3 class="header-text">Versatile Developer</h3>
                </div>
            </div>
        </div>
        
        <div class="row item">
            <a name="csttech"></a>
            <div class="col-sm-4 item-img">
                <a href="#csttech">
                    <img src="images/logo-cst.png" onmouseover="bigImg(this)" onmouseout="normalImg(this)" class="img-circle" alt="handcrafted circuit" width="180" height="180"/>
                </a>
            </div>
            <div class="col-sm-8 item-title">
                <h2>Software developer at <a href="http:\\www.csttech.it" target="_blank">CST Technobank</a></h2>
            </div>
        </div>
        
        <div class="row item">
            <a name="theurbanreef"></a>
            <div class="col-sm-4 item-img">
                <a href="#theurbanreef">
                    <img src="images/logo-tur.png" onmouseover="bigImg(this)" onmouseout="normalImg(this)" class="img-circle" alt="handcrafted circuit" width="180" height="180"/>
                </a>
            </div>
            <div class="col-sm-8 item-title">
                <h2>Founder and maker at <a href="http:\\www.theurbanreef.it" target="_blank">The Urban Reef</a></h2>
            </div>
        </div>
        
        <div class="row item">
            <a name="mekts"></a>
            <div class="col-sm-4 item-img">
                <a href="#mekts">
                    <img src="images/logo-mekts.png" onmouseover="bigImg(this)" onmouseout="normalImg(this)" class="img-circle" alt="handcrafted circuit" width="180" height="180"/>
                </a>
            </div>
            <div class="col-sm-8 item-title">
                <h2>Software consultant and developer at <a href="http://www.mekts.com/" target="_blank">Mitsubishi Eletric Klimat Transportation Systems</a></h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <a href="contacts.php"><h3 class="item centered lobster">Contacts</h3></a>
            </div>
        </div>
        
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Copyright &copy; <?php echo date("Y"); ?> - Luca Marchiorello - All rights reserved.</p>
      </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>
    function bigImg(x) {
        x.style.height = "220px";
        x.style.width = "220px";
    }
    
    function normalImg(x) {
        x.style.height = "180px";
        x.style.width = "180px";
    }
    </script>
    
    <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
      _paq.push(['disableCookies']);
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//lucamarkio.com/piwik/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', 1]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="//lucamarkio.com/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->
    
  </body>
</html>