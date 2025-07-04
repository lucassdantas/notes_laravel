<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notes')->insert([
          [
            'user_id'=> 1,
            'title'=>'note01',
            'text'=>'note 01 text',
            'created_at'=> date('Y-m-d H:i:s'),
          ]
        ]);
    }
}
