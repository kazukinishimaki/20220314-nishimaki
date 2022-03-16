<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
public function index()
{
return view('contacts.index');
}

public function confirm()
{
return view('contacts.confirm');
}

public function process()
{

}

public function complete()
{
return view('contacts.complete');
}
}