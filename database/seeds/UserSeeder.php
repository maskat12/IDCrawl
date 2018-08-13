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
        $this->command->line("Creating User ...");
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@wamplo.com',
            'password' => bcrypt('admin123'),
            'role_id' => 1

        ]);
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'User@wamplo.com',
            'password' => bcrypt('user123'),
            'role_id' => 2

        ]);
        $this->command->line("Creating Users Completed!");
    }
}
