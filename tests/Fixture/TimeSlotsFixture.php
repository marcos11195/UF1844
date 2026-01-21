<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TimeSlotsFixture
 */
class TimeSlotsFixture extends TestFixture
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
                'label' => 'Lorem ipsum dolor sit amet',
                'start_time' => '16:28:43',
                'end_time' => '16:28:43',
                'created' => '2026-01-21 16:28:43',
                'modified' => '2026-01-21 16:28:43',
            ],
        ];
        parent::init();
    }
}
