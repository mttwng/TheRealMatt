<?php include 'header.php'; ?>

<div class="banner">
  <div class="half_section"></div>
    <div class="container">
      <div class="row">
        <div class="span6">
          <img src="img/phone.png" class="ri" alt="Phone" >
        </div>  
        <div class="span6 white">
          <h1>Contact Me</h1> 
          <br />
          <br />
          <h2>Email</h2><p><a href="mailto:webualize@gmail.com" class="contact-text">webualize@gmail.com</a></p>
          <br />
          <h2>Linkedin</h2><p><a href="http://www.linkedin.com/in/mttwng" target="_blank" class="contact-text">mttwng</a></p>
          <br />
          <p>Please don't hestiate to contact me, whether you have a question or just want to say hi.</p>
        </div>
      </div> <!-- end row -->
    </div> <!-- end container -->
  <div class="half_section"></div>
</div> <!-- end banner -->
<br />

<div class="section"></div>

<div class="container">
  <form action="mail.php" method="POST">
    <fieldset>
      <label>Name</label> <input type="text" name="name">
      <label>Email</label> <input type="text" name="email">
      <label>Message</label><textarea name="message" rows="6" cols="25"></textarea>
      <button type="submit" value="Send" class="btn btn-inverse">Submit</button>
    </fieldset>
  </form>  

<?php include 'footer.php'; ?>