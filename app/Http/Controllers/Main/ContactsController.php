<?php

namespace App\Http\Controllers\Main;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    public function __invoke() {
        return view('main.contacts');
    }
}
