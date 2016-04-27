<?php
	
	$pageId = "";
	$pageTitle = "";
	$pageLead = "";

	$pageId = $_GET['id'];

	if ($pageId == "fmcg")
	{
		$pageTitle = "Food Processing";
		$pageLead = "TNC Global started of as a small business and has expanded to a company employing highly skilled and dedicated individuals. TNC Global leadership and capabilities have helped to grow the business to where it is today.";
	}
	else if ($pageId == "engineering")
	{
		$pageTitle = "Engineering";
		$pageLead = "TNC Global started of as a small business and has expanded to a company employing highly skilled and dedicated individuals. TNC Global leadership and capabilities have helped to grow the business to where it is today.";
	}
	else if ($pageId == "hospitality")
	{
		$pageTitle = "Hospitality";
		$pageLead = "TNC Global started of as a small business and has expanded to a company employing highly skilled and dedicated individuals. TNC Global leadership and capabilities have helped to grow the business to where it is today.";
	}
	else if ($pageId == "manufacturing")
	{
		$pageTitle = "Manufacturing";
		$pageLead = "TNC Global started of as a small business and has expanded to a company employing highly skilled and dedicated individuals. TNC Global leadership and capabilities have helped to grow the business to where it is today.";
	}
	else if ($pageId == "packaging")
	{
		$pageTitle = "Packaging";
		$pageLead = "TNC Global started of as a small business and has expanded to a company employing highly skilled and dedicated individuals. TNC Global leadership and capabilities have helped to grow the business to where it is today.";
	}
	else if ($pageId == "pharmaceutical")
	{
		$pageTitle = "Pharmaceutical";
		$pageLead = "TNC Global started of as a small business and has expanded to a company employing highly skilled and dedicated individuals. TNC Global leadership and capabilities have helped to grow the business to where it is today.";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1"/>
    <meta name="keywords" content="TNC Global, About us, Consultancy, Project Management, Design Management, Products, Equipments, Packaging, food processing, engineering, hospitality, manufacturing, pharceutical, food safety, business model, supply chain, 
                                    quality assurance, ports, Hygiene"/>
    <meta name="description" content="TNC Global is a privately owned internationally focused Australian owned business. We operate an integrated business model with the full range of food processing industries, engineering and services delivering."/>

    <title>Market Segments | TNC Global Pty Ltd</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <?php include 'header.php'; ?>

    <section id="segments">
        <div class="container">
        	<!-- <ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li><a href="#">Market Segment</a></li>
			  <li class="active"><?php echo $pageTitle ?></li>
			</ol> -->
			<div class="center wow fadeInDown">
				<ul class="nav nav-pills">
				  <li role="presentation" class="<?php if ($pageId=="fmcg") {echo "disabled"; } else  {echo "";}?>"><a href="segments.php?id=fmcg">FMCG</a></li>
				  <li role="presentation" class="<?php if ($pageId=="engineering") {echo "disabled"; } else  {echo "";}?>"><a href="segments.php?id=engineering">Engineering</a></li>
				  <li role="presentation" class="<?php if ($pageId=="hospitality") {echo "disabled"; } else  {echo "";}?>"><a href="segments.php?id=hospitality">Hospitality</a></li>
				  <li role="presentation" class="<?php if ($pageId=="manufacturing") {echo "disabled"; } else  {echo "";}?>"><a href="segments.php?id=manufacturing">Manufacturing</a></li>
				  <li role="presentation" class="<?php if ($pageId=="packaging") {echo "disabled"; } else  {echo "";}?>"><a href="segments.php?id=packaging">Packaging</a></li>
				  <li role="presentation" class="<?php if ($pageId=="pharmaceutical") {echo "disabled"; } else  {echo "";}?>"><a href="segments.php?id=pharmaceutical">Pharmaceutical</a></li>
				</ul>
			</div>
        	
			<div class="center wow fadeInDown">
				<h2><?php echo $pageTitle ?></h2>
				<p class="lead"><?php echo $pageLead ?></p>
			</div>
			
			<?php
        		if ($pageId == "fmcg")
        		{
        	?>
    		<!-- slider -->
			<div id="fmcg-carousel-slider" class="segment-carousel-slider carousel slide" data-ride="carousel">
				<!-- Indicators -->
			  	<ol class="carousel-indicators visible-xs">
				    <li data-target="#fmcg-carousel-slider" data-slide-to="0" class="active"></li>
				    <li data-target="#fmcg-carousel-slider" data-slide-to="1"></li>
				    <li data-target="#fmcg-carousel-slider" data-slide-to="2"></li>
				    <li data-target="#fmcg-carousel-slider" data-slide-to="3"></li>
			  	</ol>

				<div class="carousel-inner">
					<div class="item">
						<img src="images/segments/fmcg-1.jpg" class="thumbnail img-responsive" alt=""> 
				    </div> 
					<div class="item active">
						<img src="images/segments/fmcg-2.jpg" class="thumbnail img-responsive" alt=""> 
				    </div>
				    <div class="item">
						<img src="images/segments/fmcg-3.jpg" class="thumbnail img-responsive" alt=""> 
				    </div> 
				   	<div class="item">
						<img src="images/segments/fmcg-4.jpg" class="thumbnail img-responsive" alt=""> 
				    </div> 
				</div>
				
				<a class="left carousel-control hidden-xs" href="#fmcg-carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#fmcg-carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div> <!--/#carousel-slider-->

			<div class="skill-wrap clearfix">
				<div class="wow fadeInDown">
					<p>Hygiene and food safety is critical to food processing to ensure that food products are fit for human consumption and free from contaminants that could cause risk to human health due to microorganisms, including bacteria, viruses, parasites and moulds, toxins or agricultural chemicals Food hygiene can also help prevent food spoilage and protects against wastage and loss for food producers.</p>
					<p>TNC Global has a wide range of hygiene products that can help your business increase the safety, control and eliminate any risks associated. Our product range is listed below:</p>
					
				</div>
			</div>

			<?php
				}
				else if ($pageId == "engineering")
				{
			?>

			<!-- slider -->
			<div id="engineering-carousel-slider" class="segment-carousel-slider carousel slide" data-ride="carousel">
				<!-- Indicators -->
			  	<ol class="carousel-indicators visible-xs">
				    <li data-target="#engineering-carousel-slider" data-slide-to="0" class="active"></li>
				    <li data-target="#engineering-carousel-slider" data-slide-to="1"></li>
				    <li data-target="#engineering-carousel-slider" data-slide-to="2"></li>
			  	</ol>

				<div class="carousel-inner">
					<div class="item">
						<img src="images/segments/engineering-1.jpg" class="thumbnail img-responsive" alt=""> 
				    </div> 
					<div class="item active">
						<img src="images/segments/engineering-2.jpg" class="thumbnail img-responsive" alt=""> 
				    </div>
				    <div class="item">
						<img src="images/segments/engineering-3.jpg" class="thumbnail img-responsive" alt=""> 
				    </div> 
				</div>
				
				<a class="left carousel-control hidden-xs" href="#engineering-carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#engineering-carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div> <!--/#carousel-slider-->

			<div class="skill-wrap clearfix">
				<div class="wow fadeInDown">
					<p>Our business-best processes allow us to satisfy the needs of our customers while using the optimal amount of resources, thus creating the most value. We constantly seek to improve our performance as an efficient, agile, and innovative company by identifying, sharing, and implementing best practices across our global network of plants and facilities.</p>
					<p>TNC Global is capable of supplying products in a timely, efficient and flexible manner to meet the needs of our customers. This requires us to be in regular contact with our customers and be ready to modify deliveries and products if the client needs should change.</p>
					<p>We constantly create and develop methodologies that serve as the framework for our daily tasks.</p>
				</div>
			</div>
			<?php
				}
				else if ($pageId == "hospitality")
				{
			?>
			
			<!-- slider -->
			<div id="hospitality-carousel-slider" class="segment-carousel-slider carousel slide" data-ride="carousel">
				<!-- Indicators -->
			  	<ol class="carousel-indicators visible-xs">
				    <li data-target="#hospitality-carousel-slider" data-slide-to="0" class="active"></li>
				    <li data-target="#hospitality-carousel-slider" data-slide-to="1"></li>
				    <li data-target="#hospitality-carousel-slider" data-slide-to="2"></li>
			  	</ol>

				<div class="carousel-inner">
					<div class="item">
						<img src="images/segments/hospitality-1.jpg" class="thumbnail img-responsive" alt=""> 
				    </div> 
					<div class="item active">
						<img src="images/segments/hospitality-2.jpg" class="thumbnail img-responsive" alt=""> 
				    </div>
				    <div class="item">
						<img src="images/segments/hospitality-3.jpg" class="thumbnail img-responsive" alt=""> 
				    </div> 
				</div>
				
				<a class="left carousel-control hidden-xs" href="#hospitality-carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#hospitality-carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div> <!--/#carousel-slider-->

			<div class="skill-wrap clearfix">
				<div class="wow fadeInDown">
					<p>We understand that within any hospitality environment 100% cleanliness is an essential part of your business. You are required by law to meet and maintain stringent standards to ensure the wellbeing of your customers and staff. The expense of not meeting the standards can be huge, from the cost of sick customers and staff, your businesses reputation, penalty notices and fines, as well as wasted food.</p>
					<p>TNC Global provides your business with the following to guarantee you meet the legal requirements.</p>
					<p>Cleaning products for food preparation areas, disposal areas, cleaning areas and floors, Washroom products to minimise the risk of harm or illness to any person, whether a customer consuming food, or a staff member processing.</p>
				</div>
			</div>
			<?php
				}
				else if ($pageId == "manufacturing")
				{
			?>
			
			<!-- slider -->
			<div id="manufacturing-carousel-slider" class="segment-carousel-slider carousel slide" data-ride="carousel">
				<!-- Indicators -->
			  	<ol class="carousel-indicators visible-xs">
				    <li data-target="#manufacturing-carousel-slider" data-slide-to="0" class="active"></li>
				    <li data-target="#manufacturing-carousel-slider" data-slide-to="1"></li>
				    <li data-target="#manufacturing-carousel-slider" data-slide-to="2"></li>
			  	</ol>

				<div class="carousel-inner">
					<div class="item">
						<img src="images/segments/manufacturing-1.jpg" class="thumbnail img-responsive" alt=""> 
				    </div> 
					<div class="item active">
						<img src="images/segments/manufacturing-2.jpg" class="thumbnail img-responsive" alt=""> 
				    </div>
				    <div class="item">
						<img src="images/segments/manufacturing-3.jpg" class="thumbnail img-responsive" alt=""> 
				    </div> 
				</div>
				
				<a class="left carousel-control hidden-xs" href="#manufacturing-carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#manufacturing-carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div> <!--/#carousel-slider-->

			<div class="skill-wrap clearfix">
				<div class="wow fadeInDown">
					<p>With clients ranging from companies and food processors and manufacturer that provide airline flight meals to organisations who distribute food to the catering industry, this is a key area of our business. We provide cleaning and hygiene products, food grade packaging, foam and film products.</p>
				</div>
			</div>
			<?php
				}
				else if ($pageId == "packaging")
				{
			?>
			
			<!-- slider -->
			<div id="packaging-carousel-slider" class="segment-carousel-slider carousel slide" data-ride="carousel">
				<!-- Indicators -->
			  	<ol class="carousel-indicators visible-xs">
				    <li data-target="#packaging-carousel-slider" data-slide-to="0" class="active"></li>
				    <li data-target="#packaging-carousel-slider" data-slide-to="1"></li>
				    <li data-target="#packaging-carousel-slider" data-slide-to="2"></li>
			  	</ol>

				<div class="carousel-inner">
					<div class="item">
						<img src="images/segments/packaging-1.jpg" class="thumbnail img-responsive" alt=""> 
				    </div> 
					<div class="item active">
						<img src="images/segments/packaging-2.jpg" class="thumbnail img-responsive" alt=""> 
				    </div>
				    <div class="item">
						<img src="images/segments/packaging-3.jpg" class="thumbnail img-responsive" alt=""> 
				    </div> 
				</div>
				
				<a class="left carousel-control hidden-xs" href="#packaging-carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#packaging-carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div> <!--/#carousel-slider-->

			<div class="skill-wrap clearfix">
				<div class="wow fadeInDown">
					<p>When determining what material works best for specific food applications we do analysis  to understand the factors such as polymer characteristics and chemical interaction with products and consider the condition in which the product will be kept such as humidity and temperature to come up with the most suitable packaging type for our customers.</p>
					<p>We can also source and provide biodegradable and eco-friendly products as well as the primary and secondary packaging, foam and film for any of the above areas of food production. I.e. Meat, dairy, confectionary etc.</p>
				</div>
			</div>
			<?php
				}
				else if ($pageId == "pharmaceutical")
				{
			?>
			
			<!-- slider -->
			<div id="pharmaceutical-carousel-slider" class="segment-carousel-slider carousel slide" data-ride="carousel">
				<!-- Indicators -->
			  	<ol class="carousel-indicators visible-xs">
				    <li data-target="#pharmaceutical-carousel-slider" data-slide-to="0" class="active"></li>
				    <li data-target="#pharmaceutical-carousel-slider" data-slide-to="1"></li>
				    <li data-target="#pharmaceutical-carousel-slider" data-slide-to="2"></li>
			  	</ol>

				<div class="carousel-inner">
					<div class="item">
						<img src="images/segments/pharmaceutical-1.jpg" class="thumbnail img-responsive" alt=""> 
				    </div> 
					<div class="item active">
						<img src="images/segments/pharmaceutical-2.jpg" class="thumbnail img-responsive" alt=""> 
				    </div>
				    <div class="item">
						<img src="images/segments/pharmaceutical-3.jpg" class="thumbnail img-responsive" alt=""> 
				    </div> 
				</div>
				
				<a class="left carousel-control hidden-xs" href="#pharmaceutical-carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#pharmaceutical-carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div> <!--/#carousel-slider-->

			<div class="skill-wrap clearfix">
				<div class="wow fadeInDown">
					<p>Here at TNC Global we supply fine and specialty hygiene and safety product such as Packaging, PPE and materials handling equipment and consumables which we source from well reputed manufacturer. We are governed by the guiding principles of innovation, resourcefulness, pro-activeness and accuracy.</p>
				</div>
			</div>
			<?php
				}
			?>
		</div><!--/.container-->
    </section><!--/about-us-->
	
	<?php include 'footer.php'; ?>

</body>
</html>