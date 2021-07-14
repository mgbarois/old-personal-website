
<?php

  //GET OTHER LANG INFO
  switch ($lang){
    case 'en':
    $otherLangName='fr';
    $otherLang='fr';
    break;

    case 'fr':
    $otherLangName='en';
    $otherLang='en';
    break;
  }

?>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Madeleine Barois | <?php echo $xml->head->title->$lang; ?></title>
<link rel="shortcut icon" href="images/logo_circuit_blue.png" type="image/x-icon"/>
<meta name="description" content="">
<meta name="author" content="">
<meta name="robots" content="noindex">

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
<link rel="stylesheet" type="text/css" href="css/prog_circle.css">
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
      <a class="navbar-brand page-scroll" href="#page-top"><img id="logo" src="images/logo_circuit_blue.png" alt="Madeleine Barois"/></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="#page-top" class="page-scroll">About</a></li>-->
        <!--<li><a href="#services" class="page-scroll">Specialties</a></li>-->
        <li><a href="#about" class="page-scroll"><?php echo $xml->menu->about->$lang; ?></a></li>
		<li><a href="#skills" class="page-scroll"><?php echo $xml->menu->skills->$lang; ?></a></li>
        <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
        <li><a href="#blog" class="page-scroll">Blog</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
        <li><a class="lang" href="<?php echo $otherLangName;?>.php" class="page-scroll"><?php echo $otherLangName;?></a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- Header -->
<header id="header">
  <div class="intro text-center">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Madeleine Barois</h1>
			<!--<img class="white-line" src="images/white_line.png"/>-->
            <p><?php echo $xml->home->subtitle->$lang; ?></p>
            <a href="#contact" class="btn btn-default btn-lg page-scroll"><?php echo $xml->home->button->$lang; ?></a> </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Services Section -->
<div id="services">
  <div class="container">
		<!--<div class="col-md-8 col-md-offset-2 section-title text-center">
			<h2><?php echo $xml->services->title->$lang;?></h2>
		</div>-->
    <div class="row services">
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox">
                <div class="service-icon loc-icon">
                </div>
                <h3 class="title"><?php echo $xml->services->cta1->title->$lang;?></h3>
                <p class="description">
                    <?php echo $xml->services->cta1->text->$lang;?>
                </p>
                <!--<a class="read"></a>-->
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox">
                <div class="service-icon web-icon">
                </div>
                <h3 class="title"><?php echo $xml->services->cta2->title->$lang;?></h3>
                <p class="description">
                    <?php echo $xml->services->cta2->text->$lang;?>
                </p>
                <!--<a class="read"></a>-->
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox">
                <div class="service-icon ling-icon">  
                </div>
                <h3 class="title"><?php echo $xml->services->cta3->title->$lang;?></h3>
                <p class="description">
                    <?php echo $xml->services->cta3->text->$lang;?>
                </p>
                <!--<a class="read"></a>-->
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox">
                <div class="service-icon art-icon">
                </div>
                <h3 class="title"><?php echo $xml->services->cta4->title->$lang;?></h3>
                <p class="description">
                    <?php echo $xml->services->cta4->text->$lang;?>
                </p>
                <!--<a class="read"></a>-->
            </div>
        </div>
    </div>
</div>
</div>

<!-- About Section -->
<div id="about">
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col col-md-8">
					<h2><?php echo $xml->about->title->$lang;?></h2>
					<img class="white-line" src="images/white_line.png"/>
					<?php echo $xml->about->text->$lang;?>
						

				</div>
				<div class="col col-md-4">
						<div class="my-photo"><img src="images/me.jpg" alt="Madeleine Barois"/></div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Skills Section -->
<div id="skills">
	<div class="container">
		<div class="section-title text-center">
		  <h2 style="text-align:center"><?php echo $xml->skills->title->$lang;?></h2>
		  <img class="blue-line" src="images/blue_line.png"/>
		</div>
		
		<?php include 'skills.php';?>

	</div>
</div>

