<?php namespace Nikolaykolesnichenko\Huntererror\Components;

use Cms\Classes\ComponentBase;

class Hunter extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Hunter js-errors',
            'description' => 'This component catches js-error and sends it to Google Analytics'
        ];
    }
}
