<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

function getContacts()
{
    return [
        1 => ['name' => 'Name 1', 'phone' => '1234567890'],
        2 => ['name' => 'Name 2', 'phone' => '2345678901'],
        3 => ['name' => 'Name 3', 'phone' => '3456789012'],
    ];
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function () {
    $contacts = getContacts();
    return view('contacts.index', compact('contacts'));
})->name('contacts.index');

Route::get('/contacts/create', function () {
    return view('contacts.create');
})->name('contacts.create');

Route::get('/contacts/{id}', function ($id) {
    $contacts = getContacts();
    $contact = $contacts[$id];
    // return view('contacts.show')->with('contact', $contact);
    return view('contacts.show', compact('contact'));
})->name('contacts.show');
