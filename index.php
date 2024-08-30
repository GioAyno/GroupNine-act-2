<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Group Nine</title> 
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 

$hostname = "localhost"; // or your database hostname
$username = "root"; // or your database username
$password = ""; // or your database password
$database = "dbgrp"; // your database name

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $uname = $psw ="";
    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
        $uname = test_input($_POST["uname"]);
        $psw = test_input($_POST["psw"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $sql = "INSERT INTO tblgroup (uname , psw)
        VALUES ('$uname', '$psw')";


?>

    <div class="float-container">

    <div class="float-header">
        <h4><a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a></h4>
        <h5><?php
        echo "<p>Currently Logged On:</p>";
        echo $uname;
        ?>
        </h5>
        <h2>About Us</h2>
        <p>Integrative Programming & Technologies | Group 9 | IT3M</p>
    </div>
    <br>

    <section id="Members">

        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="Champagne.jpg" style="width:100%">
                    <div class="container">
                        <h3>Ramos, Champagne</h3>
                        <p class="title">Team Leader</p>
                        <p class="email">ramoschampagne_bsit@plmun.edu.ph</p>
                        <p><button class="button" onclick="window.location.href='#M1'">Member Page</button></p>
                    </div>
                </div>
            </div>
            
            <div class="column">
                <div class="card">
                    <img src="Soriaga.jpg" style="width:100%">
                    <div class="container">
                        <h3>Soriaga, Fiona Jade</h3>
                        <p class="title">Assistant Leader</p>
                        <p class="email">soriagafionajade_bsit@plmun.edu.ph</p>
                        <p><button class="button" onclick="window.location.href='#M2'">Member Page</button></p>
                    </div>
                </div>
            </div>
    
            <div class="column">
                <div class="card">
                    <img src="Pante.jpg" style="width:100%">
                    <div class="container">
                        <h3>Pante, John Carlo</h3>
                        <p class="title">Member</p>
                        <p class="email">pantejohncarlo_bsit@plmun.edu.ph</p>
                        <p><button class="button" onclick="window.location.href='#M3'">Member Page</button></p>
                    </div>
                </div>
            </div>
    
            <div class="column">
                <div class="card">
                    <img src="Yagaya.jpg" style="width:100%">
                    <div class="container">
                        <h3>Yagaya, Zaira Yvone</h3>
                        <p class="title">Member</p>
                        <p class="email">yagayazairayvonne_bsit@plmun.edu.ph</p>
                        <p><button class="button" onclick="window.location.href='#M4'">Member Page</button></p>
                    </div>
                </div>
            </div>
    
            <div class="column">
                <div class="card">
                    <img src="Perales.jpg" style="width:100%">
                    <div class="container">
                        <h3>Perales, Jhonhuvert</h3>
                        <p class="title">Member</p>
                        <p class="email">peralesjhonhuvert_bsit@plmun.edu.ph</p>
                        <p><button class="button" onclick="window.location.href='#M5'">Member Page</button></p>
                    </div>
                </div>
            </div>
    
        </div>
    
    </section>
   
    <div class="member-card">
        <div class="member-one" id="M1">
            <div class="members">
                <div class="tcard">
                    <img src="Champagne.jpg" class="pfp2">
                    <p>Ramos, Champagne</p>
                    <p class="title">Team Leader</p>
                    <a href="https://github.com/Chainnn07"> <img src="github.png" class="social-media-icon"> </a>
                    <a href="http://www.linkedin.com/in/champagne-ramos-097941322"> <img src="linkedin.png" class="social-media-icon"> </a>
                    <a href="https://www.coursera.org/learner/champagne-ramos-3287"> <img src="learning.png" class="social-media-icon"> </a>
                    <button class="button2" onclick="window.location.href='#Members'">Back to Top</button>
                </div>

                <div class="desc">
                    <p>Hello! I am Champagne C. Ramos 20 years old, living in the Phillipines Currently Studying Bachelor of Science in Information Technology at Pamantasan ng Lungsod ng Muntinlupa. I am passionate about technology and always strive to learn more about it. I am eager to collaborate with other team members to achieve our common goal.</p>
                </div>
                <div class="stats">
                    <p>HTML <div class="Bar"> <div class = "Ramos-HTML"></div>  </div>  </p>
                    <p>CSS  <div class="Bar"> <div class = "Ramos-CSS"></div>   </div>  </p>
                    <p>PHP  <div class="Bar"> <div class = "Ramos-PHP"></div>   </div>  </p>
                    <p>Java <div class="Bar"> <div class = "Ramos-JAVA"></div>  </div>   </p>
                    <p>C#   <div class="Bar"> <div class = "Ramos-CS"> </div>   </div>   </p>
                    <p>C++  <div class="Bar"> <div class = "Ramos-CPP"></div>   </div>   </p>
                </div>

            </div>
        </div>
        <div class="member-two" id="M2">
            <div class="members">
                <div class="tcard">
                    <img src="Soriaga.jpg" class="pfp2">
                    <p>Soriaga, Fiona Jade</p>
                    <p class="title">Assistant Leader</p>
                    <a href="https://github.com/CraigIsGay-alt"> <img src="github.png" class="social-media-icon"> </a>
                    <a href="https://www.linkedin.com/in/fiona-jade-soriaga-798138282/"> <img src="linkedin.png" class="social-media-icon"> </a>
                    <a href="https://www.coursera.org/user/c1942eb1ec4912bf826d59d7ef038c9a"> <img src="learning.png" class="social-media-icon"> </a>
                    <button class="button2" onclick="window.location.href='#Members'">Back to Top</button>
                </div>

                <div class="desc">
                    <p>Hello, my name is Fiona Jade D. Soriaga, 19 years old. I am an I.T student studying in Pamantasan ng Lungsod ng Muntinlupa. My coursework has equipped me with a strong foundation in front-end development and graphic design. I hope to learn more and gain experience from future projects with my team.</p>
                </div>
                <div class="stats">
                    <p>HTML <div class="Bar"> <div class = "Soriaga-HTML"></div>  </div>  </p>
                    <p>CSS  <div class="Bar"> <div class = "Soriaga-CSS"></div>   </div>  </p>
                    <p>PHP  <div class="Bar"> <div class = "Soriaga-PHP"></div>   </div>  </p>
                    <p>Java <div class="Bar"> <div class = "Soriaga-JAVA"></div>  </div>   </p>
                    <p>C#   <div class="Bar"> <div class = "Soriaga-CS"> </div>   </div>   </p>
                    <p>C++  <div class="Bar"> <div class = "Soriaga-CPP"></div>   </div>   </p>
                </div>

            </div>
        </div>
        <div class="member-three" id="M3">
            <div class="members">
                <div class="tcard">
                    <img src="Pante.jpg" class="pfp2">
                    <p>Pante, John Carlo</p>
                    <p class="title">Member</p>
                    <a href="https://github.com/JohnCarloPante"> <img src="github.png" class="social-media-icon"> </a>
                    <a href="https://www.linkedin.com/in/john-carlo-pante-189469276/"> <img src="linkedin.png" class="social-media-icon"> </a>
                    <a href="https://www.coursera.org/user/f80199f8ed4376490930e97fdae7c4b6"> <img src="learning.png" class="social-media-icon"> </a>
                    <button class="button2" onclick="window.location.href='#Members'">Back to Top</button>
                </div>

                <div class="desc">
                    <p>Hi! im John Carlo Pante</p>
                </div>
                <div class="stats">
                    <p>HTML <div class="Bar"> <div class = "Pante-HTML"></div>  </div>  </p>
                    <p>CSS  <div class="Bar"> <div class = "Pante-CSS"></div>   </div>  </p>
                    <p>PHP  <div class="Bar"> <div class = "Pante-PHP"></div>   </div>  </p>
                    <p>Java <div class="Bar"> <div class = "Pante-JAVA"></div>  </div>   </p>
                    <p>C#   <div class="Bar"> <div class = "Pante-CS"> </div>   </div>   </p>
                    <p>C++  <div class="Bar"> <div class = "Pante-CPP"></div>   </div>   </p>
                </div>

            </div>
        </div>
        <div class="member-four" id="M4">
            <div class="members">
                <div class="tcard">
                    <img src="Yagaya.jpg" class="pfp2">
                    <p>Yagaya, Zaira Yvone</p>
                    <p class="title">Member</p>
                    <a href="https://github.com/Yagaya-ZairaYvonne"> <img src="github.png" class="social-media-icon"> </a>
                    <a href="https://www.linkedin.com/in/random-yagaya-691929322/"> <img src="linkedin.png" class="social-media-icon"> </a>
                    <a href="https://www.coursera.org/user/3bb04c36051da0c75b38a1edfc500fb7"> <img src="learning.png" class="social-media-icon"> </a>
                    <button class="button2" onclick="window.location.href='#Members'">Back to Top</button>
                </div>

                <div class="desc">
                    <p>Hi, I am Zaira Yvonne V. Yagaya and I'm currently a 3rd Year College Student at Pamantasan ng lungsod ng Muntinlupa taking
                         the degree of Bachelor in Science and Information Technology. I'm not that knowledgeable when it comes to the course 
                         I've taken so I'm exploring my options since being an IT student is flexible in jobs it might offer in the future.</p>
                </div>
                <div class="stats">
                    <p>HTML <div class="Bar"> <div class = "Yagaya-HTML"></div>  </div>  </p>
                    <p>CSS  <div class="Bar"> <div class = "Yagaya-CSS"></div>   </div>  </p>
                    <p>PHP  <div class="Bar"> <div class = "Yagaya-PHP"></div>   </div>  </p>
                    <p>Java <div class="Bar"> <div class = "Yagaya-JAVA"></div>  </div>   </p>
                    <p>C#   <div class="Bar"> <div class = "Yagaya-CS"> </div>   </div>   </p>
                    <p>C++  <div class="Bar"> <div class = "Yagaya-CPP"></div>   </div>   </p>
                </div>

            </div>
        </div>
        <div class="member-five" id="M5">
            <div class="members">
                <div class="tcard">
                    <img src="Perales.jpg" class="pfp2">
                    <p>Perales, Jhonhuvert</p>
                    <p class="title">Member</p>
                    <a href="https://github.com/GioAyno"> <img src="github.png" class="social-media-icon"> </a>
                    <a href="https://www.linkedin.com/in/jhonhuvert-perales-622932322/"> <img src="linkedin.png" class="social-media-icon"> </a>
                    <a href="https://www.coursera.org/user/1599a8d14a5db444ed567a24fc4703f3"> <img src="learning.png" class="social-media-icon"> </a>
                    <button class="button2" onclick="window.location.href='#Members'">Back to Top</button>
                </div>

                <div class="desc">
                    <p>Hello! I am Jhonhuvert Perales, a 20-year-old IT student with a passion for technology and innovation.
                     I am currently pursuing a degree in Information Technology focused on gaining practical experience and 
                     knowledge to prepare for a successful career in the tech industry. My interests  includes coding, cybersecurity, 
                     or exploring the latest trends in technology.</p>
                </div>
                <div class="stats">
                    <p>HTML <div class="Bar"> <div class = "Perales-HTML"></div></div> </p>
                    <p>CSS  <div class="Bar"> <div class = "Perales-CSS"></div></div>  </p>
                    <p>PHP  <div class="Bar"> <div class = "Perales-PHP"></div></div>  </p>
                    <p>Java <div class="Bar"> <div class = "Perales-JAVA"></div></div> </p>
                    <p>C#   <div class="Bar"> <div class = "Perales-CS"></div></div>   </p>
                    <p>C++  <div class="Bar"> <div class = "Perales-CPP"></div></div>  </p>
                </div>

            </div>
        </div>

    </div>

    </div>

    <div id="id01" class="modal">
  
        <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
          <div class="imgbox">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          </div>
      
          <div class="box">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
      
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
              
            <button type="submit" class="lgnbtn">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>
      
          <div class="box" style="background-color:white">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          </div>
        </form>
      </div>

      <script>
      // Get the modal
      var modal = document.getElementById('id01');
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>
</body>

</html>