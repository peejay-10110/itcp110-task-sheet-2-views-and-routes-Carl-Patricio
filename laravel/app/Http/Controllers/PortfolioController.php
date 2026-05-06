<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function skills()
    {
        return view('skills');
    }

    public function experience()
    {
        return view('experience');
    }

    public function education()
    {
        return view('education');
    }

    public function projects()
    {
        return view('projects.index');
    }

    public function projectShow($slug)
    {
        // Fetch the projects from the config/projects.php file
        $projects = config('projects.list');

        // Check if the projects exist and if the requested slug is in the array
        if (!$projects || !array_key_exists($slug, $projects)) {
            abort(404);
        }

        // Pass the single project data to the view
        return view('projects.show', ['project' => $projects[$slug]]);
    }

    public function blog()
    {
        return view('blog.index');
    }

    public function blogShow($slug)
    {
        // Fetch the posts from the config/blog.php file
        $posts = config('blog.posts');

        // Check if the posts exist and if the requested slug is in the array
        if (!$posts || !array_key_exists($slug, $posts)) {
            abort(404);
        }

        // Pass the single post data to the view
        return view('blog.show', ['post' => $posts[$slug]]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactSend(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:100',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string|max:5000',
        ]);


        return redirect()->route('contact')->
        with('success', 'Message sent! I will get back to you soon.'
        );
    }
}
