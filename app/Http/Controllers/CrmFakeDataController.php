<?php

namespace App\Http\Controllers;

use App\model\CrmPersons;
use Faker\Factory;
use Illuminate\Http\Request;

class CrmFakeDataController extends Controller
{
    public function generatePersons(int $count=40)
    {
        $faker = Factory::create();

        for ($i=0; $i < $count; $i++)
        {
            CrmPersons::create([
                'id' => $faker->uuid,
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,

            ]);
        }
    }
}
