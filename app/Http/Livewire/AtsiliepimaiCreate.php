<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Atsiliepimai;

class AtsiliepimaiCreate extends Component
{
    public $name;
    public $lastname;
    public $email;
    public $services_uses;
    public $services_quality;
    public $opinion_about_us;

    protected $rules = [
        'name' => 'required|min:1',
        'lastname' => 'required|min:1',
        'email' => 'required|min:1',
    ];

    public function save()
    {
        $this->validate();

        Atsiliepimai::create([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'services_uses' => $this->services_uses,
            'services_quality' => $this->services_quality,
            'opinion_about_us'=> $this->opinion_about_us,
        ]);

        return redirect()->to('/atsiliepimai');

    }

    public function render()
    {
        return view('livewire.atsiliepimai-create');
    }
}
