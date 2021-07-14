<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Abel|Alegreya+Sans|Dosis|Fira+Sans|Fira+Sans+Condensed|Gothic+A1|Nanum+Gothic|Oxygen|Pontano+Sans|Yanone+Kaffeesatz|Source+Sans+Pro:300" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/education_timeline.css">
<link rel="stylesheet" type="text/css" href="css/blog.css">
<link rel="stylesheet" type="text/css" href="css/media_queries.css"> 
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="<?php echo $lang; ?>.php""><img id="logo" src="images/logo_circuit_blue.png" alt="Madeleine Barois"/></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="#page-top" class="page-scroll">About</a></li>-->
        <!--<li><a href="#services" class="page-scroll">Specialties</a></li>-->
        <li><a href="<?php echo $lang?>.php#about" class="page-scroll"><?php echo $xml->menu->about->$lang; ?></a></li>
		<li><a href="<?php echo $lang?>.php#skills" class="page-scroll"><?php echo $xml->menu->skills->$lang; ?></a></li>
        <li><a href="<?php echo $lang?>.php#portfolio" class="page-scroll">Portfolio</a></li>
        <li><a href="<?php echo $lang?>.php#blog" class="page-scroll">Blog</a></li>
        <li><a href="<?php echo $lang?>.php#contact" class="page-scroll">Contact</a></li>
        <li><a class="lang" href="<?php echo $otherLangName;?>.php" class="page-scroll"><?php echo $otherLangName;?></a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>