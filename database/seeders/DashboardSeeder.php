<?php

namespace Database\Seeders;

use App\Models\Dashboard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DashboardSeeder extends Seeder
{


    private $data = [
        [
            'block' => 1,
            'course' => 'Program- & Career Orientation (PCO)',
            'assessment' => 'Presentatie',
            'grade' => 9.8,
            'credits' => 2.5
        ],
        [
            'block' => 1,
            'course' => 'Computer Science Basics (CSB)',
            'assessment' => 'Tentamen',
            'grade' => 6.6,
            'credits' => 5
        ],
        [
            'block' => 1,
            'course' => 'Programming Basics (PBA)',
            'assessment' => 'Casus examen',
            'grade' => 5.0,
            'credits' => 5
        ],
        [
            'block' => 2,
            'course' => 'Personal Professional Development: Exploration (PPD-E)',
            'assessment' => 'Criterium gericht interview',
            'credits' => 12.25
        ],
        [
            'block' => 2,
            'course' => 'IT Personality Projectweek 1',
            'assessment' => 'Portfolio',
            'credits' => 1.25
        ],
        [
            'block' => 2,
            'course' => 'IT Personality 1',
            'assessment' => 'Portfolio',
            'credits' => 1.25
        ],
        [
            'block' => 2,
            'course' => 'Object-Oriented Programming (OOP)',
            'assessment' => 'Presentatie (per groepje)',
            'grade' => 5.7,
            'credits' => 5
        ],
        [
            'block' => 2,
            'course' => 'Object-Oriented Programming (OOP)',
            'assessment' => 'Tentamen',
            'grade' => 7.1,
            'credits' => 5
        ],
        [
            'block' => 3,
            'course' => 'Framework Project 1',
            'assessment' => 'Tentamen',
            'credits' => 4
        ],
        [
            'block' => 3,
            'course' => 'Framework Project 1',
            'assessment' => 'Tentamen',
            'credits' => 1
        ],
        [
            'block' => 3,
            'course' => 'Framework Project 1',
            'assessment' => 'Presentatie (per groepje)',
            'credits' => 2.5
        ],
        [
            'block' => 3,
            'course' => 'Framework Project 1',
            'assessment' => 'Portfolio',
            'credits' => 2.5
        ],
        [
            'block' => 4,
            'course' => 'Framework Project 2',
            'assessment' => 'Laatste inlevering per groepje',
            'credits' => 2.5
        ],
        [
            'block' => 4,
            'course' => 'Framework Project 2',
            'assessment' => 'Individueel Project onderzoek',
            'credits' => 2.5
        ],
        [
            'block' => 4,
            'course' => 'IT Development portfolio',
            'assessment' => 'Portfolio',
            'credits' => 5
        ],
        [
            'block' => 4,
            'course' => 'IT Personality International Week',
            'assessment' => 'Portfolio',
            'credits' => 1.25
        ],
        [
            'block' => 4,
            'course' => 'IT Personality 2',
            'assessment' => 'Portfolio',
            'credits' => 1.25
        ]
    ];


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach($this->data as $item) {
            Dashboard::create($item);
        }
    }
}
