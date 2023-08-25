<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $userData =[
            [
                'name'=>' pengguna',
                'email'=>'pengguna@gmail.com',
                'role'=>'pengguna',
                'password'=>bcrypt('12345')

            ],           
            [
                'name'=>'mas tampilan',
                'email'=>'tampilan@gmail.com',
                'role'=>'tampilan',
                'password'=>bcrypt('12345')

            ],

        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
