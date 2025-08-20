<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Slider;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $slider = Slider::where('lang',app()->getLocale())->where('status',1)->first();
        return view('frontend.pages.index', compact('slider'));
    }

    public function about()
    {
        $breadcrumbs = [
            [
                'name' => __('Hakkımızda'),
                'url' => route('about')
            ],
        ];
        $about = About::where('lang', app()->getLocale())->first();
        return view('frontend.pages.about', compact('breadcrumbs', 'about'));
    }

    public function contact()
    {

        $breadcrumbs = [
            [
                'name' => __('İletişim'),
                'url' => route('contact')
            ],
        ];
        return view('frontend.pages.contact', compact('breadcrumbs'));
    }

    public function services()
    {

        $breadcrumbs = [
            [
                'name' => __('Hizmetler'),
                'url' => route('services')
            ],
        ];
        return view('frontend.pages.services',compact('breadcrumbs'));
    }

    public function service($slug)
    {

        $breadcrumbs = [
            [
                'name' => __('Hizmetlerimiz'),
                'url' => route('services')
            ],
            [
                'name' => __('Hizmet Detayı'),
                'url' => route('service', $slug)
            ],
        ];
        return view('frontend.pages.service',compact('breadcrumbs'));
    }
}
