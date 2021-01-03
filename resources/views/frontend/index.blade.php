<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">
  <title>UG GLOBAL</title>
  <link rel="icon" href="{{url('/frontend/img/hdlogo2.png')}}" type="image/png">
  <link href="{{url('/frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('/frontend/css/style.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('/frontend/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('/frontend/css/animate.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet" type="text/css">

  <!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: "Lato", sans-serif;
    }

    .sidebar {
      height: 50%;
      width: 0;
      position: fixed;
      z-index: 2;
      top: 0;
      left: 0;
      background-color: white;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidebar a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: black;
      display: block;
      transition: 0.3s;
    }

    .sidebar a:hover {
      color: #f1f1f1;
    }

    .sidebar .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    .openbtn {
      font-size: 20px;
      cursor: pointer;
      background-color: #111;
      color: white;
      padding: 10px 15px;
      border: none;
    }

    .openbtn:hover {
      background-color: #444;
    }


    #main {
      transition: margin-left .5s;
      padding: 16px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
      .sidebar {
        padding-top: 15px;
      }

      .sidebar a {
        font-size: 18px;
      }
    }
  </style>
</head>

<body>

  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="#">Home</a>
    <a href="#">Courses</a>
    <a href="#">Our International Program</a>

  </div>

  <div id="main">
    <button class="openbtn" onclick="openNav()">☰ More..</button>


  </div>

  <script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
    }
  </script>

</body>

</html>

</head>

