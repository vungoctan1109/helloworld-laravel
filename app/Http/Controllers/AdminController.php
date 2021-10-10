<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function returnLayout() {
        return view('admin.template.layout');
    }

    public function returnForm() {
        return view('admin.template.form');
    }

    public function returnTable() {
        return view('admin.template.table');
    }
}
