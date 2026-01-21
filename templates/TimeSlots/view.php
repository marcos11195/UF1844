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
            <?= $this->Html->link(__('Edit Time Slot'), ['action' => 'edit', $timeSlot->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Time Slot'), ['action' => 'delete', $timeSlot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timeSlot->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Time Slots'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Time Slot'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="timeSlots view content">
            <h3><?= h($timeSlot->label) ?></h3>
            <table>
                <tr>
                    <th><?= __('Label') ?></th>
                    <td><?= h($timeSlot->label) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($timeSlot->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Time') ?></th>
                    <td><?= h($timeSlot->start_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Time') ?></th>
                    <td><?= h($timeSlot->end_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($timeSlot->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($timeSlot->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Reservations') ?></h4>
                <?php if (!empty($timeSlot->reservations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Table Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($timeSlot->reservations as $reservation) : ?>
                        <tr>
                            <td><?= h($reservation->id) ?></td>
                            <td><?= h($reservation->user_id) ?></td>
                            <td><?= h($reservation->table_id) ?></td>
                            <td><?= h($reservation->date) ?></td>
                            <td><?= h($reservation->created) ?></td>
                            <td><?= h($reservation->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Reservations', 'action' => 'view', $reservation->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Reservations', 'action' => 'edit', $reservation->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Reservations', 'action' => 'delete', $reservation->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $reservation->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>