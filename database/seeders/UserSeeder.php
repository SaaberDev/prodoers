<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
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
        $token_length = 64;
        // Super Admin
        $super_admin_role = Role::findByName('super_admin');
        $admin = User::create([
            'name' => 'Mahfuzur Rahman Saber',
            'designation' => 'maintainer',
            'username' => 'saaberdev',
            'email' => 'saaberdev@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => \Hash::make('1234'),
            'remember_token' => \Str::random($token_length)
        ]);
        $admin->assignRole($super_admin_role);

        // Designwala
//        $designwala_role = Role::findByName('designwala');
//        $admin = User::create([
//            'name' => 'Ekjon Designwala',
//            'username' => 'designwala',
//            'email' => 'designwala@gmail.com',
//            'email_verified_at' => Carbon::now(),
//            'password' => \Hash::make('1234'),
//            'remember_token' => \Str::random($token_length)
//        ]);
//        $admin->assignRole($designwala_role);

        // User
        $user_role = Role::findByName('user');
        $users = [
            [
                'name' => 'Designwala User 1',
                'designation' => 'client',
                'username' => 'user123',
                'email' => 'demo1@designwala.com',
                'email_verified_at' => Carbon::now(),
                'password' => \Hash::make('1234'),
                'remember_token' => \Str::random($token_length)
            ],
            [
                'name' => 'Designwala User 2',
                'designation' => 'client',
                'username' => 'user321',
                'email' => 'demo2@designwala.com',
                'email_verified_at' => Carbon::now(),
                'password' => \Hash::make('1234'),
                'remember_token' => \Str::random($token_length)
            ]
        ];
        foreach ($users as $user) {
            User::create($user)->assignRole($user_role);
        }

        // Fake Designwala
        $users_factory = User::factory()->times(20)->make();
        $user_role = Role::findByName('doers');
        foreach ($users_factory as $user_factory) {
            User::create([
                'name' => $user_factory->name,
                'designation' => $user_factory->designation,
                'username' => $user_factory->username,
                'email' => $user_factory->email,
                'email_verified_at' => $user_factory->email_verified_at,
                'password' => $user_factory->password,
                'remember_token' => $user_factory->remember_token
            ])->assignRole($user_role);
        }

        // Fake Users
        $users_factory = User::factory()->times(10)->make();
        $user_role = Role::findByName('user');
        foreach ($users_factory as $user_factory) {
            User::create([
                'name' => $user_factory->name,
                'designation' => $user_factory->designation,
                'username' => $user_factory->username,
                'email' => $user_factory->email,
                'email_verified_at' => $user_factory->email_verified_at,
                'password' => $user_factory->password,
                'remember_token' => $user_factory->remember_token
            ])->assignRole($user_role);
        }
    }
}
