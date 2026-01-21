<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $table_id
 * @property int $time_slot_id
 * @property \Cake\I18n\Date $date
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Table $table
 * @property \App\Model\Entity\TimeSlot $time_slot
 */
class Reservation extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'user_id' => true,
        'table_id' => true,
        'time_slot_id' => true,
        'date' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'table' => true,
        'time_slot' => true,
    ];
}
