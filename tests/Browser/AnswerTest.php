<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

/**
 * @internal
 * @coversNothing
 */
class AnswerTest extends DuskTestCase
{
    public function testIndex()
    {
        User::factory()->create();
        $admin = User::find(1);
        $this->browse(function (Browser $browser) use ($admin) {
            $browser->loginAs($admin);
            $browser->visit(route('admin.answer.index'));
            $browser->assertRouteIs('admin.answer.index');
        });
    }
}
