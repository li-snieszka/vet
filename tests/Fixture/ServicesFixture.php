<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServicesFixture
 */
class ServicesFixture extends TestFixture
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
                'id_service' => 1,
                'date' => '2023-01-02 20:49:56',
                'id_doctor' => 1,
                'id_type' => 1,
                'id_pet' => 1,
            ],
        ];
        parent::init();
    }
}