<!--Experience Section-->
<div id="experience">
	<div class="overlay">
	<div class="container">
		<div class="section-title text-center">
		  <h2><?php echo $xml->experience->title->$lang;?></h2>
		  <img class="blue-line" src="images/blue_line.png"/>
		</div>
		
    <div id="jobs" class="owl-carousel owl-theme">
        <div class="item">
			<img src="images/acolad_gray9.png" alt="Acolad logo" style="width:100%">
			<p class="company"><?php echo $xml->experience->acolad->title->$lang;?></p>
			<p class="date">2018-2020</p>
			<a href="https://www.acolad.com/"><i class="fa fa-globe"></i></a>
		</div>
		<div class="item">
			<img src="images/telelingua_logo_gray.png" alt="Telelingua logo" style="width:100%">
			<p class="company"><?php echo $xml->experience->telelingua->title->$lang;?></p>
			<p class="date">2017-2018</p>
			<a href="http://www.telelingua.com/en/"><i class="fa fa-globe"></i></a>
		</div>
		<div class="item">
			<img src="images/smartkyc_logo_gray.png" alt="SmartKYC logo" style="width:100%">
			<p class="company"><?php echo $xml->experience->smartkyc->title->$lang;?></p>
			<p class="date">2017-2018</p>
			<a href="https://smartkyc.com/"><i class="fa fa-globe"></i></a>
		</div>
		<div class="item">
			<img src="images/tcloc_logo_gray.png" alt="TCLoc logo" style="width:100%">
			<p class="company"><?php echo $xml->experience->tcloc->title->$lang;?></p>
			<p class="date">2016-2017</p>
			<a href="https://mastertcloc.unistra.fr/"><i class="fa fa-globe"></i></a>
		</div>
		<div class="item">
			<img src="images/chacunsoncourt_logo_gray.png" alt="Chacun Son Court logo" style="width:100%">
			<p class="company"><?php echo $xml->experience->chacunsoncourt->title->$lang;?></p>
			<p class="date">2016-2017</p>
			<a href="http://chacunsoncourt.eu/"><i class="fa fa-globe"></i></a>

		</div>
		<div class="item">
			<img src="images/berlitz_logo_gray.png" alt="Berlitz logo" style="width:100%">
			<p class="company"><?php echo $xml->experience->berlitz->title->$lang;?></p>
			<p class="date">2014-2016</p>
			<a href="https://www.berlitz.com/"><i class="fa fa-globe"></i></a>

		</div>		
		<div class="item">
			<img src="images/ubc_logo_gray.png" alt="UBC logo" style="width:100%">
			<p class="company"><?php echo $xml->experience->ubc->title->$lang;?></p>
			<p class="date">2013-2014</p>
			<a href="https://linguistics.ubc.ca/"><i class="fa fa-globe"></i></a>
		</div>
		<div class="item">
			<img src="images/moa (3).png" alt="MOA logo" style="width:100%">
			<p class="company"><?php echo $xml->experience->moa->title->$lang;?></p>
			<p class="date">2012-2014</p>
			<a href="https://moa.ubc.ca/"><i class="fa fa-globe"></i></a>
		</div>
     
    </div>
	
	</div> <!--close container-->
	</div><!--close overlay-->
</div><!--close experience section-->

<!--Experience Section-->
<div id="education">

	<div class="container">
		<div class="section-title text-center">
		  <h2><?php echo $xml->education->title->$lang;?></h2>
		  <img class="blue-line" src="images/blue_line.png"/>
		</div>
		<?php include 'education.php';?>
		
	</div>
</div>

