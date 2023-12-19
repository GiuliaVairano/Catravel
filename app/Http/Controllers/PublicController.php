<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller{

    public $cats =[
        [
            'id' => '1',
            'name' => 'Casper',
            'age' => '2 months',
            'breed' => 'European',
            'presentation' => 'lorem ipsum',
            'img' => '/cats/casper.jpg'
        ],
        [
            'id' => '2',
            'name' => 'Garfield',
            'age' => '4 years',
            'breed' => 'European',
            'presentation' => 'lorem ipsum',
            'img' => '/cats/Garfield.jpg'
        ],
        [
            'id' => '3',
            'name' => 'Draven',
            'age' => '2 months',
            'breed' => 'European',
            'presentation' => 'lorem ipsum',
            'img' => '/cats/draven.jpg'
        ],
        [
            'id' => '4',
            'name' => 'Hannibal',
            'age' => '1 year',
            'breed' => 'Maine coon',
            'presentation' => 'lorem ipsum',
            'img' => '/cats/hannibal.jpg'
        ],
        [
            'id' => '5',
            'name' => 'Roger',
            'age' => '4 months',
            'breed' => 'Sphynx',
            'presentation' => 'lorem ipsum',
            'img' => '/cats/roger.jpg'
        ],
        [
            'id' => '6',
            'name' => 'Lily',
            'age' => '3 months',
            'breed' => 'European',
            'presentation' => 'lorem ipsum',
            'img' => '/cats/lily.jpg'
        ],
        [
            'id' => '7',
            'name' => 'Merlin',
            'age' => '7 years',
            'breed' => 'European',
            'presentation' => 'lorem ipsum',
            'img' => '/cats/merlin.jpg'
        ],
        [
            'id' => '8',
            'name' => 'Indiana',
            'age' => '2 months',
            'breed' => 'European',
            'presentation' => 'lorem ipsum',
            'img' => '/cats/indiana.jpg'
        ]
        ];

public function home(){
    return view('welcome' , ['cats'=>$this->cats]);
}

public function chiSiamo(){
    return view('chiSiamo');
}

public function catId($catId) {
    foreach($this->cats as $cat){
        if ($catId == $cat['id']){
            return view ('cats.show',['cat'=> $cat]);
    }
}abort (404,'not found');
}

// public function catBreed($catBreed){
//     if($catBreed == $cat['breed']){
//         return view ('catBreed',[''=> $catBreed]);
//     }
// }

}