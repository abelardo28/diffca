<?php

namespace App\Http\Livewire\Admin\CatalogValues;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Utilities\Util;
use App\Models\Indicator;
use App\Models\Subindicator;
use Storage;

class CatalogValues extends Component
{
    use WithFileUploads;
    protected $listeners = ['mount'];
    public $cvalue, $filename = NULL;
    public $values, $indicators;
    public $indicator, $name, $description, $value, $symbol, $file, $updated_date, $type;

    public function mount(){
        $this->values = Subindicator::where('status', 1)->orderBy('name')->get();
        $this->indicators = Indicator::where('status', 1)->orderBy('name')->get(['id','name']);
        $this->updated_date = date('Y-m-d');
    }

    public function render()
    {
        return view('livewire.admin.catalog-values.catalog-values')->extends('layouts.admin');
    }

    public function create(){
        $this->emit('open-modal', 'new-value');
        $this->reset('indicator','name','description','value','symbol','file','updated_date');
    }

    public function store(){
        $this->validate([
            'indicator' => 'required',
            'name' => 'required',
            'value' => 'required',
            'symbol' => 'required',
            'updated_date' => 'required|date',
            'type' => 'required'
        ]);
        Subindicator::create([
            'indicator' => $this->indicator,
            'name' => $this->name,
            'description' => $this->description,
            'data' => $this->file ? $this->csvToJson() : NULL,
            'updated_date' => $this->updated_date,
            'type' => $this->type,
            'file' => $this->filename
        ]);
        $this->dispatchBrowserEvent('success', ['message' => "¡El valor {$this->name} se ha registrado!", 'title' => 'Valor registrado', 'modal' => 'new-value']);
        $this->reset('indicator','name','description','value','symbol','file','updated_date','type');
        $this->emitSelf('mount');
    }

    public function edit(Subindicator $cvalue){
        $this->cvalue = $cvalue;
        $this->indicator = $cvalue->indicator_id;
        $this->name = $cvalue->name;
        $this->description = $cvalue->description;
        $this->value = $cvalue->value;
        $this->symbol = $cvalue->symbol;
        $this->updated_date = $cvalue->updated_date;
        $this->type = $cvalue->type;
        $this->emit('open-modal', 'edit-value');
    }

    public function update(){
        $this->validate([
            'indicator' => 'required',
            'name' => 'required',
            'updated_date' => 'required|date',
            'type' => 'required',
        ]);
        $this->cvalue->update([
            'indicator_id' => $this->indicator,
            'name' => $this->name,
            'description' => $this->description,
            'value' => $this->value,
            'symbol' => $this->symbol,
            'data' => $this->csvToJson($this->file),
            'updated_date' => $this->updated_date,
            'type' => $this->type,
            'file' => $this->filename
        ]);
        $this->dispatchBrowserEvent('success', ['message' => "¡El valor {$this->name} se ha actualizado!", 'title' => 'Valor actualizado', 'modal' => 'edit-value']);
        $this->reset('indicator','name','description','value','symbol','file','updated_date','type');
        $this->emitSelf('mount');
    }

    public function delete(Subindicator $cvalue){
        $cvalue->update([
            'status' => 0
        ]);
        $this->dispatchBrowserEvent('error', ['message' => "¡El valor {$cvalue->name} se ha eliminado!", 'title' => 'Valor eliminado']);
        $this->emitSelf('mount');
    }

    public function csvToJson($file) {
        $this->filename = "csv-datas/".Util::getUploadFile($file, 'csv-datas');
        if (!($fp = fopen($this->filename, 'r'))) {
            die("Can't open file...");
        }
        $key = fgetcsv($fp,"1024",",");
        $json = array();
            while ($row = fgetcsv($fp,"1024",",")) {
            $json[] = array_combine($key, $row);
        }
        fclose($fp);
        return json_encode($json);
    }
}
