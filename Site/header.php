<?php 
    $directoryURI = $_SERVER['REQUEST_URI'];
    $path = parse_url($directoryURI, PHP_URL_PATH);
    $components = explode('/', $path);
    $pageName = end($components);
?>

<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="top-number"><p><i class="fa fa-phone-square"></i> +61 404 238 776</p></div>
                </div>
                <div class="col-xs-6">
                   <div class="social">
                        <ul class="social-share">
                            <li><a href="https://www.facebook.com/tncglobal.pty.ltd/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/TncGlobal" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li> -->
                        </ul>
                        <!-- <div class="search">
                            <form role="form">
                                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                <i class="fa fa-search"></i>
                            </form>
                       </div> -->
                   </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->
    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img id="logo" src="images/logo.png" title="TNC Global" alt="TNC Global logo"></a>
            </div>
			
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="<?php if ($pageName=="" || $pageName=="index.php") {echo "active"; } else  {echo "";}?>"><a href="index.php">Home</a></li>
                    <li class="<?php if ($pageName=="about-us.php") {echo "active"; } else  {echo "";}?>"><a href="about-us.php">About Us</a></li>
                   <!--  <li class="dropdown  <?php if ($pageName=="about-us.php") {echo "active"; } else  {echo "";}?>">
                        <a href="about-us.php" class="dropdown-toggle" data-toggle="dropdown">About Us <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="privacy.php">Privacy Policy</a></li>
                            <li><a href="terms-and-conditions.php">Terms & Conditions</a></li>
                        </ul>
                    </li> -->
                    <li class="<?php if ($pageName=="services.php") {echo "active"; } else  {echo "";}?>"><a href="services.php">Our Services</a></li>
                    
<!--                     <li class="<?php if ($pageName=="privacy.php") {echo "active"; } else  {echo "";}?>"><a href="privacy.php">Privacy Policy</a></li>
                    <li class="<?php if ($pageName=="terms-and-conditions.php") {echo "active"; } else  {echo "";}?>"><a href="terms-and-conditions.php">Terms & Conditions</a></li> -->
                    <li class="<?php if ($pageName=="contact-us.php") {echo "active"; } else  {echo "";}?>"><a href="contact-us.php">Contact Us</a></li>                        
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->