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
    <title>Event</title>
    <style>
        .container-fluid{
background-color: #4B0A4F;
        }

        .image {
            width: 200px;
            height: 200px;
            background: grey;
            background-size: cover;
            background-position: center;
            transition: 0.3s;
        }

        .image1 {
            background-image: url('images/7.jpg');
        }

        .image2 {
            background-image: url('images/Pic-6.jpg');
        }

        .image3 {
            background-image: url('images/g5.jpeg');
        }

        .image:hover {
            transition: 0.3s;
            width: 500px;
        }

        .cont-reverse {
            flex-direction: row-reverse;
        }

        @media only screen and (max-width: 800px) {
            .container {
                flex-direction: column;
            }

            .image {
                width: 90%;
            }

                .image:hover {
                    width: 100%; /*overwrite hover*/
                }

                .image:active {
                    background-size: 100%;
                }
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
<div class="container-fluid p-3 text-white text-center">
  <div class="row">
    <div class="col-12 text-right">
    <img src="images/logo1.jpeg" class="img-rounded" alt="" width="650" height="auto"> 

    </div>
    
  </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light text-left">
        <div class="container">
            <!-- <a class="navbar-brand" href="home.php"><h5>Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php"><h5>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="gallery.php"><h5>Gallery</a>
                    </li>
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

    <div class="container">
  <div class="row">
    <div class="col-9">
      <p>
      <h3 style="margin-top:50px"><u>Upcoming Events</u></h3>
    <div class="alert alert-info" role="alert">
    <marquee width="40%" direction="left" height="30px">
<h4>...........</h4>
</marquee>
</div>
      </p><p></p><p></p>
    <p>  <h3 style="margin-top:50px"><u>Past Events</u></h3>
    <div class="alert alert-info" role="alert">
    Alumni Association Patna Women’s College (PWCAA) in association with Eco Task Force, Srishti (Student Environment Club) celebrated Organic Makar Sankranti on 13.01.2024</div>
    <div class="alert alert-info" role="alert">
  College Alumni Meet '23 held on 21st December 2023
</div>
<div class="alert alert-info" role="alert">
The Department of Sociology organized Alumni meet on 16.09.23 from 3:00 p.m. at B.J. Sullivan Hall. The theme was Reminisence.
</div>
<div class="alert alert-info" role="alert">
Department of Political Science Room no 1 The Alumni meet was titled ‘Revenite 2.0’ and several alumni were invited.
</div>
<div class="alert alert-info" role="alert">
  Department of Computer Application help their Alumni Meet pn 16 Sept 2023 with the title "homecoming".
</div>
<div class="alert alert-info" role="alert">
Department of Commerce organised a Financial Awareness Programme for the first-year students of B.Com. Alumnis were invited to share their thoughts.
</div>
<p>

    </div>
    <div class="col-3" style="margin-top:30px">
    <div class="image image1"></div>
            <div class="image image2"></div>
            <div class="image image3"></div>

    </div>
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