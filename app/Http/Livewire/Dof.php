<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Utilities\Util;
use App\Objects\DofResponse;
use Carbon\Carbon;

class Dof extends Component
{
    public $date;
    public $currentDate;

    public function mount(){
        $this->date = Carbon::now()->format('Y-m-d');
        $this->currentDate = Carbon::now()->format('Y-m-d');
    }

    public function render()
    {
        $date = date_format(date_create($this->date), "d-m-Y");
        $response = Util::getGuzzleClientDof('https://sidofqa.segob.gob.mx', 'GET', "/dof/sidof/notas/{$date}");
        if ($response->messageCode == 200) {
            $response = $this->responseStructure($response);
        } else {
            $response = NULL;
        }
        return view('livewire.dof', compact('response'))->extends('layouts.app');
    }

    public function responseStructure($response){
        $array = [];
        $titleTemp = "";
        foreach ($response->NotasMatutinas as $resp) {
            if (isset($resp->titulo, $resp->codOrgaDos)) {
                if($titleTemp = $resp->codOrgaDos){
                    $array[$resp->codOrgaDos][] = new DofResponse($resp->titulo, $resp->fecha, $resp->codNota);
                }
                $titleTemp = $resp->codOrgaDos;
            }
        }
        return (object)$array;
    }

    public function updatedDate($date){
        $this->date = $date;
    }
}
