<?php

namespace App\Livewire\Buss;

use App\Models\BusRout;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
class Index extends Component
{
    use WithPagination, WithoutUrlPagination;
    public function render()
    {
        
        $busRoutes = BusRout::paginate(10); 
        

        
        return view('livewire.buss.index', compact('busRoutes')); 
    }
    public function delete(BusRout $busRoute)
    {
        $busRoute->delete();
    }
}
