<?php

namespace App\Listeners;

use App\Events\TestEventFinished;
use App\Models\Event;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Str;

class TestListener implements ShouldQueue
{
	/**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        sleep(10);

        $model = new Event([
        	'random' => Str::random(16)
        ]);
        $model->save();

        event(new TestEventFinished(Str::random(16)));
    }
}
