<?php include("db.php"); ?>
<?php include("includes/header.php"); ?>


<div class="container p-4">

    <div class="row">

        <div class="col-md-4">

            <div class="card card-body">

                <form action="save.php" method="POST">

                    <div class="mb-3">

                        <input name="titulo" type="text" class="form-control" placeholder="Escribe aquí el título" autofocus>

                    </div>


                    <div class="mb-3">

                        <textarea name="descripcion" rows="2" type="text" class="form-control" placeholder="Escribe aquí la descripción"></textarea>

                    </div>


                    <div class="d-grid gap-2">
                        <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
                    </div>


                </form>

            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>