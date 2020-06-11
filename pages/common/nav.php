  <!--==========================
    Header
  ============================-->
  

  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="#main">BRISBANE<span> MALYALI</span></a></h1>
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li class=""><a href="#intro">Create Event</a></li>
         
          <li><a href="#contact">Contact</a></li>

          <?php if(isset($_SESSION['id'])){ ?>
            <li class="nav-item dropdown custom-dropDown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600  username"><?php echo ucwords($_SESSION['name']);?></span>
                </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="dashboard"><i class="fa fa-user" ></i>
                  Dashboard</a>
                  <a class="dropdown-item" href="#"><i class="fa fa-user" ></i>
                  Profile</a>

                  <a class="dropdown-item" href="#"><i class="fa fa-cog"></i>
                      Setting</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout" id="logoutBtn"><i class="fa fa-sign-out" ></i>
                    Logout</a>
              </div>
            </li>
              
          <?php  }else{?>
            <li><a href="user/login" class="login-nav">Login</a></li>
            <li><a href="user/register" class="signup-nav">Signup</a></li>
          <?php }?>

          


          

          





         


          <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li>
        </ul>
        


      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->