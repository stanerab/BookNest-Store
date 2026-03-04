<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    // Load helpers in the constructor
    public function __construct()
    {
        helper('html'); // Loads the HTML helper which includes esc()
    }

    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news_list' => $model->getNews(),
            'title' => 'Home',
        ];

        return view('templates/header', $data)
            . view('pages/navbar')
            . view('pages/home')
            . view('templates/footer');
    }

    // For viewing individual books
    public function book($slug = null)
    {
        $model = model(NewsModel::class);
        
        $data['news'] = $model->where('slug', $slug)->first();
        
        if (empty($data['news'])) {
            throw new PageNotFoundException('Cannot find the book: ' . $slug);
        }
        
        $data['title'] = $data['news']['title'];
        
        return view('templates/header', $data)
            . view('pages/navbar')
            . view('pages/view')
            . view('templates/footer');
    }

    // For static pages (about, contact, etc)
    public function view(string $page = 'home')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('pages/navbar')
            . view('pages/' . $page)
            . view('templates/footer');
    }

    // Basket page
    public function basket()
    {
        $data['title'] = 'Your Basket';
        
        return view('templates/header', $data)
            . view('pages/navbar')
            . view('pages/basket')
            . view('templates/footer');
    }
}