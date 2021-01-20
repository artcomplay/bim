<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function get_photo_from_instagramm()
    {
        $photo_instafram = file_get_contents('https://www.instagram.com/brest_inter_market/');
        $photo = $photo_instafram;
        return view('gallery',['photo' => $photo]);
    }
}
