<?php

namespace App\Livewire;

use App\Models\menu as ModelsMenu;
use App\Models\categoria as ModelCategorias;

use Livewire\Component;

class Menu extends Component
{
    public $menus, $nombre_menu, $menu_id, $categoria_id, $categorias;

    public function render()
    {
        $this->menus = ModelsMenu::all();
        $this->categorias = ModelCategorias::all();
        return view('livewire.menu')->layout('layouts.app');
    }

    public function HabilitarMenu($id) {
        $menu = ModelsMenu::find($id);
        $menu->habilitada = !$menu->habilitada;
        $menu->save();
    }

    public function AgregarMenu() {
        $this->validate([
            'nombre_menu' => 'required',
            'categoria_id' => 'required',
        ]);

        ModelsMenu::updateOrCreate(['id' => $this->menu_id], [
            'nombre_menu'=>$this->nombre_menu,
            'categoria_id'=>$this->categoria_id,
        ]);        
    }

    public function editar() {
        // $this->menu_id = $menu_id;
        // $menu = ModelsMenu::find($menu_id);
        // dd($menu);

        return redirect('menueditar');        
    }
}