<!-- Portfolio Section -->
<div id="portfolio">
<div class="overlay">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 section-title text-center">
      <h2><?php echo $xml->portfolio->title->$lang;?></h2>
	  <img class="blue-line" src="images/blue_line.png"/>
    </div>
    <div class="categories">
		<ul class="nav nav-pills nav-justified">
			<li class="active"><a data-toggle="pill" href="#writing"><!--<i class="fa fa-file-text-o"></i>--><span class="porfolio-label"><?php echo $xml->portfolio->sections->writing->$lang;?></span></a></li>
			<li><a data-toggle="pill" href="#web"><!--<i class="fa fa-laptop"></i>--><span class="porfolio-label"><?php echo $xml->portfolio->sections->web->$lang;?></span></a></li>
			<li><a data-toggle="pill" href="#art"><!--<i class="fa fa-paint-brush"></i>--><span class="porfolio-label"><?php echo $xml->portfolio->sections->art->$lang;?></span></a></li>
		</ul>
    </div>
	<div class="tab-content">
	<div id="web" class="tab-pane fade">
    <div class="row">
      <div class="portfolio-items">
	  <div class="col-sm-6 col-md-3 col-lg-3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="tcloc_flyer.php" target="_blank">
              <div class="hover-text">
                <h4><?php echo $xml->portfolio->web->item[4]->title->$lang;?></h4>
                <small><?php echo $xml->portfolio->web->item[4]->description->$lang;?></small> 
				<br><i class="fa fa-chevron-circle-down"></i>
				</div>
              <img src="images/tcloc.png" class="img-responsive" alt="TCLoc flyer"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="portfolio-item">
            <div class="hover-bg"> <a href="flash.php" target="_blank">
              <div class="hover-text">
                <h4><?php echo $xml->portfolio->web->item[0]->title->$lang;?></h4>
                <small><?php echo $xml->portfolio->web->item[0]->description->$lang;?></small> 
				<br><i class="fa fa-chevron-circle-down"></i>
			</div>
			<img src="images/flash2.png" class="img-responsive" alt="Flash animation"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="http://chacunsoncourt.eu/fr/accueil/" target="_blank">
				<div class="hover-text">
					<h4><?php echo $xml->portfolio->web->item[1]->title->$lang;?></h4>
					<small><?php echo $xml->portfolio->web->item[1]->description->$lang;?></small> 
					<br><i class="fa fa-chevron-circle-down"></i>
				</div>
              <img src="images/chacunsoncourt2.png" class="img-responsive" alt="Chacun Son Court website"> </a> </div>
          </div>
        </div>        
        <div class="col-sm-6 col-md-3 col-lg-3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="http://mastertcloc.unistra.fr/" target="_blank">
              <div class="hover-text">
                <h4><?php echo $xml->portfolio->web->item[5]->title->$lang;?></h4>
                <small><?php echo $xml->portfolio->web->item[5]->description->$lang;?></small> 
				<br><i class="fa fa-chevron-circle-down"></i>
				</div>
              <img src="images/tcloc_website.png" class="img-responsive" alt="TCLoc website"> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="https://youtu.be/ooWRN1p17HI" target="_blank">
              <div class="hover-text">
                <h4><?php echo $xml->portfolio->web->item[6]->title->$lang;?></h4>
                <small><?php echo $xml->portfolio->web->item[6]->description->$lang;?></small> 
				<br><i class="fa fa-chevron-circle-down"></i>
				</div>
              <img src="images/media_blog.png" class="img-responsive" alt="TCLoc website"> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="images/sm_post1.png" rel="prettyPhoto">
              <div class="hover-text">
                <h4><?php echo $xml->portfolio->web->item[7]->title->$lang;?></h4>
                <small><?php echo $xml->portfolio->web->item[7]->description->$lang;?></small> 
				<br><i class="fa fa-chevron-circle-down"></i>
				</div>
              <img src="images/sm_post1_cropped.png" class="img-responsive" alt="TCLoc website"> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="images/sm_post2.png" rel="prettyPhoto">
              <div class="hover-text">
                <h4><?php echo $xml->portfolio->web->item[8]->title->$lang;?></h4>
                <small><?php echo $xml->portfolio->web->item[8]->description->$lang;?></small> 
				<br><i class="fa fa-chevron-circle-down"></i>
				</div>
              <img src="images/sm_post2_cropped.png" class="img-responsive" alt="TCLoc Social Media Post"> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="images/processus_smt.png" rel="prettyPhoto">
              <div class="hover-text">
                <h4><?php echo $xml->portfolio->web->item[9]->title->$lang;?></h4>
                <small><?php echo $xml->portfolio->web->item[9]->description->$lang;?></small> 
				<br><i class="fa fa-chevron-circle-down"></i>
				</div>
              <img src="images/processus_smt.png" class="img-responsive" alt="SMT Infographic by Madeleine Barois"> </a> </div>
          </div>
        </div>
	</div>
	</div>
	</div>
		
	<!---WRITING--->
	<div id="writing" class="tab-pane fade in active">	
	<div class="row">
    <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="http://www.mastertcloc.unistra.fr/translation-environment-tools-computer-aided-translation-software/" target="_blank">
              <div class="hover-text">
                <h4><?php echo $xml->portfolio->writing->item[1]->title->$lang;?></h4>
                <small><?php echo $xml->portfolio->writing->item[1]->description->$lang;?></small> 
				<br><i class="fa fa-chevron-circle-down"></i>
				</div>
              <img src="images/tents.png" class="img-responsive" alt="Translation Environment Tools"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="http://www.mastertcloc.unistra.fr/gaetan-chretiennot-interview-with-a-cat-tool-expert/" target="_blank">
              <div class="hover-text">
                <h4><?php echo $xml->portfolio->writing->item[3]->title->$lang;?></h4>
                <small><?php echo $xml->portfolio->writing->item[3]->description->$lang;?></small> 
				<br><i class="fa fa-chevron-circle-down"></i>
				</div>
              <img src="images/gaetan.png" class="img-responsive" alt="Gaetan Chretiennot"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="http://www.mastertcloc.unistra.fr/chris-raulf-profile-seo-expert/" target="_blank">
              <div class="hover-text">
                <h4><?php echo $xml->portfolio->writing->item[4]->title->$lang;?></h4>
                <small><?php echo $xml->portfolio->writing->item[4]->description->$lang;?></small> 
				<br><i class="fa fa-chevron-circle-down"></i>
				</div>
              <img src="images/chris.png" class="img-responsive" alt="Chris Raulf"> </a> </div>
          </div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3">
        <div class="portfolio-item">
            <div class="hover-bg"> <a href="https://mastercaweb.u-strasbg.fr/2019/07/st-communications-lsp-fier-detre-africain" target="_blank">
              <div class="hover-text">
                <h4><?php echo $xml->portfolio->writing->item[0]->title->$lang;?></h4>
                <small><?php echo $xml->portfolio->writing->item[0]->description->$lang;?></small> 
				<br><i class="fa fa-chevron-circle-down"></i>
				</div>
              <img src="images/stcommunications.png" class="img-responsive" alt="ST Communications office"> </a> </div>
          </div>
        </div>
	</div>
	</div>
	</div>
	
	<!-- ART --->
	<div id="art" class="tab-pane fade">
	<div class="row">
    <div class="portfolio-items">
		<div class="col-sm-6 col-md-3 col-lg-3">
			<div class="portfolio-item">
				<div class="hover-bg"> <a href="images/underwater_treasure.jpg" alt="Art by Madeleine Barois" rel="prettyPhoto">
				  <div class="hover-text">
					<i class="fa fa-search"></i></div>
				  <img src="images/underwater_treasure.jpg" class="img-responsive"> </a> </div>
			</div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3">
			<div class="portfolio-item">
				<div class="hover-bg"> <a href="images/whale.jpg" alt="Art by Madeleine Barois" rel="prettyPhoto">
				  <div class="hover-text">
					<i class="fa fa-search"></i></div>
				  <img src="images/whale.jpg" class="img-responsive"> </a> </div>
			 </div>
        </div>
		
		<div class="col-sm-6 col-md-3 col-lg-3">
			<div class="portfolio-item">
				<div class="hover-bg"> <a href="images/flower_eyes1.jpg" alt="Art by Madeleine Barois" rel="prettyPhoto">
				  <div class="hover-text">
					<i class="fa fa-search"></i></div>
				  <img src="images/flower_eyes1.jpg" class="img-responsive"> </a> </div>
			</div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3">
			<div class="portfolio-item">
				<div class="hover-bg"> <a href="images/plate.jpg" alt="Art by Madeleine Barois" rel="prettyPhoto">
				  <div class="hover-text">
					<i class="fa fa-search"></i></div>
				  <img src="images/plate.jpg" class="img-responsive" > </a> </div>
			</div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3">
			<div class="portfolio-item">
				<div class="hover-bg"> <a href="images/rocks.png" title="Project description" alt="Art by Madeleine Barois" rel="prettyPhoto">
				  <div class="hover-text">
					<i class="fa fa-search"></i></div>
				  <img src="images/rocks.png" class="img-responsive"> </a> </div>
			</div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3">
			<div class="portfolio-item">
				<div class="hover-bg"> <a href="images/color_bomb.jpg" alt="Art by Madeleine Barois" rel="prettyPhoto">
				  <div class="hover-text">
					<i class="fa fa-search"></i></div>
				  <img src="images/color_bomb.jpg" class="img-responsive"> </a> </div>
			</div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3">
			<div class="portfolio-item">
				<div class="hover-bg"> <a href="images/mohawk_skull.jpg" alt="Art by Madeleine Barois" rel="prettyPhoto">
				  <div class="hover-text">
					<i class="fa fa-search"></i></div>
				  <img src="images/mohawk_skull.jpg" class="img-responsive" > </a> </div>
			 </div>
        </div>
		
		<div class="col-sm-6 col-md-3 col-lg-3">
			<div class="portfolio-item">
				<div class="hover-bg"> <a href="images/hand.jpg" alt="Art by Madeleine Barois" rel="prettyPhoto">
				  <div class="hover-text">
					<i class="fa fa-search"></i></div>
				  <img src="images/hand.jpg" class="img-responsive"> </a> </div>
			</div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3">
			<div class="portfolio-item">
				<div class="hover-bg"> <a href="images/swirly.jpg" alt="Art by Madeleine Barois" rel="prettyPhoto">
				  <div class="hover-text">
					<i class="fa fa-search"></i></div>
				  <img src="images/swirly.jpg" class="img-responsive"> </a> </div>
			</div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3">
			<div class="portfolio-item">
				<div class="hover-bg"> <a href="images/celestial.jpg" alt="Art by Madeleine Barois" rel="prettyPhoto">
				  <div class="hover-text">
					<i class="fa fa-search"></i></div>
				  <img src="images/celestial.jpg" class="img-responsive"> </a> </div>
			</div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3">
			<div class="portfolio-item">
				<div class="hover-bg"> <a href="images/bronze-flower_3.jpg" alt="Art by Madeleine Barois" rel="prettyPhoto">
				  <div class="hover-text">
					<i class="fa fa-search"></i></div>
				  <img src="images/bronze-flower_3.jpg" class="img-responsive"> </a> </div>
			</div>
        </div>
		<div class="col-sm-6 col-md-3 col-lg-3">
			<div class="portfolio-item">
				<div class="hover-bg"> <a href="images/poster.jpg" alt="Art by Madeleine Barois" rel="prettyPhoto">
				  <div class="hover-text">
					<i class="fa fa-search"></i></div>
				  <img src="images/poster.jpg" class="img-responsive"> </a> </div>
			</div>
        </div>
	  </div>
	</div> <!--close portfolio items-->
	</div> <!--close row-->
	</div> <!--close tab-pane -->
		
	</div> <!-- close tab-content-->
	
	</div> <!--close container-->
	</div><!--close overlay-->
