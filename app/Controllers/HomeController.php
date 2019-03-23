<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 19.03.2019
 * Time: 15:44
 */

namespace App\Controllers;



class HomeController extends Controller
{

    public function index(){

        //view
        return view('welcome');

    }


}