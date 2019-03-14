            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
      
                <!-- Blog Categories Well -->
                <div class="well">
                  
                  
                  
        <?php 
        $query = "SELECT * FROM categories LIMIT 3";
        $select_categories_sidebar = mysqli_query($connection,$query);         
        ?>
		      <div class="alert alert-info">
                 <h4>News Update</h4>
				 </div>
                    <div class="row">
                        <div class="col-lg-12">
                        <ul class="list-unstyled">
                           <div class="alert alert-warning">   
                              <?php 

        while($row = mysqli_fetch_assoc($select_categories_sidebar )) {
        $cat_title = $row['cat_title'];
        $cat_id = $row['cat_id'];

        echo "<ul><a href='category.php?category=$cat_id'>{$cat_title}</a></ul><br>";
		


        }
   
                            ?>
                              </div>
                            
                           </ul>                 
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                
            </div>
            