<?php

use Illuminate\Database\Seeder;

class Good extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Good::class, 50)->create();
    }
}
