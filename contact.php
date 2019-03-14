<?php  include "includes/db.php"; ?>
 <?php  include "includes/header.php"; ?>
 
 
   <!-- Navigation -->
    
    <?php  include "includes/navigation.php"; ?>
	
	<!-- Contact -->
       <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>Contact us</h1>
        </div>
        <div class="row-fluid">
          <!-- Start: CONTACT US FORM -->
          <div class="span4 offset1">
            <div class="page-header">
              <h2>Quick message</h2>
            </div>
            <form class="form-contact-us" action="sendmail.php" method="post">
              <div class="control-group">
                <div class="controls">
                  <input type="text" id="inputName" placeholder="Name">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <input type="text" id="inputEmail" placeholder="Email">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <textarea id="inputMessage" placeholder="Message"></textarea>
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <input type="submit" class="btn btn-primary btn-large" value="Send">
                </div>
              </div>
            </form>
          </div>
          <!-- End: CONTACT US FORM -->
          <!-- Start: OFFICES -->
          <div class="span5 offset1">
            <div class="page-header">
              <h2>Office</h2>
            </div>
            <h3>JAI SHREE TOOLS AND ASSEMBLIES PRIVATE LIMITED</h3>
            <div>
              <address class="pull-left">
                <strong>Steel Fabricator in Jamshedpur, Jharkhand</strong><br>
                Rahorgora, Jamshedpur, Jharkhand 831016.<br>
                <br>
				
				 <div class="pull-right">
                <div class="bottom-space">
                  <i class="icon-phone icon-large"></i> 09431181370 <br>  Mr. Sanjay Palsania
				 
                </div>
				 <div class="bottom-space">
                  <i class="icon-phone icon-large"></i> 09234679104 <br> Mr. Rahul Palsania
                </div>
                <a href="sanjaypalsania8299@yahoo.co.in" class="contact-mail">
                  <i class="icon-envelope icon-large"></i>
                </a> sanjaypalsania8299@yahoo.co.in 
				<br><br>
				 <a href=" rahul.palsania@gmail.com" class="contact-mail">
                  <i class="icon-envelope icon-large"></i>
                </a> rahul.palsania@gmail.com
              </div>
              </address>
             
			  
              <div class="clearfix"></div>
            </div>
           
            
            
          </div>
          <!-- End: OFFICES -->
        </div>
      </div>
    </div>

     

   <?php include "includes/footer.php";  ?>
   