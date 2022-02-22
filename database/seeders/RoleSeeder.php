<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r_root = Role::create(['name'=>'root']);
        $r_admin = Role::create(['name'=>'admin']);
        $r_user = Role::create(['name' => 'user']);
        
        
        Permission::create(['name' => 'general'])->assignRole($r_root);
        // permisos modulo de facturacion
        Permission::create(['name' => 'crear_factura'])->syncRoles([$r_root, $r_user, $r_admin]);
        Permission::create(['name' => 'eliminar_factura'])->syncRoles([$r_root,$r_admin]);
        Permission::create(['name' => 'cierre_caja'])->syncRoles([$r_root,$r_admin]);
        // permisos administrativos
        Permission::create(['name' => 'inventario'])->syncRoles([$r_root,$r_admin]);
        
    }
}
