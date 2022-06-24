<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;


class DepartmentFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Department::class;



    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'departmentname' => $this->faker->jobTitle(),
            'status'=> $this->faker->randomElement(['0','1']),
            'isedit' => $this->faker->randomElement(['1']),
            'createdby' => '1',
        ];
    }
}
