<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name'=>'admin']);  
        $roleSuperAdmin = Role::create(['name'=>'superadmin']);   
        $roleEditor = Role::create(['name'=>'editor']);   
        $roleUser = Role::create(['name'=>'user']);   
 
        $permissions = [
            //Dashboard
            'dashboard.view',
            //Permission List
            'blog.create',
            'blog.edit',
            'blog.view',
            'blog.delete',
            'blog.approve',
            // Admin Permission List
            'admin.create',
            'admin.edit',
            'admin.view',
            'admin.delete',
            'admin.approve',
            //Permission List
            'role.create',
            'role.edit',
            'role.view',
            'role.delete',
            'role.approve',

            //Profile Permission List
            'profile.create',
            'profile.edit',
            
        ];
        //Create an assign permissions
        for($i=0; $i < count($permissions); $i++)
        {

            $permission = Permission::create(['name' => $permissions[$i]]);
        }

    }
}
