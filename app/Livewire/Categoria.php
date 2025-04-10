<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\categoria as ModelCategorias;

class Categoria extends Component
{
    public $categorias, $nombre_categoria, $categoria_id;

    public function render()
    {
        $this->categorias = ModelCategorias::all();
        return view('livewire.categoria')->layout('layouts.app');;
    }

    public function AgregarCategoria() {
        $this->validate([
            'nombre_categoria' => 'required',
        ]);

        ModelCategorias::updateOrCreate(['id' => $this->categoria_id], [
            'nombre_categoria'=>$this->nombre_categoria,
        ]);        
    }

    public function EliminarCategoria($id) {
        ModelCategorias::find($id)->delete();
    }
 
    public function HabilitarCategoria($id) {
        $categoria = ModelCategorias::find($id);
        $categoria->habilitada = !$categoria->habilitada;
        $categoria->save();
    }
}
