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
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminController extends Controller
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
        $projects = Project::all();
        $contacts = Contact::first();
        $socials = Socials::first();

        return view('admin.index', [
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

    public function navsUpdate()
    {
        $nav = request()->validate([
            'id' => ['required', 'exists:navs,id'],
            'nav_logo_previous' => ['required'],
            'hero_bg_previous' => ['required'],
            'hero_bg_small_previous' => ['required'],
            'nav_logo' => ['image'],
            'hero_bg' => ['image'],
            'hero_bg_small' => ['image'],
            'hero_title' => ['required', 'max:255'],
            'hero_tagline' => ['required', 'max:255'],
        ]);
        $imagePaths = [];

        // Process the 'nav_logo' image upload
        if (request()->hasFile('nav_logo')) {
            if (Storage::disk('public')->exists($nav['nav_logo_previous'])) {
                Storage::disk('public')->delete($nav['nav_logo_previous']);
            }
            $navLogoExtension = request()->file('nav_logo')->getClientOriginalExtension(); // Get extension
            $navLogoName = 'nav-' . time() . '.' . $navLogoExtension; // Custom name with timestamp and extension
            $imagePaths['nav_logo'] = request()->file('nav_logo')->storeAs('images', $navLogoName, 'public');
        }

        // Process the 'hero_bg' image upload
        if (request()->hasFile('hero_bg')) {
            if (Storage::disk('public')->exists($nav['hero_bg_previous'])) {
                Storage::disk('public')->delete($nav['hero_bg_previous']);
            }
            $heroBgExtension = request()->file('hero_bg')->getClientOriginalExtension(); // Get extension
            $heroBgName = 'hero-' . time() . '.' . $heroBgExtension; // Custom name with timestamp and extension
            $imagePaths['hero_bg'] = request()->file('hero_bg')->storeAs('images', $heroBgName, 'public');
        }

        // Process the 'hero_bg' image upload
        if (request()->hasFile('hero_bg_small')) {
            if (Storage::disk('public')->exists($nav['hero_bg_small_previous'])) {
                Storage::disk('public')->delete($nav['hero_bg_small_previous']);
            }
            $heroBgExtension = request()->file('hero_bg_small')->getClientOriginalExtension(); // Get extension
            $heroBgName = 'hero-small-' . time() . '.' . $heroBgExtension; // Custom name with timestamp and extension
            $imagePaths['hero_bg_small'] = request()->file('hero_bg_small')->storeAs('images', $heroBgName, 'public');
        }

        $id = Nav::findOrFail($nav['id']);
        $id->update([
            'nav_logo' => $imagePaths['nav_logo'] ?? $nav['nav_logo_previous'],
            'hero_bg' => $imagePaths['hero_bg'] ?? $nav['hero_bg_previous'],
            'hero_bg_small' => $imagePaths['hero_bg_small'] ?? $nav['hero_bg_small_previous'],
            'hero_title' => $nav['hero_title'],
            'hero_tagline' => $nav['hero_tagline'],
        ]);

        return redirect()->route('admin.index');

    }

    public function aboutUpdate(): RedirectResponse
    {
        // Validate the request data
        $about = request()->validate([
            'id' => ['required', 'exists:abouts,id'],
            'description' => 'required',
        ]);

        $id = About::findOrFail($about['id']);
        $id->update($about);

        return redirect()->route('admin.index');

    }

    public function skillsAdd(): RedirectResponse
    {
        // Validate the request data
        $contacts = request()->validate([
            'title' => 'required',
            'name' => ['required'],
            'icon' => ['required', 'string'],
        ]);
        $contacts['icon'] = htmlspecialchars($contacts['icon'], ENT_QUOTES, 'UTF-8');
        Skill::create($contacts);

        return redirect()->route('admin.index');

    }

    public function skillsDelete(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('admin.index');

    }

    public function educationUpdate(): RedirectResponse
    {
        // Validate the request data
        $education = request()->validate([
            'id' => ['required', 'exists:education,id'],
            'degree' => 'required',
            'major' => 'required',
            'institution' => 'required',
        ]);

        $id = Education::findOrFail($education['id']);
        $id->update($education);

        return redirect()->route('admin.index');

    }

    public function servicesUpdate(): RedirectResponse
    {
        // Validate the request data
        $contacts = request()->validate([
            'services' => ['required', 'array'],
            'services.*.id' => ['required'],
            'services.*.title' => ['required'],
            'services.*.description' => ['required'],
        ]);

        foreach ($contacts['services'] as $service) {
            $id = Service::findOrFail($service['id']);
            $id->update($service);

        }
        return redirect()->route('admin.index');
    }

    public function projectAdd(): RedirectResponse
    {
        // Validate the request data
        $projects = request()->validate([
            'title' => 'required',
            'github_link' => 'required',
            'live_link' => 'required',
            'image' => 'required',
            'technology' => 'required',
            'features' => 'required',
        ]);

        if (request()->hasFile('image')) {
            $imageExtension = request()->file('image')->getClientOriginalExtension();
            $imageName = 'project-' . time() . '.' . $imageExtension;
            $projects['image'] = request()->file('image')->storeAs('images', $imageName, 'public');
        }

        $projects['features'] = htmlspecialchars($projects['features'], ENT_QUOTES, 'UTF-8');
        Project::create($projects);

        return redirect()->route('admin.index');

    }

    public function projectsDelete(Project $project)
    {
        if (Storage::disk('public')->exists($project['image'])) {
            Storage::disk('public')->delete($project['image']);
        }
        $project->delete();
        return redirect()->route('admin.index');

    }

    public function contactsUpdate(): RedirectResponse
    {
        // Validate the request data
        $contacts = request()->validate([
            'id' => ['required', 'exists:contacts,id'],
            'phone' => 'required',
            'email' => ['required', 'email'],
            'address' => 'required'
        ]);

        $id = Contact::findOrFail($contacts['id']);
        $id->update($contacts);

        return redirect()->route('admin.index');

    }

    public function socialsUpdate(): RedirectResponse
    {
        // Validate the request data
        $socials = request()->validate([
            'id' => ['required', 'exists:socials,id'],
            'github' => 'required',
            'fiverr' => 'required',
            'linkedin' => 'required',
        ]);

        $id = Socials::findOrFail($socials['id']);
        $id->update($socials);

        return redirect()->route('admin.index');

    }

}
