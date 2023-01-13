<?php

namespace Tests\Feature;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use App\Models\Test;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestFeatureTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test
     * checks if a user can start a test;
     */
    public function user_can_start_a_test()
    {
        $question = new Question(['name' => 'Test question']);
        $question->save();

        // When a user visit the test page
        $this->get('/test/')
             ->assertSeeText($question->name);
    }

    /** @test
     * check if users can see their final score after submitting test
    */
    public function user_can_see_their_final_score_after_submitting_test()
    {

        $question = new Question(['name' => 'Test question']);
        $question->save();

        $answer1 = new Answer(
            [
            'name' => 'Updated answer',
            'type' => 'i',
            'question_id' => 1,
            ]
        );
        $answer1->save();

        $answer2 = new Answer(
            [
            'name' => 'Updated answer2',
            'type' => 'e',
            'question_id' => 1,
            ]
        );
        $answer2->save();

        $test = new Test([
            'name' => 'Test name',
            'final_result' => 'Extrovert',
        ]);
        $test->save();
        $test->selected_answers()->sync(
            [1]
        );

        $response = $this->post('/test/process', [
            'name' => 'Jospy',
            '1' => '2'
        ])->assertSeeText('Your results : Jospy you are an Extrovert!');

    }
}
