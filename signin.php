<?php  include "includes/db.php"; ?>
 <?php  include "includes/header.php"; ?>
 

    <!-- Navigation -->
    
    <?php  include "includes/navigation.php"; ?>
	
  <div class="content">
      <div class="container">
        <div class="page-header">
          <h1 class="widget-header">Login</h1>
        </div>
		
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="icon-lock"></i> Sign in to Jai Shree Tools</h4>
            <div class="widget-body">
              <div class="center-align">
          <form action="includes/login.php" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input name="username" type="text" class="form-control" placeholder="Enter Username" required="required" autofocus="autofocus">
                <label for="username">Enter Username</label>
              </div>
            </div>
			
             		
			
            <div class="form-group">
              <div class="form-label-group">
                <input name="password" type="password" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            
             <span class="input-group-btn">
						  <button class="btn btn-primary" name="login"
						  type="submit">Submit</button>
						  
						</span>
          </form>
         </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   

  <?php include "includes/footer.php";?>



