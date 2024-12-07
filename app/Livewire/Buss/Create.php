<?php

namespace App\Livewire\Buss;
use App\Livewire\Forms\BusRouteForm;
use App\Models\BusRout;
use App\Models\BusRoute;

use Livewire\Component;


class Create extends Component
{
    public BusRouteForm $form;

    public function render()
    {
        return view('livewire.buss.create', [
            'bus_makes' => ['Mercedes', 'Isuzu', 'Howo', 'Volvo'], // Bus makes for selection
            'destinations' => ['UCLM', 'Terminal'],               // Destinations for selection
        ]);
    }

    public function updated($property)
    {
        // Handle form updates here if needed
    }

    public function addBusRoute()
    {
        $this->validate();

        BusRout::create([
            'bus_id' => $this->form->bus_id,         // Ensure bus_id is passed
            'bus_make' => $this->form->bus_make,     // Ensure bus_make is passed
            'arrival_time' => $this->form->arrival_time, // Ensure arrival_time is passed
            'departure_time' => $this->form->departure_time, // Ensure departure_time is passed
            'destination' => $this->form->destination,    // Ensure destination is passed
        ]);

        flash()->success('Bus route added successfully');

        return $this->redirect(Index::class, navigate: true);
    }

    
}
