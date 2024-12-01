<?php

namespace App\Livewire\Buss;

use App\Models\BusRout;
use Livewire\Component;

class Index extends Component
{
    
    public function render()
    {
        
        $busRoutes = BusRout::paginate(10); 

        
        return view('livewire.buss.index', compact('busRoutes')); 
    }
}
