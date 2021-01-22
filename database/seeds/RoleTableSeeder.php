<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::insert([
           [
               'name' => 'administrateur',
               'description' => ''
           ],
            [
                'name' => 'illustrateur',
                'description' => ''
            ]
        ]);
    }
}
