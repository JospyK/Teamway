<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answers = [
            [
                'id' => 1,
                'question_id' => 1,
                'type'=> "i",
                'name' => "Don't dare to interrupt them",
            ],
            [
                'id' => 2,
                'question_id' => 1,
                'type'=> "i",
                'name' => "Think it's more important to give them some of your time; work can wait",
            ],
            [
                'id' => 3,
                'question_id' => 1,
                'type'=> "e",
                'name' => "Listen, but with only with half an ear"],
            [
                'id' => 4,
                'question_id' => 1,
                'type'=> "e",
                'name' => "Interrupt and explain that you are really busy at the moment",
            ],

            [
                'id' => 5,
                'question_id' => 2,
                'type'=> "i",
                'name' => "Look at your watch every two minutes",
            ],
            [
                'id' => 6,
                'question_id' => 2,
                'type'=> "i",
                'name' => "Bubble with inner anger, but keep quiet",
            ],
            [
                'id' => 7,
                'question_id' => 2,
                'type'=> "e",
                'name' => "Explain to other equally impatient people in the room that the doctor is always running late",
            ],
            [
                'id' => 8,
                'question_id' => 2,
                'type'=> "e",
                'name' => "Complain in a loud voice, while tapping your foot impatiently",
            ],

            [
                'id' => 9,
                'question_id' => 3,
                'type'=> "i",
                'name' => "Don't dare contradict them",
            ],
            [
                'id' => 10,
                'question_id' => 3,
                'type'=> "I",
                'name' => "Think that they are obviously right",
            ],
            [
                'id' => 11,
                'question_id' => 3,
                'type'=> "e",
                'name' => "Defend your own point of view, tooth and nail",
            ],
            [
                'id' => 12,
                'question_id' => 3,
                'type'=> "e",
                'name' => "Continuously interrupt your colleague",
            ],

            [
                'id' => 13,
                'question_id' => 4,
                'type'=> "i",
                'name' => "Are a bit too far towards the back so don't really hear what the guide is saying",
            ],
            [
                'id' => 14,
                'question_id' => 4,
                'type'=> "i",
                'name' => "Follow the group without question",
            ],
            [
                'id' => 15,
                'question_id' => 4,
                'type'=> "e",
                'name' => "Make sure that everyone is able to hear properly",
            ],
            [
                'id' => 16,
                'question_id' => 4,
                'type'=> "e",
                'name' => "Are right up the front, adding your own comments in a loud voice",
            ],

            [
                'id' => 17,
                'question_id' => 5,
                'type'=> "i",
                'name' => "Ask you to tell a story in front of everyone else",
            ],
            [
                'id' => 18,
                'question_id' => 5,
                'type'=> "e",
                'name' => "Talk privately between themselves",
            ],
            [
                'id' => 19,
                'question_id' => 5,
                'type'=> "i",
                'name' => "Hang around you all evening",
            ],
            [
                'id' => 20,
                'question_id' => 5,
                'type'=> "e",
                'name' => "Always drag the conversation back to themselves",
            ],

            [
                'id' => 21,
                'question_id' => 6,
                'type'=> "i",
                'name' => "Think it's for the best — it was a lame joke anyway",
            ],
            [
                'id' => 22,
                'question_id' => 6,
                'type'=> "e",
                'name' => "Wait to share it with your friends after work",
            ],
            [
                'id' => 23,
                'question_id' => 6,
                'type'=> "i",
                'name' => "Try again a bit later with one of your colleagues",
            ],
            [
                'id' => 24,
                'question_id' => 6,
                'type'=> "e",
                'name' => "Keep telling it until they pay attention",
            ],

            [
                'id' => 25,
                'question_id' => 7,
                'type'=> "i",
                'name' => "Know that somebody will find a reason to come and bother you",
            ],
            [
                'id' => 26,
                'question_id' => 7,
                'type'=> "i",
                'name' => "Heave a sigh of relief and look forward to a day without stress",
            ],
            [
                'id' => 27,
                'question_id' => 7,
                'type'=> "e",
                'name' => "Question your colleagues about a project that's been worrying you",
            ],
            [
                'id' => 28,
                'question_id' => 7,
                'type'=> "e",
                'name' => "Pick up the phone and start filling up your agenda with meetings",
            ],

            [
                'id' => 29,
                'question_id' => 8,
                'type'=> "e",
                'name' => "Don't dare show that you don't know anything about the subject",
            ],
            [
                'id' => 30,
                'question_id' => 8,
                'type'=> "i",
                'name' => "Barely follow the discussion",
            ],
            [
                'id' => 31,
                'question_id' => 8,
                'type'=> "e",
                'name' => "Ask lots of questions to learn more about it",
            ],
            [
                'id' => 32,
                'question_id' => 8,
                'type'=> "i",
                'name' => "Change the subject of discussion",
            ],

            [
                'id' => 33,
                'question_id' => 9,
                'type'=> "i",
                'name' => "Notice that they're alone, but don't go over to talk with them",
            ],
            [
                'id' => 34,
                'question_id' => 9,
                'type'=> "e",
                'name' => "Go and have a chat with them",
            ],
            [
                'id' => 35,
                'question_id' => 9,
                'type'=> "i",
                'name' => "Shoot some friendly smiles in their direction",
            ],
            [
                'id' => 36,
                'question_id' => 9,
                'type'=> "e",
                'name' => "Hardly notice them at all",
            ],

            [
                'id' => 37,
                'question_id' => 10,
                'type'=> "i",
                'name' => "Give them a hand, as usual",
            ],
            [
                'id' => 38,
                'question_id' => 10,
                'type'=> "i",
                'name' => "Accept — you're known for being helpful",
            ],
            [
                'id' => 39,
                'question_id' => 10,
                'type'=> "e",
                'name' => "Ask them, please, to find somebody else for a change",
            ],
            [
                'id' => 40,
                'question_id' => 10,
                'type'=> "e",
                'name' => "Loudly make it known that you're annoyed",
            ],

            [
                'id' => 41,
                'question_id' => 11,
                'type'=> "i",
                'name' => "Don't share your point of view with anyone",
            ],
            [
                'id' => 42,
                'question_id' => 11,
                'type'=> "i",
                'name' => "Didn't like the film, but keep your views to yourself when asked",
            ],
            [
                'id' => 43,
                'question_id' => 11,
                'type'=> "e",
                'name' => "State your point of view with enthusiasm",
            ],
            [
                'id' => 44,
                'question_id' => 11,
                'type'=> "e",
                'name' => "Try to bring the others round to your point of view",
            ],

            [
                'id' => 45,
                'question_id' => 12,
                'type'=> "i",
                'name' => "Say, 'It's not a problem,' even if that's not what you really think",
            ],
            [
                'id' => 46,
                'question_id' => 12,
                'type'=> "i",
                'name' => "Give them a filthy look and sulk for the rest of the evening",
            ],
            [
                'id' => 47,
                'question_id' => 12,
                'type'=> "e",
                'name' => "Tell them, 'You're too much! Have you seen the time?'",
            ],
            [
                'id' => 48,
                'question_id' => 12,
                'type'=> "e",
                'name' => "Make a scene in front of everyone",
            ],

            [
                'id' => 49,
                'question_id' => 13,
                'type'=> "i",
                'name' => "Don't want anyone to find out, so you take the bus instead",
            ],
            [
                'id' => 50,
                'question_id' => 13,
                'type'=> "i",
                'name' => "Panic and search madly without asking anyone for help",
            ],
            [
                'id' => 51,
                'question_id' => 13,
                'type'=> "e",
                'name' => "Grumble without telling your family why you're in a bad mood",
            ],
            [
                'id' => 52,
                'question_id' => 13,
                'type'=> "e",
                'name' => "Accuse those around you for misplacing them",
            ],

            [
                'id' => 53,
                'question_id' => 14,
                'type'=> "i",
                'name' => "Go with great hesitation as these sessions are torture for you",
            ],
            [
                'id' => 54,
                'question_id' => 14,
                'type'=> "i",
                'name' => "Look forward to hearing what your boss thinks about you and expects from you",
            ],
            [
                'id' => 55,
                'question_id' => 14,
                'type'=> "e",
                'name' => "Rehearse ad nauseam the arguments and ideas that you've prepared for the meeting",
            ],
            [
                'id' => 56,
                'question_id' => 14,
                'type'=> "e",
                'name' => "Go along unprepared as you are confident and like improvising",
            ],
        ];

        Answer::insert($answers);
    }
}
