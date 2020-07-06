<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalculatorApiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * TESTING THE STORE VALUE
     */
    public function test_can_create_value()
    {
        $formData = ['value' => 20];
        $this->json('POST',route('storevalue'),$formData)
             ->assertStatus(201)
             ->assertJson(['data'=>$formData]);
    }
    /**
     * TESTING THE SHOW VALUE
     */
    public function test_can_show_value()
    {
        $value= factory(\App\Value::class)->create();
        $this->get(route('showvalue', $value->id))->assertStatus(200);
    }
    /**
     * TESTING THE UPDATE VALUE
     */
    public function test_can_update_task()
    {
        //$value = factory(\App\Value::class)->make();
        $value= factory(\App\Value::class)->create();
        $updatedData = [
            'value' => 45
        ];
        $this->json('PUT', route('updatevalue', $value->id), $updatedData)
            ->assertStatus(200)
            ->assertJson(['data' => $updatedData]);
    }
    /**
     * TESTING THE DELETE VALUE
     */
    public function test_can_delete_task()
    {
        //$value= factory(\App\Value::class)->make();
        $value= factory(\App\Value::class)->create();
        $this->delete(route('destroyvalue', $value->id))->assertStatus(200);
    }
    /**
     * TESTING THE ADD VALUE
     */
    public function test_can_add_task()
    {
        $formData = ['num1' => 20, 'num2' => 20];
        $this->json('POST',route('addvalues'),$formData)
             ->assertStatus(200);
    }
    /**
     * TESTING THE SUBTRACT VALUE
     */
    public function test_can_subtract_task()
    {
        $formData = ['num1' => 20, 'num2' => 20];
        $this->json('POST',route('subtractvalues'),$formData)
             ->assertStatus(200);
    }
    /**
     * TESTING THE MULTIPLY VALUE
     */
    public function test_can_multiply_task()
    {
        $formData = ['num1' => 20, 'num2' => 20];
        $this->json('POST',route('subtractvalues'),$formData)
             ->assertStatus(200);
    }
    /**
     * TESTING THE DIVIDE VALUE
     */
    public function test_can_divide_task()
    {
        $formData = ['num1' => 20, 'num2' => 20];
        $this->json('POST',route('dividevalues'),$formData)
             ->assertStatus(200);
    }
    /**
     * TESTING THE SQUARE ROOT VALUE
     */
    public function test_can_squareroot_task()
    {
        $formData = ['num1' => 61];
        $this->json('POST',route('squareroot'),$formData)
             ->assertStatus(200);
    }
    
    
}
