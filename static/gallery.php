
<div class="modal fade bd-example-modal-lg" id="showImage" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b id="img-title"></b></h5>
            </div>
            <div class="modal-body">
                <img style="width:100%;" src="" id="img-src">
            </div>
            <div class="modal-footer">
                <div class="content text-center">
                    <button class="btn btn-info btn-sm mx-5 text-white" id="img-prev"> <i class="fa fa-angle-left"></i> </button>
                    <button class="btn btn-info btn-sm mx-5 text-white" id="img-next"> <i class="fa fa-angle-right"></i> </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(".row").children("div").children("a").click(function() {
        var title = $(this).attr("title");
        var image_src = $(this).attr("img-src");
        var label = $(this).attr("label");
        var number = label.split('-').pop()
        setimage(image_src, title);
        $("#showImage").modal();

        $("#img-prev").click(function(){
            var $this =  $("[label='image-"+number+"']");
            console.log(number);
            if(number>0)
                number--;
            var image_src = $($this).attr("img-src");
            var title =  $($this).attr("title");
            setimage(image_src, title);
            console.log(number);
            console.log(image_src);
        });
        $("#img-next").click(function(){
            var $this =  $("[label='image-"+number+"']");
            console.log(number);
            if($("[label='image-"+(number+1)+"']").length)
                number++;
            var image_src = $($this).attr("img-src");
            var title =  $($this).attr("title");
            setimage(image_src, title);
            console.log(number);
            console.log(image_src);
        });

        function setimage(img_src, title){
            $("#img-title").html(title);
            $("#img-src").attr("src", img_src);
        }

    });
</script>