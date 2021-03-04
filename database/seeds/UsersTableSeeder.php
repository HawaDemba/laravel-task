<?php
use App\User;
use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $admin=user::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password'  => Hash::make('password')      
]);

        
        $coach=user::create([
            'name' => 'coach',
            'email' => 'coach@coach.com',
            'password'  => Hash::make('password')      
]);

        
        $stagiaire=user::create([
            'name' => 'stagiaire',
            'email' => 'stagiaire@stagiaire.com',
            'password' => Hash::make('password')      
]);
            $adminRole = Role::where('name', 'admin')->first();
            $coachRole = Role::where('name', 'coach')->first();
            $stagiaireRole = Role::where('name', 'stagiaire')->first();


            $admin ->roles()->attach($adminRole);
            $coach ->roles()->attach($coachRole);
            $stagiaire ->roles()->attach($stagiaireRole);
    }
}
