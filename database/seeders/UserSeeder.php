<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=>'root',
            'name'=>'root',
            'last_name'=>'root',
            'email'=>'root@root.com',
            'password'=>bcrypt('1598753')
        ])->assignRole('root');

        User::create([
            'username'=>'admin',
            'name'=> 'admin',
            'last_name'=>'admin',
            'email'=> 'admin@admin.com',
            'password'=> bcrypt('admin')
        ])->assignRole('admin');

        User::create([
            'username'=>'user',
            'name'=> 'user',
            'last_name'=>'user',
            'email'=> 'user@user.com',
            'password'=> bcrypt('caja')
        ])->assignRole('user');        
    }
}
