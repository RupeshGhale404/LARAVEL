<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpageController extends Controller
{
    public function blogs(){
        $sample=[
            ['id'=>1,
            'name'=>"test1",
            'des'=>'This is a beautiful image',
            'img'=>'https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&w=600'
            ],
            ['id'=>2,
            'name'=>"test2",
            'des'=>'hello this is test2',
            'img'=>'https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&w=600'
            ],
        ];
             $data=[
            ['id'=>1,
            'name'=>"test1",
            'des'=>'This is a beautiful image',
            'img'=>'https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&w=600'
            ],
            ['id'=>2,
            'name'=>"test2",
            'des'=>'hello this is test2',
            'img'=>'https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&w=600'
            ],
        ];
        @dd($sample,$data);
        return view ('pages.blog',compact('sample', 'data'));
    }
    public function contact(){
        return view ('pages.contact');
    }
    public function blogdetail($id = null)
    {
         $sample=[
            ['id'=>1,
            'name'=>"test1",
            'des'=>'This is a beautiful image',
            'img'=>'https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&w=600'
            ],
            ['id'=>2,
            'name'=>"test2",
            'des'=>'hello this is test2',
            'img'=>'https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&w=600'
            ],

        ];
        if ($id === null) {
            return redirect('/blogs');
        }

        $service = null;
        foreach ($sample as $s) {
            if (isset($s['id']) && $s['id'] == $id) {
                $service = $s;
                break;
            }
        }

        if (!$service) {
            abort(404);
        }

        return view('pages.blogdetail', compact('service'));
    }
}