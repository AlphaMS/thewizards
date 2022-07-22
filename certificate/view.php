<?php 
include_once 'config.php';
$id = $_GET['id'];
// echo $id;
$sql = "SELECT * FROM image WHERE id='$id'";
$res = mysqli_query($conn, $sql);
$key = mysqli_fetch_assoc($res);
// echo $key['image'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="title" content="The Wizards - A Digital Company|Your Problems - Our Magical Solutions.">
  <meta name="description"
    content="We provide services in Web Development,SEO,Graphic Designing,Content Writing,Business Planning,Logo Designing, and Video/Photo Editing.">
  <meta name="keywords" content="wizards,thewizards,build a website, make a website,simple website, build a website for free,freelancers near me,thewizards,wizard,wizards,The Wizard, wizards freelancer,wizards company,software company,digital company thewizards
     Web developers near me, Web Development, Content Writing, Graphic Designers, Photo Editing, Business Planning, SEO, WordPress Management, Cloud Management, Logo Designing">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Mihir Gandhi">

  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MK9VFWT');</script>
  <!-- End Google Tag Manager -->

  <!-- Boxicons -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <!-- AOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.0/swiper-bundle.min.css" />
  <!--PageClip-->
  <link rel="stylesheet" href="https://s.pageclip.co/v1/pageclip.css" media="screen">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="../styles.css" />
  <title>The Wizards-Training.</title>
</head>

<body>
<div class="training">
    <div class="navigation">
      <div class="nav-center d-flex">
        <a href="#">
          <h2 class="logo d-flex">
            <img class="logo-img" src="../images/Logo.png"><span class="name">The Wizards</span>
          </h2>
        </a>

        <ul class="nav-list d-flex">
          <li class="nav-item">
            <a href="#header" class="nav-link scroll-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link scroll-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#services" class="nav-link scroll-link">Services</a>
          </li>
          <li class="nav-item">
            <a href="#portfolio" class="nav-link scroll-link">Portfolio</a>
          </li>
          <li class="nav-item">
            <a href="#team" class="nav-link scroll-link">Team</a>
          </li>
          <li class="nav-item">
            <a href="#blog" class="nav-link scroll-link">Blogs</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link scroll-link">Contact</a>
          </li>

          <!-- Close Button -->
          <div class="close">
            <i class="bx bx-x"></i>
          </div>
        </ul>

        <!-- theme -->
        <div class="theme theme-icon">
          <i class="bx bx-moon"></i>
        </div>

        <!-- Hamburger -->
        <div class="hamburger">
          <i class="bx bx-menu"></i>
        </div>
      </div>
    </div>
</div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center m-auto mt-5">
            <h2>Congratulations <span style="color:green"><?=strtoupper($key['name'])?></span> on completing industrial training.</h2>
        <div>
        <div class="col-lg-9 col-md-12 col-sm-12 m-auto">
            <img style="height:400px;" src="uploads/<?=$key['image']?>">
        <div>
        <form action="download.php?id=<?php echo $key['id']?>" method="post">    
            <div class="col-3 m-auto text-center mt-3">
                <button type="submit" value="download" class="btn btn-outline-primary">Download Pdf</button>
            </div>
            <?php
            if(isset($_GET["err"])){?>
                <center style="color: red; justify-content: center;"><?= $_GET['err']?></center>
            <?php
            header("Refresh:3; url=view.php?id=$id");
            }
            ?>
        </form>
    </div>

      <!-- Contact -->
  <section class="section contact" id="contact">
    <div class="title">
      <h1>Contact us</h1>
    </div>

    <div class="contact-center container1">
      <div class="left" data-aos="fade-right" data-aos-duration="500">

        <form action="https://send.pageclip.co/nbmymRdocVlq5LbDa5ElxNA54Ga58j5f/Contact-Us" class="pageclip-form form"
          method="post">
          <h2>Message us</h2>
          <div>
            <input type="text" name="Name" placeholder="Name" required>
            <input type="email" name="Email" placeholder="Email" required>
          </div>

          <textarea name="Message" cols="10" rows="10" placeholder="Describe Project"></textarea>
          <button type="submit" class="pageclip-form__submit pageclip-form__submit--dark-loader btn btn-form"> <b>Send
              message</b> </button>
        </form>
      </div>

      <div class="right" data-aos="fade-left" data-aos-duration="500">
        <div>
          <span class="icon"><i class="bx bx-user"></i></span>
          <span class="content">
            <h3>Name</h3>
            <span>The Wizards</span>
          </span>
        </div>
        <div>
          <a href="mailto:info@thewizards.me" target="_blank">
            <span class="icon"><i class="bx bx-envelope"></i></span>
          </a>
          <a href="mailto:info@thewizards.me" target="_blank">
            <span class="content">
              <h3>Email</h3>
              <span>info@thewizards.me</span>
          </a>
          </span>
        </div>
        <div>
          <a href="tel:9574663353">
            <span class="icon"><i class="bx bx-phone"></i></span>
          </a>
          <span class="content">
            <h3>Phone</h3>
            <span><a href="tel:9574663353"> 9574663353</a>,<a href="tel:9039538565">9039538565</a></span>
          </span>
        </div>
        <div>
          <span class="icon"><i class="bx bx-map"></i></span>
          <span class="content">
            <h3>Address</h3>
            <span>Vadodara,Gujarat,India - 390001</span>
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>Copyright &copy; 2022-The Wizards. All Rights reserved.|| Magically Created by
      <a href=" https://www.thewizards.me" target="_blank">
        <img class="logo-bottom" src="../images/Logo.png">&nbsp;The&nbsp;Wizards
      </a>
    </p>
    <div>
    <a href="./privacypolicy.html">Privacy Policy</a>
    <a href="./termsofuse.html"> Term of Use</a>
    <a href="./disclaimer.html">Disclaimer</a>
    <a href="./sitemap.xml">Site Map</a>
  </div>

    
  </footer>
  <!-- Swiper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.0/swiper-bundle.min.js"></script>
  <!-- AOS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <!-- Typeit -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/7.0.4/typeit.min.js"></script>
  <!-- Custom Script -->
  <script src="../index.js"></script>
  <!--PageClip-->
  <script src="https://s.pageclip.co/v1/pageclip.js" charset="utf-8"></script>

</body>
</html>

