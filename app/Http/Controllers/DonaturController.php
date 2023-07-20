<?php

namespace App\Http\Controllers;
use App\Models\Donatur;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    public function index(): Response
    {
    $donatur = Donatur::all();
    return view('donatur.index', compact(['donatur']));
    }

    public function create(): Response
    {
    return view('donatur');
    }

    public function store(Request $request): Response
    {
    Donatur::create($request->except(['id_user']));
    return redirect('/donatur/index');
    }

    public function edit(): Response
    {
    return view('donatur.edit', compact(['donatur']));
    }

    
}
