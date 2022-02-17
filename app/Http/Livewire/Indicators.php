<?php

namespace App\Http\Livewire;

use App\Utilities\Util;
use Livewire\Component;

class Indicators extends Component
{
    public $indicator;

    public function render()
    {
        return view('livewire.indicators')->extends('layouts.app');
    }

    public function getInformation($value){
        $this->indicator = $value;
        $title = $this->getTitleChart($value);
        $this->dispatchBrowserEvent('show-chart', ['name' => $value, 'title' => "$title - Tabla Representativa"]);
    }

    public function getTitleChart($value){
        switch ($value) {
            case 'inpc':
                $title = 'Índice Nacional de Precios al Consumidor';
                break;
            case 'cpiu':
                $title = 'Índice de Inflación de EUA';
                break;
            case 'riff':
                $title = 'Recargos e Intereses a Cargo del Fisco Federal';
                break;
            case 'rppdp':
                $title = 'Recargos en Pago a Plazos Diferido o en Parcialidades';
                break;
            case 'smg':
                $title = 'Salarios Mínimos Generales';
                break;
            case 'smp':
                $title = 'Salarios Mínimos Profesionales';
                break;
            case 'smf':
                $title = 'Salario Mínimo Federal EUA';
                break;
            case 'uma':
                $title = 'Unidad de Medida y Actualización';
                break;
        }
        return $title;
    }
}
