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
    <title>ABOUT ALUMNI</title>
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

        div.polaroid {
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  margin-bottom: 25px;

}



.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  background-color: #ECDEF9;

}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  transition: all 0.5s ease-out;
    top: -10px;
    border: 1px solid #352940;
    background-color: #fff;
  
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



.img-wrapper {  
  /* width: 1000px; */
  height: auto;
  overflow: hidden; 
  margin-bottom:15px;
}

.inner-img {
  transition: 0.3s;
}

.inner-img:hover {
  transform: scale(1.1);
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



    <div class="img-wrapper text-center">
    <img class="inner-img" src="images/WhatsApp Image 2024-02-03 at 22.15.01.jpeg" width="1300" height="auto" />
</div>


    
    <div class="container-fluid" style="background-color: #F2ECF7;">
    <div class="row">
        <div class="col-2"> </div>
        <div class="col-2" >
      
         <div class="card" style="margin-top:20px">
         <img src="images/WhatsApp Image 2024-01-08 at 11.33.08 (1).jpeg" alt="Avatar" class="img-thumbnail" style="width:100%">
          <div class="container">
          <h5>Dr. Kalawati Tripathi</h5> 
            </div>
          </div>
           </div>
      <div class="col-4">
      <div class="card" style="margin-top:20px">
          <div class="container">
           <p><em>
           Dr. (Mrs.) Kalawati Tripathi, was born in 1923. She was University Professor and Head, Dept. of Hindi, Patna Women’s College, Patna University. She joined Patna Women’s College as lecturer in 1948. She was elected and nominated member of Patna University Senate for three years. She was also Member of the Governing Body, Patna Women’s College; Member of the Governing Body, Bankipore Girls High School, Patna and member- Bihar Legislative Council (Nominated) 1984-1990. She breathed her last in 2009.
           </em></p> 
            </div>
          </div>
    </div>
    <div class="col-2"></div>
  </div>
</div>
    
    <div class="container-fluid" style="background-color: #F2ECF7;">
    <div class="row">
        <div class="col-2"> </div>
            <div class="col-2"></div>

        <div class="col-2" >
      
         <div class="card" style="margin-top:20px">
         <img src="images/WhatsApp Image 2024-01-08 at 11.33.08.jpeg" alt="Avatar" class="img-thumbnail" style="width:100%">
          <div class="container">
          <h5> Dr. Indira Verma<h5> 
            </div>
          </div>
           </div>
      <div class="col-4">
      <div class="card" style="margin-top:20px">
          <div class="container">
           <p><em>
           Dr. Indira Verma was born on 24th July 1935 at Motihari. She passed her matriculation in 1951 and was married to Shri Bhisma Prasad, an engineer. She came to Patna after her marriage and concentrated on her studies. She did the Intermediate and Graduation from Patna Women’s College. She got first class in B.A. Hons. She passed her M.A. from Patna University in First Position. After completing her studies she was selected by the BPSC for the post of lecturer. She joined Patna Women’s College as a teacher in 1957. Dr. Sister Lucile A.C. was the Principal at the time of her joining. She got a chance to learn a lot from her experiences. During her teaching career she was also involved in extracurricular activities of the College. She played active role in organizing sports, cultural activities, conducting examination, etc. She regarded Dr. Sister Liceria A.C. as her friend, philosopher and guide. She worked under her guidance. Till today she is maintaining her close association with her. At present she is leading a quiet and peaceful retired life. Her daughters are settled in US. She is very fond of Dr. Ameeta Jaiswal, Head, Dept. of Philosophy. She has maintained her close association with her till today.
           </em></p> 
            </div>
          </div>
    </div>
  </div>
</div>

    <div class="container-fluid" style="background-color: #F2ECF7;">
    <div class="row">
        <div class="col-2"> </div>
        <div class="col-2" >
      
         <div class="card" style="margin-top:20px">
         <img src="images/WhatsApp Image 2024-01-08 at 11.33.07.jpeg" alt="Avatar" class="img-thumbnail" style="width:100%">
          <div class="container">
          <h5>Justice Gyan Sudha Mishra</h5> 
            </div>
          </div>
           </div>
      <div class="col-4">
      <div class="card" style="margin-top:20px">
          <div class="container">
           <p><em>
           Justice Gyan Sudha Mishra Years in College and Course Pre-University- 1965, B.A Part –I: 1965-1966, B.A (Hons) Political Science: 1966-1968. (Honors classes were held in Patna College in those days.). Former Judge of Patna & Rajasthan, High Court. She was the first Woman Chief Justice of the Jharkhand High Court at Ranchi. She became the fourth Woman Judge of the Supreme Court of India , New Delhi and the only Lady Judge from Bihar and Jharkhand so far, to have been appointed as a judge of the Supreme Court of India New Delhi. Currently functioning as Arbitrator in National and International Commercial Arbitrations.
           </em></p> 
            </div>
          </div>
    </div>
    <div class="col-2"></div>
  </div>
</div>

<div class="container-fluid" style="background-color: #F2ECF7;">
    <div class="row">
        <div class="col-2"> </div>
            <div class="col-2"></div>

        <div class="col-2" >
      
         <div class="card" style="margin-top:20px">
         <img src="images/WhatsApp Image 2024-01-08 at 11.33.08 (2).jpeg" alt="Avatar" class="img-thumbnail" style="width:100%">
          <div class="container">
          <h5>Mrs. Sudha Bhatt (Virlley)</h5> 
            </div>
          </div>
           </div>
      <div class="col-4">
      <div class="card" style="margin-top:20px">
          <div class="container">
           <p><em>
           Mrs. Sudha Bhatt (Virlley) was born on 11th October 1938 in Patna. She did her schooling from Mount Carmel School, Patna and did graduation from Patna Women’s College in 1961 under Principal Mother Theodosia A.C. She completed her B.Ed. In 1961-1962 from B.Ed. College, Patna with Hindi Literature as her subject. She got married and came to Jamshedpur. She joined St. Joseph Welfare Centre, Golmuri (Bishop House) 1971 under Principal Fr. Joseph Currie and parish priest Fr. CR Prabhu who was in charge of JYOTI club in St. Joseph Welfare Centre under Fr. Currie. She took Stitching and tailoring classes for poor women in Bishop House. She joined Loyola High School, Jamshedpur as a Hindi teacher on 14th January 1972 under Principal Fr. McGauly. She was in charge of Hindi drama and skit that was performed during Parent Teachers’ Meeting. She also trained students for Hindi elocution. She retired in 2000 with one year of extension under Fr. Pius Fernandes.
           </em></p> 
            </div>
          </div>
    </div>
  </div>
</div>

<div class="container-fluid" style="background-color: #F2ECF7;">
    <div class="row">
        <div class="col-2"> </div>
        <div class="col-2" >
      
         <div class="card" style="margin-top:20px">
         <img src="images/WhatsApp Image 2024-01-08 at 11.33.45.jpeg" alt="Avatar" class="img-thumbnail" style="width:100%">
          <div class="container">
          <h5>Dr. Alpana Sen Gupta</h5> 
            </div>
          </div>
           </div>
      <div class="col-4">
      <div class="card" style="margin-top:20px">
          <div class="container">
           <p><em>
           Dr. Alpana Sen Gupta was born in 1953. Professor& Head (Retd), P.G. Centre of Psychology, College of Commerce, Arts & Science (COCAS), PPU. HerGraduation is from Patna Women’s College, Psychology Honors.Session: 1971- 1973, M.A. & PhD (Patna University, Ten years P.G. teaching and Research experience as a Research Associate (1983- 1988, 1992 – 1996) at Dept. of Psychology, Patna University, She feels very proud being alumni of Patna Women’s College. She admits that she has learned discipline, dedication for work, honesty to serve the needy and downtrodden from the college. Cultural heritage of this college is unique. Today, what she is she owes to this college, teachers and parents. Remembrance of the golden days of student life at Patna Women’s College makes her smile.
           </em></p> 
            </div>
          </div>
    </div>
    <div class="col-2"></div>
  </div>
</div>

<div class="container-fluid" style="background-color: #F2ECF7;">
    <div class="row">
        <div class="col-2"> </div>
            <div class="col-2"></div>

        <div class="col-2" >
      
         <div class="card" style="margin-top:30px">
         <img src="images/WhatsApp Image 2024-01-08 at 11.33.08 (3).jpeg" alt="Avatar" class="img-thumbnail" style="width:100%">
          <div class="container">
          <h5> Shama Talat<h5> 
            </div>
          </div>
           </div>
      <div class="col-4">
      <div class="card" style="margin-top:30px">
          <div class="container">
           <p><em>
           Shama Talat, was born in 1st January, 1943.She Passed 10thin 1958 first division; I.A. inArts in 1960 second division; Bachelor of Artsin 1962 second class in Urdu; Master of Arts in 1965 second class in Economics.She had been in Patna Women’s College hostel for four years from 1958 to 1962. Sister Lucile A.C. was the Principal at that time and she was her beloved professor of Economics. She liked this subject that is why she changed her line and did her M.A. in Economics.
           </em></p> 
            </div>
          </div>
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