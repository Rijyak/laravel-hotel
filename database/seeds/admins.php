<?php

use Illuminate\Database\Seeder;
use App\admins;

class admins extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        admins::create([
        	'name' => 'admin',
        	'email' =>'admin@admin.com',
        	'password' => Hash::make('password'),
        ]);
    }
}
