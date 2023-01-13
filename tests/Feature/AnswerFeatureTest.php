<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Answer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnswerFeatureTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test
     * checks if a guest will be redirected to the login page if he wants to save a new instance of the Answer model
     */
    public function a_guest_cannot_create_answer()
    {
        $response = $this->post('/admin/answers', [
            'name' => 'Test answer',
            'type' => 'i',
            'question_id' => 1,
        ]);

        $response->assertRedirect('login');
    }

    /** @test
     * checks if an authenticated user can save a answer to the database
    */
    public function an_authenticated_user_can_create_answer()
    {
        $user = User::factory()->create();
        $question = $this->actingAs($user)
            ->post('/admin/questions', [
                'name' => 'Test question'
            ]);
        $response = $this->actingAs($user)
            ->post('/admin/answers', [
                'name' => 'Test answer',
                'type' => 'i',
                'question_id' => 1,
            ]);

        $response->assertRedirect('/admin/answers');
        $this->assertDatabaseHas('answers', [
            'name' => 'Test answer',
            'type' => 'i',
            'question_id' => 1,
        ]);
    }

}
