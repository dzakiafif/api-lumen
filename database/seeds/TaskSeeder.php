<?php

/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 06/04/17
 * Time: 23:33
 */

use Illuminate\Database\Seeder;
use App\Task;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'name' => 'lorem ipsum',
            'status' => 'done'
        ]);

        Task::create([
            'name' => 'something',
            'status' => 'no'
        ]);
    }
}