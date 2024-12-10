<?php

namespace App\Livewire\Buss;

use App\Models\BusRout;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;


class Index extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $search;

    public function render()
    {
        
        $query = BusRout::query();
        $query = $this->applySearch($query);
        return view('livewire.buss.index', [
            
            'busRoutes' => $query->paginate(10)
        ]);
        

        
        return view('livewire.buss.index', compact('busRoutes')); 
    }
    public function delete(BusRout $busRoute)
    {
        $busRoute->delete();
    }
    
    public function applySearch(Builder $query)
    {
        return $query->where('destination', 'like', '%' . $this->search . '%');
    }

}
