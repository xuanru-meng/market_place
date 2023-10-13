<?php 
    
    include("login_check.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->

                <button onclick = "redirectToDashboard()" class="top_button right">
                    <img src="other_images/dashboard.svg" height=40 width=40 alt="shop img">
                </button>

               <button onclick = "redirectToLogin()" class="top_button right">
                    <img src="other_images/person.svg" height=40 width=40 alt="person img">
                </button>

               
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   
                   <form method="get" action="shop.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
                   
               </div><!-- collapse clearfix Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->

    <script>
        function redirectToDashboard() {
            var url = "index.php?dashboard";
            window.location.href = url;
        }

        function redirectToLogin() {
            var url = "index.php?user_profile=<?php echo $admin_id; ?>";
            window.location.href = url;
        }

    </script>
</body>