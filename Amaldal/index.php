<?php 
	session_start();
	include('admin/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Amaldal Shop - Shopping</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Amaldal -->
    <link href="css/style.css" rel="stylesheet">
	<link href="css/animation.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- SLIDER -->
	<link rel="stylesheet" type="text/css" media="all" href="./css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="./css/jgallery.min.css" />
    <script type="text/javascript" src="./js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="./js/tinycolor-0.9.16.min.js"></script>
    <script type="text/javascript" src="./js/jgallery.min.js"></script>
    <script type="text/javascript">
    $( function() {
        $( '#gallery' ).jGallery( {
            'mode': 'slider'
        } );
    } );
    </script>
	<!-- END SLIDER -->
	
  </head>
  <body>
		<!-- ---------------------------------------------------------------------HEDER -->
		<header>
			<div class="content">
				<img class="anicld floating3" src="images/cloud.png" alt="" />
				<img class="anicld1 floating4" src="images/cloud3.png" alt="" />
				<ul class="menu1">
					<li class="bounce" ><a href=""><i class="glyphicon glyphicon-user"></i> ĐĂNG NHẬP</a></li>
					<li class="bounce" ><a href=""><i class="glyphicon glyphicon-info-sign"></i> GIỚI THIỆU</a></li>
					<li class="logo bounce ">
						<a href="" class="xoay"> <img  src="images/logo.png" alt=""/></a>
					</li>
					<li class="bounce" ><a href=""><i class="glyphicon glyphicon-send"></i> LIÊN HỆ</a></li>
					<li class="shopcart bounce">
						<a href="">
							<span >CART EMPTY</span>
							<img src="images/icon_shopping.png" alt="" />
						</a>
					</li>
					
				</ul>
				<div style="clear:both"></div>
			</div>
		</header>
		<!-- END   HEDER -->
		
		<!-- -----------------------------------------------------------------MENU LEFT -->
		<div id="menu-left">
			<div class="timkiem stretchRight">
				<form action="" method="post">
					<input class="ip1" type="text" name="TimKiem" placeholder="Tìm Kiếm">
					<input class="ip2"type="submit" value="">
				</form>
			</div>
			<div class="danhmucmenu stretchLeft">
				<h3 class="dmcap1"><a href=""><i class="glyphicon glyphicon-heart"></i> Sản phẩm mới</a></h3>
				<h3 class="dmcap1"><a href=""><i class="glyphicon glyphicon-gift"></i> Khuyến mãi</a></h3>
				<h3 class="dmcap1"><a href=""><i class="glyphicon glyphicon-piggy-bank"></i> sản phẩm</a></h3>
				<?php 
					$sql=mysqli_query($conn,"SELECT * FROM DanhMuc");
					while ($row=mysqli_fetch_array($sql)){
						echo '<p class="dmcap2"><a href="">'.$row[1].'</a></p>';
					}
				?>	
				
			</div>
			<div class="followme">
				<p>
					<a href=""> <img src="images/fl-fb.png" alt="" /></a>
					<a href=""> <img src="images/fl-tw.png" alt="" /></a>
					<a href=""> <img src="images/fl-gg.png" alt="" /></a>
					<a href=""> <img src="images/fl-lk.png" alt="" /></a>
				</p>
			</div>
		</div>
		<!-- END   MENU LEFT -->
		
		<!-- -----------------------------------------------------------------CONTENT -->
		<section>
			<div class="content">
				<div class="slider" >
					<div id="gallery">
						<img src="images/slide/hinh1.jpg" alt="" />
						<img src="images/slide/hinh2.jpg" alt="" />
						<img src="images/slide/hinh3.jpg" alt="" />
						<img src="images/slide/hinh4.jpg" alt="" />
						
					</div>
				</div>
				<div class="main-content">
					<h3 class="title-sp">SẢN PHẨM MỚI</h3>
					<div class="ct-sanpham ">
						<?php 
							$sql=mysqli_query($conn,"SELECT * FROM SanPham ORDER BY NgayDang DESC LIMIT 6");
							while ($row=mysqli_fetch_array($sql)){
								if ($row[3]==0){
									echo '
										<div class="col-md-4 spham">
											<img class="anhhieuung" src="images/sanpham/'.$row[5].'" alt="" />
											<p class="price-sp">'.number_format($row[2]).' <span>đ</span></p>
											<h4 class="namesp">'.$row[1].' '.$row[0].' </h4>
											<p class="motasp">Cửa hàng của chúng tôi cung cấp hơn 50.000 sản phẩm khác nhau và chúng tôi chắc chắn rằng bạn sẽ không tìm thấy bất kỳ cửa hàng khác ...</p>
											<P class="addca"><a href=""><img src="images/add_cart.png" alt="" /></a><a href=""> <img src="images/details.png" alt="" /></a></p>
										</div>
									';
								}else{
									echo '
										<div class="col-md-4 spham kmne">
											<img class="anhhieuung" src="images/sanpham/'.$row[5].'" alt="" />
											<p class="price-sp">'.number_format($row[3]).' <span>đ</span> <strong>'.number_format($row[2]).'  đ</strong></p>
											<h4 class="namesp">'.$row[1].' '.$row[0].' </h4>
											<p class="motasp">Cửa hàng của chúng tôi cung cấp hơn 50.000 sản phẩm khác nhau và chúng tôi chắc chắn rằng bạn sẽ không tìm thấy bất kỳ cửa hàng khác ...</p>
											<P class="addca"><a href=""><img src="images/add_cart.png" alt="" /></a><a href=""> <img src="images/details.png" alt="" /></a></p>
											<img class="anhkm" src="images/sale.jpg" alt="" />
										</div>
									';
								}
									
							}
						?>	
						
						
						<div style="clear:both"></div>
					</div>
					
				</div>
			</div>
			<footer>
				<div class="col-md-9 ">
					<div class="col-md-6 fmota1">
						<h4>SẢN PHẨM THUỘC NHÓM D2T - NHÓM 1</h4>
						<p>Websites là một dự án nhằm phục vụ học tập. </br>Không kinh doanh mua bán</p>
						
					</div>
					<div class="col-md-6 fmota1">
						<h4>AMALDAL SHOP VĂN PHÒNG BÁN LẺ</h4>
						<p>Địa chỉ : 267 Ngô Quyền, Đà Nẵng</p>
						<p>Email : kangnguyen.dn@gmail.com </p>
					</div>
					<div class="col-md-11 fmota1">
						<p class="endft" >Amaldal Shop cam kết bán hàng đúng giá niêm yết, chất lượng đảm bảo, bồi thường gấp 
						đôi nếu có vấn để về chất lượng sản phẩm khi bán cho khách hàng. Amaldal Shop  luôn đem lại sự hài lòng đến với khách hàng!</p>
					</div>
				</div>
				<div class="col-md-3 fmota2">
					<img src="images/logo.png" alt="" />
				</div>
				
				<div style="clear:both"></div>
			</footer>
		</section>
		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
  </body>
</html>