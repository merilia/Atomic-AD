<style>
    .modal-dialog {width:600px;}
    .thumbnail {margin-bottom:6px;}
</style>

<div class="container" style="max-width:1000px">
    <div class="row">
        <h1>Tehtud tööd</h1>
        <h2>Klõpsa pildile, et näha seda suuremalt!</h2>
        <div class="row">
            <div class="col-md-12" style="margin:0 auto">
            <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 1"><img src="//placehold.it/700x400" class="thumbnail img-responsive"></a></div>
            <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 2"><img src="//placehold.it/700x400" class="thumbnail img-responsive"></a></div>
            <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 3"><img src="//placehold.it/700x400" class="thumbnail img-responsive"></a></div>
            <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 4"><img src="//placehold.it/700x400" class="thumbnail img-responsive"></a></div>
            <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 5"><img src="//placehold.it/700x400" class="thumbnail img-responsive"></a></div>
            <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 6"><img src="//placehold.it/700x400" class="thumbnail img-responsive"></a></div>
            <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 8"><img src="//placehold.it/700x400" class="thumbnail img-responsive"></a></div>
            <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 9"><img src="//placehold.it/700x400" class="thumbnail img-responsive"></a></div>
            <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 10"><img src="//placehold.it/700x400" class="thumbnail img-responsive"></a></div>
            <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 11"><img src="//placehold.it/700x400" class="thumbnail img-responsive"></a></div>
            <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 12"><img src="//placehold.it/700x400" class="thumbnail img-responsive"></a></div>
            <div class="col-lg-3 col-sm-4 col-6"><a href="#" title="Image 13"><img src="//placehold.it/700x400" class="thumbnail img-responsive"></a></div>
        </div>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3 class="modal-title">Heading</h3>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('.thumbnail').click(function(){
        $('.modal-body').empty();
        var title = $(this).parent('a').attr("title");
        $('.modal-title').html(title);
        $($(this).parents('div').html()).appendTo('.modal-body');
        $('#myModal').modal({show:true});
        return false;
    });
</script>

<div class="col-md-6">
    <span class="lead">Laadi üles:</span>
    <div class="pull-right">
        <div class="btn-group btn-group-lg">
            <button type="button" class="btn btn-default" id="btn-photo-upload">Lisa fail...</button>
        </div>
    </div>
    <form id="uploadForm" method="post" enctype="multipart/form-data" style=" display: none">
        <input type="file" name="photo" id="text-photo-upload" class="file-upload"/>
    </form>
    <pre>
    <?php var_dump($_FILES) ?>
    <?php var_dump(get_defined_vars()) ?>
    </pre>
    <script>
        $('#btn-photo-upload').click(function (event) {
            $('#text-photo-upload').click();
        });
        //capture selected filename
        $('#text-photo-upload').change(function (click) {
//  $('#file-name').val(this.value);
            $('form#uploadForm').submit();
        });
    </script>
</div>