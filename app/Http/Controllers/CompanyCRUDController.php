<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyCRUDController extends Controller
{
    // Create Index
    public function index() {
        $data['Companies'] = Company::orderBy('id', 'desc')->paginate(5);
        return view('companies.index', $data);
    }

    // Create resource
    public function create() {
        return view('companies.create');
    }
}
