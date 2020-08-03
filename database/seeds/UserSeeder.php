<?php

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
        //
        \DB::table('users')->truncate();

        $users = ['zhangsan', 'lisi', 'wangwu'];

        for ($i = 0; $i < 3; $i++) {
            \App\User::create([
                'name' => $users[$i],
                'email' => $users[$i] . '@test.com',
                'password' => '$2y$10$Km6tMKR1xRflzKSh.KDVT.A6GhYZ2ibqb.dNVdqEsCx8Otw7gYyFy',
            ]);
        }


    }
}
