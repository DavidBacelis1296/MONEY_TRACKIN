<h2>Eliminar usuario</h2>
<form action="<?php echo APP_URL; ?>users/delete" method="post">
    <div class="form-group">
        <p class="help-block">¿Desea eliminar usuario? <b><?php echo $user["name"]; ?></b></p>
        <input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
    </div>
    <input type="submit" value="Delete" class="btn btn-danger">
</form> 