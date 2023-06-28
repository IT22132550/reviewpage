<?php
include_once ('Include/connection.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
        </title>
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="javaforcontacte.js"></script>
    </head>


<!--footer start-->
       

<div class="footer">
    <div class="inner-footer">
  
  <!--  for company name and description -->
      <div class="footer-items">
        <h1>Recipe World</h1>
        <p>Welcome to Web-Recipe World, your culinary inspiration hub.
            Explore our diverse collection of recipes from around the globe, 
            Join our community, ignite your passion for cooking, 
            and indulge in flavors that will delight your taste buds. 
            Get ready for a flavorful adventure!</p>
      </div>
  
  <!--  for quick links  -->
      <div class="footer-items">
        <h3>Quick Links</h3>
        <div class="border1"></div> <!--for the underline -->
          <ul class="qlink">
            <a href="home.php"><li class="qlink">Home</li></a>
            <a href="review.php"><li class="qlink">Review</li></a>
            <a href="ContactUs.php"><li class="qlink">Contact</li></a>
            <a href="about.php"><li class="qlink">About</li></a>
          </ul>
      </div>
  
  <!--  for some other links -->
      <div class="footer-items">
        <h3>Recipes</h3>
        <div class="border1"></div>  <!--for the underline -->
          <ul class="qlink">
            <a href="#"><li class="qlink">Indian</li></a>
            <a href="#"><li class="qlink">Chinese</li></a>
            <a href="#"><li class="qlink">Mexican</li></a>
            <a href="#"><li class="qlink">Italian</li></a>
          </ul>
      </div>
  
  <!--  for contact us info -->
      <div class="footer-items">
        <h3>Contact us</h3>
        <div class="border1"></div>
          <ul class="qlink">
            
            <li class="qlink"><i class="fa fa-phone" aria-hidden="true"></i>123456789</li>
            <li class="qlink"><i class="fa fa-envelope" aria-hidden="true"></i>xyz@gmail.com</li>
            <hr>
            <li class="qlink"><i class="fa fa-dollar" aria-hidden="true"></i>payment methods</li>
            <img src="images/payment_op.png" class="imgcenter" >
          </ul> 
        
      </div>
    </div>
    
  <!--   Footer Bottom start  -->
    <div class="footer-bottom">
      Copyright &copy; Recipe World 2023.
    </div>
  </div>
    <!--footer end-->

    </body>

</html>
<?php mysqli_close($connection);?>
