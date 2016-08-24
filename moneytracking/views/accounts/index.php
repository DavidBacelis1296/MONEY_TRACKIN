<h2>Cuentas</h2>
<div class="table-responsive">
    <table class="table">
        <tr>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Accion</th>
        </tr>
    <?php foreach ($accounts as $account): ?>
        <tr>
            <td><?php echo $account["name"]; ?></td>
            <td><?php echo $account["user_id"]; ?></td>
            <td>
                <a href="<?php echo APP_URL; ?>accounts/edit/<?php echo $account['id']; ?>">Editar</a>
                <a href="<?php echo APP_URL; ?>accounts/delete/<?php echo $account['id']; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
</div>
<a href="<?php echo APP_URL; ?>accounts/add" class="btn btn-default" role="button">Agregar nueva cuenta</a>