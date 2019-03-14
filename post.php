<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

 <!-- Navigation -->
     <?php include "includes/navigation.php"; ?>
	 <hr>


       <section id="services">
      <div class="container">
       
     
			 <div class="row">
			 
			  <div class="col-md-8">

			   <?php
			   
			       if(isset($_GET['p_id'])){
					   
					   $the_post_id = $_GET['p_id'];
					   
				       $view_query = "UPDATE posts SET post_views_count = 
					   post_views_count + 1 WHERE post_id = $the_post_id ";
			           $send_query = mysqli_query($connection, $view_query);
					   
					   if(!$send_query) {
						   
						   die("QUERY FAILED" );
					   }
					   
			   
			   
			    
			      $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
			      $select_all_posts_query = 
				  mysqli_query($connection,$query);				  
				
				  while($row = mysqli_fetch_assoc($select_all_posts_query)) { 
			           
					   $post_title = $row['post_title'];
					   $post_price = $row['post_price'];
					   $post_author = $row['post_author'];
					   $post_date = $row['post_date'];
					   $post_image = $row['post_image'];
					   $post_content = $row['post_content'];
					   
				  
					   
				 
                 ?>
			         
						

						<!-- First Blog Post -->
						<h2>
							<a href="#"><?php echo $post_title ?></a>
						</h2>
						<p class="lead">
							Price Rs. <a href="contact.php"><?php echo $post_price ?>/Piece</a>
						</p>
						<p><span class="glyphicon glyphicon-time">
						</span><?php echo $post_date ?></p>
						<hr>
						<img class="img-responsive" 
						src="images/<?php echo $post_image; ?>"
						height="400" width="300"
						alt="">
						<hr>
						<p><?php echo $post_content ?></p>
						
						<hr>



					
				<?php }


				   } else {
					   
					   header("Location: index.php");
					   
					   
				   }
				   



				?>     


                </div>					
    			
				
		    </div>
			 
         </div>
		 </section>
 
	 
 <?php include "includes/footer.php"; ?>