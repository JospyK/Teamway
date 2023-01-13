<?php

namespace Tests\Unit;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use App\Models\Test;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected $user;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
    }

    /** @test
     * checks if a new instance of the Test model can be created and the name attribute is set correctly.
     */
    public function a_test_can_be_created()
    {
        $this->actingAs($this->user);

        $test = new Test([
            'name' => 'Test test',
            'final_result' => 'Introvert',
        ]);
        $this->assertInstanceOf(Test::class, $test);
        $this->assertEquals('Test test', $test->name);
    }

    /** @test
     * checks if a new instance of the Test model can be saved to the database, and the name attribute is stored correctly
     */
    public function a_test_can_be_saved_to_the_database()
    {
        $this->actingAs($this->user);


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
            'name' => 'Updated answer',
            'type' => 'e',
            'question_id' => 1,
            ]
        );
        $answer2->save();

        $this->assertDatabaseHas('answers', [
            'name' => 'Updated answer',
            'type' => 'i',
            'question_id' => 1,
        ]);


        $test = new Test([
            'name' => 'Test name',
            'final_result' => 'Extrovert',
        ]);
        $test->save();
        $test->selected_answers()->sync(
            [1]
        );

        $test = new Test([
            'name' => 'Test test',
            'final_result' => 'Introvert',
        ]);
        $test->save();

        $this->assertDatabaseHas('tests', [
            'name' => 'Test test',
            'final_result' => 'Introvert',
        ]);
    }

    /** @test
     * checks if the test name attribute can be updated and saved to the database
     */
    public function a_test_can_be_updated()
    {
        $this->actingAs($this->user);
        $test = new Test([
            'name' => 'Test test',
            'final_result' => 'Introvert',
        ]);
        $test->save();

        $test->name = 'Updated test';
        $test->save();

        $this->assertDatabaseHas('tests', [
            'name' => 'Updated test'
        ]);
    }

    /** @test
     * checks if the test can be deleted from the database
     */
    public function a_test_can_be_deleted()
    {
        $this->actingAs($this->user);
        $test = new Test([
            'name' => 'Test test',
            'final_result' => 'Introvert',
        ]);
        $test->save();

        $test->forceDelete();

        $this->assertDatabaseMissing('tests', [
            'name' => 'Test test',
            'final_result' => 'Introvert',
        ]);
    }
}


