<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="card shadow p-4 mt-5">
                <h1 class="mb-4 text-center">Iniciar sesión</h1>

                <?= $this->Form->create(null) ?>

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

                <?= $this->Form->button('Entrar', ['class' => 'btn btn-primary w-100']) ?>

                <?= $this->Form->end() ?>

                <p class="mt-3 text-center">
                    <?= $this->Html->link('Registrarse', ['action' => 'register']) ?>
                </p>
            </div>

        </div>
    </div>

</div>
