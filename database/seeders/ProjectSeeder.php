<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    private $data = [
        [
            "title" => "Hoe kan je een document printen op je laptop? ",
            "description" => '<p>Ga naar <a href="https://hz.mynetpay.nl/Login" target="_blank">
        <i class="fa-regular fa-file"></i>Hz-print
          </a> en volg de verdere instructies.</p>'
        ],
        [
            "title" => "Hoe kan je een document inscannen en het naar je laptop sturen?",
            "description" => '<p>Je gaat naar de scanner, logt in en selecteert (Scannen).
daarna klik je op verzenden
          naar je e-mail, pas je de instellingen aan en plaats het document op de scanner.
           Zodra je op (Start) drukt, is
          de scan voltooid en heb je het bestand in je mail.</p>'
        ],
        [
            "title" => "Hoe kan je iets kopen op de hz website? Voor bijvoorbeeld de hackatron?",
            "description" => '<p>Ga naar de webshop <i class="fa-regular fa-credit-card"></i>
            <a href="https://webshop.hz.nl/WebshopApp/"
            target="_blank">HZ-webshop</a> en kies wat je wilt hebben.</p>'
        ], [
            "title" => "Hoe reserveer je een projectruimte op de hz site? ",
            "description" => '<p>Open de hz-portal pagina met je eigen inlog gegvens en klik op
          "persoonlijk menu wijzigen(de oranje knop)"en
          klik op "zelf service menu" vervolgens klik je op reserveren als je dat heb
          gedaan zie je een rode knop die je
          verder helpt met uitleg over hoe je moet reserveren</p>'
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data as $item) {
            Project::create($item);
        }
    }
}
