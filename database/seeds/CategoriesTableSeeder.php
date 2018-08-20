<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Category;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            DB::table('categories')->insert([
                'name' => implode($faker->words(),' '),
                'category_id' => (($i % 5) !== 0) ? $this->get_random_category_id() : 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }

    private function get_random_category_id()
    {
        $random_category = \App\Category::inRandomOrder()->first();
        return !is_null($random_category) ? $random_category->id : 0;
    }
}
