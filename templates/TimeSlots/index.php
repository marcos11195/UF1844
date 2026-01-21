<div class="container">

    <h1 class="mb-4">Tramos horarios</h1>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Etiqueta</th>
                <th>Inicio</th>
                <th>Fin</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($timeSlots as $slot): ?>
            <tr>
                <td><?= h($slot->label) ?></td>
                <td><?= h($slot->start_time) ?></td>
                <td><?= h($slot->end_time) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

   

</div>
