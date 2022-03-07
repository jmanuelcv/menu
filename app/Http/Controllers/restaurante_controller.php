<?php

namespace App\Http\Controllers;

use App\Models\restaurante;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class restaurante_controller extends Controller
{
    /* Funcion que elimina un registro */
    /* Primero se busca la img que corresponde al registro  y se elimina de la carpeta*/
    /* Finalmente se elimina el registro de la db */
    public function eliminar($id)
    {
        $item = restaurante::find($id);
        $mi_imagen = public_path($item->ruta);
        if (@getimagesize($mi_imagen)) {unlink($mi_imagen);}
        $item->delete();
        return redirect('/menu');
    }
/* Funcion que permite cargar los datos en los input de la pagina editar  */
    public function editar($id)
    {
        $plato = restaurante::find($id);
        return view('editar', ['plato' => $plato]);
    }
    /* Funcion que permite editar los datos  */
    public function update(Request $request, $id)
    {
        $nombre = $request->nombre;
        $categoria = $request->categoria;
        $precio = $request->precio;
        $archivo = $request->file('imagen');
        /* Se comprueba que se ha seleccionado una imagen,
        si es asi, se renombra y se almacena ,en caso contraro,
        la ruta de la db  quedara vacia */
        if ($request->imagen != null) {
            $nombre_a = $request->nombre . "-" . $archivo->getClientOriginalName();
            $ru = "menu/img/ ";
            $archivo = "/storage/" . trim($ru, " ") . $nombre_a;
            Storage::disk('public')->putFileAs(trim($ru, " "), $request->file('imagen'), $nombre_a);
            $ruta = $archivo;
            DB::update('update restaurante set nombre = ? , categoria = ? , precio = ?,ruta=? where id = ?', ["$nombre", "$categoria", "$precio", "$ruta", $id]);
        } else {DB::update('update restaurante set nombre = ? , categoria = ? , precio = ? where id = ?', ["$nombre", "$categoria", "$precio", $id]);}
        $lista = DB::table('restaurante')->get();
        return view('menu', ['restaurante' => $lista]);

    }

    /* Funcion que permite editar los datos  */
    public function saveItem(Request $request)
    {
        $newListItem = new restaurante;
        //nombre columnas
        $newListItem->nombre = $request->nombre;
        $newListItem->categoria = $request->categoria;
        $newListItem->precio = $request->precio;
        $archivo = $request->imagen;
        /* Se comprueba que se ha seleccionado una imagen,
        si es asi, se renombra y se almacena ,en caso contraro,
        la ruta de la db  quedara vacia */
        if ($request->imagen != null) {
            $nombre_a = $request->nombre . "-" . $archivo->getClientOriginalName();
            $ru = "menu/img/ ";
            $archivo = "/storage/" . trim($ru, " ") . $nombre_a;
            Storage::disk('public')->putFileAs(trim($ru, " "), $request->file('imagen'), $nombre_a);
            $newListItem->ruta = $archivo;
        } else { $newListItem->ruta = "";}
        $newListItem->save();

        return view('menu', ['restaurante' => restaurante::all()]);
    }

    //Funciones de  la api
    public function getAll()
    {
        return json_encode(restaurante::all());
    }

    public function getMenuById(Request $request)
    {
        $id = $request->id;
        return json_encode(restaurante::find($id));
    }

    public function store(Request $request)
    {

        $newListItem = new restaurante;
        //nombre columnas
        $newListItem->nombre = $request->nombre;
        $newListItem->categoria = $request->categoria;
        $newListItem->precio = $request->precio;
        $archivo = $request->imagen;
        /* Se comprueba que se ha seleccionado una imagen,
        si es asi, se renombra y se almacena ,en caso contraro,
        la ruta de la db  quedara vacia */
        if ($request->imagen != null) {
            $nombre_a = $request->nombre . "-" . $archivo->getClientOriginalName();
            $ru = "menu/img/ ";
            $archivo = "/storage/" . trim($ru, " ") . $nombre_a;
            Storage::disk('public')->putFileAs(trim($ru, " "), $request->file('imagen'), $nombre_a);
            $newListItem->ruta = $archivo;
        } else { $newListItem->ruta = "";}
        $newListItem->save();

        return json([
            "status" => "OK",
            "name" =>  $newListItem->nombre,
        ]);

    }


    public function update_api(Request $request)
    {

        $nombre = $request->nombre;
        $categoria = $request->categoria;
        $precio = $request->precio;
        $archivo = $request->file('imagen');
        /* Se comprueba que se ha seleccionado una imagen,
        si es asi, se renombra y se almacena ,en caso contraro,
        la ruta de la db  quedara vacia */
        if ($request->imagen != null) {
            $nombre_a = $request->nombre . "-" . $archivo->getClientOriginalName();
            $ru = "menu/img/ ";
            $archivo = "/storage/" . trim($ru, " ") . $nombre_a;
            Storage::disk('public')->putFileAs(trim($ru, " "), $request->file('imagen'), $nombre_a);
            $ruta = $archivo;
            DB::update('update restaurante set nombre = ? , categoria = ? , precio = ?,ruta=? where id = ?', ["$nombre", "$categoria", "$precio", "$ruta", $id]);
        } else {DB::update('update restaurante set nombre = ? , categoria = ? , precio = ? where id = ?', ["$nombre", "$categoria", "$precio", $id]);}
        $lista = DB::table('restaurante')->get();
        return view('menu', ['restaurante' => $lista]);

        return json([
            "status" => "OK",
            "plato" =>  $newListItem->nombre,
        ]);



    }











    public function destroy(Request $request)
    {

        $id = $request->id;

        $item = restaurante::find($id);
        $item->delete();
        return json([
            "status" => "OK",
            "description" => "Elemento eliminado",

        ]);

    }

}
