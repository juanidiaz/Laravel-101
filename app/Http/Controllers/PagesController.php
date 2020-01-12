<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index() {
      $data = array(
            'name' => 'Nick Reynolds',
            'phone' => '555-555-5555',
            'email' => 'nick.reynolds@domain.co',
            'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'profile_picture' => 'img/profile.jpg',
            'album'  => [
              [
                'id'=> 1,
                'title'=>  'Nandhaka Pieris',
                'description'=>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'img'=>  'img/landscape1.jpg',
                'date'=>  '2015-05-01',
                'featured'=>  true
              ],
              [
                'id'=> 2,
                'title'=>  'New West Calgary',
                'description'=>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'img'=>  'img/landscape2.jpg',
                'date'=>  '2016-05-01',
                'featured'=>  false
              ],
              [
                'id'=> 3,
                'title'=>  'Australian Landscape',
                'description'=>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'img'=>  'img/landscape3.jpg',
                'date'=>  '2015-02-02',
                'featured'=>  false
              ],
              [
                'id'=> 4,
                'title'=>  'Halvergate Marsh',
                'description'=>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'img'=>  'img/landscape4.jpg',
                'date'=>  '2014-04-01',
                'featured'=>  true
              ],
              [
                'id'=> 5,
                'title'=>  'Rikkis Landscape',
                'description'=>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'img'=>  'img/landscape5.jpg',
                'date'=>  '2010-09-01',
                'featured'=>  false
              ],
              [
                'id'=> 6,
                'title'=>  'Kiddi Kristjans Iceland',
                'description'=>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'img'=>  'img/landscape6.jpg',
                'date'=>  '2015-07-21',
                'featured'=>  true
              ]
            ]
    );
    return view('pages.index')->with($data);
  }

  public function about() {
    return view('pages.about');
  }

}
