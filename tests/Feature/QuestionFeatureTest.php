<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Question;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuestionFeatureTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test
     * checks if a guest will be redirected to the login page if he wants to save a new instance of the Question model
     */
    public function a_guest_cannot_create_question()
    {
        $response = $this->post('/admin/questions', [
            'name' => 'Test question'
        ]);

        $response->assertRedirect('login');
    }

    /** @test
     * checks if an authenticated user can save a question to the database
    */
    public function an_authenticated_user_can_create_question()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)
            ->post('/admin/questions', [
                'name' => 'Test question'
            ]);

        $response->assertRedirect('/admin/questions');
        $this->assertDatabaseHas('questions', [
            'name' => 'Test question'
        ]);
    }

}
