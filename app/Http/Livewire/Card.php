<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $card;
    public $displayed;
    
    public function mount(){
        $this->displayed = $this->card->question;
    }

    public function switchCard(){
        if($this->displayed == $this->card->question){
            $this->displayed = $this->card->answer;
        }else{
            $this->displayed = $this->card->question;
        }
    }

    public function render()
    {
        return view('livewire.card');
    }
}
