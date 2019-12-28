<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = \App\Role::create([
            'name' => 'super_admin',
            'display_name' => 'super admin',
            'description' => 'Can do anything in the project',
        ]);
        // user role
        $user = \App\Role::create([
            'name' => 'user',
            'display_name' => 'user',
            'description' => 'Can do specific tasks ',
        ]);
        // user role
        $user = \App\Role::create([
            'name' => 'writer',
            'display_name' => 'writer',
            'description' => 'Can do specific tasks ',
        ]);
    }// end of run
}
