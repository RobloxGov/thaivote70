<header class="main-header">
  <meta charset="utf-8">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a class="logos" href="#">
          <div class="img-container">
            <img src="https://www.ect.go.th/ect_th/app/images/Logo-ect-2.svg" alt="Website Logo">
          </div>
          <div class="text-wrapper">
            <p>สำนักงานคณะกรรมการการเลือกตั้ง</p>
          </div>
        </a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <?php
            if(isset($_SESSION['student'])){
              echo "
                <li><a href='index.php'>HOME</a></li>
                <li><a href='transaction.php'>TRANSACTION</a></li>
              ";
            } 
          ?>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="user user-menu">
            <a href="">
              <img src="<?php echo (!empty($voter['photo'])) ? 'images/'.$voter['photo'] : 'images/profile.jpg' ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $voter['firstname'].' '.$voter['lastname']; ?></span>
            </a>
          </li>
          <li><a href="logout.php"><i class="fa fa-sign-out"></i> LOGOUT</a></li>  
        </ul>
      </div>
      <!-- /.navbar-custom-menu -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
  <style>
    nav.navbar,
    .navbar-custom-menu {
      background-color: #fff !important;
      font-family: 'Noto Sans Thai', sans-serif;
    }
    
    nav.navbar.style-02 .logos {
        color: #333333;
    }
    nav.navbar .logos {
        color: #194e84;
    }
    nav.navbar .logos {
        display: flex;
        align-items: center;
        white-space: nowrap;
        padding: 0 0.625rem 0 0;
        padding: 0.375rem 0;
        transition: color 0.25s;
    }
    
    nav.navbar .logos .img-container {
        margin: 0 0.625rem 0 0;
    }
    nav.navbar .logos img {
        display: block;
        height: 3.5rem;
        width: auto;
    }
    nav.navbar .logos p {
        font-size: 1.25rem;
        font-weight: 500;
        transition: color 0.25s;
        display: flex;
        margin: 0;
    }
    .skin-blue .main-header .navbar .nav>li>a{
      color: #30906a !important;
    }
  </style>
</header>