<?php

namespace App\Livewire;

use App\Models\Olimpiade;
use Livewire\Component;

class OlimpiadePage extends Component
{
    public function render()
    {
        $this->olimpiades = Olimpiade::latest()->get();
        return view('livewire.olimpiade-page');
    }

    public $olimpiades = [];
    public $ID;
    public $nama;
    public $nama_edit;

    public function simpanBaru()
    {
        $n = new Olimpiade();
        $n->nama = $this->nama;
        $n->save();

        $this->nama = null;
    }
    public function edit()
    {
        if ($this->nama_edit) {

            $n = Olimpiade::find($this->ID);
            $n->nama = $this->nama_edit;
            $n->save();

            $this->nama_edit = null;
            $this->ID = null;
        }else{
            $this->js("alert('input wajib diisi!')");
        }
    }

    public function hapus($id)
    {
        Olimpiade::find($id)->delete();
    }

}
