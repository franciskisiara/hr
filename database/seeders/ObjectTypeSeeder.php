<?php

namespace Database\Seeders;

use App\Models\ObjectType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach($this->getObjectTypes() as $objectType)
        {
            ObjectType::firstOrcreate([
                'Name' => $objectType['Name']
            ],  $objectType);
        }
    }

    private function getObjectTypes()
    {
        return [
            [
                'Name' => 'person',
            ]
        ];
    }
}
