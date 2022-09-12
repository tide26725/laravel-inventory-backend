<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ลบข้อมูลเก่าออกก่อน
        DB::table('users')->delete();

        $data = [
            'fullname' => 'Thanawat Lumyai',
            'username' => 'thanawat',
            'email' => 'thanawat@mail.com',
            'password' => Hash::make('123456'),
            'tel' => '0901112222',
            'avatar' => 'https://via.placeholder.com/400x400.png/005429?text=xxxxxx',
            'role' => '1',
            'remember_token' => 'zxcvawerty'
        ];

        User::create($data);

        //ทำการเรียกตัว Userfactory ที่จะทำการ Faker ข้อมูล
        User::factory(99)->create();
    }
}
