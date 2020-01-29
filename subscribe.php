<?php include("static/header.php"); ?>
      
      <div class="page-nav">
  <div class="container">
    <ol class="breadcrumb">
      <li>You are here:</li>
      <li><a href="index.php">Home</a></li>
      <li class="active">Subscribe Our Newsletter</li>
    </ol>
  </div>
</div>
<main class="container">
  <div class="row">
    <h1>Subscribe Our Newsletter</h1>
    <div class="col-md-8"> <form action="subscribe.php" data-toggle="validator" class="booking-form form-horizontal standardform" role="form" method="post" accept-charset="utf-8">
      <div class="personal-detail inner-box">
                <div class="form-group">
          <label class="col-md-3 col-sm-4 control-label" for="full_name">Full Name*</label>
          <div class="col-md-7 col-sm-6">
            <input type="text" class="form-control" required id="full_name" name="full_name" placeholder="Enter your Full Name" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 col-sm-4 control-label" for="email_address">Email Address*</label>
          <div class="col-md-7 col-sm-6">
            <input type="email" class="form-control" required id="email_address" name="email_address" placeholder="Enter your Email Address" value="">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 col-sm-4 control-label">&nbsp;</label>
          <div class="col-md-7 col-sm-6">
            <button name="submit" value="Subscribe" class="btn btn-primary" type="submit">Submit</button>
          </div>
        </div>
      </div>
      </form>      </div>
    <div class="col-md-4">
      <div class="page-right">        
        <div class="list box">
								<h2>Company Info</h2>
								<ul> <li><a href="about-us.php" title="About Us">About Us</a></li> <li><a href="legal-documents.php" title="Legal Documents">Legal Documents</a></li> <li><a href="our-team.php" title="Our Team">Our Team</a></li> <li><a href="terms-and-conditions.php" title="Terms and Conditions">Terms and Conditions</a></li> <li><a href="why-travel-with-us.php" title="Why travel with us?">Why travel with us?</a></li></ul>
						</div>        <div class="vehicle-hiring"> <img src="themes/images/vehicle-hiring.jpg" class="img-responsive"> <a href="index.php" class="btn btn-default">Contact Now</a> </div>
        <div class="charity-holidays"> <img src="themes/images/charity-holidays.jpg" class="img-responsive"> <a href="index.php" class="btn btn-default">Book Now</a> </div>
        <div class="box enquiry">
  <h2>Online Inquiry</h2>
  <form action="index.php" class="form-horizontal" method="post" accept-charset="utf-8">
       	<input type="hidden" name="redirect_to" value="subscribe" />
    <div class="form-group">
      <div class="col-sm-12">
      	<div class="input-group"> <span class="input-group-addon"><span class="fa fa-user"></span></span>
        <input type="text" class="form-control" required id="fullname" name="fullname" placeholder="Your Name">
      	</div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-12">
      <div class="input-group"> <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
        <input type="email" class="form-control" required id="email" name="email" placeholder="Your Email">
      </div>
      </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
         <div class="input-group">
         <span class="input-group-addon"><span class="fa fa-phone"></span></span>
          <input type="text" class="form-control" required id="phone" name="phone" placeholder="YourContact No">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
         <div class="input-group">
         <span class="input-group-addon"><span class="fa fa-globe"></span></span>
          <input type="text" class="form-control" required id="country" name="country" placeholder="Your Country">
          </div>
        </div>
      </div>    
    <div class="form-group">
      <div class="col-sm-12">
        <textarea type="email" class="form-control" rows="4" required id="comments" name="comments" placeholder="Message"></textarea>
      </div>
    </div> 
    <div class="form-group">
      <div class="col-sm-4">
        <div class="g-recaptcha" data-sitekey="6LcPKCYUAAAAALZpCk-SHcF8jkLMs7mhthXWqMiw" style="transform:scale(0.84);-webkit-transform:scale(0.84);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
      </div>
    </div>
        <button type="submit" id="submit" name="submit" value="submit" class="btn btn-info">SUBMIT</button>  
  </form></div>
      </div>
    </div>
  </div>
</main>

<?php include("static/footer.php"); ?>