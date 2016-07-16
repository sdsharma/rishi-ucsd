<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'Website Contact Form'; 
        $to = 'ucsdprojectrishi@gmail.com'; 
        $subject = 'Message from Contact Form ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
 
// If there are no errors, send the email
     mail ($to, $subject, $body, $from);

 }
    	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="The UCSD chapter of Project RISHI was founded in September 2009 by UCSD Alumni Nikhil Nadkarni ('11). We work in rural villages set up by Baba Amte in rural Maharashtra. Since our inception we have had two official trips to India during the summers of 2010 and 2012." />
    <meta name="author" content="UCSD Project RISHI" />
    <meta name="theme-color" content="#159238">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>UCSD Project Rishi</title>
    <!--  Bootstrap Style -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!--  Font-Awesome Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--  Animation Style -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!--  Pretty Photo Style -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!--  Google Font Style -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!--  Custom Style -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="icon" href="./favicon.png" type="image/png"/>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <link href="./assets/css/nanogallery.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/themes/clean/nanogallery_clean.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/themes/light/nanogallery_light.css" rel="stylesheet" type="text/css">                                                       
    <script type="text/javascript" src="./assets/jquery.nanogallery.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    @media (max-width: 1200px) {
    .navbar-header {
        float: none;
    }
    .navbar-left,.navbar-right {
        float: none !important;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px;
    }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav {
        float: none!important;
        margin-top: 7.5px;
    }
    .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .collapse.in{
        display:block !important;
    }
  }
  @media (min-width: 1200px) {
  ul.nav li.dropdown:hover > ul.dropdown-menu {
    display: block;    
}

.nav .dropdown-menu {
    margin-top: 0;
}
}
    </style>
</head>
<body>
    <div class="navbar navbar-default navbar-fixed-top move-me ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="./">
                    <img src="assets/img/logo.png" class="navbar-brand-logo " alt="" />

                </a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <!-- <a href="?about">ABOUT
                        </a> -->
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">ABOUT <b class="caret"></b></a>
                        <ul class = "dropdown-menu" style = "padding-left: 15px; padding-right: 15px; min-width: 165px; background-color: #242222;">
                            <span style = "color: #fff;">
                            <li><a href="?about" style="color: #fff;">Projects and Awards</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="./team/" style="color: #fff;">Our Team</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="?contact" style="color: #fff;">Contact Us</a></li>
                            </span>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">FUNDRAISING & SPONSORS <b class="caret"></b></a>
                        <ul class = "dropdown-menu" style = "padding-left: 15px; padding-right: 15px; min-width: 215px; background-color: #242222;">
                            <span style = "color: #fff;">
                            <li><a href="./sponsor/" style="color: #fff;">Sponsorship</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="./run/" style="color: #fff;">5k Charity Run</a></li>
                            </span>
                        </ul>
                    </li>

                    <li >
                        <a href="?gallery">GALLERY
                        </a>

                    </li>

                    <li >
                        <a href="?help">HOW TO HELP
                        </a>

                    </li>
                    <li >
                        <a href="./voice/">BLOG
                        </a>

                    </li>
                    <li >
                        <a href="./calendar/">CALENDAR
                        </a>

                    </li>
                    <li>
                    <a href = "./member/">MEMBER OF THE MONTH</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!--./ NAV BAR END -->
    <div id="home" >
        <div class="overlay">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-9 col-md-9 head-text div-trans">
                        <h1>Rural India Social and Health Improvement</h1>
                        <span style="line-height: 175%">
                        Project RISHI (Rural India Social & Health Improvement), is a non-profit, volunteer-run organization consisting of undergraduates, graduate students, professors, and doctors from the University of California at Berkeley, Davis, Los Angeles, and San Diego. Our aim is to provide sustainable solutions for the basic infrastructural, healthcare, and educational needs of rural Indian villages.
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="div-trans text-center">
                            <h3>DONATE TO HELP </h3>
                            <h2>FUND PROJECTS</h2>
                            <div class="col-lg-12 col-md-12 col-sm-12" >
                           	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                           		<input name="cmd" value="_s-xclick" type="hidden">
                                <div class="form-group">
                                    <input style = "color: #fff" type="text" name="first_name" 
