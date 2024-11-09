<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Admin;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Nav;
use App\Models\Project;
use App\Models\ProjectFeature;
use App\Models\ProjectImage;
use App\Models\ProjectTechnology;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Socials;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Admin::factory()->create([
            'first_name' => 'Abu',
            'last_name' => 'Talha',
            'email' => 'testadmin@example.com',  // Use a unique email to avoid conflicts
            'password' => Hash::make('Abc@123'), // Hash the password before saving
        ]);
        Socials::factory()->create([
            'github' => 'https://github.com/abu',
            'fiverr' => 'https://fiverr.com/abu',
            'linkedin' => 'https://linkedin.com/abu',
        ]);
        Nav::factory()->create([
            'nav_logo' => 'https://abu.dev/logo.png',
            'hero_bg' => 'https://abu.dev/bg.png',
            'hero_bg_small' => 'https://abu.dev/bg.png',
            'hero_title' => 'Abu Talha',
            'hero_tagline' => 'This is a tag'
        ]);
        Contact::factory()->create([
            'email' => 'test@example.com',
            'phone' => '0123456789',
            'address' => 'Mirpur , Dhaka',
        ]);
        Service::factory()->create([
            'title' => 'Test Service1',
            'description' => 'This is a test service',
        ]);
        Service::factory()->create([
            'title' => 'Test Service2',
            'description' => 'This is a test service2',
        ]);
        Service::factory()->create([
            'title' => 'Test Service3',
            'description' => 'This is a test service3',
        ]);
        Service::factory()->create([
            'title' => 'Test Service4',
            'description' => 'This is a test service4',
        ]);
        About::factory()->create([
            'description' => "I'm Abu Talha",
        ]);
        Education::factory()->create([
            'degree' => 'Bachelor',
            'major' => 'Computer Science',
            'institution' => 'University of Dhaka',
        ]);
        Skill::factory()->create([
            'title' => 'Technology',
            'name' => 'HTML5',
            'icon' => "<svg></svg>"
        ]);
        Project::factory()->create([
            'title' => 'Portfolio Website',
            'github_link' => 'https://github.com/username/portfolio',
            'live_link' => 'https://example.com/portfolio',
            'image' => 'portfolio.jpg',
            'technology' => 'HTML, CSS, JavaScript, Laravel',
            'features' => 'This project features a responsive design, a contact form for direct communication, an image gallery showcasing various works, and is optimized for search engines.',
        ]);

        Project::factory()->create([
            'title' => 'E-commerce Platform',
            'github_link' => 'https://github.com/username/e-commerce',
            'live_link' => 'https://example.com/e-commerce',
            'image' => 'e-commerce.jpg',
            'technology' => 'PHP, Vue.js, MySQL',
            'features' => 'This e-commerce platform includes user accounts for personalized shopping, a secure shopping cart, integrated payment gateways, and a powerful admin dashboard for managing products and orders.',
        ]);


    }
}
