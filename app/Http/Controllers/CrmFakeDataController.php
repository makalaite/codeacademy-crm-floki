<?php

namespace App\Http\Controllers;

use App\model\CrmClients;
use App\model\CrmClientsPersonsPositionConnections;
use App\model\CrmClientsPositions;
use App\model\CrmPersons;
use App\model\CrmPersonTypes;
use App\model\CrmProjectLogins;
use App\model\CrmProjectLoginTypes;
use App\model\CrmProjects;
use App\model\CrmProjectsLoginsConnections;
use App\model\CrmProjectsPersonConnection;
use App\model\CrmProjectTypes;
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

    public function generateClients(int $count = 20)
    {
        $faker = Factory::create();

        for ($i=0; $i < $count; $i++)
        {
            CrmClients::create([
                'title' => $faker->name,
                'juridical_fizical' => $faker -> randomElement(['J', 'F'])

            ]);
        }
    }

    public function generateClientsPositions (int $count=20)
    {
        $faker = Factory::create();

        for ($i=0; $i < $count; $i++)
        {
            CrmClientsPositions::create([
                'name' => $faker->name,
                'description' => $faker-> realText($maxNbChars = 200, $indexSize = 2),

            ]);
        }
    }

    public function generatePersonTypes (int $count=20)
    {
        $faker = Factory::create();

        for ($i=0; $i < $count; $i++)
        {
            CrmPersonTypes::create([
                'name' => $faker->name,
                'description' => $faker-> realText($maxNbChars = 200, $indexSize = 2),
            ]);
        }
    }

    public function generateClientsPersonsPositionConnections (int $count=20)
    {
        $faker = Factory::create();

        //dd(CrmClients::select('id')->get()->random()->id);
        //dd (CrmPersons::select('id')->get()->random()->id);

        for ($i=0; $i < $count; $i++)
        {
            CrmClientsPersonsPositionConnections::create([
                'client_id' => CrmClients::select('id')->get()->random()->id,
                'person_id' => CrmPersons::select('id')->get()->random()->id,
                'position_id' => CrmClientsPositions::select('id')->get()->random()->id,
            ]);
        }
    }


    public function generateProjectTypes (int $count=20)
    {
        $faker = Factory::create();

        for ($i=0; $i < $count; $i++)
        {
            CrmProjectTypes::create([
                'names' => $faker->name,
                'description' => $faker-> realText($maxNbChars = 200, $indexSize = 2),
            ]);
        }
    }


    public function generateProjects (int $count=20)
    {
        $faker = Factory::create();

        for ($i=0; $i < $count; $i++)
        {
            CrmProjects::create([
                'client_id' => CrmClients::select('id')->get()->random()->id,
                'name' => $faker->name,
                'type_id' => CrmProjectTypes::select('id')->get()->random()->id,
                'description' => $faker-> realText($maxNbChars = 200, $indexSize = 2),

            ]);
        }
    }


    public function generateProjectLoginTypes (int $count=20)
    {
        $faker = Factory::create();

        for ($i=0; $i < $count; $i++)
        {
            CrmProjectLoginTypes::create([
                'name' => $faker->name,
                'description' => $faker-> realText($maxNbChars = 200, $indexSize = 2),
            ]);
        }
    }


    public function generateProjectLogins (int $count=20)
    {
        $faker = Factory::create();

        for ($i=0; $i < $count; $i++)
        {
            CrmProjectLogins::create([
                'username' => $faker->name,
                'description' => $faker-> realText($maxNbChars = 200, $indexSize = 2),
                'password' => $faker->password,
                'login_url' => $faker->url,
                'type_id' => CrmProjectLoginTypes::select('id')->get()->random()->id,
            ]);
        }
    }


    public function generateProjectsPersonConnection (int $count=20)
    {
        $faker = Factory::create();

        for ($i=0; $i < $count; $i++)
        {
            CrmProjectsPersonConnection::create([
                'project_id' => CrmProjects::select('id')->get()->random()->id,
                'person_id' => CrmPersons::select('id')->get()->random()->id,
                'type_id' => CrmPersonTypes::select('id')->get()->random()->id,
            ]);
        }
    }


    public function generateProjectsLoginsConnections (int $count=20)
    {
        $faker = Factory::create();

        for ($i=0; $i < $count; $i++)
        {
            CrmProjectsLoginsConnections::create([
                'project_id' => CrmProjects::select('id')->get()->random()->id,
                'login_id' => CrmProjectLogins::select('id')->get()->random()->id,
            ]);
        }
    }
}
