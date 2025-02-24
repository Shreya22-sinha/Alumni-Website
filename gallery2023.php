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
    <title>2020</title>
    <style>
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
*{margin: 0; padding: 0;}
body{background-color: #ecdefa;}
.container
{
  width: 100%;
  height: 100%;
}
.trans
{
  transition: all 1s ease;
  -moz-transition: all 1s ease;
  -ms-transition: all 1s ease;
  -o-transition: all 1s ease;
  -webkit-transition: all 1s ease;
}
.top
{
  display: flex;
  width: 80vw;
  height: 80vh;
  margin-top: 10vh;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 10vh;
}
.top ul
{
  list-style: none;
  width: 100%;
  height: 100%;
  z-index: 1;
  box-sizing: border-box;
}
.top ul li
{
  position: relative;
  float: left;
  width: 33.3%;
  height: 38%;
  overflow: hidden;
}

.top ul li::before
{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #000;
  content: '';
  color: white;
  opacity: 0.4;
  text-align: center;
  box-sizing: border-box;
  pointer-events: none;
  transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
}
.top ul li:hover::before
{
  opacity: 0;
  background-color: rgba(0,0,0,0.90);
}
.top ul li img
{
  width: 100%;
  height: auto;
  overflow: hidden;
}
.lightbox
{
  position: fixed;
  width: 100%;
  height: 100%;
  text-align: center;
  top: 0;
  left: 0;
  background-color: rgba(0,0,0,0.75);
  z-index: 999;
  opacity: 0;
  pointer-events: none;
}
.lightbox img
{
  max-width: 90%;
  max-height: 80%;
  position: relative;
  top: -100%;
  /* Transition */
  transition: all 1s ease;
  -moz-transition: all 1s ease;
  -ms-transition: all 1s ease;
  -o-transition: all 1s ease;
  -webkit-transition: all 1s ease;
}
.lightbox:target
{
  outline: none;
  top: 0;
  opacity: 1;
  pointer-events: auto;
  transition: all 1.2s ease;
  -moz-transition: all 1.2s ease;
  -ms-transition: all 1.2s ease;
  -o-transition: all 1.2s ease;
  -webkit-transition: all 1.2s ease;
}
.lightbox:target img
{
  top: 0;
  top: 50%;
  transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  -webkit-transform: translateY(-50%);
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



    <!-- <div class="photos"> 
    <img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum5.jpg" /> 
    <img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum20.jpg" /> 
    <img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum7.jpg" /> 
    <img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum8.jpg" /> 
    <img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum9.jpg" /> 
    <img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum17.jpg" /> 
    <img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum23.png" /> 
    <img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum25.jpg" />
    <img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum6.jpg" />  
</div> -->

<div class="container">
  <div class="top">
      <ul>
          <li><a href="#img_1"><img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum5.jpg"></a></li>
            <li><a href="#img_2"><img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum20.jpg"></a></li>
            <li><a href="#img_3"><img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum7.jpg"></a></li><br>
            <li><a href="#img_4"><img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum17.jpg"></a></li>
            <li><a href="#img_5"><img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum25.jpg"></a></li>
            <li><a href="#img_6"><img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum6.jpg"></a></li>
            <!-- <li><a href="#img_7"><img src="https://image.freepik.com/free-photo/shiny-lights_385-19321244.jpg"></a></li>
            <li><a href="#img_8"><img src="https://image.freepik.com/free-photo/skyscraper-with-clouds-reflection_23-10.jpg"></a></li>
            <li><a href="#img_9"><img src="https://image.freepik.com/free-photo/foggy-pine-forest_426-19323742.jpg"></a></li>
            <li><a href="#img_10"><img src="https://image.freepik.com/free-photo/working-from-bed_385-19324222.jpg"></a></li>
            <li><a href="#img_11"><img src="https://image.freepik.com/free-photo/a-sky-full-of-stars_426-19320899.jpg"></a></li>
            <li><a href="#img_12"><img src="https://image.freepik.com/free-photo/city-in-bokeh_426-19322711.jpg"></a></li>
            <li><a href="#img_13"><img src="https://image.freepik.com/free-photo/desert-and-the-road_426-19314945.jpg"></a></li>
            <li><a href="#img_14"><img src="https://image.freepik.com/free-photo/sunlight-through-the-grass_385-19321333.jpg"></a></li>
            <li><a href="#img_15"><img src="https://image.freepik.com/free-photo/colorful-springtime_385-19321241.jpg"></a></li>
            <li><a href="#img_16"><img src="https://image.freepik.com/free-photo/from-blue-to-brown_426-19320820.jpg"></a></li> -->
        </ul>
       
        <a href="#_1" class="lightbox trans" id="img_1"><img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum5.jpg"></a>
        <a href="#_2" class="lightbox trans" id="img_2"><img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum20.jpg"></a>
        <a href="#_3" class="lightbox trans" id="img_3"><img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum7.jpg"></a>
        <a href="#_4" class="lightbox trans" id="img_4"><img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum17.jpg"></a>
        <a href="#_5" class="lightbox trans" id="img_5"><img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum25.jpg"></a>
        <a href="#_6" class="lightbox trans" id="img_6"><img src="https://patnawomenscollege.in/wp-content/uploads/2024/01/alum6.jpg"></a>
        <!-- <a href="#_7" class="lightbox trans" id="img_7"><img src="https://image.freepik.com/free-photo/shiny-lights_385-19321244.jpg"></a>
        <a href="#_8" class="lightbox trans" id="img_8"><img src="https://image.freepik.com/free-photo/skyscraper-with-clouds-reflection_23-10.jpg"></a>
        <a href="#_9" class="lightbox trans" id="img_9"><img src="https://image.freepik.com/free-photo/foggy-pine-forest_426-19323742.jpg"></a>
        <a href="#_10" class="lightbox trans" id="img_10"><img src="https://image.freepik.com/free-photo/working-from-bed_385-19324222.jpg"></a>
        <a href="#_11" class="lightbox trans" id="img_11"><img src="https://image.freepik.com/free-photo/a-sky-full-of-stars_426-19320899.jpg"></a>
        <a href="#_12" class="lightbox trans" id="img_12"><img src="https://image.freepik.com/free-photo/city-in-bokeh_426-19322711.jpg"></a>
        <a href="#_13" class="lightbox trans" id="img_13"><img src="https://image.freepik.com/free-photo/desert-and-the-road_426-19314945.jpg"></a>
        <a href="#_14" class="lightbox trans" id="img_14"><img src="https://image.freepik.com/free-photo/sunlight-through-the-grass_385-19321333.jpg"></a>
        <a href="#_15" class="lightbox trans" id="img_15"><img src="https://image.freepik.com/free-photo/colorful-springtime_385-19321241.jpg"></a>
        <a href="#_16" class="lightbox trans" id="img_16"><img src="https://image.freepik.com/free-photo/from-blue-to-brown_426-19320820.jpg"></a> -->
    </div>
</div>



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
    
</body>
</html>