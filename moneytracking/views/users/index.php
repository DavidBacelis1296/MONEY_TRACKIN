<h2>Usuarios</h2>
<table class="table">
    <tr>
        <th>Nombre de Usuario</th>
        <th>Rol</th>
        <th>Accion</th>
    </tr>
<?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user["username"]; ?></td>
        <td><?php echo $user["rol"]; ?></td>
        <td>
            <a href="<?php echo APP_URL; ?>users/edit/<?php echo $user['id']; ?>">Editar</a>
            <a href="<?php echo APP_URL; ?>users/delete/<?php echo $user['id']; ?>">Eliminar</a>
            <a href="<?php echo APP_URL; ?>users/show/<?php echo $user['id']; ?>">Mostrar</a>
        </td>
    </tr>
<?php endforeach; ?>
</table>
<a href="<?php echo APP_URL; ?>users/add" class="btn btn-default" role="button">Agregar nuevo usuario</a>