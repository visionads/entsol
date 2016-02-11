<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        DB::table('user')->truncate();

        $users = array(
            array('admin', 'admin@admin.com', Hash::make('admin'),'127.0.1.1','2015-08-27 16:33:22','2020-08-27 16:33:22')
        );

        foreach($users as $user) {
            \App\User::insert(array(
                'username' => $user[0],
                'email' => $user[1],
                'password' => $user[2],
                'branch_id' => 1,
                'auth_key' => '',
                'access_token' => '',
                'csrf_token' => '',
                'ip_address' => $user[3],
                'last_visit' => $user[4],
                'role_id' => 1,
                'expire_date' => $user[5],
                'remember_token' => '',
                'status' => 'active',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ));
        }

    }
}
