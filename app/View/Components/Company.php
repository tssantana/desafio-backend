<?php

namespace App\View\Components;

use App\Models\Company as ModelsCompany;
use App\Models\Cotation;
use Illuminate\View\Component;

class Company extends Component
{
    /**
     * Os dados da companhia
     * 
     * @var ModelsCompany
     */
    public $company;
 
    /**
     * Os dados da cotação da companhia
     * 
     * @var Cotation
     */
    public $cotation;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($company = null, $cotation = null)
    {
        $this->company = $company;
        $this->cotation = $cotation;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.company');
    }
}
