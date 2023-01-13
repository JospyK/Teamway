<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuestionTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected $user;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
    }

    /** @test
     * checks if a new instance of the Question model can be created and the name attribute is set correctly.
     */
    public function a_question_can_be_created()
    {
        $this->actingAs($this->user);
        $question = new Question(['name' => 'Test question']);
        $this->assertInstanceOf(Question::class, $question);
        $this->assertEquals('Test question', $question->name);
    }

    /** @test
     * checks if a new instance of the Question model can be saved to the database, and the name attribute is stored correctly
     */
    public function a_question_can_be_saved_to_the_database()
    {
        $this->actingAs($this->user);
        $question = new Question(['name' => 'Test question']);
        $question->save();

        $this->assertDatabaseHas('questions', [
            'name' => 'Test question'
        ]);
    }

    /** @test
     * checks if the question name attribute can be updated and saved to the database
     */
    public function a_question_can_be_updated()
    {
        $this->actingAs($this->user);
        $question = new Question(['name' => 'Test question']);
        $question->save();

        $question->name = 'Updated question';
        $question->save();

        $this->assertDatabaseHas('questions', [
            'name' => 'Updated question'
        ]);
    }

    /** @test
     * checks if the question can be deleted from the database
     */
    public function a_question_can_be_deleted()
    {
        $this->actingAs($this->user);
        $question = new Question(['name' => 'Test question']);
        $question->save();

        $question->forceDelete();

        $this->assertDatabaseMissing('questions', [
            'name' => 'Test question'
        ]);
    }
}


