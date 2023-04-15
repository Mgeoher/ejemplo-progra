<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $proveedor = new Proveedor();
        $proveedor->codigo_proveedor='ABC1234';
        $proveedor->nombre_proveedor='Proveedor';
        $proveedor->direccion='Entre Rios';
        $proveedor->telefono='79484678';
        $proveedor->save();

    }
}
