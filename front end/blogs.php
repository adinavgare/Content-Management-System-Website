<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="utils.css">
    <link rel="stylesheet" href="styleblog.css">
    <link rel="stylesheet" href="mobile.css">
    <link rel="icon" type="image/x-icon" href="favicon-16x16.png">
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
   <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;width: 100%;z-index: 9999">
    <div class="container-fluid">
  
            <a href="index.php"><img height=30px width=30px src="gt_logo.jpg"> Globalsoft Technology</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          
          <li class="nav-item" >
            <a class="nav-link" href="about us.php" style="color:blue" >About us</a>
          </li>
  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:blue">
              Solution
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
              <li><a class="dropdown-item" href="solutions.php">Big Data Analytics</a></li>
              <li><a class="dropdown-item" href="solutions.php">Web-Based</a></li>
              <li><a class="dropdown-item" href="solutions.php">Digital Banking & Services</a></li>
              <li><a class="dropdown-item" href="solutions.php">Application Security</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" services.php" style="color:blue">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="customers.php" style="color:blue">Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="careers.php"style="color:blue">Careers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blogs.php"style="color:blue">Blogs</a>
          </li>
        </ul>
        <li class="nav-item">
          <a class="nav-link"  href="contactus.php" style="color:blue; float: left;"><i class="fa fa-address-book-o"></i></a>
        </li>
        
      </div>
    </div>
  </nav>
  
    <nav class="navigation max-width-1 m-auto">
        <div class="nav-left" style="padding-top: 80px;">
            <ul  style="float: left;">
                <li><a href="blogs.php"><i class="fa fa-fw fa-home"></i></a></li>
                <li><a href= "postyour_blog.php">Post your blog</a></li> 
                <form action="search.php" method="get">
                    <input class="form-input" type="text" name="query" placeholder="Article Search">
                    <button class="btn"><i class="fa fa-fw fa-search"></i></button>
                </form>
            </ul>
    </nav>
    <?php
include 'connect.php';
?>

    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="m-auto content max-width-1 my-2">
        <div class="content-left">
            <h1>The heaven for bloggers</h1>
            <p>iBlog is a website which lets you submit an article which upon approval will be up on  website and you
                can get a good amount of reach from here!</p>
            <p>My Halloween decorations are staying in the box this year. To be honest, they didn’t make it out of the
                box last year either. My Halloween spirit has officially been bludgeoned to death by teenagers who no
                longer care and a persistent October fear of the Northern California wildfires. And speaking of fear,
                isn’t there more than enough of that going around? Maybe all of us can pretend that Halloween isn’t even
                happening this year?</p>
        </div>
        <div class="content-right">
            <img src="1.png" alt="iBlog">
        </div>
    </div>

    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="home-articles max-width-1 m-auto font2">
        <h2>Featured Articles</h2>
        <?php
          $stmt="SELECT * from blog";
         
$result=mysqli_query($conn,$stmt);
    while ($row = mysqli_fetch_array($result)) {
   echo '<div class="home-article">
   <div class="home-article-img">
       <img src="'.$row['image'].'" alt="article" height=200px width=200px>
   </div>
   <div class="home-article-content font1">
       <a href="blogpost.php?id='.$row['id'].'">
           <h3>'.$row['title'].'</h3>
       </a>
</div>
</div>';
}
?>
        <!-- <div class="home-article">
            <div class="home-article-img">
                <img src="3.png" alt="article" >
            </div>
            <div class="home-article-content font1">
                <a href="blogpost.php">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                </a>

                <div>Author Name</div>
                <span>07 January | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="1.png" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="blogpost.php">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                </a>

                <div>Author Name</div>
                <span>07 January | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="2.png" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="blogpost.php">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                </a>

                <div>Author Name</div>
                <span>07 January | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="1.png" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="blogpost.php">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                </a>

                <div>Author Name</div>
                <span>07 January | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="11.svg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="blogpost.php">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                </a>

                <div>Author Name</div>
                <span>07 January | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="3.png" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="blogpost.php">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                </a>

                <div>Author Name</div>
                <span>07 January | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="2.png" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="blogpost.php">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                </a>

                <div>Author Name</div>
                <span>07 January | 6 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="11.svg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="blogpost.php">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                </a>

                <div>Author Name</div>
                <span>07 January | 6 min read</span>
            </div>
        </div> -->

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
            <li><a href="aboutus.php">About us</a></li>
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
  
  
</body>

</php>