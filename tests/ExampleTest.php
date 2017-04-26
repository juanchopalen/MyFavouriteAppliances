<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    public function testBasicExample()
    {    

        $user = factory(App\User::class)->create([
             'name' => 'Duilio Palacios',
        ]);

        $this->actingAs($user, 'api');
        
        $this->visit('/api/user')
             ->see('Duilio Palacios');
    }
}
