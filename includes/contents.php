

      <!-- Start: PRODUCT LIST -->
      <div class="content">
        <div class="container">
          <div class="page-header">
             <div class="alert alert-info"> 
               <h3>Our Work On Tata Motors and Railways</h3>
            </div>
            
				<p>Backed with experienced professionals we have been manufacturing optimum Tata Motor and Railway Products.
				Solicited from reliable vendors the raw material we use is durable and affordable. 
				Because of the high intense force applied over these products these need to be sustained for loger time.
				So, keeping these things we prefer the best raw product in manufacturing</p>
          </div>
            <!-- Page Content -->
    

        <div class="row">

            <!-- Blog Entries Column -->
            
            <div class="col-md-8">
               
             <?php

      

             $per_page = 10;


            if(isset($_GET['page'])) {


            $page = $_GET['page'];

            } else {


                $page = "";
            }


            if($page == "" || $page == 1) {

                $page_1 = 0;

            } else {

                $page_1 = ($page * $per_page) - $per_page;

            }


         if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin' ) {


        $post_query_count = "SELECT * FROM posts";


         } else {

         $post_query_count = "SELECT * FROM posts WHERE post_status = 'published'";

         }   

        $find_count = mysqli_query($connection,$post_query_count);
        $count = mysqli_num_rows($find_count);

        if($count < 1) {


            echo "<h1 class='text-center'>No posts available</h1>";




        } else {


        $count  = ceil($count /$per_page);



                
        $query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT $page_1, $per_page ";
        
        $select_all_posts_query = mysqli_query($connection,$query);

        while($row = mysqli_fetch_assoc($select_all_posts_query)) {
       
                        $post_id = $row['post_id'];
                        $post_title = $row['post_title'];
						$post_price = $row['post_price'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = substr($row['post_content'],0,400);
                        $post_status = $row['post_status'];
        

    
        ?>
        
     

                <!-- First Blog Post -->

              
                     <div class="page-header">
                        <h2>
							<a href="post.php?p_id=<?php echo $post_id; ?>">
							<?php echo $post_title; ?></a>
						</h2>
						</div>
						<p class="lead">
					   Price Rs. <a href="contact.php?author=<?php echo $post_price ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_price ?>/Piece</a>
						</p>
					
						<p><span class="glyphicon glyphicon-time">
						</span><?php echo $post_date ?></p>
						<hr>
						<img class="img-responsive" 
						src="images/<?php echo $post_image; ?>"
					    height="500" width="400"
						alt="">
						<hr>
						<p><?php echo $post_content ?></p>
					<br>
                    <p>
                   <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                      
                      <a href="contact.php" class="btn btn-primary">Buy now</a>
                     </p>
                 
				  <hr>
				 		
						
   <?php }  } ?>

                
                
                
                
                

              
    

            </div>
            
             
           

        </div>
        <!-- /.row -->

        <hr>
     
         
         <div class="col-md-4">
            <div class="well">
             <div class="alert alert-info">
             <h4>Next Page</h4>
             </div>
            </div>
            </div>
       
        <ul class="pager">

           
        <?php
        

        $number_list = array();


        for($i =1; $i <= $count; $i++) {


        if($i == $page) {

             echo "<li '><a class='active_link' href='index.php?page={$i}'>Page {$i}</a></li>";


        }  else {

            echo "<li '><a href='index.php?page={$i}'>Page {$i}</a></li>";



        
         

        }

        
        



           
        }






         ?>
            




        </ul> 
         <?php include "includes/sidebar.php"; ?> 

        </div>
        </div>