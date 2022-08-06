<?php
if(isset($_POST['emailsubscibe']))
{
$subscriberemail=$_POST['subscriberemail'];
$sql ="SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
$query= $dbh -> prepare($sql);
$query-> bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
echo "<script>alert('Already Subscribed.');</script>";
}
else{
$sql="INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
$query = $dbh->prepare($sql);
$query->bindParam(':subscriberemail',$subscriberemail,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Subscribed successfully.');</script>";
}
else
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
}
?>

<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <h6>About Us</h6>
          <ul>


          <li><a href="page.php?type=aboutus">About Us</a></li>
            <li><a href="page.php?type=faqs">FAQs</a></li>
            <li><a href="page.php?type=privacy">Privacy</a></li>
          <li><a href="page.php?type=terms">Terms of use</a></li>
               <li><a href="admin/">Admin Login</a></li>
          </ul>

          <h4><span style="color:white;">Address :</span></h4>
         
         <address>
        12/B &nbsp IICMR MCA College 
        Bhel Chowk , Near HDFC Bank,<br>
        Nigdi,pune-411034<br>
        INDIA.
     </address>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15206.650622224715!2d75.91148249999998!3d17.666129500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9e0ffffffff%3A0x1265e81bedabe2f8!2sIICMR%20MCA%20College!5e0!3m2!1sen!2sin!4v1659561829002!5m2!1sen!2sin" width="500" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     
        </div>

        <div class="col-md-6 col-sm-0">
          <h6>Subscribe </h6>
          <div class="newsletter-form">
            <form method="post">
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="Enter Email Address" />
              </div>
              <button type="submit" name="emailsubscibe" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text ">*We send great deals and latest offer to our subscribed users very week.</p>
          </div>     
            
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
  <div class="default-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <!-- <div class="logo"> <a href="index.php"><img src="assets/images/logg2.png" alt="image"/></a> </div> -->
        </div>
        <div class="col-sm-12 col-md-0">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon "> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text "><span style="color:grey">For Support Mail us :<span> </p>
              <a href="mailto:info@example.com"><span >G40@gmail.com</span></a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text"> <span style="color:grey">Contact Us:</span> </p>
              <a href="tel:+7020567907">+91 7020567907</a> </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
          <div class="footer_widget">
            <p>Connect with Us:</p>
            <ul>
              <li><a href="#icon"><i class="fa fa-facebook-square" id="icon" aria-hidden="true"></i></a></li>
              <li><a href="#icon"><i class="fa fa-twitter-square" id="icon"  aria-hidden="true"></i></a></li>
              <li><a href="#icon"><i class="fa fa-linkedin-square" id="icon"  aria-hidden="true"></i></a></li>
              <li><a href="#icon"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="#icon"><i class="fa fa-instagram" id="icon"  aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-md-pull-6">
          <p class="copy-right">Copyright &copy; 2022 Bike Rental Portal. Brought To You By <a href="#">Bike Renting</a></p>
          
        </div>
        
      </div>
    </div>
  </div>
</footer>
