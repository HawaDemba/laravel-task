<?php
use App\Role;
use App\User;
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
       Role::truncate(); 

       Role::create(['name'=> 'admin']);
       Role::create(['name'=> 'coach']);
       Role::create(['name'=> 'stagiaire']);
    }
}