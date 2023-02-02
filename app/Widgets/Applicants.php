<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class Applicants extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Models\Applicant::count();
        $string = "Applicants";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-logbook',
            'title'  => "{$count} {$string}",
            'text'   => "Process of Illumination Submissions",
            'button' => [
                'text' => "View all",
                'link' => route('voyager.applicants.index'),
            ],
            'image' => 'img/widget/applicant.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('Post'));
    }
}
