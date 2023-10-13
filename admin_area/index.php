<?php 

    session_start();
    include("includes/db.php");

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        
        $admin_session = $_SESSION['admin_email'];
        
        $get_admin = "select * from admins where admin_email='$admin_session'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['admin_id'];
        
        $admin_name = $row_admin['admin_name'];
        
        $admin_email = $row_admin['admin_email'];
        
        $admin_image = $row_admin['admin_image'];
        
        $admin_country = $row_admin['admin_country'];
        
        $admin_about = $row_admin['admin_about'];
        
        $admin_contact = $row_admin['admin_contact'];
        
        $admin_job = $row_admin['admin_job'];
        
        $get_products = "select * from products";
        
        $run_products = mysqli_query($con,$get_products);
        
        $count_products = mysqli_num_rows($run_products);
        
        $get_customers = "select * from customers";
        
        $run_customers = mysqli_query($con,$get_customers);
        
        $count_customers = mysqli_num_rows($run_customers);
        
        $get_p_categories = "select * from product_categories";
        
        $run_p_categories = mysqli_query($con,$get_p_categories);
        
        $count_p_categories = mysqli_num_rows($run_p_categories);
        
        $get_pending_orders = "select * from pending_orders";
        
        $run_pending_orders = mysqli_query($con,$get_pending_orders);
        
        $count_pending_orders = mysqli_num_rows($run_pending_orders);

?>
<?php 
        include("includes/header.php"); 
        echo '<script>
        function continuousScript() {
            let value = window.scrollY;
            let leaves = document.querySelectorAll(".leaf"); 
            leaves.forEach(function(leaf, index) {
                leaf.style.left = (2 * value + index * 400) + "px"; 
                leaf.style.top = (value * 2) + "px";
            });
        }
        window.addEventListener("scroll", continuousScript);
        setInterval(continuousScript, 1000); // 
    </script>
    ';

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
<section>

<!-- <style>
    section {
        display: flex;
        justify-content: space-between; /* 该属性将元素水平分布 */
        position: relative; /* 设置为 relative 允许子元素使用 absolute 定位 */
        height: 50px; /* 因为叶子是绝对定位的，所以给 section 一些高度 */
    }
</style> -->
<?php 
        for ($i = 0; $i < 1; $i++) {
            echo '<img src="other_images/leaf.svg" class="leaf" style="width: 100px; position: absolute;opacity: 0.5; ">';
        }
    ?>
</section>

<link rel="stylesheet" href="styles/bootstrap-337.min.css">
<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
<link rel="stylesheet" href="styles/style.css">
<body>
       <div class = "main">
            <div class="container-fluid">
                
                <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }   if(isset($_GET['insert_product'])){
                        
                        include("insert_product.php");
                        
                }   if(isset($_GET['view_products'])){
                        
                        include("view_products.php");
                        
                }   if(isset($_GET['delete_product'])){
                        
                        include("delete_product.php");
                        
                }   if(isset($_GET['edit_product'])){
                        
                        include("edit_product.php");
                        
                }   if(isset($_GET['insert_p_cat'])){
                        
                        include("insert_p_cat.php");
                        
                }   if(isset($_GET['view_p_cats'])){
                        
                        include("view_p_cats.php");
                        
                }   if(isset($_GET['delete_p_cat'])){
                        
                        include("delete_p_cat.php");
                        
                }   if(isset($_GET['edit_p_cat'])){
                        
                        include("edit_p_cat.php");
                        
                }   if(isset($_GET['insert_cat'])){
                        
                        include("insert_cat.php");
                        
                }   if(isset($_GET['view_cats'])){
                        
                        include("view_cats.php");
                        
                }   if(isset($_GET['edit_cat'])){
                        
                        include("edit_cat.php");
                        
                }   if(isset($_GET['delete_cat'])){
                        
                        include("delete_cat.php");
                        
                }    if(isset($_GET['view_orders'])){
                        
                        include("view_orders.php");
                        
                }   if(isset($_GET['delete_order'])){
                        
                        include("delete_order.php");
                        
                }  if(isset($_GET['insert_user'])){
                        
                        include("insert_user.php");
                        
                }  if(isset($_GET['view_user'])){
                        
                        include("view_user.php");
                        
                } if(isset($_GET['edit_user'])){
                        
                        include("edit_user.php");
                        
                } if(isset($_GET['edit_user'])){
                        
                        include("edit_user.php");
                        
                } if(isset($_GET['user_profile'])){
                        
                        include("user_profile.php");
                        
                } 
        
                ?>
                
            </div>
            </div>



</body>
</html>


<?php } ?>