class="form-control" required="required" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input style = "color: #fff" type="text" name = "email" 
class="form-control" required="required" placeholder="Email address">
                                </div>
                                <div class="form-group">
                                    <input style = "color: #fff" type="text" name = "amount" 
class="form-control" required="required" placeholder="Amount in $">
                                </div>
                                <div class="form-group">
                                    <button name="hosted_button_id" value="8H3FGB36XNNRQ" type="hidden" class="btn btn-success btn-block btn-lg">DONATE NOW</button>
                                </div>
                            </form>
                             </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>
    <script type="text/javascript">
    	$('#home').hide();
    </script>
    <!--./ HOME SECTION END -->
    <div id="about" >
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 sub-head">
                    <h2><strong>ABOUT </strong></h2>
                    <p class="sub-head">The first chapter of Project RISHI was set up at UCLA in 2005. Since then Project RISHI chapters have sprung up UC Berkeley, UC San Diego, UC Davis, UC Irvine, and Northwestern University. The UCSD chapter of Project RISHI was founded in September 2009 by UCSD Alumni Nikhil Nadkarni ('11). We work in the rural village of Anandwan set up by Baba Amte in Maharashtra. Since our inception we have had four official trips to India during the summers of 2010, 2012, 2014, and 2015.</p>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-6 col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-recycle fa-4x  "></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Water Collection & Sanitation</h3>
                            <p >
                                The shortage and cleanliness of water has always been a problem in rural parts of India. In Anandwan, 400 children only had the option to drink water from the river that contained hot and dirty water. So in 2014, we implemented a water purification system that cools and stores water in a tank, providing clean water inside the schools for several hundred blind and deaf children. 
                            </p>

                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-wheelchair fa-4x  "></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Blind & Deaf Awareness Campaign</h3>
                            <p>
                                In order to decrease the intolerance in India surrounding physical ailments, Project RISHI wants to work with the village school to set up higher awareness for disabled children. In India, many families severely underestimate the capabilities of their children and it is heartbreaking to see how children are ostracized because of a disability out of their control. Our goal is to foster parental involvement and to develop a multimedia scrapbook of artwork and writing from the blind and deaf school in Anandwan.
                            </p>

                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-md-6">

                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-music fa-4x  "></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Swaranandwan Orchestra</h3>
                            <p>
                                This music and dance troupe of Anandwan is made up of disabled residents and leprosy patients. It increases the physical, mental, and emotional health of both its performers and audience through the concept of therapeutic theater. We aim to create an online media channel for them, help subsidize travel and equipment costs for the orchestra to perform internationally, and set them up with a sister orchestra in the United States. In the summer of 2012, UCSD's Project RISHI donated $7000 to their cause.
                            </p>

                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-ambulance fa-4x  "></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Health Education Camps</h3>
                            <p>
                                We provide disabled children with the basic health care that they lack, with the guidance of professional doctors. UCSD students have the unique opportunity of participating in hands-on, clinical practice. We are also working on creating a resource center for children that would help sustain any educational lessons taught during our trip.
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row pad-top-botm">
                <div class="col-lg-8 col-md-8 col-sm-8 " >

                    <h3><strong>Awards and Oppurtunities</strong></h3>
                    <p>
                        In 2011, Project RISHI was awarded the UCSD Organization of the Year from the UCSD Alumni Association.
UCSD Project RISHI students have also attended the prestigious Clinton Global Initiative University conferences in 2011 - 2014 gaining acceptance to these conferences based on our projects (known as commitments at the conference). This conference provides a great opportuntity for UCSD Project RISHI members to meet other motivated college students like themselves, learn about different types of commitments, network with people interested in similar work, and hear luminaries in their respective fields speak about all aspects of philanthropy.

                    </p>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 text-center" >
                    <i class="fa fa-star-o big-icon "></i>


                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript">
    	$('#about').hide();
    </script>
    <!--./ ABOUT SECTION END -->
    <div id = "testimonial" class="donars-section">
        <div class="overlay">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12 col-md-12 ">
                        <div id="testimonials" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">
                                <!-- <li data-target="#testimonials" data-slide-to="0" class=""></li>
                                <li data-target="#testimonials" data-slide-to="1" class=""></li> -->
                                <li data-target="#testimonials" data-slide-to="2" class="active"></li>
                            </ol>

                            <div class="carousel-inner">
                                <!-- <div class="item">
                                    <div class="container center">
                                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">

                                            <h4><i class="fa fa-quote-left"></i>I'm Shivani Patel and am from Bakersfield, CA. I'm currently a sophomore at UCSD and this is my second year being a part of Project Rishi! I'm a human biology major in Revelle College and hope to have a career in the medical field some day. In my free time I love to dance and read. I'm also slightly a shopaholic and it’s a serious problem! <i class="fa fa-quote-right"></i></h4>
                                            <div class="user-img pull-right">
                                                <img src="assets/img/Shivani.jpg" alt="" class="img-circle image-responsive">
                                            </div>
                                            <h5 class="pull-right"><strong class="c-black">Shivani Patel - VP</strong></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="container center">
                                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                            <h4><i class="fa fa-quote-left"></i>I'm Shivani Patel and am from Bakersfield, CA. I'm currently a sophomore at UCSD and this is my second year being a part of Project Rishi! I'm a human biology major in Revelle College and hope to have a career in the medical field some day. In my free time I love to dance and read. I'm also slightly a shopaholic and it’s a serious problem!<i class="fa fa-quote-right"></i></h4>
                                            <div class="user-img pull-right">
                                                <img src="assets/img/Shivani.jpg" alt="" class="img-circle image-responsive">
                                            </div>
                                            <h5 class="pull-right"><strong class="c-black">Shivani Patel - VP</strong></h5>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="item active">
                                    <div class="container center">
                                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                            <h4><i class="fa fa-quote-left"></i>My past three years as part of Project RISHI have truly been life changing. Its amazing to see how much a little bit of money and effort on our end here can make such a big impact on the lives of children in India! RISHI has been one of my most memorable and moving experiences in college!<i class="fa fa-quote-right"></i></h4>
                                            <div class="user-img pull-right">
                                                <img src="assets/img/Radhika.jpg" alt="" class="img-circle image-responsive">
                                            </div>
                                            <h5 class="pull-right"><strong class="c-black">Radhika Gulhar - President</strong></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    	$('#testimonial').hide();
         
    </script>
    <!--./ DONARS TESTIMONIALS END -->
    <div id="port-folio" class="pad-top-botm" >
        <div class="container">
            <div class="row text-center ">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <h2><strong>GALLERY </strong></h2>
                    <p class="sub-head">Check out some of our images from over the years here.</p>
                    
                </div>
            </div>
            <div class="row ">
            <div id="nanoGallery"></div>

            </div>

        </div>
    </div>
    <script type="text/javascript">
    	$('#port-folio').hide();
    </script>
    <!--./ GALLERY/PORTFOLIO SECTION END -->
    <div id="help" >
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        <h2><strong>HOW YOU CAN HELP ?</strong></h2>
                        <p class="sub-head">There are many ways you can be involved! We have positions open in our Fundraising, Marketing, and Project Planning committees. If you are interested in writing and in global public health, we are looking for more writers for our Blog. You can also sign up to be a volunteer at our events. If you have any questions or concerns, please send us an email! To learn more about these opportunities, come to our GBMs and Project Planning meetings.</p>
                    </div>
                </div>
                <div class="row ">

                    <div class="col-lg-6 col-lg-offset-1  col-md-6 col-md-offset-1">
                        <iframe src="https://player.vimeo.com/video/36895817" class="vedio-style"></iframe>
                    </div>

                    <div class="col-lg-4 col-md-4" style="padding-top: 50px;">

                        <div class="media">
                            <div class="pull-left">
                                <i class="fa fa-plane fa-4x  "></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Come on the Summer Trip</h3>
                                <p>
                                    Travel to India during the summer to get hands-on, invaluable experience in the villages. Carry out the various pre-planned projects, wound-wrap at the leprosy hospital, and much more!
                                </p>

                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <i class="fa fa-gift fa-4x  "></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Donate to the Cause</h3>
                                <p>
                                    Donate to our cause using the form above! This is the most direct way to help with our endeavours.
                                </p>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </div>
    <script type="text/javascript">
    	$('#help').hide();
    </script>
    <!--./ HELP SECTION END -->
    <div id="contact" >
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <h2><strong>CONTACT US </strong></h2>
                    <p class="sub-head">Please use the form below to contact us with an inquiries that you may have.</p>
                </div>
            </div>
            <div class="row  text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <a href="https://www.facebook.com/projectrishiUCSD">  <img src="assets/img/Social/facebook.png" alt="" /> </a>
                     <a href="http://twitter.com/SDProjectRishi"> <img src="assets/img/Social/twitter.png" alt="" /></a>
                     <a href="http://www.flickr.com/photos/ucsdprojectrishi"> <img src="assets/img/Social/flickr.png" alt="" /></a>
                    </div>
                </div>
            <div class="row pad-top-botm">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form action = "index.php" method="POST">
                        <div class="form-group">
                            <input id = "name" name = "name" type="text" class="form-control"  required="required" placeholder="Your Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                        </div>
                        <div class="form-group">
                            <input id = "email" name = "email" email = "email" type="text" class="form-control" required="required"  placeholder="Your Email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                        </div>
                        <div class="form-group">
                            <textarea name="message"  required="required" class="form-control" style="min-height: 150px;" placeholder="Message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                        </div>
                        <div class="form-group">
                            <button id ="submit" name = "submit" value="Send" type="submit" class="btn btn-success btn-block btn-lg">SUBMIT REQUEST</button>
                        </div>

                    </form>
                </div>

            </div>
            
        </div>
    </div>
    <script type="text/javascript">
    	$('#contact').hide();
    </script>
    <!--./ CONTACT SECTION END -->
    <div id="footser-end">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                 &copy; 2015 UCSD Project RISHI | by <a href="http://www.shivam.info/" style="color:#fff;" target="_blank" >Shivam Sharma</a>
                </div>
            </div>

        </div>
    </div>
    <!--./ FOOTER SECTION END -->
    <!--  Jquery Core Script -->
    
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
     <!--  WOW Script -->
    <script src="assets/js/wow.min.js"></script>
    <!--  Scrolling Script -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  PrettyPhoto Script -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!--  Custom Scripts -->
    <script src="assets/js/custom.js"></script>
   <script>
   
    $('#body').ready(function(){
        
        if(window.location.href.indexOf("about") > -1) {
            $('#testimonial').show();
            $('#about').show();
        }
        else if(window.location.href.indexOf("gallery") > -1) {
            $('#port-folio').show();
            $("#nanoGallery").nanoGallery({
              userID: '78985123@N04',
              kind: 'flickr',
              
              photoset: 'none',

              thumbnailWidth: 120, thumbnailHeight: 120,
              thumbnailHoverEffect: 'scaleLabelOverImage,borderDarker',
              theme: 'light',
              thumbnailLabel: { display:true, position:'overImageOnMiddle', align:'center' },
              thumbnailLazyLoad: true
            });
        }
        else if(window.location.href.indexOf("help") > -1) {
            $('#help').show();
        }
        else if(window.location.href.indexOf("contact") > -1) {
            $('#contact').show();
        }
        else {
            $('#home').show();
        }
    });
   </script>
</body>
</html>
