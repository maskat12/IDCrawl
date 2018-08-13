<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->line("Creating role ...");
        DB::table('roles')->insert([
            'name' => 'Admin'
        ]);
        DB::table('roles')->insert([
            'name' => 'User'
        ]);

        $this->command->line("Creating Roles Completed!");
    }
}
