<?php
require("header.php");
// require("banner.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title>Luxury Watches Online</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
	<script src="js/jquery-1.11.0.min.js"></script>
	<!--Custom-Theme-files-->
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--start-menu-->
	<script src="js/simpleCart.min.js"> </script>
	<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/memenu.js"></script>
	<script>
		$(document).ready(function() {
			$(".memenu").memenu();
		});
	</script>
	<!--dropdown-->
	<script src="js/jquery.easydropdown.js"></script>
</head>

<body>
	<!--banner-starts-->
	<div class="bnr" id="home">
		<div id="top" class="callbacks_container">
			<ul class="rslides" id="slider4">
				<li>
					<img src="images/bnr-1.jpg" alt="" />
				</li>
				<li>
					<img src="images/bnr-2.jpg" alt="" />
				</li>
				<li>
					<img src="images/bnr-3.jpg" alt="" />
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--banner-ends-->
	<!--Slider-Starts-Here-->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function() {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function() {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function() {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!--End-slider-script-->
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-top grid-1">
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="images/abt-1.jpg" alt="" />
						<figcaption>
							<h2>Nulla maximus nunc</h2>
							<p>In sit amet sapien eros Integer dolore magna aliqua</p>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="images/abt-2.jpg" alt="" />
						<figcaption>
							<h4>Mauris erat augue</h4>
							<p>In sit amet sapien eros Integer dolore magna aliqua</p>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 about-left">
					<figure class="effect-bubba">
						<img class="img-responsive" src="images/abt-3.jpg" alt="" />
						<figcaption>
							<h4>Cras elit mauris</h4>
							<p>In sit amet sapien eros Integer dolore magna aliqua</p>
						</figcaption>
					</figure>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--about-end-->
	<?php
	// Ket noi CSDL
	require('connect.php');
	// Ket noi CSDL

	$sql = "SELECT sp.masanpham, sp.tensanpham, lsp.tenloaisanpham, sp.anh, sp.dongia
        FROM san_pham AS sp
        INNER JOIN loai_san_pham AS lsp 
            ON sp.maloaisanpham = lsp.maloaisanpham
        ORDER BY sp.maloaisanpham LIMIT 0,6";

	// echo $sql;

	$ketQuaTruyVan = $con->query($sql);
	?>

	<?php
	if ($ketQuaTruyVan->num_rows > 0) {
		$i = 0;
		while ($sp = $ketQuaTruyVan->fetch_assoc()) {
			if ($i % 3 == 0) {
	?>
				<div class="container">
					<div class="row">
					<?php
				}
					?>
					<div class="col-sm-4 product-left">
						<div class="panel panel-primary">
							<div class="panel-heading"><?php echo $sp['tensanpham']; ?></div>
							<div class="panel-body">
								<a href="chi_tiet_san_pham.php?id= <?php echo $sp['masanpham']; ?>">
									<img class="img-responsive zoom-img" src="https://www.casio.com/content/dam/casio/product-info/locales/vn/vi/timepiece/product/watch/G/GM/GM1/gm-110earth-1a/assets/GM-110EARTH-1A.png.transform/main-visual-pc/image.png" class="img-responsive" style="height:100px;" alt="Image">

								</a>

							</div>
							<div class="panel-footer">
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$<?php echo $sp['dongia']; ?></span></h4>
							</div>
						</div>
					</div>
					<?php
					if ($i % 3 == 2) {
					?>
					</div>
				</div><br>
	<?php
					}
					$i++;
				}
			}
	?>
	
	<!--product-starts-->
	<!-- <div class="product">
		<div class="container">
			<div class="product-top">
				<div class="product-one">
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-1.png" alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					
					
		
					<div class="clearfix"></div>
				</div>
				
			</div>
		</div>
	</div> -->
	<!--product-end-->
	<!--information-starts-->
	

</body>

</html>
<?php
require("footer.php");
?>