<body>

  <!--Header_section-->
  <header id="header_wrapper">
    <div class="container">
      <div class="header_box">

        <div class="logo"><a href="#"><img src="/frontend/img/hdlogo2.png" alt="logo"></a></div>
        <nav class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div id="main-nav" class="collapse navbar-collapse navStyle">
            <ul class="nav navbar-nav" id="mainNav">
              <li class="active"><a href="https://library.gunadarma.ac.id/" class="scroll-link"><strong>
                    <h3> Library</h3>
                  </strong></a></li>
              <li><a href="#aboutUs" class="scroll-link">
                  <h3>Courses</h3>
                </a></li>
              <li><a href="#service" class="scroll-link">
                  <h3>Maps</h3>
                </a></li>
              <li><a href="#team" class="scroll-link">
                  <h3>The Staff</h3>
                </a></li>
              <li><a href="#Portfolio" class="scroll-link">
                  <h3>About Gunadarma</h3>
                </a></li>


            </ul>
          </div>
        </nav>
      </div>
    </div>

  </header>
  <!--Header_section-->

  <header id="header_wrapper1">`Z
    <div class="container">
      <div class="header_box">
        <!--<div class="logo"><a href="#"><img src="/frontend/img/hdlogo.png" alt="logo"></a></div>-->
        <nav class="navbar navbar-inverse2" role="navigation">
          <div class="navbar-header">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div id="main-nav" class="collapse navbar-collapse navStyle">
            <ul class="nav navbar-nav" id="mainNav">
              <li class="active"><a href="#hero_section" class="scroll-link"><strong>
                    <h3>Study At Gunadarma
                  </strong></h3></a></li>
              <li><a href="#aboutUs" class="scroll-link"><strong>
                    <h3>Life At Gunadarma</h3>
                  </strong></a></li>
              <li><a href="#service" class="scroll-link"><strong>
                    <h3>Research</h3>
                  </strong></a></li>
              <li><a href="#Portfolio" class="scroll-link"><strong>
                    <h3>Alumni</h3>
                  </strong> </a></li>
              <li><a href="#clients" class="scroll-link"><strong>
                    <h3>Industry & Community</h3>
                  </strong></a></li>
              <li><a href="#team" class="scroll-link"> </a></li>

            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <section id="aboutUs">
    <!--Aboutus-->
    <div class="inner_wrapper">
      <div class="container">
        <h2><strong>Courses</strong></h2>
        <div class="inner_section">
          <div class="row">
            <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="img/about-img.jpg" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
            <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
              <div class=" delay-01s animated fadeInDown wow animated">
                <h3>Lorem Ipsum has been the industry's standard dummy text ever..</h3><br />
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.PageMaker including versions of Lorem Ipsum.</p> <br />
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
              <div class="work_bottom"> <span>Want to know more..</span> <a href="#contact" class="contact_btn">READ MORE</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Aboutus-->
  <!--Service-->
  <section id="service">
    <div class="container">
      <h2><strong>MAPS</strong></h2>
      <img src="/frontend/img/maps.jpg" class="zoomIn wow animated" alt="" />
    </div>
  </section>
  <!--Service-->

  <!--Service-->
  <!--
<section  id="service">
  <div class="container">
    <h2><strong>THE STAFF</strong></h2>
    <div class="service_wrapper">
      <div class="row">
        <div class="col-lg-4">
          <div class="service_block">
          <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-apple"></i></span> </div>
            <h3 class="animated fadeInUp wow">ASTIE DARMAYANTIE, ST, MMSI, MSc.</h3>
            <p class="animated fadeInDown wow"></p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft">			
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-apple"></i></span> </div>
            <h3 class="animated fadeInUp wow">ASTIE DARMAYANTIE, ST, MMSI, MSc.</h3>
            <p class="animated fadeInDown wow"></p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft">
          <div class="service_block">
            <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-html5"></i></span> </div>
            <h3 class="animated fadeInUp wow">ASTIE DARMAYANTIE, ST, MMSI, MSc.</h3>
            <p class="animated fadeInDown wow"></p>
          </div>
        </div>
      </div>
	   <div class="row borderTop">
        <div class="col-lg-4 mrgTop">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-dropbox"></i></span> </div>
            <h3 class="animated fadeInUp wow">ASTIE DARMAYANTIE, ST, MMSI, MSc.</h3>
            <p class="animated fadeInDown wow"></p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft mrgTop">
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-slack"></i></span> </div>
            <h3 class="animated fadeInUp wow">ASTIE DARMAYANTIE, ST, MMSI, MSc.</h3>
            <p class="animated fadeInDown wow"></p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft mrgTop">
          <div class="service_block">
            <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-users"></i></span> </div>
            <h3 class="animated fadeInUp wow">ASTIE DARMAYANTIE, ST, MMSI, MSc.</h3>
            <p class="animated fadeInDown wow"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Service-->-->

  <section class="page_section team" id="team">
    <!--main-section team-start-->
    <div class="container">
      <h2><strong>THE STAFF</strong></h2>
      <h6>Lorem ipsum dolor sit amet, consectetur adipiscing.</h6>
      <div class="team_section clearfix">
        <div class="team_area">
          <div class="team_box wow fadeInDown delay-03s">
            <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
            <img src="/frontend/img/astie.jpg" alt="">
            <ul>
              <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
            </ul>
          </div>
          <h3 class="wow fadeInDown delay-03s">ASTIE DARMAYANTIE, ST, MMSI, MSc.</h3>
          <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
          <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
        </div>
        <div class="team_area">
          <div class="team_box  wow fadeInDown delay-06s">
            <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
            <img src="/frontend/img/astie.jpg" alt="">
            <ul>
              <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
            </ul>
          </div>
          <h3 class="wow fadeInDown delay-06s">ASTIE DARMAYANTIE, ST, MMSI, MSc.</h3>
          <span class="wow fadeInDown delay-06s">Vice Preint</span>
          <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
        </div>
        <div class="team_area">
          <div class="team_box wow fadeInDown delay-09s">
            <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
            <img src="/frontend/img/astie.jpg" alt="">
            <ul>
              <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
            </ul>
          </div>
          <h3 class="wow fadeInDown delay-09s">ASTIE DARMAYANTIE, ST, MMSI, MSc.</h3>
          <span class="wow fadeInDown delay-09s">Senior Manager</span>
          <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
        </div>
      </div>
    </div>
  </section>
  <!--/Team-->



  <!-- Portfolio -->
  <section id="Portfolio" class="content">

    <!-- Container -->
    <div class="container portfolio_title">

      <!-- Title -->
      <div class="section-title">
        <h2><strong>ABOUT GUNADARMA</strong></h2>
      </div>
      <!--/Title -->

    </div>
    <!-- Container -->

    <div class="portfolio-top"></div>

    <!-- Portfolio Filters -->
    <div class="portfolio">

      <div id="filters" class="sixteen columns">
        <ul class="clearfix">
          <li><a id="a" href="#" data-filter="*" class="active">
              <h5>All</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".prototype">
              <h5>ACADEMIC/KUNING</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".design">
              <h5>UNGU</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".android">
              <h5>MERAH</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".appleIOS">
              <h5>HITAM</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".web">
              <h5>HIJAU</h5>
            </a></li>
        </ul>
      </div>
      <!--/Portfolio Filters -->

      <!-- Portfolio Wrapper -->
      <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">

        <!-- Portfolio Item -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four prototype isotope-item">
          <div class="portfolio_img"> <a href="https://v-class.gunadarma.ac.id/" </a> <img src="/frontend/img/vclass.jpg" alt="Portfolio 1"> </div>

          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">V-Class</h4>


            </div>
          </div>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item-->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four android isotope-item">
          <div class="portfolio_img"> <a href="https://baak.gunadarma.ac.id/" </a> <img src="/frontend/img/baak.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">BAAK</h4>
            </div>
          </div>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four web isotope-item">
          <div class="portfolio_img"> <a href="https://library.gunadarma.ac.id/" </a> <img src="/frontend/img/library.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">LIBRARY</h4>
            </div>
          </div>
        </div>
        <!--/Portfolio Item-->

        <!-- Portfolio Item-->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  appleIOS isotope-item">
          <div class="portfolio_img"> <a href="http://bapsi.gunadarma.ac.id/" </a> <img src="/frontend/img/bapsi.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">BAPSI</h4>
            </div>
          </div>
        </div>
        <!-- Portfolio Item -->

        <!-- Portfolio Item -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design isotope-item">
          <div class="portfolio_img"> <a href="https://v-class.gunadarma.ac.id/" </a> <img src="/frontend/img/pusatstudi.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">PUSAT STUDI</h4>
            </div>
          </div>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four prototype isotope-item">
          <div class="portfolio_img"> <a href="https://v-class.gunadarma.ac.id/" </a> <img src="/frontend/img/kui.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">KUI</h4>
            </div>
          </div>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item  -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four web isotope-item">
          <div class="portfolio_img"> <a href="https://sap.gunadarma.ac.id/" </a> <img src="/frontend/img/sap.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">SAP</h4>
            </div>
          </div>
        </div>
        <!--/Portfolio Item -->
        <!-- Portfolio Item -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four prototype isotope-item">
          <div class="portfolio_img"> <a href="https://v-class.gunadarma.ac.id/" </a> <img src="/frontend/img/ejournal.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">E-JOURNAL</h4>
            </div>
          </div>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four design isotope-item">
          <div class="portfolio_img"> <a href="https://v-class.gunadarma.ac.id/" </a> <img src="/frontend/img/bajamtu.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">BAJAMTU</h4>
            </div>
          </div>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item  -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design  isotope-item">
          <div class="portfolio_img"> <a href="https://v-class.gunadarma.ac.id/" </a> <img src="/frontend/img/repository.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">repository</h4>
            </div>
          </div>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item  -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four appleIOS  isotope-item">
          <div class="portfolio_img"> <a href="https://v-class.gunadarma.ac.id/" </a> <img src="/frontend/img/lpug.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">LPUG</h4>
            </div>
          </div>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   android isotope-item">
          <div class="portfolio_img"> <a href="https://v-class.gunadarma.ac.id/" </a> <img src="/frontend/img/lemlit.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">LEMLIT</h4>
            </div>
          </div>
          </a>
        </div>
        <!--/Portfolio Item -->

      </div>
      <!--/Portfolio Wrapper -->

    </div>
    <!--/Portfolio Filters -->

    <div class="portfolio_btm"></div>


    <div id="project_container">
      <div class="clear"></div>
      <div id="project_data"></div>
    </div>


  </section>
  <!--/Portfolio -->



  <!--Footer-->
  <footer class="footer_wrapper" id="contact">
    <div class="container">
      <section class="page_section contact" id="contact">
        <div class="contact_section">
          <h2>Contact s</h2>
          <div class="row">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 wow fadeInLeft">
            <div class="contact_info">
              <div class="detail">
                <h4>St.Margonda Raya 100</h4>
                <p>{{$setups->address}}</p>
              </div>
              <div class="detail">
                <h4>call us</h4>
                <p>{{$setups->contact}}</p>
              </div>
              <div class="detail">
                <h4>Email us</h4>
                <p>{{$setups->email}}</p>
              </div>
            </div>



            <ul class="social_links">
              <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
              <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
              <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
              <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-8 wow fadeInLeft delay-06s">
            <div class="form">
              <input class="input-text" type="text" name="" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
              <input class="input-text" type="text" name="" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
              <textarea class="input-text text-area" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
              <input class="input-btn" type="submit" value="send message">
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="container">
      <div class="footer_bottom"><span>Gunadarma University<a href="http://webthemez.com"></a>. </span> </div>
    </div>
  </footer>

  <script type="text/javascript" src="{{url('/frontend/js/jquery-1.11.0.min.js')}}"></script>
  <script type="text/javascript" src="{{url('/frontend/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{url('/frontend/js/jquery-scrolltofixed.js')}}"></script>
  <script type="text/javascript" src="{{url('/frontend/js/jquery.nav.js')}}"></script>
  <script type="text/javascript" src="{{url('/frontend/js/jquery.easing.1.3.js')}}"></script>
  <script type="text/javascript" src="{{url('/frontend/js/jquery.isotope.js')}}"></script>
  <script type="text/javascript" src="{{url('/frontend/js/wow.js')}}"></script>
  <script type="text/javascript" src="{{url('/frontend/js/custom.js')}}"></script>
</body>

</html>