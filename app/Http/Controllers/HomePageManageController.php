<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageManageController extends Controller
{
    public function index() {
    $data = Homepage::all();
    return view('homepage.index', compact('data'));
    }

    public function create() {
        return view('homepage.create');
    }

    public function store(Request $request) {
        Homepage::create($request->all());
        return redirect()->route('homepage.index');
    }

    public function edit($id) {
        $homepage = Homepage::findOrFail($id);
        return view('homepage.edit', compact('homepage'));
    }

    public function update(Request $request, $id) {
        $homepage = Homepage::findOrFail($id);
        $homepage->update($request->all());
        return redirect()->route('homepage.index');
    }

    public function destroy($id) {
        Homepage::findOrFail($id)->delete();
        return redirect()->route('homepage.index');
    }
}
