<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class BusRouteForm extends Form
{
    public $bus_id;
    public $bus_make;
    public $arrival_time;
    public $departure_time;
    public $destination;

    public function rules()
    {
        return [
            'arrival_time' => 'required|date_format:H:i',
            'departure_time' => 'required|date_format:H:i|after:arrival_time',
            'destination' => 'required|in:Terminal,UCLM',
        ];
    }

    public function messages()
    {
        return [
            'arrival_time.required' => 'The arrival time is required.',
            'arrival_time.date_format' => 'The arrival time must be in the format HH:MM.',
            'departure_time.required' => 'The departure time is required.',
            'departure_time.date_format' => 'The departure time must be in the format HH:MM.',
            'departure_time.after' => 'The departure time must be after the arrival time.',
            'destination.required' => 'The destination field is required.',
            'destination.in' => 'The destination must be either Terminal or UCLM.',
        ];
    }
}
