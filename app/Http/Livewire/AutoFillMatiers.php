<?php
namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Matier; // Replace with your actual model

class AutoFillMatiers extends Component
{
    public $designation;
    
    public function render()
    {
        // if($this->designation){dd($this->designation);}else{null;}
        
        $designations = Matier::where('designation', 'LIKE', '%' . $this->designation . '%')
            ->pluck('designation')
            ->toArray();
            // dd($designations);

        return view('livewire.auto-fill-matiers', ['designations' => $designations]);
    }
}
