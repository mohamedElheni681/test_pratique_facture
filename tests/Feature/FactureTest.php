<?php

namespace Tests\Feature;

use App\Models\Facture;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class FactureTest extends TestCase
{
    use WithFaker;

    public function test_crete_new_facture_screen_can_be_rendered()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        $this->assertAuthenticated();
        $response = $this->get('/factures/create');

        $response->assertStatus(200);
    }

    public function test__users_can_create_facture()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        $this->assertAuthenticated();

        $response = $this->post('/factures', [
            'designation' => 'Test User',
            'description' => $this->faker->text(255),
            'price_ht' => $this->faker->randomFloat('2',0,7)
        ]);

        $response->assertRedirect('/factures');
    }

    public function test_facture_requires_a_designation()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();

        $response = $this->post('/factures', [
            'designation' => null,
            'description' => $this->faker->text(255),
            'price_ht' => $this->faker->randomFloat('2',0,7)
        ]);

        $response->assertSessionHasErrors('designation');
    }

    public function test_facture_requires_a_price_ht()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();

        $response = $this->post('/factures', [
            'designation' => $this->faker->firstName,
            'description' => $this->faker->text(255),
            'price_ht' => null
        ]);

        $response->assertSessionHasErrors('price_ht');
    }

    public function test_update_facture_screen_can_be_rendered()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        $this->assertAuthenticated();

        $facture = (Facture::factory()->create());
        $response = $this->get('/factures/'.$facture->id);

        $response->assertStatus(200);
    }

    public function test_facture_update()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();

        $facture = (Facture::factory()->create());

        $facture->designation = "Updated Facture designation";

        //When the user hit's the endpoint to update invoice
        $this->put('/factures/'.$facture->id, $facture->toArray());

        //Invoice should be updated in the database.
        $this->assertDatabaseHas('factures',['id'=> $facture->id , 'designation' => 'Updated Facture designation']);
    }

    public function test_facture_delete()
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();

        $facture = (Facture::factory()->create());

        $facture->designation = "Updated Facture designation";

        //When the user hit's the endpoint to delete the invoice
        $this->delete('/factures/'.$facture->id);
        //The invoice should be deleted from the database.
        $this->assertDatabaseMissing('factures',['id'=> $facture->id]);
    }

}
