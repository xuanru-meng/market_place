<?php 

    $active='Shop';
    include("includes/header.php");

?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->

           
           <div class="col-md-12"><!-- col-md-9 Begin -->

                <div class='box'><!-- box Begin -->
                    <h1>Shop</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis veritatis perferendis, quaerat!
                    </p>
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