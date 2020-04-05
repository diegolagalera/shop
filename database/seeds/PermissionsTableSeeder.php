<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users
        Permission::create([
            'name' => 'mostrar llista usuarios',
            'slug' => 'users.index',
            'description' => 'mostrar llista usuarios',
        ]);
        Permission::create([
            'name' => 'mostrar usuarios',
            'slug' => 'users.show',
            'description' => 'mostrar usuarios',
        ]);
//        Permission::create([
//            'name' => 'crear usuarios',
//            'slug' => 'users.create',
//            'description' => 'crear usuarios',
//        ]);
        Permission::create([
            'name' => 'editar usuarios',
            'slug' => 'users.edit',
            'description' => 'editar usuarios',
        ]);
        Permission::create([
            'name' => 'eliminar usuarios',
            'slug' => 'users.destroy',
            'description' => 'eliminar usuarios',
        ]);


        //roles
        Permission::create([
            'name' => 'mostrar llista roles',
            'slug' => 'roles.index',
            'description' => 'mostrar llista roles',
        ]);
        Permission::create([
            'name' => 'mostrar roles',
            'slug' => 'roles.show',
            'description' => 'mostrar roles',
        ]);
        Permission::create([
            'name' => 'crear roles',
            'slug' => 'roles.create',
            'description' => 'crear roles',
        ]);
        Permission::create([
            'name' => 'editar roles',
            'slug' => 'roles.edit',
            'description' => 'editar roles',
        ]);
        Permission::create([
            'name' => 'eliminar roles',
            'slug' => 'roles.destroy',
            'description' => 'eliminar roles',
        ]);

         //producto
        Permission::create([
            'name' => 'mostrar llista productes',
            'slug' => 'products.index',
            'description' => 'mostrar llista productes',
        ]);
        Permission::create([
            'name' => 'mostrar productes',
            'slug' => 'products.show',
            'description' => 'mostrar productes',
        ]);
        Permission::create([
            'name' => 'crear productes',
            'slug' => 'products.create',
            'description' => 'crear productes',
        ]);
        Permission::create([
            'name' => 'editar productes',
            'slug' => 'products.edit',
            'description' => 'editar productes',
        ]);
        Permission::create([
            'name' => 'eliminar productes',
            'slug' => 'products.destroy',
            'description' => 'eliminar productes',
        ]);

    }
}
