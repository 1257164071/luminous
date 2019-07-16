<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'  =>  '管理员',
            'email'      =>  'admin',
            'password'   =>  bcrypt('123456'),
        ]);

    }
}
