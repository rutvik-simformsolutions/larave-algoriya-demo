<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SkillFactory extends Factory
{


    public $departmentId = [];
    public $userId = [];

    protected $model = Skill::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'departmentid' => $this->getDepartment(),
            'skillname' => Str::random(15),
            'description' => Str::random(50),
            'status' => $this->faker->randomElement(['0', '1', '2']),
            'createdby' => $this->gerUser()
        ];
    }


    public function getDepartment()
    {
        if(empty($this->departmentId) )
        {
            $departmentids = Department::select('id')->inRandomOrder()->limit(10)->get();
            if(count($departmentids) < 10)
            {
                Department::factory()->count(10)->create();
                $departmentids = Department::select('id')->inRandomOrder()->limit(10)->get();
            }
            foreach ($departmentids as $key => $value) {
                $this->departmentId[] = $value->id;
            }

        }
        while (true) {
            $id = array_rand($this->departmentId);
            if ($id != 0 && $id != "0" && $id != NULL && $id != "NULL") {
                return $id;
                break;
            }
        }
    }

    public function gerUser()
    {
        if (empty($userId)) {

            $userid = User::select('id')->inRandomOrder()->limit(10)->get();
            if(count($userid) < 10 )
            {
                User::factory()->create()->count(10);
                $userid = User::select('id')->inRandomOrder()->limit(10)->get();
            }
            foreach ($userid as $key => $value) {
                $this->userId[] = $value->id;
            }


        }
        while (true) {
            $id = array_rand($this->userId);
            if ($id != 0 && $id != "0" && $id != NULL && $id != "NULL") {
                return $id;
                break;
            }
        }
    }



}


