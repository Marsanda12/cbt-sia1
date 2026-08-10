<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectQuestionSeeder extends Seeder
{
    protected array $subjects = [
        [
            'name' => 'IPA',
            'description' => 'Ilmu Pengetahuan Alam',
        ],
        [
            'name' => 'IPS',
            'description' => 'Ilmu Pengetahuan Sosial',
        ],
        [
            'name' => 'Matematika',
            'description' => 'Mata Pelajaran Matematika',
        ],
    ];

    public function run(): void
    {
        foreach ($this->subjects as $data) {

            $subject = Subject::firstOrCreate(
                [
                    'name' => $data['name'],
                ],
                [
                    'description' => $data['description'],
                    'is_active' => true,
                ]
            );

            // Jika belum ada soal
            if ($subject->questions()->count() == 0) {

                Question::factory()
                    ->count(150)
                    ->forSubject($subject)
                    ->withAnswers()
                    ->create();

                $this->command->info("{$data['name']} berhasil dibuat 150 soal.");
            } else {

                $this->command->warn("{$data['name']} sudah memiliki {$subject->questions()->count()} soal.");
            }
        }

        $this->command->info('=================================');
        $this->command->info('450 Soal Berhasil Dibuat');
        $this->command->info('1800 Jawaban Berhasil Dibuat');
        $this->command->info('=================================');
    }
}