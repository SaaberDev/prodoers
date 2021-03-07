<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin_role = Role::findByName('super_admin');
        $admin = User::create([
            'name' => 'Mahfuzur Rahman Saber',
            'username' => 'saaberdev',
            'email' => 'saaberdev@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => \Hash::make('1234'),
            'remember_token' => \Str::random(15)
        ]);
        $admin->assignRole($super_admin_role);

        $user_role = Role::findByName('user');
        $users = [
            [
                'name' => 'Designwala User 1',
                'username' => 'user123',
                'email' => 'demo1@designwala.com',
                'email_verified_at' => Carbon::now(),
                'password' => \Hash::make('1234'),
                'remember_token' => \Str::random(15)
            ],
            [
                'name' => 'Designwala User 2',
                'username' => 'user321',
                'email' => 'demo2@designwala.com',
                'email_verified_at' => Carbon::now(),
                'password' => \Hash::make('1234'),
                'remember_token' => \Str::random(15)
            ]
        ];
        foreach ($users as $user) {
            User::create($user)->assignRole($user_role);
        }
    }
}
