<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TimeSlot $timeSlot
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Time Slots'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="timeSlots form content">
            <?= $this->Form->create($timeSlot) ?>
            <fieldset>
                <legend><?= __('Add Time Slot') ?></legend>
                <?php
                    echo $this->Form->control('label');
                    echo $this->Form->control('start_time');
                    echo $this->Form->control('end_time');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
