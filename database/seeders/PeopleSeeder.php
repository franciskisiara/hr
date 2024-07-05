<?php

namespace Database\Seeders;

use App\Models\HumanResourceType;
use App\Models\People;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach($this->people() as $person)
        {
            People::firstOrcreate([
                'staffId' => $person['staffId']
            ],  array_merge($person, [
                'objectType' => 'person',
            ]));
        }
    }

    private function people()
    {
        return [
            [
                'staffId' => '10000005',
                'manager' => null,
                'HRType' => 'Employee',
                'title' => 'CEO',
                'department' => 'Executive',
                'firstName' => 'Joe',
                'middleName' => null,
                'lastName' => 'Mxyzptlk',
            ],
            [
                'staffId' => '10000010',
                'manager' => '10000005',
                'HRType' => 'Employee',
                'title' => 'VP',
                'department' => 'Executive',
                'firstName' => 'David',
                'middleName' => null,
                'lastName' => 'Steadman',
            ],
            [
                'staffId' => '10000033',
                'manager' => '10000010',
                'HRType' => 'Employee',
                'title' => 'Sales Lead',
                'department' => 'Sales',
                'firstName' => 'Steve',
                'middleName' => null,
                'lastName' => 'Gates',
            ],
            [
                'staffId' => '10000042',
                'manager' => '10000005',
                'HRType' => 'Employee',
                'title' => 'VP',
                'department' => 'Executive',
                'firstName' => 'Jeff',
                'middleName' => null,
                'lastName' => 'Ingalls',
            ],
            [
                'staffId' => '10000055',
                'manager' => '10000042',
                'HRType' => 'Contractor',
                'title' => 'Engineer',
                'department' => 'Engineering',
                'firstName' => 'Frank',
                'middleName' => 'Howard',
                'lastName' => 'Jackson',
            ],
            [
                'staffId' => '10000058',
                'manager' => '10000010',
                'HRType' => 'Contractor',
                'title' => 'Sales Associate',
                'department' => 'Sales',
                'firstName' => 'Amber',
                'middleName' => 'Nicole',
                'lastName' => 'Smith',
            ],
            [
                'staffId' => '10000059',
                'manager' => '10000042',
                'HRType' => 'Employee',
                'title' => 'Sr. Engineer',
                'department' => 'Engineering',
                'firstName' => 'Vern',
                'middleName' => null,
                'lastName' => 'Rottman',
            ],
            [
                'staffId' => '10000064',
                'manager' => '10000042',
                'HRType' => 'Employee',
                'title' => 'Sr. Technologist',
                'department' => 'IT',
                'firstName' => 'Dave',
                'middleName' => null,
                'lastName' => 'Stevens',
            ],
            [
                'staffId' => '10000073',
                'manager' => '10000010',
                'HRType' => 'Employee',
                'title' => 'Human Resource',
                'department' => 'HR',
                'firstName' => 'Melanie',
                'middleName' => null,
                'lastName' => 'Young',
            ],
            [
                'staffId' => '10000077',
                'manager' => '10000042',
                'HRType' => 'Employee',
                'title' => 'Architect',
                'department' => 'Engineering',
                'firstName' => 'Lincoln',
                'middleName' => 'Abraham',
                'lastName' => 'Hanks',
            ],
            [
                'staffId' => '10000079',
                'manager' => '10000042',
                'HRType' => 'Contractor',
                'title' => 'Developer',
                'department' => 'IT',
                'firstName' => 'Dan',
                'middleName' => null,
                'lastName' => 'Petrak',
            ],
            [
                'staffId' => '10000081',
                'manager' => '10000010',
                'HRType' => 'Employee',
                'title' => 'Support Engineer',
                'department' => 'IT',
                'firstName' => 'Tim',
                'middleName' => null,
                'lastName' => 'Mack',
            ],
            [
                'staffId' => '10000083',
                'manager' => '10000010',
                'HRType' => 'Employee',
                'title' => 'Support Engineer',
                'department' => 'IT',
                'firstName' => 'Glen',
                'middleName' => null,
                'lastName' => 'Zay',
            ],
            [
                'staffId' => '10000091',
                'manager' => '10000042',
                'HRType' => 'Employee',
                'title' => 'Architect',
                'department' => 'Engineering',
                'firstName' => 'Reagan',
                'middleName' => 'Ethel',
                'lastName' => 'Thompson',
            ],
            [
                'staffId' => '10000093',
                'manager' => '10000010',
                'HRType' => 'Contractor',
                'title' => 'Intern',
                'department' => 'HR',
                'firstName' => 'Chuck',
                'middleName' => null,
                'lastName' => 'Morris',
            ],
            [
                'staffId' => '10000056',
                'manager' => '10000042',
                'HRType' => 'Employee',
                'title' => 'Developer',
                'department' => 'IT',
                'firstName' => 'Fred',
                'middleName' => null,
                'lastName' => 'Jackson',
            ],
        ];
    }
}
