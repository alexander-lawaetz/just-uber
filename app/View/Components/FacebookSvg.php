<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FacebookSvg extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return <<<'blade'
            <svg {{ $attributes->merge(['class' => 'fill-current']) }} xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28">
                <path d="M15.708 20.417c0 .322-.27.583-.604.583h-2.416a.594.594 0 0 1-.605-.583v-5.25h-1.812a.594.594 0 0 1-.604-.584V12.25c0-.322.27-.583.604-.583h1.812v-.719a3.867 3.867 0 0 1 1.295-3.014 4.114 4.114 0 0 1 3.139-1.037c.759-.003 1.517.033 2.273.106.308.03.543.28.543.58v2.334c0 .322-.27.583-.604.583h-2.392c-.563 0-.629.078-.629.624v.543h2.235a.59.59 0 0 1 .598.66l-.321 2.333a.597.597 0 0 1-.599.507h-1.913v5.25zM14.5 14.583c0-.322.27-.583.604-.583h1.988l.16-1.167h-2.148a.594.594 0 0 1-.604-.583v-1.126c0-1.144.546-1.79 1.837-1.79h1.788V8.117a23.494 23.494 0 0 0-1.67-.057 2.93 2.93 0 0 0-2.254.727 2.731 2.731 0 0 0-.91 2.14v1.322c0 .322-.27.583-.604.583h-1.812V14h1.813c.333 0 .604.261.604.583v5.25H14.5v-5.25zM14.5 28C6.492 28 0 21.732 0 14S6.492 0 14.5 0 29 6.268 29 14s-6.492 14-14.5 14zm0-1.167c7.34 0 13.292-5.745 13.292-12.833S21.84 1.167 14.5 1.167C7.16 1.167 1.208 6.912 1.208 14S7.16 26.833 14.5 26.833z"/>
            </svg>
        blade;
    }
}
