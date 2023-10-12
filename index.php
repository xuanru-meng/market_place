<?php 
    $active='Index';
    include("includes/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
   

   
   <div class="container" id="slider"><!-- container Begin -->
       
       <div class="col-md-12"><!-- col-md-12 Begin -->
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
               
               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   
               </ol><!-- carousel-indicators Finish -->
               
               <div class="carousel-inner"><!-- carousel-inner Begin -->
                   
                   
                   <div class="item">
                       
                       <img src="admin_area/slides_images/slide-2.jpeg" height = 1000 width = 1000 alt="Slider Image 2">
                       
                   </div>
                   
                   <div class="item active">
                       
                       <img src="admin_area/slides_images/slide-3.jpg" alt="Slider Image 3">
                       
                   </div>
                   
                   
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a><!-- left carousel-control Finish -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a><!-- left carousel-control Finish -->
               
           </div><!-- carousel slide Finish -->
           
       </div><!-- col-md-12 Finish -->
       
   </div><!-- container Finish -->
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->

           
           <div class="col-md-12"><!-- col-md-9 Begin -->

                <div class='box'><!-- box Begin -->
                    <h1></h1>
                   
                </div><!-- box Finish -->
               
               <div id="products" class="row"><!-- row Begin -->

                    <?php getProducts(); ?>
               
               </div><!-- row Finish -->
               
               <center>
                   <ul class="pagination"><!-- pagination Begin -->

                        <?php getPaginator(); ?>

                   </ul><!-- pagination Finish -->
               </center>
               
           </div><!-- col-md-9 Finish -->

           <div id="wait" style="position:absolute;top:40%;left:45%;padding: 200px 100px 100px 100px;"></div>
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>