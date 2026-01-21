<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TablesFixture
 */
class TablesFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'seats' => 1,
                'created' => '2026-01-21 16:28:40',
                'modified' => '2026-01-21 16:28:40',
            ],
        ];
        parent::init();
    }
}