</div> <!--close portfolio div--->
      
<!-- Blog Section -->
<div id="blog">
	<div class="container">
		<div class="col-md-8 col-md-offset-2 section-title text-center">
			<h2>Blog</h2>
			<img class="blue-line" src="images/blue_line.png"/>
		</div>
	
			<?php include 'blog.php'; ?>
		
	</div>
</div>

<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 section-title">
        <h2><?php echo $xml->contact->title->$lang;?></h2>
        <p><?php echo $xml->contact->invitation->$lang;?></p>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <form name="sentMessage" id="contactForm" method="POST" action="contact_me"> <!--novalidate-->
          <input type="hidden" name="lang" value="<?php echo $lang;?>">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="<?php echo $xml->contact->name->placeholder->$lang;?>" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" name="email" id="e-mail" class="form-control" placeholder="<?php echo $xml->contact->email->placeholder->$lang;?>" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" class="form-control" id="message" rows="4" placeholder="<?php echo $xml->contact->message->placeholder->$lang;?>" required="required"></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-default"><?php echo $xml->contact->button->$lang;?></button>
        </form>
        <div class="social">
			<ul>
				<li><a href="https://www.linkedin.com/in/madeleine-barois/?locale=<?php if ($lang=='en'){echo 'en_US';} else{ echo 'fr_FR';}?>"><i class="fa fa-linkedin"></i></a></li>
			</ul>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php';?>

<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>


<script type="text/javascript">
	$(document).ready(function() {
    $("#news-slider").owlCarousel({
        items : 3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [550,1],
        navigation:true,
        navigationText:["",""],
        autoPlay:false
    });
});



    $(document).ready(function() {
     
      $("#jobs").owlCarousel({
        items : 4,
		navigation : true,
        navigationText:["",""],
		nav: false,
        autoPlay:false,
      });
     
    });


</script>
</body>
