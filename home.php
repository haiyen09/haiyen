<?php session_start() ?>
<?php require "connection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jan Auth</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&display=swap&subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap&subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700&display=swap&subset=vietnamese" rel="stylesheet">

	<!-- <script type="text/javascript" src="jqueryupload/js/vendor/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="jqueryupload/js/jquery.fileupload.js"></script> -->
	<script type="text/javascript" src="vendor/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="vendor/imagesloaded.pkgd.min.js"></script>
 	<script type="text/javascript" src="1.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
 	<link rel="stylesheet" href="1.css">
	 
</head>
<body>
	<?php include "header.php"?>
	<div class="slide">
		<div id="slidehome" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#slidehome" data-slide-to="0" class="active"></li>
				<li data-target="#slidehome" data-slide-to="1"></li>
				<li data-target="#slidehome" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="chu_slide1">
						<h2 class="fontroboto wow fadeInRight twoxtwo"data-wow-delay="0.5s" >Men's Collection</h2>
						<p class="wow fadeInLeft">The latest clothing for men and the freshest new fits</p>

						<a href="men.php" class="nutslide fontoswald btn btn-warning wow fadeInDown"data-wow-delay="0.5s">Buy Now</a>
					</div>
					<img src="image/slide2.png" alt="First slide">
				</div>
				<div class="carousel-item">
					<div class="chu_slide2">
						<h2 class="fontroboto wow fadeInRight twoxtwo"data-wow-delay="0.5s" >Women's Collection</h2>
						<p class="wow fadeInLeft">Shop our edit of the freshest women's sneakers</p>
						<a href="women.php" class="nutslide fontoswald btn btn-warning wow fadeInDown"data-wow-delay="0.5s">Buy Now</a>
					</div>
					<img src="image/slide3.jpg" alt="First slide">
				</div>
			</div>
			<a class="left carousel-control" href="#slidehome" role="button" data-slide="prev">
				<span class="icon-prev" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#slidehome" role="button" data-slide="next">
				<span class="icon-next" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!-- end slide -->
	<div class="khoi_prod wow slideInUp">
		<div class="tieudekhoiprod text-xs-center">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 push-sm-2">
						<span class="tieudephu fontdancing">Looking for something new?</span>
						<h3 class="tieudechinh fontroboto">The Newest And Most Beautiful Products</h3>
					</div>
				</div>
			</div>
		</div>
		<!-- end tieudekhoimenu -->
	</div>
	<!-- end khoimenu -->

	<div class="product wow slideInUp">
		<!--
		<div class="tieude text-xs-center fontroboto">
			<a href="" data-sp= "*">All</a>
			<a href="" data-sp= ".nike">Nike</a>
			<a href="" data-sp= ".adidas">Adidas</a>
			<a href="" data-sp= ".other">Other</a>
		</div>
		-->
		<div class="noidungchitiet">
			<div class="container">
				<div class="row nhieusp">
					<?php
						$sqlnew = "select * from shoe order by spid desc limit 6";
						$result = $conn->query($sqlnew);
						while($row = $result->fetch_assoc()){
							echo "<div class=\"col-xs-12 col-sm-6 col-md-4 motsp\">";
							echo "<a href=\"product_detail.php?id=$row[spid]\">";
							echo "<div class=\"row\">";
							echo "<div class=\"col-xs-6 col-sm-5\">";
							echo "<div class=\"anhsp\">";
							echo "<div class=\"tagnew\">NEW</div>";
							echo "<img class=\"img-fluid\" src=\"imgload.php?id=$row[spid]\" alt=\"No data found\">";
							echo "</div>";
							echo "</div>";
							echo "<div class=\"col-xs-6 col-sm-7\">";
							echo "<div class=\"tensp\">";
							echo "<div class=\"tren\">";
							echo "<p class=\"ten\">$row[spname]</p>";
							echo "</div>";
							echo "<div class=\"duoi\">$row[spprice]VNĐ</div>";
							echo "</div>";
							echo "</div>";
							echo "</div>";
							echo "</a>";
							echo "</div>";
						}
					?>
					
				</div>
				<!-- end row -->
			</div>
			<!-- end container -->
		</div>
		<!-- end noidungchitiet -->
	</div>
	<!-- end thucdon -->
	<div class="soon">
			<div class="col-sm-5 push-sm-7 title">
				<span class="fontdancing title_top">What is it?</span>
				<div class="fontroboto title_bot">COMMING SOON ...</div>
			</div>
	</div>
	<div class="tintuchome  slideInUp">
		<div class="container">
			<div class="row">
				<div class="tieudetintuc col-sm-12 text-xs-center">
					<div class="fontdancing tieude1">Our Blog</div>
					<div class="fontroboto tieude2">Lasted News Update</div>
				</div>
				<div class="batintuc">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 mottintuc">
                            <img src="image/vansmule.jpg" alt="">
                            <div class="ngaythang">22 April 2022 by <span class="vang">Yen Le</span></div>
                            <p class="fontroboto">Giày Mule - Lên ngôi xu hướng mùa hè 2022</p>
                            <div class="abc">
                                <a href="news_detail.php" class="readmore">Read More</a>
                            </div>
                        </div>
                        
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
		</div>
	</div>
	<!-- end tintuchome -->
	<div class="footertop wow slideInUp">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 cot1">
					<img class = "logo" src="image/janauth.png" alt="" style="background-color: none;">
					<div class="motdong">
						<i class="fa fa-paper-plane-o"></i>
						<span class="textmotdong">Address: 132 đường 3 tháng 2, Hưng Lợi, Ninh Kiều, Cần Thơ</span>
					</div>
					<div class="motdong">
						<i class="fa fa-phone"></i>
						<span class="textmotdong">Phone: 0911431625</span>
					</div>
					<div class="motdong">
						<i class="fa fa-envelope-o"></i>
						<span class="textmotdong">Email: hoyi@gmail.com</span>
					</div>					
				</div>

				<div class="col-sm-3 cot3">
					<h2 class="tdfooter">HỖ TRỢ THANH TOÁN</h2>
					<ul>
						<li><p><i class="fa fa-cc-mastercard mr-2"></i>MasterCard</p></li>
						<li><p><i class="fa fa-cc-visa mr-2"></i>Visa</p></li>
						<li><p><i class="fa fa-credit-card mr-2"></i>Thẻ tín dụng</p></li>
						<li><p><i class="fa fa-money mr-2"></i>Tiền mặt</p></li>
					</ul>
				</div>

				<div class="col-sm-3 cot4">
					<h2 class="tdfooter">Opening Hours</h2>
					<div class="opening1">
						<div class="phai float-xs-right">9:00am - 23:00pm</div>
						<div class="trai">Mon - Fri</div>
					</div>
					<div class="opening1">
						<div class="phai float-xs-right">10:00am - 22:00pm</div>
						<div class="trai">Saturday</div>
					</div>
					<div class="opening1">
						<div class="phai float-xs-right">10:00am - 21:00pm</div>
						<div class="trai">Sunday</div>
					</div>
					<!-- <p>Note: JanAuth is closed on holidays.</p> -->
				</div>
				<div class="col-sm-3 cot2">
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhoyi.decor%2F&tabs=home&width=340&height=130&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=false&appId" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>			</div>
		</div>
	</div>
	<!-- end footertop -->
	<div class="footerbottom wow slideInUp">
		Copyright © 2020. All Rights Reserved
	</div>
	<!-- end footerbottom -->
</body>
</html>