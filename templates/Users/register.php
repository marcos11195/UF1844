<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="card shadow p-4 mt-5">
                <h1 class="mb-4 text-center">Registrarse</h1>

                <?= $this->Form->create(null) ?>

                <div class="mb-3">
                    <?= $this->Form->control('name', [
                        'label' => 'Nombre',
                        'class' => 'form-control'
                    ]) ?>
                </div>

                <div class="mb-3">
                    <?= $this->Form->control('email', [
                        'label' => 'Correo electrónico',
                        'class' => 'form-control'
                    ]) ?>
                </div>

                <div class="mb-3">
                    <?= $this->Form->control('password', [
                        'label' => 'Contraseña',
                        'class' => 'form-control'
                    ]) ?>
                </div>

                <?= $this->Form->button('Crear cuenta', ['class' => 'btn btn-success w-100']) ?>

                <?= $this->Form->end() ?>

                <p class="mt-3 text-center">
                    <?= $this->Html->link('Iniciar sesión', ['action' => 'login']) ?>
                </p>
            </div>

        </div>
    </div>

</div>
