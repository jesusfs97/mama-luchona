<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Menu;
use App\User;

class ControlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m = new Menu;
        $m->id = 1;
        $m->Titulo='Articulos';
        $m->href='/#Artículos';
        $m->colorFondo='#ffffff00';
        $m->colorTexto='#2fc2a5';
        $m->created_at = Carbon::now();
        $m->updated_at = Carbon::now();
        $m->save();

        $m = new Menu;
        $m->id = 2;
        $m->Titulo='Pensamientos';
        $m->href='/#pensamientos';
        $m->colorFondo='#ffffff00';
        $m->colorTexto='#2fc2a5';
        $m->created_at = Carbon::now();
        $m->updated_at = Carbon::now();
        $m->save();

        $m = new Menu;
        $m->id = 3;
        $m->Titulo='Login';
        $m->href='/login';
        $m->colorFondo='#ffffff00';
        $m->colorTexto='#2fc2a5';
        $m->created_at = Carbon::now();
        $m->updated_at = Carbon::now();
        $m->save();

        $m = new Menu;
        $m->id = 4;
        $m->Titulo='Registrate';
        $m->href='/register';
        $m->colorFondo='#ffffff00';
        $m->colorTexto='#2fc2a5';
        $m->created_at = Carbon::now();
        $m->updated_at = Carbon::now();
        $m->save();

        $m = new Menu;
        $m->id = 5;
        $m->Titulo='Mamá luchona';
        $m->href='/#Inicio';
        $m->colorFondo='#ffffff00';
        $m->colorTexto='#2fc2a5';
        $m->created_at = Carbon::now();
        $m->updated_at = Carbon::now();
        $m->save();

        $user = new User();
        $user->name = 'Gisela';
        $user->email = 'giselacmb@gmail.com';
        $user->password = bcrypt('08Dici@mbr@1983');
        $user->rol = 'n';
        $user->save();

    }
}
