<?php

namespace App\Http\Livewire\Admin\CatalogValues;

use Livewire\Component;
use App\Models\CatalogValue;

class CatalogValues extends Component
{
    protected $listeners = ['mount'];
    public $cvalue;
    public $values;
    public $type, $description, $value, $symbol, $updated_date;

    public function mount(){
        $this->values = CatalogValue::where('status', 1)->latest()->get();
    }

    public function render()
    {
        return view('livewire.admin.catalog-values.catalog-values')->extends('layouts.admin');
    }

    public function create(){
        $this->emit('open-modal', 'new-value');
        $this->reset('type','description','value','symbol','updated_date');
    }

    public function store(){
        $this->validate([
            'type' => 'required',
            'value' => 'required',
            'symbol' => 'required',
            'updated_date' => 'required|date',
        ]);
        CatalogValue::create([
            'type' => $this->type,
            'description' => $this->description,
            'value' => $this->value,
            'symbol' => $this->symbol,
            'updated_date' => $this->updated_date
        ]);
        $this->dispatchBrowserEvent('success', ['message' => "¡El valor {$this->type} se ha registrado!", 'title' => 'Valor registrado', 'modal' => 'new-value']);
        $this->reset('type','description','value','symbol','updated_date');
        $this->emitSelf('mount');
    }

    public function edit(CatalogValue $cvalue){
        $this->cvalue = $cvalue;
        $this->type = $cvalue->type;
        $this->description = $cvalue->description;
        $this->value = $cvalue->value;
        $this->symbol = $cvalue->symbol;
        $this->updated_date = $cvalue->updated_date;
        $this->emit('open-modal', 'edit-value');
    }

    public function update(){
        $this->validate([
            'type' => 'required',
            'value' => 'required',
            'symbol' => 'required',
            'updated_date' => 'required|date',
        ]);
        $this->cvalue->update([
            'type' => $this->type,
            'description' => $this->description,
            'value' => $this->value,
            'symbol' => $this->symbol,
            'updated_date' => $this->updated_date
        ]);
        $this->dispatchBrowserEvent('success', ['message' => "¡El valor {$this->type} se ha actualizado!", 'title' => 'Valor actualizado', 'modal' => 'edit-value']);
        $this->reset('type','description','value','symbol','updated_date');
        $this->emitSelf('mount');
    }

    public function delete(CatalogValue $cvalue){
        $cvalue->update([
            'status' => 0
        ]);
        $this->dispatchBrowserEvent('error', ['message' => "¡El valor {$cvalue->type} se ha eliminado!", 'title' => 'Valor eliminado']);
        $this->emitSelf('mount');
    }
}
