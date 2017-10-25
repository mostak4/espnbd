<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UseradminController extends Controller
{
    public function useradmin () {
        return view('admin.useradmin.add-user');
    }
}
