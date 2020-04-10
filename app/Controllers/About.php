<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class About extends Controller
{

    public function index($page = 'about')
    {
        if (!is_file(APPPATH . '/Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = $page;

        echo view('templates/header', $data);
        echo view('pages/' . $page, $data);
        echo view('templates/footer');
    }
}
