<?php

namespace App\Http\Livewire;

use App\Events\TestEvent;
use App\Models\Event;
use Illuminate\Support\Str;
use Livewire\Component;

class Events extends Component
{
	public function getEventsProperty()
	{
		return Event::query()->latest()->get();
	}

    public function render()
    {
        return view('livewire.events', [
        	'events' => $this->events
        ]);
    }

    public function dispatchEvent()
    {
		event(new TestEvent());

		$this->emit('dispatched');
    }
}
