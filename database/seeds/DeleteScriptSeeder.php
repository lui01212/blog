<?php

use Illuminate\Database\Seeder;

class DeleteScriptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('delete_scripts')->insert([
            'delete_name' => 'chapter_delete_id',
            'delete_value' => 1,
        ]);
    }
}
