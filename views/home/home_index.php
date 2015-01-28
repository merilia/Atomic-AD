<div class="row">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://placehold.it/1200x315" alt="...">
                <div class="carousel-caption">
                    <h3>Caption Text</h3>
                </div>
            </div>
            <div class="item">
                <img src="http://placehold.it/1200x315" alt="...">
                <div class="carousel-caption">
                    <h3>Caption Text</h3>
                </div>
            </div>
            <div class="item">
                <img src="http://placehold.it/1200x315" alt="...">
                <div class="carousel-caption">
                    <h3>Caption Text</h3>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div> <!-- Carousel -->
</div>
<div class="row">
    <div class="col-md-4">
        <h1>Atomic AD</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolor doloremque est laborum nam quo reiciendis rem, sint veniam voluptates!</p>
    </div>
    <div class="col-md-4">
        <h1>Teenused</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolor doloremque est laborum nam quo reiciendis rem, sint veniam voluptates!</p>

    </div>
    <div class="col-md-4">
        <h1>Kontakt</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolor doloremque est laborum nam quo reiciendis rem, sint veniam voluptates!</p>
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            Kirjuta meile
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form_pop">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label for="exampleInputName">Nimi *</label>
                                    <input type="text" class="form-control" id="exampleInputName"
                                           placeholder="Sinu nimi..."
                                           name="data[email_name]">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail">Email *</label>
                                    <input type="email" class="form-control" id="exampleInputName"
                                           placeholder="Sinu email..."
                                           name="data[email_email]">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputNumber">Telefoninumber *</label>
                                    <input type="text" class="form-control" id="exampleInputNumber"
                                           placeholder="Sinu telefoninumber..."
                                           name="data[email_phone]">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputText">Sõnum *</label>
                                    <input type="text" class="form-control" id="exampleInputText"
                                           placeholder="Sinu sõnum..."
                                           style="min-height:100px" name="data[email_message]">
                                </div>
                                <button type="submit" class="btn btn-default">Saada</button>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Sulge aken</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <h1>Tehtud tööd</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolor doloremque est laborum nam quo reiciendis rem, sint veniam voluptates!</p>
    </div>
    <div class="col-md-8">
        <img src="http://placehold.it/150x150" alt="img"/>
        <img src="http://placehold.it/150x150" alt="img"/>
        <img src="http://placehold.it/150x150" alt="img"/>
        <img src="http://placehold.it/150x150" alt="img"/>
    </div>
</div>
<style>.contact_form</style>
<script>
    $('.carousel').carousel({
        interval: 2000
    })
    $(".contact_form").click(function () {
        $(".form-group").toggle("slow", function () {
        });
    });


</script>
