<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Team;
use App\Models\Umkm;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $abouts     = About::latest()->get();
        $banners    = Banner::latest()->get();
        $blogs      = Blog::latest()->get();
        $contacts   = Contact::latest()->get();
        $services   = Service::latest()->get();
        $teams      = Team::latest()->get();
        $umkms      = Umkm::latest()->get();

        return view('layouts.frontend.home', compact('abouts', 'banners', 'blogs', 'contacts', 'services', 'teams', 'umkms'));
    }
}
