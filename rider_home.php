<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script src="https://kit.fontawesome.com/6b18a8acf7.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/7571e7ef19.js" crossorigin="anonymous"></script>

  <title>Rider Home</title>
</head>
<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
  <div class="container-fluid">
    <a class="navbar-brand" href="#">OneBoda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="rider_login.php" style="margin-left: 950px;"><button type="button" class="btn btn-light">Sign in</button></a>
    <a href="register.php"><button type="button" class="btn btn-dark">Create an account</button></a>
  </div>
</nav>
   <!-- ABOVE THE FOLD -->
    <section id="hero">
    <div class="hero-container">
      <h1>Register Your Boda</h1>
      <h2>Apply for your motorcycle registration at the comfort of your home</h2>
      <a href="rider_dashboard.php" class="btn-get-started btn-danger scrollto">Access Service</a>
    </div>
  </section>
    <!-- SERVICES SECTION -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Why One Boda?</h2>
          <h3>We do offer awesome <span>Services</span></h3>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-house"></i></div>
              <h4 class="title"><a href="">Registration at the comfort of your home</a></h4>
              <p class="description">No need to travel to Huduma Centres to get registration services. Get it done conviniently at the comfort of your home.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-cloud-arrow-down"></i></div>
              <h4 class="title"><a href="">Online Servicess</a></h4>
              <p class="description">Fill in the application details online, upload documents and download your certificate of registration in PDF format.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-mobile-screen"></i></div>
              <h4 class="title"><a href=""></a>Portability</h4>
              <p class="description">Access our services from any smart device with access to the internet in any location.</p>
            </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fa-brands fa-creative-commons-zero"></i></div>
              <h4 class="title"><a href="">Free</a></h4>
              <p class="description">Access our services and register your motorcycle at no cost.</p>
            </div>
    </section>
</body>
<style type="text/css">
  body {
  font-family: "Open Sans", sans-serif;
  color: #444444;
}
#hero {
  width: 100%;
  height: 100vh;
  background: url("images/riderhome.jpg") top center;
  background-size: cover;
  position: relative;
}
#hero:before {
  content: "";
  background: rgba(0, 0, 0, 0.6);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}
#hero .hero-container {
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  padding: 0 15px;
}
#hero h1 {
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  text-transform: uppercase;
  color: #fff;
}
#hero h2 {
  color: #eee;
  margin-bottom: 40px;
  font-size: 24px;
}

#hero .btn-get-started {
  font-family: "Poppins", sans-serif;
  text-transform: uppercase;
  font-weight: 400;
  font-size: 13px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 30px 9px 30px;
  border-radius: 50px;
  transition: 0.5s;
  border: 2px solid #fff;
  color: #fff;
}

#hero .btn-get-started:hover {
  background: #0C7018;
  border: 2px solid #0C7018;
}
@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}

@media (max-width: 768px) {
  #hero h3 {
    font-size: 22px;
  }
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }
  #hero h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }
}

@media (max-height: 500px) {
  #hero {
    height: 150vh;
  }
}
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-bg {
  background-color: white;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 13px;
  letter-spacing: 1px;
  font-weight: 700;
  padding: 8px 20px;
  line-height: 1;
  margin: 0;
  background: #fdeff2;
  color: #0C7018;
  display: inline-block;
  text-transform: uppercase;
  border-radius: 50px;
}
.section-title p {
  margin: 15px auto 0 auto;
  font-weight: 600;
}

@media (min-width: 1024px) {
  .section-title p {
    width: 50%;
  }
}
.about .content ul {
  list-style: none;
  padding: 0;
}
.about .content ul li {
  padding-left: 28px;
  position: relative;
}
.about .content ul li + li {
  margin-top: 10px;
}
.about .content ul i {
  position: absolute;
  left: 0;
  top: 2px;
  font-size: 20px;
  color: #0C7018;
  line-height: 1;
}

.about .content p:last-child {
  margin-bottom: 0;
}

.about .content .btn-learn-more {
  font-family: "Nunito", sans-serif;
  font-weight: 600;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 50px;
  transition: 0.3s;
  line-height: 1;
  color: #0C7018;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  margin-top: 6px;
  border: 2px solid #0C7018;
}

.about .content .btn-learn-more:hover {
  background: #0C7018;
  color: #fff;
  text-decoration: none;
}
.ri-check-double-line:before { content: "\eb79"; }
.services {
  padding-bottom: 30px;
}

.services .icon-box {
  padding: 60px 30px;
  position: relative;
  overflow: hidden;
  background: #fff;
  box-shadow: 2px 0 35px 0 rgba(68, 88, 144, 0.12);
  transition: all 0.3s ease-in-out;
  border-radius: 8px;
  z-index: 1;
  text-align: center;
}

.services .icon-box::before {
  content: '';
  position: absolute;
  background: #fdeff2;
  right: 0;
  left: 0;
  bottom: 0;
  top: 100%;
  transition: all 0.4s;
  z-index: -1;
}

.services .icon-box:hover::before {
  background: #0C7018;
  top: 0;
  border-radius: 0px;
}

.services .icon {
  margin-bottom: 15px;
}

.services .icon i {
  font-size: 48px;
  line-height: 1;
  color: #0C7018;
  transition: all 0.3s ease-in-out;
}

.services .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

.services .title a {
  color: #111;
  text-decoration: none;
}

.services .description {
  font-size: 15px;
  line-height: 28px;
  margin-bottom: 0;
}

.services .icon-box:hover .title a, .services .icon-box:hover .description {
  color: #fff;
}

.services .icon-box:hover .icon i {
  color: #fff;
}

</style>
</html>
