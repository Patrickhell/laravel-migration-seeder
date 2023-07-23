<?php

namespace Database\Seeders;

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
    public function run()
    {
        //

        $trainList = [

            [
                'companie' => 'Trenitalia',
                'departure_station' => 'Stazione Santa Maria Novella',
                'arrival_station' => 'Milano Centrale',
                'departure' => '07:30',
                'arrival' => '11:30',
                'train_number' => 458,
                'railroad_passenger_number' => 15,
                'departing_trains_today' => '2023.08.03',
                'in_time' => true,
                'cancelled' => false,


            ],

            [
                'companie' => 'Trenitalia',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Perugia',
                'departure' => '10:05',
                'arrival' => '14:00',
                'train_number' => 417,
                'railroad_passenger_number' => 11,
                'departing_trains_today' => '2023.08.09',
                'in_time' => true,
                'cancelled' => false,


            ],
            [
                'companie' => 'Italo Treno',
                'departure_station' => 'Venezia Centrale',
                'arrival_station' => 'Bologna Centrale',
                'departure' => '20:55',
                'arrival' => '23:00',
                'train_number' => 182,
                'railroad_passenger_number' => 18,
                'departing_trains_today' => '2023.08.24',
                'in_time' => false,
                'cancelled' => true,


            ],
            [
                'companie' => 'Freccia Rossa',
                'departure_station' => 'Napoli Centrale',
                'arrival_station' => 'Torino Porta Nuova',
                'departure' => '12:00',
                'arrival' => '19:55',
                'train_number' => 789,
                'railroad_passenger_number' => 13,
                'departing_trains_today' => '2023.07.23',
                'in_time' => false,
                'cancelled' => false,


            ],
            [
                'companie' => 'Trenitalia',
                'departure_station' => 'Bologna Centrale',
                'arrival_station' => 'Firenze Rifredi',
                'departure' => '11:35',
                'arrival' => '15:20',
                'train_number' => 128,
                'railroad_passenger_number' => 16,
                'departing_trains_today' => '2023.07.23',
                'in_time' => true,
                'cancelled' => false,


            ],
            [
                'companie' => 'Italo Treno',
                'departure_station' => 'Parma ',
                'arrival_station' => 'Siena',
                'departure' => '17:55',
                'arrival' => '21:30',
                'train_number' => 756,
                'railroad_passenger_number' => 10,
                'departing_trains_today' => '2023.07.23',
                'in_time' => false,
                'cancelled' => true,


            ],

        ];

        foreach ($trainList as $train) {

            $newTrain = new Train();
            $newTrain->companie = $train['companie'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure = $train['departure'];
            $newTrain->arrival = $train['arrival'];
            $newTrain->train_number = $train['train_number'];
            $newTrain->railroad_passenger_number = $train['railroad_passenger_number'];
            $newTrain->departing_trains_today = $train['departing_trains_today'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->cancelled = $train['cancelled'];
            $newTrain->save();
        }
    }
}
