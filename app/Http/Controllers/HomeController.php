<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Nav;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Socials;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {

        $nav = Nav::first();
        $about = About::first();
        $skillTech = Skill::all()->where('title', 'technology');
        $skillFra = Skill::all()->where('title', 'framework');
        $skillTool = Skill::all()->where('title', 'tools');
        $education = Education::first();
        $services = Service::all();
        $projects = Project::orderBy('id')->take(4)->get();
        $contacts = Contact::first();
        $socials = Socials::first();

        return view('index', [
            'nav' => $nav,
            'about' => $about,
            'skillTech' => $skillTech,
            'skillFra' => $skillFra,
            'skillTool' => $skillTool,
            'education' => $education,
            'services' => $services,
            'projects' => $projects,
            'socials' => $socials,
            'contacts' => $contacts,
        ]);
    }

    public function projects(): View
    {
        $projects = Project::orderBy('id')->get();
        return view('projects', [
            'projects' => $projects
        ]);
    }

}
