<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PhotosModel;

class PhotosController extends BaseController
{
    
    public function index()
    {
        $photoModel = new PhotosModel();
        $data['images'] = $photoModel->findAll();

        return view('pagina1', $data);
    }
    
}
