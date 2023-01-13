<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AnswerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected $user;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
    }

    /** @test
     * checks if a new instance of the Answer model can be created and the name attribute is set correctly.
     */
    public function an_answer_can_be_created()
    {
        $this->actingAs($this->user);
        $question = new Question(['name' => 'Test question']);
        $answer = new Answer(
            [
            'name' => 'Test answer',
            'type' => 'i',
            'question_id' => 1,
            ]
        );
        $this->assertInstanceOf(Answer::class, $answer);
        $this->assertEquals('Test answer', $answer->name);
    }

    /** @test
     * checks if a new instance of the Answer model can be saved to the database, and the attributes stored correctly
     */
    public function an_answer_can_be_saved_to_the_database()
    {
        $this->actingAs($this->user);

        $question = new Question(['name' => 'Test question']);
        $question->save();

        $answer = new Answer(
            [
            'name' => 'Test answer',
            'type' => 'i',
            'question_id' => 1,
            ]
        );
        $answer->save();

        $this->assertDatabaseHas('answers', [
            'name' => 'Test answer',
            'type' => 'i',
            'question_id' => 1,
            ]);
    }

    /** @test
     * checks if the answer attributes can be updated and saved to the database
     */
    public function an_answer_can_be_updated()
    {
        $this->actingAs($this->user);

        $question = new Question(['name' => 'Test question']);
        $question->save();

        $answer = new Answer(
            [
            'name' => 'Updated answer',
            'type' => 'i',
            'question_id' => 1,
            ]
        );
        $answer->save();

        $answer->name = 'Updated answer';
        $answer->save();

        $this->assertDatabaseHas('answers', [
            'name' => 'Updated answer',
            'type' => 'i',
            'question_id' => 1,
            ]);
    }

    /** @test
     * checks if the answer can be deleted from the database
     */
    public function an_answer_can_be_deleted()
    {
        $this->actingAs($this->user);

        $question = new Question(['name' => 'Test question']);
        $question->save();

        $answer = new Answer(
            [
            'name' => 'Test answer',
            'type' => 'i',
            'question_id' => 1,
            ]
        );
        $answer->save();

        $answer->forceDelete();

        $this->assertDatabaseMissing('answers', [
            'name' => 'Test answer',
            'type' => 'i',
            'question_id' => 1,
            ]);
    }
}


