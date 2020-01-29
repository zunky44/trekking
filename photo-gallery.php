<?php include("static/header.php"); ?>



<div class="page-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Photo Gallery</li>
        </ol>
    </div>
</div>
<main class="container">
    <h1>Photo Gallery</h1>
    <div id="links" class="gallery">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <a img-src="uploads/slides/slide-1.jpg" title="Slide-1" label="image-0">
                    <img class="img-thumbnail" src="uploads/slides/slide-1.jpg" alt="Special Photo Gallery"
                        title="Special Photo Gallery">
                </a>
                <h3><strong>Special Photo Gallery</strong></h3>
            </div>
            <div class="col-md-4 col-sm-6">
                <a img-src="uploads/slides/slide-2.jpg" title="Slide-2" label="image-1">
                    <img class="img-thumbnail" src="uploads/slides/slide-2.jpg" alt="Special Photo Gallery"
                        title="Special Photo Gallery">
                </a>
                <h3><strong>Special Photo Gallery</strong></h3>
            </div>
            <div class="col-md-4 col-sm-6">
                <a img-src="uploads/slides/slide-3.jpg" title="Slide-3" label="image-2">
                    <img class="img-thumbnail" src="uploads/slides/slide-3.jpg" alt="Special Photo Gallery"
                        title="Special Photo Gallery">
                </a>
                <h3><strong>Special Photo Gallery</strong></h3>
            </div>
            <div class="col-md-4 col-sm-6">
                <a img-src="uploads/slides/slide-4.jpg" title="Slide-4" label="image-3">
                    <img class="img-thumbnail" src="uploads/slides/slide-4.jpg" alt="Special Photo Gallery"
                        title="Special Photo Gallery">
                </a>
                <h3><strong>Special Photo Gallery</strong></h3>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="box">
        <center>
            <ul class="pagination pagination-sm">
            </ul>
        </center>
    </div>
</main>


<?php include("static/gallery.php"); ?>
<?php include("static/footer.php"); ?>