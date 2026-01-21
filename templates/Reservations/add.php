<div class="container">

    <div class="card shadow p-4">
        <h1 class="mb-4">Nueva reserva</h1>

        <?= $this->Form->create($reservation) ?>

        <div class="mb-3">
            <?= $this->Form->control('date', [
    'type' => 'date',
    'label' => 'Fecha',
    'class' => 'form-control',
    'min' => date('Y-m-d')   // 🔥 bloquea fechas pasadas
]) ?>

        </div>

        <div class="mb-3">
            <?= $this->Form->control('table_id', [
                'options' => $tables,
                'label' => 'Mesa',
                'class' => 'form-select',
                'error' => false
            ]) ?>
        </div>

        <div class="mb-3">
            <?= $this->Form->control('time_slot_id', [
                'options' => $timeSlots,
                'label' => 'Tramo horario',
                'class' => 'form-select',
                'error' => false
            ]) ?>
        </div>

        <?= $this->Form->button('Reservar', ['class' => 'btn btn-primary']) ?>

        <?= $this->Form->end() ?>
    </div>

</div>
