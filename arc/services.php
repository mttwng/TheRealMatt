<?php include 'header.php'; ?>

    <link href="services.css" rel="stylesheet">

          <div class="services">
          <div class="serv_img">
          <div class="container">
            <h1>Services</h1>
          </div></div>
          <div class="container">
            <div class = "row">
              <hr class="services">
                <div class ="col-md-4">
                    <i class="fa fa-globe"></i> </div>
                <div class="col-md-8">
                    <h3 class = "serv_h3"><strong>Online Resume Consulting</strong></h3><p class = "lead"><strong>How it works:</strong> All you have to do is pay using your credit card or PayPal account. Once you have done that, go to the form at the bottom of the page and email me your resume and any message you may have. I will get back to you with edits in <strong>24-48 hours </strong> (let me know if you need edits back faster) and I will be happy to do so. Note that if you merely email me your resume without paying I will refuse to edit it.<br><strong>Cost:</strong> $10</p>
                    <a href="https://www.paypal.com/cgi-bin/webscr"><input type="submit" class="styled-button-4" value="Buy" /></a>
                </div>
            </div>
            <hr class = "services">
            <div class="row">
                <div class="col-md-4">
                    <i class="fa fa-briefcase"></i></div>
                <div class="col-md-8">
                    <h3 class = "serv_h3"><strong>In-Person Resume Consulting</strong></h3><p class = "lead"><strong>How it works:</strong> For this, pay using your credit card or PayPal account. After you have done that, go to the form at the bottom of the page and email me your resume - please make sure to fill the message section with times you would be available to meet. Once we set up the meeting time/location we can meet up and I can go over edits in person. This editing session shouldn't take more than <strong>30 minutes </strong>because I will come prepared with the edits to the meeting beforehand. Again, note that if you simply email me your resume without paying I will refuse to edit it.<br><strong>Cost:</strong> $20</p>
                    <a href="https://www.paypal.com/cgi-bin/webscr"><input type="submit" class="styled-button-4" value="Buy" /></a>
                </div>
          </div></div>
          <hr class="services">
          <div class="container">
          <div class="row">
              <h2>Resume Form</h2>
              <div class="resumeform">
                  <form role="form">
                  <div class="col-md-3">
                      <div class="form-group">
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Full Name">
                      </div>
                  <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email Address">
                      </div>
                  <div class="form-group">
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Preferred Contact Method">
                          <span class="help-block"><i>Facebook, email, phone</i></span>
                      </div>
                  <div class="form-group">
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone Number (optional)">
                      </div>
                <div class="form-group">
                  <span class="help-block"><strong>Upload Resume</strong></span>
                  <input type="file" id="exampleInputFile">
                </div>
              </div>
              <div class="col-mid-3">
                <div class="form-group">
                  <textarea class="form-control comment-form" rows="11" placeholder="Please include meeting times here if you signed up for the in-person meeting."></textarea>
                </div>
              </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
          </div>
        </div>
      <?php include 'footer.php'; ?>
  