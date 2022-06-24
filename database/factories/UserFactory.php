<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Department;
use Illuminate\Support\Str;

class UserFactory extends Factory
{

    public $department_ids =[];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
            'remember_token' => Str::random(10),
            'google_id' => $this->faker->bothify('??#?##?#??#'),
            'departmentid' => $this->get_department(),
            'phone' => $this->faker->phoneNumber(),
            'role' => $this->faker->randomElement(['1','2']),
            'image'=> $this->faker->image('public/img', 640, 480, null, false),
            'status' => $this->faker->randomElement(['0','1','2']),
            'experience' => (float)rand(0, 10) / 10,
            'manualtraking' => rand(0, 9),
            'createdby' => $this->faker->randomDigit()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }


     public function get_department()
    {
        if (empty($this->department_ids)) {
            $department_ids = Department::select('id')->inRandomOrder()->limit(10)->get();
            if (empty($department_ids)) {
                Department::factory()->count(10)->create();
                $department_ids = Department::select('id')->inRandomOrder()->limit(10)->get();
            }
            foreach ($department_ids as $key => $value) {
                $this->department_ids[] = $value->id;
            }
        }
        while (true) {
            $id = array_rand($this->department_ids);
            if ($id != 0 && $id != "0" && $id != NULL && $id != "NULL") {
                return $id;
                break;
            }
        }
    }

}
