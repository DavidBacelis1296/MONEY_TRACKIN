<h2>Transacciones</h2>
<div class="table-responsive">
    <table class="table">
        <tr>
            <th>Descripcion</th>
            <th>Monto</th>
            <th>Fecha</th>
            <th>Cuenta</th>
            <th>Categoria</th>
            <th>Accion</th>
        </tr>
    <?php foreach ($transactions as $transaction): ?>
        <tr>
            <td><?php echo $transaction["description"]; ?></td>
            <td class="<?php if ($transaction["amount"] >= 0) echo "amount-green"; else echo "amount-red"; ?>">$ <?php echo number_format($transaction["amount"], 2, '.', ''); ?></td>
            <td><?php echo date_create($transaction["date"])->format('d/m/Y'); ?></td>
            <td><?php echo $transaction["account_id"]; ?></td>
            <td><?php echo $transaction["category_id"]; ?></td>
            <td>
                <a href="<?php echo APP_URL; ?>transactions/edit/<?php echo $transaction['id']; ?>">Editar</a>
                <a href="<?php echo APP_URL; ?>transactions/delete/<?php echo $transaction['id']; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
</div>
<a href="<?php echo APP_URL; ?>transactions/add" class="btn btn-default" role="button">Agregar transaccion</a>