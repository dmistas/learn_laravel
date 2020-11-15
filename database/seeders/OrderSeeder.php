<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('orders')->insert($this->getData());
    }

    public function getData(): array
    {
        $faker = Factory::create('ru_RU');
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'name' => Str::random(10),
                'phone'=> $faker->phoneNumber(),
                'email'=> Str::random(10).'@gmail.com',
                'text' => $faker->realText(mt_rand(100, 200)),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        return $data;
    }

}
