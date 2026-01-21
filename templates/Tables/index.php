<div class="container">

    <h1 class="mb-4">Mesas del restaurante</h1>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Plazas</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($tables as $table): ?>
            <tr>
                <td><?= h($table->name) ?></td>
                <td><?= h($table->seats) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    

</div>
