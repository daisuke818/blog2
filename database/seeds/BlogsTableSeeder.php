<?php

use Illuminate\Database\Seeder;
use App\Models\Blog2;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Blog2::class, 15)->create();
    }
}
