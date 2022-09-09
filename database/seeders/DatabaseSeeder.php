<?php

namespace Database\Seeders;



use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

         Listing::create([
             'TITLE' => 'LARAVEL SENIOR DEVELOPER', 
             'TAGS' => 'LARAVEL, JAVASCRIPT',
             'COMPANY' => 'ACME CORP',
             'LOCATION' => 'BOSTON, MA',
             'EMAIL' => 'EMAIL1@EMAIL.COM',
             'WEBSITE' => 'HTTPS://WWW.ACME.COM',
             'DESCRIPTION' => 'LOREM IPSUM DOLOR SIT AMET CONSECTETUR ADIPISICING ELIT. IPSAM MINIMA ET ILLO REPREHENDERIT QUAS POSSIMUS VOLUPTAS REPUDIANDAE CUM EXPEDITA, EVENIET ALIQUID, QUAM ILLUM QUAERAT CONSEQUATUR! EXPEDITA AB CONSECTETUR TENETUR DELENSITI?'
         ]);

         LISTING::CREATE([
             'TITLE' => 'FULL-STACK ENGINEER',
             'TAGS' => 'LARAVEL, BACKEND ,API',
             'COMPANY' => 'STARK INDUSTRIES',
             'LOCATION' => 'NEW YORK, NY',
             'EMAIL' => 'EMAIL2@EMAIL.COM',
             'WEBSITE' => 'HTTPS://WWW.STARKINDUSTRIES.COM',
             'DESCRIPTION' => 'LOREM IPSUM DOLOR SIT AMET CONSECTETUR ADIPISICING ELIT. IPSAM MINIMA ET ILLO REPREHENDERIT QUAS POSSIMUS VOLUPTAS REPUDIANDAE CUM EXPEDITA, EVENIET ALIQUID, QUAM ILLUM QUAERAT CONSEQUATUR! EXPEDITA AB CONSECTETUR TENETUR DELENSITI?'
           ]);
    }
}
