<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         $adminRole = Role::create(['name' => 'admin']);
         $pushingRole = Role::create(['name' => 'pushing']);
         $investorRole = Role::create(['name' => 'investor']);

          Permission::create(['name' => 'project.list'])->syncRoles([$pushingRole,$investorRole]);
          Permission::create(['name' => 'project.form'])->assignRole($pushingRole);
          Permission::create(['name' => 'project.search'])->assignRole($investorRole);
          Permission::create(['name' => 'project.approval'])->assignRole($adminRole);
          
          Permission::create(['name' => 'user.management'])->assignRole($adminRole);

          /** watch Dashboard */
          Permission::create(['name' => 'dashboard.pushing'])->assignRole($pushingRole);
          Permission::create(['name' => 'dashboard.investor'])->assignRole($investorRole);
          Permission::create(['name' => 'dashboard.admin'])->assignRole($adminRole);

    }
}
