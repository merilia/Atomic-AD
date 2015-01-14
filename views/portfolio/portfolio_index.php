<style>
    .modal-dialog {
        width: 600px;
    }

    .thumbnail {
        margin-bottom: 6px;
    }
</style>

<div class="container" style="max-width:1000px">
    <div class="row">
        <h1>Tehtud tööd</h1>

        <h2>Klõpsa pildile, et näha seda suuremalt!</h2>

        <div class="row">
            <div class="col-md-12" style="margin:0 auto">
                <? foreach ($projects as $project): ?>
                    <div class="col-lg-3 col-sm-4 col-6">
                        <a data-project_id="<?= $project['project_id'] ?>" href="#"
                           title="<?= $project['project_name'] ?>">
                            <img src="assets/project_files/<?= $project['project_file'] ?>"
                                 class="thumbnail img-responsive"></a>
                    </div>
                <? endforeach ?>
            </div>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3 class="modal-title"><input type="text"/></h3>
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
    $('.thumbnail').click(function () {
        $('.modal-body').empty();
        var title = $(this).parent('a').attr("title");
        <? if($auth->logged_in): ?>
        var project_id = $(this).parent('a').attr("data-project_id");
        $('.modal-title').html('<input type="text" value="' + title + '" id="project_name"/> <button id="asdaf" onclick="change_project_name(' + project_id + ')" style="width:110px; height:40px">Salvesta</button><button id="delete_project" onclick="delete_project(' + project_id + ')" style="width:110px; height:40px">Kustuta</button>');
        <? else: ?>
        $('.modal-title').html(title);
        <? endif ?>
        $($(this).parents('div').html()).appendTo('.modal-body');
        $('#myModal').modal({show: true});
        return false;
    });
    function change_project_name(project_id) {
        var project_name = $("#project_name").val();
        /* $.ajax({
         type: "POST",
         url: 'portfolio/' + project_id,
         data: {'project_name': project_name},
         success: function(res){
         console.debug(res);
         }
         });
         */
        $.post('portfolio/' + project_id, { project_id: project_id, project_name: project_name })
            .done(function (data) {
                alert(data);
                $('#myModal').modal('toggle');
            });
    }
    function delete_project(project_id) {
        var project_name = $("#project_name").val();
        /* $.ajax({
         type: "POST",
         url: 'portfolio/' + project_id,
         data: {'project_name': project_name},
         success: function(res){
         console.debug(res);
         }
         });
         */
        console.log($(this));
        $.post('portfolio/delete/' + project_id, { project_id: project_id })
            .done(function (data) {
                if (data != 'Ok') {
                    alert(data);
                }
                $('#myModal').modal('toggle');
                $('*[data-project_id="' + project_id + '"]').remove();
                $(this).parent('div').remove();

            });
    }

</script>
<? if ($auth->logged_in): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <div class="btn-group btn-group-lg">
                    <span class="lead" style="float: left; margin-right:20px; margin-top:10px">Laadi üles:</span>
                    <button type="button" class="btn btn-default" id="btn-photo-upload">Lisa fail...</button>
                </div>
            </div>
            <form id="uploadForm" method="post" enctype="multipart/form-data" style=" display: none">
                <input type="file" name="photo" id="text-photo-upload" class="file-upload"/>
            </form>
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
    </div>
<? endif; ?>