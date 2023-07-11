<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            ['nome' => 'Arts & Literature', 'value' => 'arts'],
            ['nome' => 'Film & TV', 'value' => 'food_and_drink'],
            ['nome' => 'General Knowledge', 'value' => 'general_knowledge'],
            ['nome' => 'Geography', 'value' => 'geography'],
            ['nome' => 'History', 'value' => 'history'],
            ['nome' => 'Music', 'value' => 'music'],
            ['nome' => 'Science', 'value' => 'science'],
            ['nome' => 'Society & Culture', 'value' => 'society_and_culture'],
            ['nome' => 'Sport & Leisure', 'value' => 'sport_and_leisure'],
        ]);
    }
}
