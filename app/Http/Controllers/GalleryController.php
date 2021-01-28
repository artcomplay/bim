<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function get_photo_from_instagramm()
    {
        $dir = './storage/gallery';
        $image_list = scandir($dir);
        $elem = '.';
        $key=array_search($elem, $image_list);
        if (false !== $key) unset($image_list[ $key ]);
        $elem = '..';
        $key=array_search($elem, $image_list);
        if (false !== $key) unset($image_list[ $key ]);

        foreach($image_list as $item){
            $item = 'storage/gallery/' . $item;
        }
        
        return view('gallery')->with('photo', $image_list);
    }

}



