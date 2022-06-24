<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->email = "superadmin@gmail.com";
        $user->email_verified_at = Carbon::now()->toDateTimeString();
        // $user->remember_token = Str::random(10);
        $user->password = Hash::make('Admin@123');
        $user->name = "Super Admin";
        $user->google_id = null;
        $user->departmentid = NULL;
        $user->phone = "6353185975";
        $user->role = "0";
        $user->status = '1';
        $user->createdby = NULL;
        $user->save();
    }
}
