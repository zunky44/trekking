<?php include("static/header.php"); ?>


    <div class="page-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Legal Documents</li>
            </ol>
        </div>
    </div>
    <main class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Legal Documents</h1>
                <div class="inner-box">
                    <div class="col-sm-6" style="padding:10px;">
						<h4 class="text-center"><strong>Certificate of Company Register</strong></h4>
                        <span data-toggle="modal" data-target="#document_1">
							<img src="uploads/document/cert5.jpg" class="img-thumbnail" style="cursor: pointer;">
						</span>
                        <div class="modal fade " id="document_1" tabindex="-1" role="dialog"
                             aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="font-weight-bold modal-header strong">
										<h4 class="text-primary"><strong>Certificate of Company Register</strong></h4>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="uploads/document/cert5.jpg" class="img-thumbnail">
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="page-right">
                    <div class="list box">
                        <h2>Company Info</h2>
                        <ul>
                            <li><a href="about-us.php" title="About Us">About Us</a></li>
                            <li><a href="our-team.php" title="Our Team">Our Team</a></li>
                            <li><a href="terms-and-conditions.php" title="Terms and Conditions">Terms and
                                Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include("static/footer.php"); ?>