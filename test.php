<?php include("connection.php");?>

<?php
    if(!isset($_COOKIE['email'])){
        // echo 'You are not logged in';
        echo '
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style> 
      body{
        background-color: #e6e8e6;
                }
      .card:hover {
            box-shadow: 0 8px 16px 0 rgba(116, 83, 130, 0.8);
            transition: all 0.5s ease-out;
              top: -10px;
              border: 1px solid #352940;
              background-color: #fff;
            
          }</style><body>
        <div class="container-fluid" style="margin-top:100px">
  <div class="row">
    <div class="col-3">
      
    </div>

    <div class="col-6">
    <div class="card text-center">
    <div class="card-header">
      
    </div>
    <div class="card-body">
      <h3 class="card-title">
      <i class="fa fa-lock" style="font-size:100px;color:black"></i>
      </h3>
      <p class="card-text"><h4>
       Sorry, you are not logged in.   </h4>   </p><br>
      <a href="userlogin.php" class="btn btn-outline-dark btn-lg">Login</a>
      <a href="registration.php" class="btn btn-outline-dark btn-lg">Sign Up</a>
    </div>
    <div class="card-header">
      
    </div>
  </div>   
   </div>

    <div class="col-3">
      
    </div>
  </div>
</div></body>
        
        ';
        exit(0);
    }else{
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
    <title>Testimonials</title>
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

        .button {
  border-radius: 4px;
  background-color:  #e6e6ff;
  border: none;
  color: black;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 1300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
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
    <img src="images/logo1.jpeg" class="img-rounded" alt="" width="590" height="170"> 

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
      
      
    <div class="container-fluid" style="margin-top:30px" style="margin-bottom:50px">
  <div class="row">
    <div class="col-1">
    </div>
    <div class="col-7">

    <?php
                if( isset($_POST['post_submit'])){
                    $content = $_POST['content'];

                    $sql = "SELECT name FROM registration WHERE email = '$logged_email'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row=$result->fetch_assoc()) {
                            $name = $row['name'];

                    $sql = "INSERT INTO post (content, name)value( '$content','$name')";
                    if($conn->query($sql)){
                        // echo 'Successfully submitted';
                    }
                }
                }}
                
                if(isset($_GET['del_id'] )){
                  
                  
                    $del_id = $_GET['del_id'];

                    $sql = "DELETE FROM post WHERE id=$del_id LIMIT 1";
                    if($conn->query($sql)){
                        // echo 'Successfully deleted';
                    }
                }
    ?>

    <form action="test.php" method="POST">
                <textarea name="content" placeholder="Write a post" rows="4" class="form-control"></textarea>
                <input type="submit" name="post_submit" class="btn btn btn-outline-warning btn-lg pull-right"/> 
            </form>
        
            
  

    </div>
    <div class="col-4">

</div>
  </div>
</div>


 <div class="container-fluid">
    <div class="row">
 <div class="col-1">
    </div>
    <div class="col-7">
    
 <?php
                // $sql = "SELECT * FROM registration WHERE email = '$logged_email'";
                // $result = $conn->query($sql);
                // if ($result->num_rows > 0) {
                //     while($row=$result->fetch_assoc()) {
                //         $name = $row['name'];
                //         $department = $row['department'];
                      

                //     }
                // }
            ?>

<?php
                $sql = "SELECT * FROM post ORDER BY id DESC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row=$result->fetch_assoc()) {
                        $id = $row['id'];
                        $content = $row['content'];
                        $name = $row['name'];
                        $date = $row['date'];
                        


                        echo ' 
                         <div class="col" style="margin-top:40px">
                         <div class="card">
                        <div class="card-body">
                        <p class="card-text">
                        <figure>
                        <blockquote class="blockquote">
                          <p>
                          '.$content.' </br>
                          </p>
                        </blockquote><p>
                        <figcaption class="blockquote-footer">
                        
                        '.$name.'
                        <cite title="Source Title"> </cite></p>
                        </figcaption>
                      </figure>

                 <small>   '.$date.'  </small>

             <a href="?del_id='.$id.'" onclick="return confirm(\'Are you sure?\')">
             <i class="fa fa-trash-o" style="font-size:20px;color:red"></i>
</a>
        </p>
      </div>
    </div>
  </div>
                ';       
                        
                    }
                }
            ?>
    </div>    
    <div class="col-4">
    </div>
            </div>    </div>


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
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html> -->
    
</body>
</html>