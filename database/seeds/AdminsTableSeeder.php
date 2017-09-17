<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
        	'name' 		=> 'Admin Nome',
        	'email' 	=> 'admin@especializati.com.br',
        	'password' 	=> bcrypt('123456'),
        ]);
    }
}
