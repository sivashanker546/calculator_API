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
             ->assertStatus(200)
             ->assertJson(['save'=>true]);
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
