<?php

namespace APP\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;


class UserController  extends Controller {


public function __construct(){
    $this -> middleware ('auth')->except('ShowUsers4');
}

    public function ShowUsers1(){
        return 'Message';
    }

    public function ShowUsers2(){
        return 'Message';
    }

    public function ShowUsers3(){
        return 'Message';
    }

    public function ShowUsers4(){
        return 'Message';
    }
}