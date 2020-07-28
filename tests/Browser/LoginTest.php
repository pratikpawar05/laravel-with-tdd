<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;
class LoginTest extends DuskTestCase
{
    /**
     * A Dusk example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $user=factory(User::class)->create();
            $browser->loginAs($user)
                    ->visit('/home')
                    ->assertPathIs('/home')
                    ->assertSee('Dashboard')
                    ->assertAuthenticatedAs($user)
                    ->logout();
            $user->forceDelete();
        });
    }
}
