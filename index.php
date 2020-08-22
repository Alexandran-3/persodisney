<?php require_once 'header.php';
require_once 'database.php';
require_once 'readPerso.php';?>
<!-- Script -->
<script type="text/javascript">
        $(document).ready(function () {

            $('body').on('submit', 'form', function (e){   

                name = $("#name").val();
                animation = $("#animation").val();
                description = $("#description").val();
                

                $.ajax({
                    type: "POST",
                    url: "addperso.php",
                    data: "name=" + name + "&animation=" + animation + "&description=" + description,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err").html('<div class="alert alert-success"> \
                                                 <strong>Bravo</strong> votre formulaire a été envoyé !! \ \
                                                 </div>');
                            $("form").remove();

                            // window.location.href = "index.php";

                        } else if (html == 'name') {
                            $("#add_err").html('<div class="alert alert-danger"> \
                                                 <strong>Le champ Nom</strong> est requis. Il doit contenir au moins 3 caractères \ \
                                                 </div>');
												 
						} else if (html == 'animation') {
                            $("#add_err").html('<div class="alert alert-danger"> \
                                                 <strong>Le champ Animation</strong> est requis.  Il doit contenir au moins 5 caractères \ \
                                                 </div>');

                        } else if (html == 'description') {
                            $("#add_err").html('<div class="alert alert-danger"> \
                                                 <strong>Le champ description</strong> est requis. Il doit contenir au moins 20 caractères \ \
                                                 </div>');

                        }  else  {
                            $("#add_err").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');
                        }
                    },
                    beforeSend: function () {
                        $("#add_err").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>


<div class="container col-lg-12">
<h1>Ajout personnage</h1>
<div id="add_err"></div>
    <div class="row">
        
        <form role="form" enctype="multipart/form-data">
            <div  class="form-group col-lg-4">
                <label for="name">Nom</label>
                <input type="text" name="name" id="name">
            
            </div>

            <div class="form-group col-lg-4">
                <label for="animation">Animation</label>
                <input type="text" name="animation" id="animation">
            </div>

            <div class="form-group col-lg-4">
                <label for="description">Description</label>
                <input type="text" name="description" id="description">
            </div>

            <div class="form-group col-lg-4">
                <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                <input type="file" name="image" id="file" />
            </div>
            <div class="form-group col-lg-12">
                    <button type="submit" id="register" class="btn btn-default">Submit</button>
            </div>
        </form>
    </div>
</div>

<div>
    <div>
        <?php echo $donnees['name']; ?>
    </div>

    <div>
        <?php echo $donnees['animation']; ?>
    </div>

    <div>
        <?php echo $donnees['description']; ?>
    </div>
</div>



<?php require_once 'footer.php';