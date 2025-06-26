<?php

namespace Database\Seeders;

use App\Models\ExternalWorker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExternalWorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $externalWorkers = [
            [
                'person_id' => 41,
                'apartament_id' => 1,
                'job_title' => 'Enfermero/a',
                'start_date' => '2023-01-01',
                'end_date' => null,
            ],
            [
                'person_id' => 42,
                'apartament_id' => 2,
                'job_title' => 'Kinesiólogo/a',
                'start_date' => '2023-02-01',
                'end_date' => null,
            ],
            [
                'person_id' => 43,
                'apartament_id' => 11,
                'job_title' => 'Enfermero/a',
                'start_date' => '2023-03-01',
                'end_date' => null,
            ],
            [
                'person_id' => 44,
                'apartament_id' => 12,
                'job_title' => 'Enfermero/a',
                'start_date' => '2023-04-01',
                'end_date' => null,
            ],
            [
                'person_id' => 45,
                'apartament_id' => 13,
                'job_title' => 'Enfermero/a',
                'start_date' => '2023-04-01',
                'end_date' => null,
            ],
            [
                'person_id' => 46,
                'apartament_id' => 14,
                'job_title' => 'Asespor/a',
                'start_date' => '2023-04-01',
                'end_date' => null,
            ],
            [
                'person_id' => 47,
                'apartament_id' => 15,
                'job_title' => 'Asespor/a',
                'start_date' => '2023-04-01',
                'end_date' => null,
            ],
            [
                'person_id' => 48,
                'apartament_id' => 16,
                'job_title' => 'Asespor/a',
                'start_date' => '2023-04-01',
                'end_date' => null,
            ],
            [
                'person_id' => 49,
                'apartament_id' => 17,
                'job_title' => 'Asespor/a',
                'start_date' => '2023-04-01',
                'end_date' => null,
            ],
            [
                'person_id' => 50,
                'apartament_id' => 18,
                'job_title' => 'Asespor/a',
                'start_date' => '2023-04-01',
                'end_date' => null,
            ],
            [
                'person_id' => 51,
                'apartament_id' => 19,
                'job_title' => 'Asespor/a',
                'start_date' => '2023-04-01',
                'end_date' => null,
            ],
            [
                'person_id' => 52,
                'apartament_id' => 20,
                'job_title' => 'Asespor/a',
                'start_date' => '2023-04-01',
                'end_date' => null,
            ],
            [
                'person_id' => 53,
                'apartament_id' => 21,
                'job_title' => 'Asespor/a',
                'start_date' => '2023-04-01',
                'end_date' => null,
            ],
            [
                'person_id' => 54,
                'apartament_id' => 22,
                'job_title' => 'Asespor/a',
                'start_date' => '2023-04-01',
                'end_date' => null,
            ],
            [
                'person_id' => 55,
                'apartament_id' => 23,
                'job_title' => 'Asespor/a',
                'start_date' => '2023-04-01',
                'end_date' => null,
            ],
            [
                'person_id' => 56,
                'apartament_id' => 24,
                'job_title' => 'Asespor/a',
                'start_date' => '2023-04-01',
                'end_date' => null,
            ],
            [
                'person_id' => 57,
                'apartament_id' => 25,
                'job_title' => 'Asespor/a',
                'start_date' => '2023-04-01',
                'end_date' => null,
            ],
            [
                'person_id' => 58,
                'apartament_id' => 34,
                'job_title' => 'Asespor/a',
                'start_date' => '2023-04-01',
                'end_date' => null,
            ],
            [
                'person_id' => 59,
                'apartament_id' => 35,
                'job_title' => 'Asespor/a',
                'start_date' => '2023-04-01',
                'end_date' => null,
            ],
            [
                'person_id' => 60,
                'apartament_id' => 36,
                'job_title' => 'Asespor/a',
                'start_date' => '2023-04-01',
                'end_date' => null,
            ],

        ];

        foreach ($externalWorkers as $worker) {
            try {
                ExternalWorker::create($worker);
                $this->command->info("[OK] External Worker: {$worker['job_title']} for Apartment ID: {$worker['apartament_id']} creado 💼");
            } catch (\Exception $e) {
                $this->command->error("[Error] al crear el trabajador externo: {$worker['job_title']} for Apartment ID: {$worker['apartament_id']}: {$e->getMessage()}");
            }
        }
    }
}
