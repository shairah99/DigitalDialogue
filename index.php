<?php
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Digital Dialogue System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="w3-khaki w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/logo.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>DDC</b></h4>
    <p class="w3-text-grey">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Home</a> 
  <a href="#aboutddc" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT DDC</a> 
  <a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
  <a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a>
<a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY</a>  
    <a href="#achievements" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACHIEVEMENTS</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
  <a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Administrator</a> 
  </div>
  <div class="w3-panel w3-large">
    
 <img src="photo/fb.jpg" style="width:10%;" class="w3-round">
 <img src="photo/ig.jpg" style="width:11%;" class="w3-round">
 <img src="photo/twitter.jpg" style="width:10%;" class="w3-round">
 <img src="photo/in.jpg" style="width:10%;" class="w3-round">
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">
  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Welcome to Digital Dialogue Club</b></h1>
   
 <!-- Header -->
  <header id="aboutddc">
  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <p align="center"><img src="photo/logo2.png" alt="Me" style="width:90%"></p>
    </div>
    

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>Digital Dialogue Club</b></h4>
    <p>The "Digital Dialogue" club is all about engaging in meaningful conversations and exploring the world of digital communication. It's a place where we can discuss various topics related to social media, online communities, and the impact of technology on our lives. We'll have the opportunity to connect with fellow digital enthusiasts, exchange ideas, and learn from each other. It's a fantastic club for anyone interested in diving deeper into the realm of digital communication.</p>
    <hr>
    
<!-- Header -->
  <header id="committee">
<!-- Team Container -->

<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR COMMITTEE MEMBERS</h2>
<p>Meet the team - our backbones:</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="Photo/Aulia.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>AULIA</h3>
  <p>PRESIDENT</p>
</div>

<div class="w3-quarter">
  <img src="Photo/Luna.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>LUNA</h3>
  <p>VICE PRESIDENT</p>
</div>

<div class="w3-quarter">
  <img src="Photo/Aria.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Aria</h3>
  <p>SECRETARY</p>
</div>

<div class="w3-quarter">
  <img src="Photo/Zephyr.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Zephyr</h3>
  <p>TREASURER</p>
</div>
<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="Photo/nova.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>NOVA</h3>
  <p>PRESIDENT OF EVENT COORDINATOR</p>
</div>

<div class="w3-quarter">
  <img src="Photo/Lumina.jpg" alt="Boss" style="width:47%" class="w3-circle w3-hover-opacity">
  <h3>LUMINA</h3>
  <p>PRESIDENT OF PUBLIC RELATION</p>
</div>

<div class="w3-quarter">
  <img src="Photo/Zara.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>ZARA</h3>
  <p>PRESIDENT OF SOCIAL MEDIA</p>
</div>

<div class="w3-quarter">
  <img src="Photo/aiden.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>AIDEN</h3>
  <p>PRESIDENT OF CONTENT CREATOR</p>
</div>

</div>
</div>

<hr>


<!-- Header -->
  <header id="membership">
    <h4><b>Digital Dialogue Club Membership</b></h4>
    <!-- Progress bars / Skills -->
     <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
  <p align="center"><h3>Membership form for Digital Dialogue Club 2024</h3></p>
  <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
         
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM members";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
<hr>

<!-- Header -->
  <header id="activity">
    <h4><b><p class="w3-center">Digital Dialogue Club Activities</p></b></h4>
    <!-- Progress bars / Skills -->
     <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">OUR ACTIVITIES</h3>
  <p class="w3-center"><em>Here are some of our activities in 2024</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="photo/color.jpeg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains">
      <p><b>Color Run</b></p>
        <p>Running event that combines fitness, fun, and vibrant colors.</p>
    </div>

    <div class="w3-col m3">
      <img src="photo/race.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
      <p><b>Explore Race</b></p>
        <p>Competitive situation in which participants strive to achieve a goal or finish a task before others.</p>
    </div>

    <div class="w3-col m3">
      <img src="photo/team.jpeg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
      <p><b>Team Building</b></p>
        <p>Engage in trust-building exercises and activities that encourage team members to rely on and trust each other.</p>
    </div>

    <div class="w3-col m3">
      <img src="photo/meet.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
      <p><b>Meeting</b></p>
        <p>Interactive activities or brainstorming sessions to encourage creativity and collaboration.</p>
    </div>
  </div>

  <br>
 <p align="center"><h3>Activities form for Digital Dialogue Club 2024</h3></p>


    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
          
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM activity";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
            <td>
             
            </td>
          </tr>

        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <hr>
  <header id="achievements">
    <h4><b><p class="w3-center">Digital Dialogue Club Achievements</p></b></h4>
    <!-- Progress bars / Skills -->
     <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

<br>

<div class="w3-container">
    
    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="photo/certificate.jpeg" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Certificate the best Leadership <span class="w3-opacity w3-medium">2022</span></h4>
        <p>Awarded to the members of Digital dialogue that have a good learship in society</p><br>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="photo/certificate2.jpeg" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Language Translation and Global Communication <span class="w3-opacity w3-medium">2023</span></h4>
        <p>Awarded to the members of Digital dialogue that can bridge language gaps by providing translation services, enabling global communication.</p><br>
      </div>
    </div>
  </div>
    
 <hr> 
 
 <!-- Contact Section -->
 
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">WHERE I WORK</h3>
  <p class="w3-center"><em>I'd love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="photo/Map.jpeg" class="w3-image w3-round" style="width:100%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Machang, Kelantan<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +60 19 922 5114<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: Luna21@mail.com<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>


  <!-- Container (Contact Section) -->

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Digital Dialogue Club Contacts</title>
</head>

<body>
  

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  <p align="center"><h3>Contact form for Digital Dialogue Club</h3></p>
  
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Student ID</th>
          <th scope="col">Email</th>
          <th scope="col">Description</th>
        
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM contact";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
          
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>
            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>


<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>