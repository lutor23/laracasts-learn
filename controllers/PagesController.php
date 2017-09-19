<?php

class PagesController
{
    public function home() 
    { 
        $tasks=App::get('database')->selectAll('todos');

        return view('index', compact('tasks'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }


}

