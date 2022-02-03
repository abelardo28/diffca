<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Utilities\Util;
use App\Objects\DofResponse;
use Carbon\Carbon;

class Dof extends Component
{
    public $date = "03-02-2022";
    public $updatedDate;

    public function mount(){
        $date = Carbon::now();
        $this->updatedDate = $date->format('l jS \\of F Y');
    }

    public function render()
    {
        $response = Util::getGuzzleClientDof('https://sidofqa.segob.gob.mx', 'GET', "/dof/sidof/notas/{$this->date}");
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
        $date = date_create($date);
        $this->date = date_format($date, "d-m-Y");
    }
}
