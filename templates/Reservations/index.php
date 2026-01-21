<div class="container">

    <h1 class="mb-4">Mis reservas</h1>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Fecha</th>
                <th>Mesa</th>
                <th>Horario</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($reservations as $res): ?>
            <tr>
                <td><?= $res->date->format('d/m/Y') ?></td>

                <td><?= h($res->table->name) ?></td>
                <td><?= h($res->time_slot->label) ?></td>

                <td class="text-center">

                    <!-- Botón Ver -->
                    <?= $this->Html->link(
                        'Ver',
                        ['action' => 'view', $res->id],
                        ['class' => 'btn btn-sm btn-info me-2']
                    ) ?>

                    <!-- Botón Eliminar -->
                    <?= $this->Form->postLink(
                        'Eliminar',
                        ['action' => 'delete', $res->id],
                        [
                            'confirm' => '¿Seguro que quieres eliminar esta reserva?',
                            'class' => 'btn btn-sm btn-danger'
                        ]
                    ) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
