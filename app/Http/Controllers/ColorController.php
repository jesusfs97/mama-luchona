<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ColorController extends Controller
{
    

    public function editar($id)
    {
        $Color = App\Color::findOrFail($id);
        return view('editarColor', compact('Color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $ColorActualizado = App\Color::findOrFail($id);
        $ColorActualizado->colorDeFondo = $request->Color;
        $ColorActualizado->imagenDeFondo =$request->file('Imagendefondo')->store('public');

        $ColorActualizado->save();

        return redirect()->route('Administrar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
