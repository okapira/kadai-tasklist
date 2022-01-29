<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'status' => 'test status 1',
            'task' => 'test task 1'
        ]);
        DB::table('tasks')->insert([
            'status' => 'test status 2',
            'task' => 'test task 2'
        ]);
        DB::table('tasks')->insert([
            'status' => 'test status 3',
            'task' => 'test task 3'
        ]);
    }
}
