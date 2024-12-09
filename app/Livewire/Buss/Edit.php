<?php

namespace App\Livewire\Buss;

use App\Livewire\Forms\BusRouteForm;
use App\Models\BusRout;
use Livewire\Component;

class Edit extends Component
{
    public BusRout $busRoute;
    public BusRouteForm $form;
    public $destinations = [];

    public function mount(BusRout $busRoute)
    {
        $this->busRoute = $busRoute;

        // Initialize the form
       
        $this->form->setBusRout($this->busRoute);

        $this->destinations = ['Terminal', 'UCLM'];
    }

    public function render()
    {
        return view('livewire.buss.edit', [
            'bus_makes' => ['Mercedes', 'Isuzu', 'Howo', 'Volvo'],
        ]);
    }

    public function updateBusRoute()
    {
        $this->validate();

        
        $this->busRoute->update([
            'bus_id' => $this->form->bus_id,
            'bus_make' => $this->form->bus_make,
            'arrival_time' => $this->form->arrival_time,
            'departure_time' => $this->form->departure_time,
            'destination' => $this->form->destination,
        ]);
        
        flash()->success('Bus route updated successfully');

        return $this->redirect(Index::class, navigate: true);
    }
}
