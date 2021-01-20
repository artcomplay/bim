<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function get_photo_from_instagramm()
    {
        $photo = 1;
        return view('gallery',['photo' => $photo]);
    }
}
