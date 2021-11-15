<?php

namespace App\Http\Livewire;

use \Illuminate\Support\Facades\Mail as MailFacade;
use App\Mail\TestMail;
use Livewire\Component;

class Mail extends Component
{
	public $email;

	public $message;

	public $rules = [
		'email' => ['required', 'email'],
		'message' => ['required']
	];

    public function render()
    {
        return view('livewire.mail');
    }

    public function sendEmail()
    {
    	$this->validate();

	    MailFacade::to($this->email)->send(new TestMail($this->message));

    	$this->emit('sent');

    	$this->reset('email', 'message');
    }
}
