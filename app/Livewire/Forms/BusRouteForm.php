<?php

namespace App\Livewire\Forms;

use App\Models\BusRout;
use Livewire\Form;

class BusRouteForm extends Form
{
    public $bus_id;
    public $bus_make;
    public $arrival_time;
    public $departure_time;
    public $destination;

    public function setBusRout(BusRout $busRout)
    {
        $this->bus_id = $busRout->bus_id;
        $this->bus_make = $busRout->bus_make;
        $this->arrival_time = $busRout->arrival_time;
        $this->departure_time = $busRout->departure_time;
        $this->destination = $busRout->destination;
    }

    public function rules()
    {
        return [
            'bus_id' => 'required|integer',
            'bus_make' => 'required|string|max:255',
            'arrival_time' => 'required|date_format:H:i',
            'departure_time' => 'required|date_format:H:i|after:arrival_time',
            'destination' => 'required|in:Terminal,UCLM',
        ];
    }
}