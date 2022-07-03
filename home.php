<?php
session_start();
if(!isset($_SESSION["email"]))
{
header("Location:index.php");
}
else
{
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>MargaSuchi</title>
		<meta name="description" content="Responsive HTML5 Template">
		<meta name="author" content="webthemez">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">
 
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"> 
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet"> 
		<link href="css/animations.css" rel="stylesheet"> 
		<link href="css/style.css" rel="stylesheet"> 
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<body class="no-trans">
		<!-- scrollToTop --> 
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start --> 
						<div class="header-left">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="#banner"><img id="logo" src="images/logo.png" alt="Worthy"></a>
							</div>

							<!-- name-and-slogan -->
							<div class="logo-section smooth-scroll">
								<div class="brand"><a href="#banner">MargaSuchi</a></div>								
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start --> 
						<div class="header-right">

							<!-- main-navigation start --> 
							<div class="main-navigation animated">

								<!-- navbar start --> 
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li class="active"><a href="#banner">Home</a></li>
												<li><a href="#about">About Us</a></li>
												<li><a href="#videos">Videos</a></li>
												<li><a href="#portfolio">Syllabus</a></li>
												<li><a href="#price">Colleges</a></li>
												<li><a href="#contact">Contact Us</a></li>
												<li><a href="logout.php">Logout</a></li>
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->

		<!-- banner start --> 
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container">
					<div class="row">					 
						<div class="caption-data" style="margin-top: 0px; opacity: 1;" data-animation-effect="fadeIn">
								<h1>One STOP Education!!!</h1>
								<h3 class="padding-top30">Lorem ipsum dolor sit amet.</h3>
								<div class="padding-top60 contact-form">
									<button class="btn cta-button">Learn More</button>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->
		<section class="hero-caption secPadding">

		<div class="container">
	
	<div class="row " style="margin-top: 0px;">
				<div class="col-sm-12">
	<h2>welcome to <strong>VICTORY</strong> - <span>Educational</span> Institution</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo. Sed quis tortor magna. Maecenas hendrerit feugiat pulvinar. Aenean condimentum quam eu ultricies cursus.  Nulla facilisi. In hac habitasse platea dictumst. Ut nec tellus neque. Sed non dui eget arcu elementum facilisis.</p>
 	</div>
	
			</div>

		</div>
	
</section>
<!-- section start --> 
		<section class="section transprant-bg pclear secPadding">
			<div class="container no-view" data-animation-effect="fadeIn">
				<h1 id="services" class="title text-center">What we offer</h1>
				<div class="space"></div>
				<div class="row">
					<div class="col-md-4">
						<div class="media block-list">
							<div class="media-left">
								<i class="fa fa-trophy"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">Online Courses</h3>
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo.</p>
									
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media block-list">
							<div class="media-left">
								<i class="fa fa-gear"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">Online Library</h3>
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam ducimus.</p>
									
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media block-list">
							<div class="media-left">
								<i class="fa fa-laptop"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">Ready to Use</h3>
								<blockquote>
									<p>Dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur placeat.</p>
									
								</blockquote>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="media block-list">
							<div class="media-left">
								<i class="fa fa-clock-o"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">Online Payment</h3>
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur.</p>
									
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media block-list">
							<div class="media-left">
								<i class="fa fa-heart"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">Download</h3>
								<blockquote>
									<p>Forem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur.</p>
									
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media block-list">
							<div class="media-left">
								<i class="fa fa-magic"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">Certificated</h3>
								<blockquote>
									<p>Norem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur.</p>
									
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>			  
		</section>
		<!-- section end -->
<section id="videos" class="ds ms section_padding_top_150 section_padding_bottom_130">
				<div class="container">
				
					<div class="row">
					<div class="col-sm-12 text-center"><h2 class="section_header with_line">Youtube Videos</h2></div>
						<div class="col-sm-12">
							<div class="isotope_container isotope row masonry-layout columns_margin_bottom_20">
								<?php
									include('config.php');
									$query=mysqli_query($con,"select * from video");
									while($row=mysqli_fetch_array($query))
									{
								?>
								<div class="isotope-item col-lg-4 col-md-6 col-sm-12">
									<article class="vertical-item content-padding with_background rounded overflow_hidden text-center">
										<div class="item-media top_rounded overflow_hidden">
											<div class="embed-responsive embed-responsive-3by2"> <a href="<?php echo $row['link'] ?>" class="embed-placeholder">
								
								</a> </div>
								<a href="<?php echo $row['link'] ?>" class="embed-placeholder" target="_blank"><img src="youtube.png" height="100px" width="100px"></a>
										</div>
										<div class="item-content">
											<header class="entry-header">
												<h6 class="entry-title"> <a target="_blank" href="<?php echo $row['link'] ?>"><?php echo $row['title'] ?></a> </h6>
											</header>
										</div>
										
									</article>
								</div>
							<?php } ?>
					
					</div>
				</div>
			</section>
		<!-- section start --> 
		<section class="section clearfix no-view secPadding" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center">About <span>Institution</span></h1>
						<p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. laudantium culpa tenetur.</p>
						<div class="space"></div>
						<div class="row">
							<div class="col-md-6">
								<img src="images/section-image-1.png" alt="">
								<div class="space"></div>
							</div>
							<div class="col-md-6">
								<p>Lorem ipsum dolor sit amet, cadipisicing  sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde fuga error commodi architecto, laudantium culpa tenetur at id, beatae pet.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. adipisicing  sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium,m deserunt.</p>
								<ul class="list-unstyled">
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Lorem ipsum enimdolor sit amet</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Explicabo deleniti neque aliquid</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Consectetur adipisicing elit</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Lorem ipsum dolor sit amet</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Quo issimos molest quibusdam temporibus</li>
								</ul>
							</div>
						</div>
						<section id="syllabus">
						<div class="space"></div>
						<h2>Syllabus</h2>
						<div class="row">
							<div class="col-md-6">
								<p>Lorem ipsum dolor sit amet, adipisicing  sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde error commodi architecto, laudantium culpa optio corporis quod earumdignissimos eius mollitia et quas officia doloremque.</p>
									<ul class="list-unstyled">
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Lorem ipsum enimdolor sit amet</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Explicabo deleniti neque aliquid</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Consectetur adipisicing elit</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Lorem ipsum dolor sit amet</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Quo issimos molest quibusdam temporibus</li>
								</ul>
								<p>Dolores quam magnam aadipisicing  sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde molestias velit eveniet, facere autem saepe autrunt.</p>
							</div>
							<div class="col-md-6">
							    <?php
							    $query=mysqli_query($con,"select * from syllabus");
							    while($r=mysqli_fetch_array($query))
							    {
							    ?>
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													<?php echo $r['course']; ?>
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<?php echo $r['course_id']; ?> &nbsp; <a target="_blank" href="admin/syllabus_doc/<?php echo $r['doc']; ?>"><?php echo $r['doc']; ?></a>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
						</section>
					</div>
				</div>
			</div>
		</section>

		<!-- section start --> 
		<section class="section secPadding">
			<div class="container">
				<h1 class="text-center title" id="portfolio">Colleges</h1>
				<div class="separator"></div>
				<p class="lead text-center">Lorem ipsum dolor sit amet laudantium molestias similique.<br> Quisquam incidunt ut laboriosam.</p>
				<br>			
				<div class="row no-view" data-animation-effect="fadeIn">
					<div class="col-md-12">

						<!-- isotope filters start -->
					<!--	<div class="filters text-center">
							<ul class="nav nav-pills">
								<li class="active"><a href="#" data-filter="*">All</a></li>
								<li><a href="#" data-filter=".web-design">Web design</a></li>
								<li><a href="#" data-filter=".app-development">App development</a></li>
								<li><a href="#" data-filter=".mobile-apps">Mobile Apps</a></li>
							</ul>
						</div>-->
						<!-- isotope filters end -->

						<!-- portfolio items start -->
						<div class="isotope-container row grid-space-20">
						    <?php
						    $query=mysqli_query($con,"select * from college");
						    while($r=mysqli_fetch_array($query))
						    {
						    ?>
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
									<a href="<?php echo $r['doc']; ?>">	<img src="doc.jpeg" alt=""></a>
										<a class="overlay" data-toggle="modal" data-target="#project-1">
											<i class="fa fa-search-plus"></i>
											 
										</a>
									</div>
									<a class="btn btn-default btn-block"target="_blank" href="admin/college_doc/<?php echo $r['doc']; ?>"><?php echo $r['doc']; ?></a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-1-label"><?php echo $r['code']; ?></h4>
											</div>
											<div class="modal-body">
												
												<div class="row">												 
													<div class="col-md-12">
														
														<br/>
														<h3>College Description</h3>
														<p><?php echo $r['address']; ?></p>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
<?php } ?>

						</div>
						<!-- portfolio items end -->
					
					</div>
				</div>
			</div>
		</section>
		<!-- section end -->
<!-- section start --> 
		<section class="default-bg secPadding">
			
<div class="container">
  <div class="row">
    <div class='col-md-offset-2 col-md-8 text-center'>
    <h2>Testimonials</h2>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-offset-2 col-md-8'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
        </ol>
        
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
        
          <!-- Quote 1 -->
          <div class="item active">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/mijustin/128.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 3 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
        </div>              
      </div>                          
    </div>
  </div>
</div>
		</section>
		<!-- section end -->
		
		

		<!-- footer start --> 
		<footer id="footer">

			<!-- .footer start --> 
			<div class="footer section">
				<div class="container">
					<h1 class="title text-center" id="contact">Contact Us</h1>
					<div class="space"></div>
					<div class="row">
						
						<div class="col-sm-6">
							<div class="footer-content">
								<form role="form" id="footer-form">
									<div class="form-group has-feedback">
										<label class="sr-only" for="name2">Name</label>
										<input type="text" class="form-control" id="name2" placeholder="Name" name="name2" required>
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="email2">Email address</label>
										<input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2" required>
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="message2">Message</label>
										<textarea class="form-control" rows="8" id="message2" placeholder="Message" name="message2" required></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<input type="submit" value="Send" class="btn btn-default">
								</form>
							</div>
						</div>
						
						<div class="col-sm-6">
							<div class="footer-content">
								

							<div class="widget-content">

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nam magnam natus tempora cumque, aliquam deleniti voluptatibus voluptas. Maecenas ultrices finibus erat sit amet auctor. Curabitur et metus laoreet, fermentum quam sagittis, cursus augue. </p><br/>

								<p class="contacts"><i class="fa fa-map-marker"></i> 1508 Kembery Drive, Chicago, IL 60605 </p>

								<p class="contacts"><i class="fa fa-phone"></i> 202-314-1583</p>

								<p class="contacts"><i class="fa fa-envelope"></i> support@biss.com</p>

							

							</div>

						</aside>
								<ul class="social-links">
									<li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="googleplus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li class="skype"><a target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
									<li class="linkedin"><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li class="youtube"><a target="_blank" href="#"><i class="fa fa-youtube"></i></a></li> 
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .footer end -->

			<!-- .subfooter start --> 
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">Copyright © 2022. Made with &#x2764; by <a href="https://cryptosoft.co.in" target="_blank">CryptoSoft</a> </p>
						</div>
					</div>
				</div>
			</div>
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript --> 
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="plugins/modernizr.js"></script>
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>
<?php } ?>