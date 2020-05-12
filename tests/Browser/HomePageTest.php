<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomePageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testHomePage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->pause(1000)
                ->screenshot('accueil-screenshot')
//                ->assertSee('Laravel Todolist')
                ->assertDontSee('Vapor')
                ->assertSee('Login');
        });
    }
}
