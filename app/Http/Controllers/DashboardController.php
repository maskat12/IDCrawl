<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->breadcrumbs = [
            ['title' => 'Dashboard', 'link' => '#']
        ];
    }

    public function index(){
        $data = [
            'breadcrumb' => [
                ['title' => 'Dashboard', 'link' => '#'],
            ],
        ];

        return view('dashboard',$data);
    }

    public function fakeData(){
     
        $data = [
            [
            "id"=> 1,
            "first_name"=> "Baxie",
            "last_name"=> "Draye",
            "email"=> "bdraye0@yale.edu",
            "gender"=> "Male",
            "ip_address"=> "231.38.228.19"
          
            ], [
            "id"=> 2,
            "first_name"=> "Meara",
            "last_name"=> "Shankster",
            "email"=> "mshankster1@soundcloud.com",
            "gender"=> "Female",
            "ip_address"=> "221.98.28.124"
          ], [
            "id"=> 3,
            "first_name"=> "Jyoti",
            "last_name"=> "Clemensen",
            "email"=> "jclemensen2@google.ca",
            "gender"=> "Female",
            "ip_address"=> "136.116.131.162"
          ], [
            "id"=> 4,
            "first_name"=> "Franciskus",
            "last_name"=> "Gerrels",
            "email"=> "fgerrels3@arizona.edu",
            "gender"=> "Male",
            "ip_address"=> "63.14.152.240"
          ], [
            "id"=> 5,
            "first_name"=> "Alexandre",
            "last_name"=> "Ashwell",
            "email"=> "aashwell4@slideshare.net",
            "gender"=> "Male",
            "ip_address"=> "91.151.84.143"
          ], [
            "id"=> 6,
            "first_name"=> "Kendal",
            "last_name"=> "Hallowell",
            "email"=> "khallowell5@google.com.hk",
            "gender"=> "Male",
            "ip_address"=> "30.2.23.48"
          ], [
            "id"=> 7,
            "first_name"=> "Jeffrey",
            "last_name"=> "Estrella",
            "email"=> "jestrella6@guardian.co.uk",
            "gender"=> "Male",
            "ip_address"=> "67.9.144.87"
          ], [
            "id"=> 8,
            "first_name"=> "Maison",
            "last_name"=> "Twiddy",
            "email"=> "mtwiddy7@altervista.org",
            "gender"=> "Male",
            "ip_address"=> "138.26.225.128"
          ], [
            "id"=> 9,
            "first_name"=> "Gherardo",
            "last_name"=> "Vayne",
            "email"=> "gvayne8@ed.gov",
            "gender"=> "Male",
            "ip_address"=> "129.254.27.177"
          ], [
            "id"=> 10,
            "first_name"=> "Enrique",
            "last_name"=> "Blumsom",
            "email"=> "eblumsom9@tiny.cc",
            "gender"=> "Male",
            "ip_address"=> "5.150.244.167"
          ], [
            "id"=> 11,
            "first_name"=> "Myrah",
            "last_name"=> "Crunkhurn",
            "email"=> "mcrunkhurna@pagesperso-orange.fr",
            "gender"=> "Female",
            "ip_address"=> "77.127.125.94"
          ], [
            "id"=> 12,
            "first_name"=> "Bayard",
            "last_name"=> "Smuth",
            "email"=> "bsmuthb@booking.com",
            "gender"=> "Male",
            "ip_address"=> "194.208.60.157"
          ], [
            "id"=> 13,
            "first_name"=> "Obediah",
            "last_name"=> "Burberry",
            "email"=> "oburberryc@creativecommons.org",
            "gender"=> "Male",
            "ip_address"=> "14.18.150.166"
          ], [
            "id"=> 14,
            "first_name"=> "Cordy",
            "last_name"=> "Kirton",
            "email"=> "ckirtond@businessweek.com",
            "gender"=> "Male",
            "ip_address"=> "250.188.233.4"
          ], [
            "id"=> 15,
            "first_name"=> "Doralia",
            "last_name"=> "Gianinotti",
            "email"=> "dgianinottie@barnesandnoble.com",
            "gender"=> "Female",
            "ip_address"=> "104.212.179.31"
          ], [
            "id"=> 16,
            "first_name"=> "Horatio",
            "last_name"=> "Ornelas",
            "email"=> "hornelasf@webnode.com",
            "gender"=> "Male",
            "ip_address"=> "78.144.230.204"
          ], [
            "id"=> 17,
            "first_name"=> "Wyatan",
            "last_name"=> "Conti",
            "email"=> "wcontig@dion.ne.jp",
            "gender"=> "Male",
            "ip_address"=> "195.204.97.63"
          ], [
            "id"=> 18,
            "first_name"=> "Mirella",
            "last_name"=> "Grange",
            "email"=> "mgrangeh@bloglines.com",
            "gender"=> "Female",
            "ip_address"=> "157.58.165.102"
          ], [
            "id"=> 19,
            "first_name"=> "Trudy",
            "last_name"=> "Parkes",
            "email"=> "tparkesi@goo.gl",
            "gender"=> "Female",
            "ip_address"=> "204.35.148.77"
          ], [
            "id"=> 20,
            "first_name"=> "Tanya",
            "last_name"=> "Goodbody",
            "email"=> "tgoodbodyj@jimdo.com",
            "gender"=> "Female",
            "ip_address"=> "49.232.139.179"
          ]];
        
        return $data;
    }
}
