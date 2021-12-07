<?php 

namespace App\Controllers;

use App\Core\App;

class UsersController {
    public function index() {

        $users = App::get('database')->selectAll('users');

        return view ('users', compact('users'));
    }

    public function store() {
        // Insert user associated with request
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);
        // Redirect to users
        return redirect('users');
    }
}