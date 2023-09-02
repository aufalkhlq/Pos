<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataTableController extends Controller
{
    public function index()
    {
        return view("pages.dashboard.user.index");
    }
}
