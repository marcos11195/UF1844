<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReservationsFixture
 */
class ReservationsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'table_id' => 1,
                'time_slot_id' => 1,
                'date' => '2026-01-21',
                'created' => '2026-01-21 16:28:45',
                'modified' => '2026-01-21 16:28:45',
            ],
        ];
        parent::init();
    }
}
