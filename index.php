<?php
require __DIR__ . '/config.php';
$middleware->run('guest');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<script src="/inc/jquery.js"></script>
<script src="/inc/bootstrap.js"></script>
<link href="/inc/bootstrap.css" rel="stylesheet">

<style rel="stylesheet">
	/* BOOTSTRAP 3.x GLOBAL STYLES
-------------------------------------------------- */
body {
  padding-bottom: 40px;
  color: #5a5a5a;
}
/* CUSTOMIZE THE NAVBAR
-------------------------------------------------- */
/* Special class on .container surrounding .navbar, used for positioning it into place. */
.navbar-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 10;
}
/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */
/* Carousel base class */
.carousel {
  margin-bottom: 70px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 1;
}
/* Declare heights because of positioning of img element */
.carousel .item {
  height: 500px;
  background-color:#555;
}
.carousel img {
  position: absolute;
  top: 0;
  left: 0;
  min-height: 400px;
}
/* MARKETING CONTENT
-------------------------------------------------- */
/* Pad the edges of the mobile views a bit */
.marketing {
  padding-left: 15px;
  padding-right: 15px;
}
/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  text-align: center;
  margin-bottom: 20px;
}
.marketing h2 {
  font-weight: normal;
}
.marketing .col-lg-4 p {
  margin-left: 10px;
  margin-right: 10px;
}
/* Featurettes
------------------------- */
.featurette-divider {
  margin: 80px 0; /* Space out the Bootstrap <hr> more */
}
.featurette {
  padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
  overflow: hidden; /* Vertically center images part 2: clear their floats. */
}
.featurette-image {
  margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
}
/* Give some space on the sides of the floated elements so text doesn't run right into it. */
.featurette-image.pull-left {
  margin-right: 40px;
}
.featurette-image.pull-right {
  margin-left: 40px;
}
/* Thin out the marketing headings */
.featurette-heading {
  font-size: 50px;
  font-weight: 300;
  line-height: 1;
  letter-spacing: -1px;
}
/* RESPONSIVE CSS
-------------------------------------------------- */
@media (min-width: 768px) {
  /* Remve the edge padding needed for mobile */
  .marketing {
    padding-left: 0;
    padding-right: 0;
  }
  /* Navbar positioning foo */
  .navbar-wrapper {
    margin-top: 20px;
    margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
  }
  /* The navbar becomes detached from the top, so we round the corners */
  .navbar-wrapper .navbar {
    border-radius: 4px;
  }
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 20px;
    font-size: 21px;
    line-height: 1.4;
  }

  #circle{
    width: 100px;
    height: 100px;
    background: green;
    -moz-border-radius:50px;
    -webkit-border-radius: 50px;
    border-radius: 50px;
    margin-left: auto;
    margin-right: auto;
  }

    #circle1{
    width: 100px;
    height: 100px;
    background: yellow;
    -moz-border-radius:50px;
    -webkit-border-radius: 50px;
    border-radius: 50px;
    margin-left: auto;
    margin-right: auto;
  }

    #circle2{
    width: 100px;
    height: 100px;
    background: orange;
    -moz-border-radius:50px;
    -webkit-border-radius: 50px;
    border-radius: 50px;
    margin-left: auto;
    margin-right: auto;

  }
}
</style>

</head>
<body>

<div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse navbar-static-top">
      
        <div class="navbar-header">
	    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </a>
        <a class="navbar-brand" href="#">e-DMS</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#" target="ext">About Our Office</a></li>
            <li><a href="#contact">Contact</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dental Care<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Oral care products</a></li>
                <li><a href="#">Othodontic treatment</a></li>
                <li><a href="#">Cosmetic treatment</a></li>
                <li class="divider"></li>
                <li><a href="#">Denture cleaning</a></li>
                <li><a href="#">X-rays</a></li>
              </ul>
            </li>
          </ul>
        </div>

    </div>
  </div><!-- /container -->
</div><!-- /navbar wrapper -->


<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://coral-springs-dental.com/wp-content/uploads/2014/08/Slider-04.jpg" style="width:100%" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Welcome! to e-Dental Management System</h1>
          <p></p>
          <p><a class="btn btn-lg btn-primary" href="/register/">SIGN UP FOR FREE</a>
        </p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://s3.amazonaws.com/einstein-blog-live/public/uploads/images/23498/dental-bonding.jpg" style="width:100%" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
         
          <p>Managing your dental practice has never been easier.
Work smarter with e-DMS</p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://i.huffpost.com/gen/1271042/thumbs/o-OLD-PERSON-TEETH-570.jpg?9" style="width:100%" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Works with everything</h1>
          <p>Embrace the power of data. With e-DMS you will be able to keep tabs on everything.</p>
          <p><a class="btn btn-large btn-primary" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>
<!-- /.carousel -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-md-4 text-center">
      <div id="circle2">
        <i style ="font-size:70px; color: white; padding-top:5px; padding-bottom:5px;" class="glyphicon glyphicon-lock"></i>
      </div>
      <h2>Secure</h2>
      <p>We take security very seriously. You can rest assured your information will be safe in our cloud. Everything is periodically backed up and locked in a safe place.</p>
      <p><a class="btn btn-default" href="#">View details »</a></p>
    </div>
    <div class="col-md-4 text-center">
      <div id="circle">
       <i style="font-size:70px; color: white; padding-top:25px; padding-bottom:25px;" class="glyphicon glyphicon-thumbs-up"></i>
       </div>
      <h2>Easy to use</h2>
      <p>With so many advanced features, what really makes Odonto.me shine is the simplicity of everything. Making something simple is very complex, we took care of that for you.</p>
      <p><a class="btn btn-default" href="#">View details »</a></p>
    </div>
    <div class="col-md-4 text-center">
      <div id="circle1" class="text-center">
        <i style="font-size:50px; color:white; padding-top:5px; padding-bottom:5px;" class="glyphicon glyphicon-calendar"></i>
      </div>
      <h2>Appointments done right</h2>
      <p>The core of our platform. Our rich and powerful datebook not only allows you to manage multiple practices at once, it also shows you its activity by doctor if you wish.</p>
      <p><a class="btn btn-default" href="#">View details »</a></p>
    </div>
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image img-circle pull-right" src="http://placehold.it/512">
    <h2 class="featurette-heading">General Dentistry and Orthodontics. <span class="text-muted">is a stand alone clinic</span></h2>
    <p class="lead">It is Currently owned by Dra. Maria Lyn M. Misa. The clinic was estabished on the year 2008. The doctor adverstised the clinic through word of mouth and recommendations.</p>
  </div>

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image img-circle pull-left" src="http://placehold.it/512">
    <h2 class="featurette-heading">Smaller Footprint. <span class="text-muted">Lightweight.</span></h2>
    <p class="lead">The new Bootstrap 3 promises to be a smaller build. The separate Bootstrap base and responsive.css files have now been merged into one. There is no more fixed grid, only fluid.</p>
  </div>

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image img-circle pull-right" src="http://placehold.it/512">
    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Flatness.</span></h2>
    <p class="lead">A big design trend for 2013 is "flat" design. Gone are the days of excessive gradients and shadows. Designers are producing cleaner flat designs, and Bootstrap 3 takes advantage of this minimalist trend.</p>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->


  <!-- FOOTER -->
  <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>This Bootstrap layout is compliments of Bootply. · <a href="http://www.bootply.com/62603">Edit on Bootply.com</a></p>
  </footer>

</div><!-- /.container -->

</body>
</html>