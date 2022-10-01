<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'first_name' => 'Super',
            'last_name' => 'Admin',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('admin^123')
        ]);
  
        Role::insert([
            ['name' => 'Admin', 'guard_name' => 'web'],
            ['name' => 'Agency', 'guard_name' => 'web'],
            ['name' => 'Staff', 'guard_name' => 'web'],
            ['name' => 'Client', 'guard_name' => 'web']
        ]);

        $role = Role::where('name', 'Admin')->first();
   
        $permissions = Permission::pluck('id','id')->all();
  
        $role->syncPermissions($permissions);
   
        $user->assignRole([$role->id]);
    }
}
