<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Profession;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Profession::create(['title'=>'backEnd-developer',]);
       Profession::create(['title'=>'frontEnd-developer',]);
       Profession::create(['title'=>'fullStack-developer',]);
       Profession::create(['title'=>'project-manager',]);
    }
}