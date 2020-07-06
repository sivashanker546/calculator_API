<?php

use Illuminate\Database\Seeder;
use App\Value;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Value::class, 50)->create();
    }
}
