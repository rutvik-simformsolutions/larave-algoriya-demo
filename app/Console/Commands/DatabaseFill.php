<?php

namespace App\Console\Commands;

use App\Models\Department;
use App\Models\Skill;
use App\Models\User;
use Database\Factories\DepartmentFactory;
use Illuminate\Console\Command;



class DatabaseFill extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DatabaseFill';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'genrating random Data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $start_time = microtime(true);
        $department = $this->ask('How Much Department you need ?');
        Department::factory()->count($department)->create();
        $this->info("Department generated: " . $department . " In ". (microtime("now") - $start_time) ." Sec");

        $start_time = microtime(true);
        $users = $this->ask("How Much Users you need ?");
        User::factory()->count($users)->create();
        $this->info("Department generated: " . $users . " In " . (microtime("now") - $start_time) . " sec");

        $start_time = microtime(true);
        $skill = $this->ask('How much Skills you need?');
        Skill::factory()->count($skill)->create();
        $this->info("Skills Genrated :" .  $skill . " In ". (microtime("now") - $start_time) . " sec" );

    }
}
