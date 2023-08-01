<?php

// app/Controllers/HimapsiController.php
namespace App\Controllers;

use CodeIgniter\Controller;

class HimapsiController extends Controller
{
    public function index()
    {
        // Sample data for events (replace this with your actual data)
        $data['events'] = [
            ['title' => 'Event 1'],
            ['title' => 'Event 2'],
            ['title' => 'Event 3'],
        ];

        // Load the view and pass the data to it
        return view('himapsi', $data);
    }
}
