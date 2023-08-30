<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon-16x16.png">
    <link rel="stylesheet" href="style.css"/>
    <script src="myscript.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">            
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!-- Font Awesome 5.15.1 CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      new WOW().init();
    </script>

    <title>GlobalSoft Technology</title>
</head> 
<body>
  
  

  
<!--   navbar of the page -->
<?php
include 'connect.php';
?>
   <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;width: 100%;z-index: 9999">
  <div class="container-fluid">
          <a href="index.php"><img height=30px width=30px src="gt_logo.jpg"> Globalsoft Technology</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <?php
          $stmt="SELECT * from menu where id NOT IN(SELECT menu_id from submenu) ORDER BY Ranking ASC";
         
$result=mysqli_query($conn,$stmt);
    while ($row = mysqli_fetch_array($result)) {
   echo '<li class="nav-item">
          <a class="nav-link" href=" '.$row['Menu_name'].'.php  " style="color: blue;">'.$row['Menu_name'].'</a>
        </li>';
}
?>

          <?php 
          $stmt1="SELECT  distinct Menu_name,menu_id from menu m INNER JOIN  submenu s  ON m.id=s.menu_id" ;
$result1=mysqli_query($conn,$stmt1);


while($rows=mysqli_fetch_array($result1)){
$stmt2="SELECT  * from menu m INNER JOIN  submenu s  ON m.id=s.menu_id" ;
$result2=mysqli_query($conn,$stmt2);


  echo '<li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:blue;">
            '.$rows['Menu_name'].'
          </a>';
 echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown" >';
          $stmt3="SELECT * from submenu where menu_id='".$rows['menu_id']."'";
$result=mysqli_query($conn,$stmt3);

global $id;
$id=2;

    while ($row = mysqli_fetch_array($result)) {

if ($row['menu_id']==$rows['menu_id']){
  
   echo '  
         <li> <a class="nav-link" href=" '.$rows['Menu_name'].'.php ?id='.$row['id'].'"  style="color: blue;">'.$row['submenu_name'].'</a></li>   ';
}
}echo '</ul></li>';
}
           ?>
        
        
      </ul>
      <li class="nav-item">
          <a class="nav-link"  href="contactus.php" style="color:blue; float: left;"><i class="fa fa-address-book-o"></i></a>
        </li>  
    </div>
  </div>
</nav>

  
<!-- image slider-->
   
    <div class="container1">
       
    <div class="swiper">
    
    <div class="swiper-wrapper">
      <?php
     $stmt3="SELECT * from slider_home ORDER BY ranking ASC";
     $result=mysqli_query($conn,$stmt3);
     while($slide=mysqli_fetch_array($result)){
      echo '<div class="swiper-slide"><img src="'.$slide['image'].'"></div>';
    }
       ?>
    </div>
    
    <div class="swiper-pagination"></div>
  
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    </div>

    </div>    

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            autoplay:{
                delay:3000,
                disableOnInteraction: false,
            },
  
        loop: true,

        // If we need pagination
     pagination: {
     el: '.swiper-pagination',
     clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

 
});
    </script>


<!--  services page -->

   <div class="services"onclick="location.href=' services.php'">
    <h3 style="font-size:30px; padding-top: 20px;"  ><center>OUR SERVICES</center></h3>
    <div class="cen">
    <?php
    $stmt="SELECT * from services_home ORDER BY ranking ASC";
    $result=mysqli_query($conn,$stmt);
    while($row=mysqli_fetch_array($result)){
echo '<a href=" services.php"></a>
        <div class="service" >
          <i class="'.$row['logo'].'"></i>
          <h2>'.$row['title'].'</h2>
          <p>'.$row['description'].'</p>
        </div>
        ';
  }
    ?>
      <!-- <div class="cen">
        <div class="service" onclick="location.href=' services.html'">
          <i class='fa fa-mobile'></i>
          <h2>Application Development</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="service" onclick="location.href=' services.html'">
         <i class="fas fa-mail-bulk"></i>
          <h2>CRM</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="service" onclick="location.href=' services.html'">
          <i class='fas fa-chart-line'></i>
          <h2>Data Engineering/ Analytics</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <br>
        
        <div class="service" onclick="location.href=' services.html'">
          <i class="fa fa-cogs"></i>
          <h2>SQA Service </h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="service">
          <i class="fa fa-users"></i>
          <h2>Staffing Service</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>

        <div class="service">
          <i class="fa fa-cloud"></i>
          <h2>Cloud Service</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div> -->
      </div>
  </div>
    



