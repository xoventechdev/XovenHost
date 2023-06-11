<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PHP Contact Form with Google reCAPTCHA | Tech Arise</title>
  <link rel="icon" type="image/ico" href="https://techarise.com/wp-content/themes/v1/favicon.ico">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
  <!-- Custom fonts for this template -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top header-bg-dark" style="background: ##FFFFFF!;">
  <div class="container">
    <a class="navbar-brand font-weight-bold" href="https://techarise.com"><h1>Tech Arise</h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="https://techarise.com">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://techarise.com/php-free-script-demos/">Live Demo</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="showcase">
  <div class="container">
    <div class="pb-2 mt-4 mb-2 border-bottom">
      <h2>Build Domain WHOIS Lookup System using PHP and Ajax</h2>
    </div>
    <form id="lookup-form" class="lookup-form" method="post">
	     <div class="row align-items-center">  
          <div class="form-group col-md-9">
            <label for="inputEmail4">Domain/IP Address:</label>
            <input type="text" class="form-control" id="domain" name="domain" placeholder="Domain/IP Address:">  
          </div>
          <div class="col">
                <button type="button" class="btn btn-primary mt-3 float-left" id="get-lookup"><i class="fa fa-search"></i> WHOIS</button>
            </div>
        </div>
    </form>
    <hr>
    <div class="row align-items-center">  
      <div class="form-group col-md-12">
        <span id="lookup-dispaly-details"></span>
      </div>
    </div>

</div>
</section>

<!-- Footer -->
<footer class="footer bg-light footer-bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">Copyright &copy;  2011 - <?php print date('Y', time());?> <a href="https://techarise.com/">TECHARISE.COM</a> All rights reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>  
</body>
</html>



<script type="text/javascript">
	jQuery(document).on('click', 'button#get-lookup', function(){
	    jQuery.ajax({
	        type:'POST',
	        url:'lookup.php',
	        data:jQuery("form#lookup-form").serialize(),
	        dataType:'html',    
	        beforeSend: function () {
	            jQuery('button#get-lookup').button('loading');
	            jQuery('span#lookup-dispaly-details').html('<i class="fa fa-spinner" style="font-size:30px;"></i>');
	        },
	        complete: function () {
	            jQuery('button#get-lookup').button('reset');
	        },                
	        success: function (html) {
            	jQuery('span#lookup-dispaly-details').html(html);
            },
	        error: function (xhr, ajaxOptions, thrownError) {
	            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
	        }        
	    });
	});
</script>