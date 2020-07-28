<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DatabaseTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertDatabaseMissing('users',[
            'email'=>'icanpratikpawa@gmail.com',
        ]);
    }
    public function testExample2()
    {
        $this->assertDatabaseHas('users',[
            'email'=>'icanpratikpawar@gmail.com',
        ]);
    }
}
