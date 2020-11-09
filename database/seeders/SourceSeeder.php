<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('source_for_news')->insert($this->getData());
    }

    public function getData(): array
    {
        $faker = Factory::create('ru_RU');
        $data = [];
        for ($i=0; $i<10; $i++){
            $data[]=[
                'name'=> Str::random(10),
                'link'=>$faker->url,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        return $data;
    }
}