<!--  solutions content  -->
  <div>
  <section>
    <center>
        <h2 class="section-heading"  >OUR SOLUTIONS &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h2></center>
        <div class="row " >
          <?php
    $stmt="SELECT * from solution_home";
    $result=mysqli_query($conn,$stmt);
    while($row=mysqli_fetch_array($result)){
echo '
        <div class="column wow animate__animated animate__fadeInLeft"  >
          <div class="card wow animate__animated animate__fadeInLeft">
            <div class="icon-wrapper"><i class="'.$row['logo'].'"></i>
            </div>
            <h3 class="wow animate__animated animate__heartBeat ">'.$row['title'].'</h3>
            <p>
              '.$row['description'].'
            </p>
          </div>
        </div>';
  }
    ?><!-- 
      
      
        <div class="column wow animate__animated animate__fadeInLeft" onclick="location.href='solutions.html'" >
          <div class="card wow animate__animated animate__fadeInLeft">
            <div class="icon-wrapper"><i class="fa-solid fa-globe fa-beat-fade"></i>
            </div>
            <h3 class="wow animate__animated animate__heartBeat ">web-based &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus &nbsp&nbsp&nbsp eaque.
            </p>
          </div>
        </div>
        <div class="column wow animate__animated animate__fadeInDownBig" onclick="location.href='solutions.html'">
          <div class="card  wow animate__animated animate__fadeInDownBig">
            <div class="icon-wrapper">
              <i class="fas fa-thin fa-key fa-beat-fade"></i>
          </div>
            <h3 class="wow animate__animated animate__heartBeat" >Application Security</h3>
            <p>
            
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
        <div class="column wow animate__animated animate__fadeInRight" onclick="location.href='solutions.html'">
          <div class="card wow animate__animated animate__fadeInRight">
            <div class="icon-wrapper"><i class="fas fa-duotone fa-landmark fa-beat-fade"></i>
            </div>
            <h3 class="wow animate__animated animate__heartBeat ">Digital banking Sales and Services</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque &nbsp.
            </p>
          </div>
        </div>
        <div class="column wow animate__animated animate__fadeInLeft" onclick="location.href='solutions.html'">
          <div class="card wow animate__animated animate__fadeInLeft">
            <div class="icon-wrapper"><i class="fa-solid fa-database fa-beat-fade"></i>
            </div>
            <h3 class="wow animate__animated animate__heartBeat">Big Data Analytics &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div> -->
      </div>
 </div>
</section>

</div>


  <!-- ourclient section -->
  <div  class="partner wow animate__animated animate__fadeInLeft" >

    <h3 style="font-size:30px "  ><center>OUR CLIENTS</center></h3>
    
    <div class="partners"  id="pot">
        <?php
          $stmt="SELECT * from clients_home ORDER BY ranking ASC";
         
$result=mysqli_query($conn,$stmt);
    while ($row = mysqli_fetch_array($result)) {

     echo '<img height=40px width=100px src="'.$row['image'].'">';
  
  
    }?>
<!-- <img height=40px width=100px src="google.png">
  <img height=40px width=100px src="autodesk.png">
  <img height=40px width=100px src="gr.png">
  <img height=40px width=100px src="akamai.png">
  <img height=40px width=100px src="ebay.png"> -->
   </div>
  </div> 
 <!--Start of Tawk.to Script-->
 <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/6491908194cf5d49dc5ecb8b/1h3c9ovj2';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
<!-- page ending content -->

<div class="endpage Itservices ">
  <div class="wrap ">
    <div class="working-with-me">
      <div class="work working-define ">
        <h2>IT Services</h2>
        <ul class="working-text">
          <li><a href=" services.php">Application Development</a></li>
          <li><a href=" services.php">Data Engineering/Analytics</a></li>
          <li><a href=" services.php">SQA Services</a></li>
          <li><a href=" services.php">CRM/Salesforce</a></li>
          <li><a href=" services.php">Cloud, DevOps & Support</a></li>
          <li><a href=" services.php">Staffing Services</a></li>
        </ul>
      </div>
      <div class="work working-design ">
        <h2>Solutions</h2>
        <ul class="working-text">
          <li><a href="solutions.php">Data Science & Analytics</a></li>
          <li><a href="solutions.php">Digital Engineering and Personalization</a></li>
          <li><a href="solutions.php">Digital Banking - Sales and Services</a></li>
          <li><a href="solutions.php">Security Services</a></li>
        </ul>
      </div>
      <div class="work working-develop ">
        <h2>Company</h2>
        <ul class="working-text">
          <li><a href="about us.php">About us</a></li>
          <li><a href="customers.php">Customers</a></li>
        </ul>
      </div>
      <div class="work working-deploy ">
        <h2>Contact us</h2>
        <ul class="working-text">
          <li><a href="contactus.php">Contact Details</li>
          <div class="connect ">
            <a href="www.facebook.com" class="fa fa-facebook"></a>
            <a href="www.twitter.com" class="fa fa-twitter"></a>
            <a href="www.google.com" class="fa fa-google"></a>
            <a href="www.linkedin.com" class="fa fa-linkedin"></a>
          </div>
        </ul>
      </div>
    </div>
  </div>
</div>






<!-- <div class="endpage Itservices ">  
  <div class="wrap ">
    <div class="working-with-me">
    <?php
          $stmt="SELECT * from menu  ORDER BY Ranking ASC";
         
$result1=mysqli_query($conn,$stmt);
 
 
    while ($row1 = mysqli_fetch_array($result1)) {
    $stmt1="SELECT * from submenu";
 $result2=mysqli_query($conn,$stmt1);
    echo $row1['id'];
   echo '
      <div class="work working-define ">
      
      <h2>  <a  href="   " >'.$row1['Menu_name'].'</a></h2>
          <ul class="working-text">';
            while($row2=mysqli_fetch_array($result2)){
            
            if ($row1['id']==$row2['menu_id']){
            echo '<li><a href="#">'.$row2['submenu_name'].'</a></li>';
          }
          
} echo '</ul></div>'; 


}
         ?>
         
         <li><a href=" services.html">Data Engineering/Analytics</a></li>
          <li><a href=" services.html">SQA Services</a></li>
          <li><a href=" services.html">CRM/Salesforce</a></li>
          <li><a href=" services.html">Cloud, DevOps & Support</a></li>
          <li><a href=" services.html">Staffing Services</a></li>

    </div> 
  </div>
</div>
 -->



  
</body>
</html>