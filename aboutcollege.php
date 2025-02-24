<?php include("connection.php");?>

<?php
    if(isset($_COOKIE['email'])){
        
    
        $logged_email = $_COOKIE['email'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5..2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ABOUT COLLEGE</title>
    <style>
                 @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');

        .header{
background-color: #4B0A4F;
        }
        .fa {
            padding: 20px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
        }

            /* Add a hover effect if you want */
            .fa:hover {
                opacity: 0.7;
            }

        /* Set a specific color for each brand */

        /* Facebook */
        .fa-facebook {
            color: white;
        }

        /* Twitter */
        .fa-linkedin {
            color: white;
        }

        .fa-instagram {
            color: white;
        }

        li a:hover {
            text-transform: uppercase;
            text-shadow: 0px 0px 6px rgba(255, 255, 255, 1);
-webkit-box-shadow: 0px 5px 40px -10px rgba(100,6,208,2.5);
-moz-box-shadow: 0px 5px 40px -10px rgba(100,6,208,2.5);
transition: all 0.4s ease 0s;
        }
      
        @media only screen and (max-width:768px) {
            .logo {
                display: none;
            }
        }

        .mybtn{
            position: relative;
    color: #fff;
    background-color: #0d6efd;
    border-color: #0d6efd;
    top: -197px;
    left: 155px;
        }
        .myheading {
    position: relative;
    top: -205px;
    color: #ffffff;
}

.section {
  position: relative;
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.section h1 {
  text-align: center;
  font-size: 6rem;
  font-family: "Cookie";
  padding: 20px;
  margin: 15px;
  z-index: 1;
  opacity: 0.7;
}

.video-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 103%;
}

.color-overlay {
  position: absolute;
  top: 0;
  left: 0;
  background-color: lightblue;
  width: 100%;
  height: 100vh;
  opacity: 0.5;
}
.slideshow-container {
  max-width: 300px;
  position: relative;
  margin: auto;
  align: center;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 80%;
  display: inline-block;
  transition: background-color 0.6s ease;
}



/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.paragraph-section {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
            font-size: 18px;
            font-family: 'Roboto Mono', monospace;       
        }

        .paragraph-box {
            background-color: rgba(255, 255, 255, 0.8);
            max-width: 2000px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container-custom {
          
    max-width: 100vw;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    grid-gap: 10px;
    margin: 0 auto;
    padding: 40px 0;
        

    .card {
      position: relative;
      width: 400px;
      height: 400px;
      margin: 0 auto;
      background: #e8e3e7;
      border-radius: 15px;
      box-shadow: 0 15px 60px rgba(156, 78, 131);

      .face {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;

        &.face1 {
          box-sizing: border-box;
          padding: 10px;

          h2 {
            margin: 0;
            padding: 0;
          }

          .java {
            background-color: #000;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
          }

          .python {
            background-color: #000;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
          }

          .cSharp {
            background-color: #000;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
          }
        }

        &.face2 {
          transition: 0.5s;

          h2 {
            margin: 0;
            padding: 0;
            font-size: 3em;
            color: #fff;
            transition: 0.5s;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 10;
          }
        }
      }
    }

    .card:hover .face.face2 {
      height: 60px;

      h2 {
        font-size: 2em;
      }
    }

    .card:nth-child(1) .face.face2 {
        background: linear-gradient(to bottom right, #9966ff 0%, #ff6699 100%);
              border-radius: 15px;
    }

    .card:nth-child(2) .face.face2 {
        background: linear-gradient(to bottom right, #9966ff 0%, #ff6699 100%);
      border-radius: 15px;
    }

    .card:nth-child(3) .face.face2 {
      background: linear-gradient(to bottom right, #9966ff 0%, #ff6699 100%);
      border-radius: 15px;
    }
  }
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}


.footer {
  position: relative;
  width: 100%;
  background: #6b5da4;
  min-height: 100px;
  padding: 20px 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-icon__link:hover {
  transform: translateY(-10px);
}

.menu__link {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menu__link:hover {
  opacity: 1;
}

.footer p {
  color: #fff;
  margin: 15px 0 10px 0;
  font-size: 1rem;
  font-weight: 300;
}

.wave {
  position: absolute;
  top: -100px;
  left: 0;
  width: 100%;
  height: 100px;
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/756881/wavePurple.svg")repeat-x;
  background-size: 1000px 100px;
    animation: wave 10s -3s linear infinite;

}

.wave#wave1 {
  z-index: 1000;
  opacity: 1;
  bottom: 0;
  animation: animateWaves 4s linear infinite;
}

.wave#wave2 {
  z-index: 999;
  opacity: 0.5;
  bottom: 10px;
  animation: animate 4s linear infinite !important;
}

.wave#wave3 {
  z-index: 1000;
  opacity: 0.2;
  bottom: 15px;
  animation: animateWaves 3s linear infinite;
}

.wave#wave4 {
  z-index: 999;
  opacity: 0.7;
  bottom: 20px;
  animation: animate 3s linear infinite;
}

@keyframes animateWaves {
  0% {
    background-position-x: 1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

@keyframes animate {
  0% {
    background-position-x: -1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}
        </style>

        
</head>
<body>
<div class="container-fluid header p-3 text-white text-center">
  <div class="row">
    <div class="col-12 text-right">
    <img src="images/logo1.jpeg" class="img-rounded" alt="" width="650" height="auto"> 

    </div>
    
  </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-light text-left">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php"><h5>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="gallery.php"><h5>Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="search.php"><h5>Connect</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="test.php"><h5>Alumni Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="aboutalumni.php"><h5>About The Alumni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="aboutcollege.php"><h5>About The College</a>
                    </li>
                </ul>
            </div>
            <div class="col-3 text-right">
                <?php
                if (!isset($_COOKIE['email'])){
                ?>
            <button type="button" class="btn btn-light"><a class="nav-link active" aria-current="page" href="userlogin.php"><h4>Login</a></button>
    <button type="button" class="btn btn-light"><a class="nav-link active" aria-current="page" href="registration.php"><h4>Sign Up</a></button>
<?php }
?>
 <?php      
        if (isset($_COOKIE['email'])){
                ?>
                <?php
                $sql = "SELECT * FROM registration WHERE email = '$logged_email'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row=$result->fetch_assoc()) {
                      
                        $image = $row['image'];

                    }
                }
            ?>
        <a href="userprofile.php"><img src="<?=$image;?>" alt="A" width="60" style="  border-radius: 100%;" ></a>
<?php }
?>
    </div>
        </div>
    </nav>

    
    <div class="section">

<h1>Patna Women's College</h1>

<div class="video-container">

    <div class="color-overlay"></div>
    <img src="images/herobg3-removebg-preview.png" height="100%" width="100%"></div>

</div>
<div class="paragraph-section">
        <!-- Paragraph Section -->
        <div class="paragraph-box">
<section>
    <div class="container">
    <div class="row">
    <div class="col-20">
    <div style="text-align:center">

 <section> <p>  <h1><strong><u>About The College</u></strong></h1></p></section>

  <div class="slideshow-container" >

<div class="mySlides fade">
  <img src="images/ll.jpg" style="width:80%">
</div>

<div class="mySlides fade">

  <img src="images/IQAC.jpg" style="width:80%">
  
</div>

<div class="mySlides fade">
 
  <img src="images/NAAC.jpg" style="width:80%">

</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div></section>


  <p><em>  PATNA WOMEN’S COLLEGE is the first institution of higher learning opened to cater to the educational needs of women in Bihar. Bishop B.J. Sullivan S.J., Bishop of Patna (Founder) and Mother M. Josephine A.C. Superior General of the Apostolic Carmel named it Patna Women’s College and presented it as a gift to the Women of Bihar, thereby placing at their disposal an opportunity for higher education. The College is run by the Catholic Religious Sisters of the Apostolic Carmel, an indigenous educational body founded in 1880.

Thousands of motivated and empowered women have passed through the portals of this college and have entered various fields of life, many making a mark in our country and abroad.
</em></p>
<p><em>
The college has come a long way from the time the pioneers envisioned and undertook the difficult task of establishing a women’s college at a time when only a few truly enlightened and far-sighted persons were prepared to support this infant project in a place where higher education for women was frowned upon, if not rejected outright.

In the year 1952, a Special Status was given by the Government of Bihar and it became a ‘Constituent College’ of Patna University. On 25.07.2007, the Government of Bihar, officially declared Patna Women’s College as a ‘Religious Minority College’.


</em></p></div>
    </div>
    <div class="container-custom">

  <div class="card">
    <div class="face face1">
      <div class="content">
        <span class="stars"></span>
        <h2 class="java">Vision</h2>
        <p class="java">Rooted in the life, vision, and teachings of Jesus Christ and inspired by Mother Veronica, the foundress of the Apostolic Carmel, Patna Women’s College strives to become a center of academic excellence in higher education, social responsibility, and empowerment of women.</p>
      </div>
    </div>
    <div class="face face2">
      <h2>Our Vision</h2>
    </div>
  </div>

  <div class="card">
    <div class="face face1">
      <div class="content">
        <span class="stars"></span>
        <h2 class="python">Mission</h2>
        <p class="python">* To excel in teaching-learning, research, and consultancy.</br>
* To provide education that promotes capacity building and holistic development of a person.</br>
* To create women leaders and to make them agents of social change.</br>
* And many more
        


        </p>
      </div>
    </div>
    <div class="face face2">
      <h2>Our Mission</h2>
    </div>
  </div>

  <div class="card">
    <div class="face face1">
      <div class="content">
        <span class="stars"></span>
        <h2 class="cSharp">Core Values</h2>
        <p class="cSharp">* Faith in God</br>* Honesty /Moral Uprightness</br>
* Love and Forgiveness towards all</br>
* Social Responsibility/empowerment of the Marginalized</br>
* Respect for Life and Creation</br>
* Pursuit of Excellence</br>
* Promotion of peace, harmony and brotherhood
           </p></br>
      </div>
    </div>
    <div class="face face2">
      <h2>Our Core Values</h2>
    </div>
  </div>
</div>
    <!-- </div>
    <div class="col-4">
    
<iframe width="420" height="345" src="https://www.youtube.com/embed/KK2jlhF-EzY">
</iframe>

    </div>-->
  </div>
</div> </div></div>

<div class="container-fluid header p-3 bg-gradient text-white text-center" style="margin-top:10px">
        <div class="row">
            <div class="col">
                <p>
                <h2>
                    <a href="https://www.facebook.com/pwcbihar?mibextid=ZbWKwL" class="fa fa-facebook"></a>
                    <a href="https://www.linkedin.com/school/patna-women-college/" class="fa fa-linkedin"></a>
                    <a href="https://www.instagram.com/patnawomenscollege_1940?igsh=ODhhZWM5NmIwOQ==" class="fa fa-instagram"></a>
                   </h2>
                   <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="https://patnawomenscollege.in/">OFFICIAL WEBSITE</a></li>
      

    </ul><h5 style="font-family:serif">&copy;Patna Women's College | All Rights Reserved </h5>
                </p>
            </div>
        </div>
     </div>
     <!-- <footer class="footer" style="margin-top:200px">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.facebook.com/pwcbihar?mibextid=ZbWKwL">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
    
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.linkedin.com/school/patna-women-college/">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.instagram.com/patnawomenscollege_1940?igsh=ODhhZWM5NmIwOQ==">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="https://patnawomenscollege.in/">OFFICIAL WEBSITE</a></li>
    

    </ul>
    <p>&copy;Patna Women's College | All Rights Reserved</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
     <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>