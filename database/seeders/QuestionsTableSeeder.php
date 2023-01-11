<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [ 'id' => 1, 'name' => "You're really busy at work and a colleague is telling you their life story and personal woes. You:",],
            [ 'id' => 2, 'name' => "You've been sitting in the doctor's waiting room for more than 25 minutes. You:",],
            [ 'id' => 3, 'name' => "You're having an animated discussion with a colleague regarding a project that you're in charge of. You:"],
            [ 'id' => 4, 'name' => "You are taking part in a guided tour of a museum. You:",],
            [ 'id' => 5, 'name' => "During dinner parties at your home, you have a hard time with people who:",],
            [ 'id' => 6, 'name' => "You crack a joke at work, but nobody seems to have noticed. You:",],
            [ 'id' => 7, 'name' => "This morning, your agenda seems to be free. You:",],
            [ 'id' => 8, 'name' => "During dinner, the discussion moves to a subject about which you know nothing at all. You:",],
            [ 'id' => 9, 'name' => "You're out with a group of friends and there's a person who's quite shy and doesn't talk much. You:",],
            [ 'id' => 10, 'name' => "At work, somebody asks for your help for the hundredth time. You:",],
            [ 'id' => 11, 'name' => "You've been see a movie with your family and the reviews are mixed. You:",],
            [ 'id' => 12, 'name' => "A friend arrives late for your meeting. You:",],
            [ 'id' => 13, 'name' => "You can't find your car keys. You:",],
            [ 'id' => 14, 'name' => "It's time for your annual appraisal with your boss. You:",],
        ];

        Question::insert($questions);
    }
}
