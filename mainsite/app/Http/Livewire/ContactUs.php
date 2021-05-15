<?php

namespace App\Http\Livewire;

use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactUs extends Component
{
    public $name , $email , $subject , $message;
    public function render()
    {
        return view('livewire.contact-us');
    }

    public function clearInput()
    {
        $this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->message = '';
    }

    public function sendmail()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ];

         Mail::to('info@maestershield.com')->send(new ContactUsMail($data));


        $this->clearInput();
        session()->flash('success', 'Message Sent');
    }
}
