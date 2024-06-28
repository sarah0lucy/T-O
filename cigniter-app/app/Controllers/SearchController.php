<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ImageModel;

class SearchController extends BaseController
{
    public function index()
    {
        return view('search'); // Afișează pagina de căutare
    }

    public function search()
    {
        $model = new ImageModel();
        $search = $this->request->getPost('search');

        $data = [
            'results' => $model->like('title', $search)->findAll() // Căutare după titlu în baza de date
        ];

        return view('search', $data); // Afișează pagina de căutare cu rezultatele căutării
    }
}
