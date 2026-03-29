<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Http\Requests\UserAPIRequest;

class HalamanUtamaController extends Controller
{
    public function index(Request $request)
    {
      $datas = Http::get('https://jsonplaceholder.typicode.com/users')->collect();
      return view('halaman_utama.index', compact('datas'));
    }

    public function create()
    {
        return view('halaman_utama.create');
    }

    public function store(UserAPIRequest $request)
    {
        $response = Http::asForm()->post('https://jsonplaceholder.typicode.com/users', [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'website' => $request->website
        ]);

        // Debug dulu kalau perlu
        // dd($response->status(), $response->json());

        if ($response->status() == 201) {
            $data = $response->json();
            Session::flash('notice', 'Berhasil create data dengan nama : ' . $data['name']);
            return redirect()->route('halaman_utama.index');
        } else {
            Session::flash('error', 'Gagal create data');
            return redirect()->back()->withInput();
        }
    }

    public function edit($id) {
        $response = Http::get("https://jsonplaceholder.typicode.com/users/$id");

        $data = $response->json();

        return view('halaman_utama.edit', compact('data'));
    }

    public function update(UserAPIRequest $request, $id)
    {
        $response = Http::put("https://jsonplaceholder.typicode.com/users/$id", [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'website' => $request->website
        ]);

        if ($response->successful()) {
            Session::flash('notice', 'Berhasil update data');
            return redirect()->route('halaman_utama.index');
        } else {
            Session::flash('error', 'Gagal update data');
            return back();
        }
    }

    public function show($id)
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users/' . $id);

        $data = $response->json();

        return view('halaman_utama.show', compact('data'));
    }
}
