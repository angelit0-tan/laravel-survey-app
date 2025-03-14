<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\QuestionOption;

class QuestionsAndAnswerOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = collect([
            'question1' => [
                'name' => 'Wie bewerten Sie die <span class="font-bold">"Verhältnismäßigkeit"</span> zwischen dem Kaufwert eines Hauses in Höhe 300.000 Euro und hierfür anschließend verlangten "Instandhaltungs"-Kosten in Höhe von 2,2 Millionen Euro?',
                'options' => ['extrem un-verhältnismäßig','stark un-verhältnismäßig','nicht verhältnismäßig', 'im ausgewogenen Verhältnis']
            ],
            'questions2' => [
                'name' => 'Wenn bei einem Haus im Kaufwert von 300.000 Euro Baumaßnahmen von <span class="font-bold">2,2 Millionen Euro</span> notwendig werden, handelt es sich dann entweder nur um Kosten für "Instandhaltung", oder aber für "Restaurierung"?',
                'options' => [
                    'eindeutig "Restaurierungs"-Kosten',
                    'enorm hohe, aber nicht klar definierbare Kosten',
                    'weiß nicht',
                    'eindeutig nur "Instandhaltungs"-Kosten'
                ]
            ],
            'questions3' => [
                'name' => 'Wie finden Sie das Verhalten der Stadtverwaltung Hulst, einen Bürger - zwecks "Instandhaltung" seines denkmalgeschützten Hauses – mit einer <span class="font-bold">Strafe von 600.000 Euro</span> zu bedrohen?',
                'options' => [
                    'überhaupt nicht gerechtfertigt',
                    'nicht gerechtfertigt',
                    'gerechtfertigt',
                    'sehr gerechtfertigt'
                ]
            ],
            'questions4' => [
                'name' => 'Wie finden Sie es, wenn die <span class="font-bold">Bürgermeisterin</span> von Hulst schriftliche, mehrfach wiederholte Anfragen eines Bürgers nicht einmal beantwortet?',
                'options' => [
                    'sehr inakzeptabel',
                    'inakzeptabel',
                    'akzeptabel',
                    'völlig akzeptabel'
                ]
            ],
            'questions5' => [
                'name' => 'Was würden Sie einem Bürger von Hulst <span class="font-bold">empfehlen</span>, von dem die Stadtverwaltung / die Bürgermeisterin für die (faktisch unmögliche) Nicht-Einhaltung eines Instandhaltungs-Termins eine Strafe von 600.000 Euro kassiert?',
                'options' => [
                    'Strafanzeige wegen Nötigung/Erpressung',
                    'Öffentlicher Protest',
                    'Umziehen in einer andere Stadt',
                    'Nix. So kommt doch Geld in die Stadtkasse'
                ]
            ],
            'questions6' => [
                'name' => 'Was würden <span class="font-bold">Sie persönlich</span> wohl am liebsten tun, wenn Sie in dieser Situation wären? (Sie können hier <span class="italic">mehrere</span> Antworten ankreuzen.)',
                'options' => [
                    'Ich würde nichts tun',
                    'Ich würde rechtliche Schritte einleiten',
                    'Ich würde politisch aktiv werden',
                    'Ich würde öffentlich protestieren'
                ]
            ]
        ]);

        $questions->map(function($row, $index){
       
            $question = Question::create([
                'name' => $row['name']
            ]);

            collect($row['options'])->map(function($item, $key) use ($question) {
                QuestionOption::create([
                    'name' => $item,
                    'question_id' => $question->id
                ]);
            });
        });

    }
}
