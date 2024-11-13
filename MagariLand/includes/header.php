<!-- Get current page name for class active -->
<?php $page = basename($_SERVER['PHP_SELF']); ?>

    <!-- ***** Preloader Start ***** -->
        <div id="preloader">
            <div class="jumper">
                <div><div></div></div>
            </div>
        </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>MagariLand</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if($page == 'index.php'){ echo 'active';}?>"><a class="nav-link" href="index.php">HOME</a></li>
                <li class="nav-item <?php if($page == 'about-us.php'){ echo 'active';}?>"><a class="nav-link" href="about-us.php">ABOUT</a></li>
                <li class="nav-item <?php if($page == 'cars.php'){ echo 'active';}?>"><a class="nav-link" href="cars.php">CARS</a></li>
                <li class="nav-item <?php if($page == 'companies.php'){ echo 'active';}?>"><a class="nav-link" href="companies.php">TRADE-IN</a></li>
                <li class="nav-item <?php if($page == 'contact.php'){ echo 'active';}?>"><a class="nav-link" href="contact.php">CONTACT</a></li>
                <li class="nav-item <?php if($page == 'admin/login.php'){ echo 'active';}?>"><a class="nav-link" href="admin/login.php">ADMIN</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>