<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $companiesList = [
            'Trenitalia',
            'Italo Treno',
            'Deutsche Bahn',
            'Renfe',
            'Frecciargento',
            'Frecciabianca',
            'Intercity',
            'Intercity Notte',
            'Frecciarossa 1000',
            'Eurocity',

        ];

        $trainStationList = [
            'Napoli Afragola',
            ' Milano Centrale',
            'Genova Brignole',
            'Firenze Santa Maria Novella',
            'Roma Tiburtina',
            'Palermo Centrale',
            ' Bologna Centrale',
            'Reggio Emilia AV Mediopadana',
            'Torino Porta Nuova',
            'Roma Termini'

        ];

        for ($x = 0; $x < 20; $x++) {

            $newTrain = new Train();
            $newTrain->companie = $faker->randomElement($companiesList);
            $newTrain->departure_station = $faker->randomElement($trainStationList);
            $newTrain->arrival_station = $faker->randomElement($trainStationList);
            $newTrain->departure = $faker->time();
            $newTrain->arrival = $faker->time();
            $newTrain->train_number = $faker->randomNumber(3, true);
            $newTrain->railroad_passenger_number = $faker->randomNumber(2, true);
            $newTrain->departing_trains_today = $faker->dateTimeBetween('0 week', '+2 week');
            $newTrain->in_time = $faker->boolean();;
            $newTrain->cancelled = $faker->boolean();;
            $newTrain->save();
        }
    }
}
