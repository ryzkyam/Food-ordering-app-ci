<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Faker\Factory;

class datamakanan extends Controller
{
    public function index()
    {
        $faker = Factory::create();

        $data['dummy_data'] = [];

        for ($i = 0; $i < 10; $i++) {
            $data['dummy_data'][] = [
                'name' => $faker->sentence(2),
                'No-table' => $faker->numberBetween(10, 100),
                'address' => $faker->word,
            ];
        }

        return view('datamakanan/index', $data);
    }
}
