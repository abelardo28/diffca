<?php

namespace App\Http\Livewire;

use App\Utilities\Util;
use Livewire\Component;
use App\Models\Indicator;
use App\Models\Subindicator;

class Indicators extends Component
{
    public $values;
    public $indicators;
    public $subindicator;

    public function mount(){
        $this->values = Subindicator::where(['status' => 1, 'type' => 1])->get();
        $this->indicators = Indicator::with(['subindicators' => function($query){
            $query->where('type', 2)->orderBy('name');
        }])->where('status', 1)->orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.indicators')->extends('layouts.app');
    }

    public function showSubindicator(Subindicator $subindicator){
        $this->subindicator = $subindicator;
        $this->subindicator->data = $this->arrayToTable(json_decode($subindicator->data, true));
        $this->dispatchBrowserEvent('show-subindicator',['data' => $subindicator->data]);
    }

    public function arrayToTable($datas) {
        if (is_null($datas)) {
            return '<p class="text-center">No hay datos disponibles actualmente sobre el indicador seleccionado.</p>';
        }
        $table = '<table class="table table-bordered table-striped">';
        foreach ($datas as $data) {
            $header = "<thead><tr>";
            foreach ($data as $key => $val) {
                $header .= "<th>" . $key . "</th>";
            }
            $header .= "</tr></thead>";
        }
        $body = "<tbody><tr>";
        foreach ($datas as $key => $data) {
            foreach ($data as $age => $value) {
                $body .= "<td data-age='{$age}'>" . $value . "</td>";
            }
            $body .="</tr>";
        }
        $table .= $header.$body.'</tr></tbody</table>';
        return $table;
    }

}
