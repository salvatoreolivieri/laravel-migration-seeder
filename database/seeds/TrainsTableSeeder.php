<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 100; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->word();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $newTrain->numero_carrozze = $faker->numberBetween(3, 10);
            $newTrain->save();
        }


        // $newTrain = new Train();
        // $newTrain->azienda = 'Italo';
        // $newTrain->stazione_di_partenza = 'Bologna';
        // $newTrain->stazione_di_arrivo = 'Firenze';
        // $newTrain->orario_di_partenza = '14:15:00';
        // $newTrain->orario_di_arrivo = '15:10:00';
        // $newTrain->codice_treno = 'CD502SZ';
        // $newTrain->numero_carrozze = '8';
        // $newTrain->save();


    }
}
