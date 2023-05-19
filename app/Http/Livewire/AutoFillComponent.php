<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ouvrage; // Replace with your actual model

class AutoFillComponent extends Component
{
    public $designation;
    
    public function render()
    {
        // if($this->designation){dd($this->designation);}else{null;}
        
        $designations = Ouvrage::where('designation_ouvrage', 'LIKE', '%' . $this->designation . '%')
            ->pluck('designation_ouvrage')
            ->toArray();
            // dd($designations);

        return view('livewire.auto-fill-component', ['designations' => $designations]);
    }
}
