<?php namespace Nikolaykolesnichenko\Huntererror\Components;

use Cms\Classes\ComponentBase;

class Hunter extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Hunter JavaScript errors',
            'description' => 'This component catches JavaScript errors and sends it to Google Analytics'
        ];
    }
}
