<?php include("static/header.php"); ?>




        <div class="page-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
        <main class="container">
            <h1>Contact Us</h1>
            <div class="row">
                <div class="col-md-8">
                    <div class="inner-box">
                        <div class="contact">
                            <h3>Tibet Trekking</h3>
                            <p>Tibet</p>
                            <dl>
                                <dt>Tel:</dt>
                                <dd>444444</dd>
                                <br />
                                <dt>Cell: </dt>
                                <dd>4444</dd>
                                <br />
                                <dt>Email: </dt>
                                <dd>
                                    email@gmail.com
                                </dd>
                                <br />
                                <dt>Web: </dt>
                                <dd>www.tibettreks.com</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="standard-form inner-box">
                        <form action="#" data-toggle="validator"
                            method="post" accept-charset="utf-8">
                            <div class="form-group">
                                <label>Full Name<span>*</span></label>
                                <input type="text" class="form-control" id="fullname" name="fullname" required value="">
                            </div>
                            <div class="form-group">
                                <label>Email Address<span>*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required value="">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="">
                            </div>
                            <div class="form-group">
                                <label>Your message</label>
                                <textarea class="form-control" id="comments" name="comments" rows="5"></textarea>
                            </div>
                            <button type="submit" id="submit" name="submit" value="submit"
                                class="btn btn-info btn-md">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>

<?php include("static/footer.php"); ?>