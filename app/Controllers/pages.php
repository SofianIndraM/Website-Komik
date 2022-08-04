<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(){
        $data= [
            'title' => 'Home | Web Programming UNPAS'
        ];
        
        return view('pages/home',$data);
               
    }
    public function about(){
        $data= [
            'title' => 'About | Web Programming UNPAS'
        ];
        return view('pages/about',$data);
    }
    public function contact(){
        $data= [
            'title' => 'Contact | Web Programming UNPAS',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl Abc no.123',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl Salemba Raya no.256',
                    'kota' => 'Jakarta'
                ],
            ]
        ];
        return view('pages/contact',$data);
    }
}
