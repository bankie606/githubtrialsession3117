   <?php include './includes/header.php' ?>

<?php

if ( isset ($_POST['submit']) ) { // if the submit button is clicked...

$mailMesage = ("{$_POST['name']} {$_POST['email']} wrote: \n\n{$_POST['message']}"); // message of the email

$mailSubject = "{$_POST['ITC240 Test Mail']}"; // subject of the email

$mailRecipient = "frcrescioni@gmail.com"; // destination email address

$mailSender = "From: {$_POST['email']}"; // the mail sender

mail ($mailRecipient, $mailSubject , $mailMesage, $mailSender); // function to send the email

print ("<p>Many thanks to you for contacting me, <strong>{$_POST['name']}</strong>!</p>\n"); // notice that thanks the user

}

?>




<!-- start form settings-->
    <div class="form_settings">
            <h1>Contact Us</h1>
            <p>A contact form to contact me</p>
			<p>&nbsp;</p>
			<!-- Begin Contact Form -->
    <div id="form_settings">    
    <form action="contact.php" method="post" name="contact">
    <p><label for="name">Name:</label></p><br>
    <input name="name" type="text" required="required">
    <br>    
    <p><label for="email">Email:</label></p><br>
    <input name="email" type="email" required="required">
    <br>
    <br>
    <p><label for="message">Message:</label></p><br>
    <textarea name="message" cols="40" rows="5" required="required"></textarea>
     <br>
        <h2>Gender</h2>
    <br>
        <div><input type="radio" name="gender" value="male" style="width:10px;"required> Male</div>
        <br>
  <div><input type="radio" name="gender" value="female" style="width:10px;"> Female</div>
        <br>
  <div><input type="radio" name="gender" value="other" style="width:10px;"> Other</div>

        <br>
        <h2>How Do You Get Around?</h2>
        <br>
        <div><input type="checkbox" name="vehicle" value="Bike"> <p>I have a bike.</p></div><br>
  <div><input type="checkbox" name="vehicle" value="Car"> <p>I have a car.</p></div><br>
        <div><input type="checkbox" name="vehicle" value="Shoes"> <p>I have shoes.</p></div><br>
            <div class="g-recaptcha" data-sitekey="6LcclRQUAAAAABxE1gf7XbgZyZ6is-TfMaxwv8Xq"></div>

        <span>&nbsp;</span>
        <input name="submit" type="submit" value="Submit Message">
    </form>
        <p>Wait you don't wanna send us this much info. Click <a href ="contact2.php">here</a></p>
    </div>
    <!-- End Contact Form -->
          </div><!--close form_settings-->
        
   <?php include './includes/footer.php' ?>