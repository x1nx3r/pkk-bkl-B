<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProfilePhoto extends Component
{
    public $member;

    public function __construct($member)
    {
        $this->member = $member;
    }

    public function render()
    {
        return view('components.profile-photo');
    }
}
