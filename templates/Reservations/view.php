<div class="container">

    <div class="card shadow p-4">

        <h1 class="mb-4">Detalles de la reserva</h1>

        <ul class="list-group mb-4">

            <li class="list-group-item">
                <strong>Fecha:</strong> <?= $reservation->date->format('d/m/Y') ?>


            </li>

            <li class="list-group-item">
                <strong>Mesa:</strong> <?= h($reservation->table->name) ?>
            </li>

            <li class="list-group-item">
                <strong>Plazas:</strong> <?= h($reservation->table->seats) ?>
            </li>

            <li class="list-group-item">
                <strong>Horario:</strong> <?= h($reservation->time_slot->label) ?>
            </li>

        </ul>

        <?= $this->Html->link(
            'Volver a mis reservas',
            ['action' => 'index'],
            ['class' => 'btn btn-secondary']
        ) ?>

    </div>

</div>
