<?php

use Illuminate\Database\Seeder;

use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTrain = new Train();
        $newTrain->azienda = 'Italo';
        $newTrain->stazione_di_partenza = 'Bologna';
        $newTrain->stazione_di_arrivo = 'Firenze';
        $newTrain->stazione_di_arrivo = 'Firenze';
        $newTrain->orario_di_partenza = '14:15:00';
        $newTrain->orario_di_arrivo = '15:10:00';
        $newTrain->codice_treno = 'CD502SZ';
        $newTrain->numero_carrozze = '8';
        $newTrain->save();


    }
}
