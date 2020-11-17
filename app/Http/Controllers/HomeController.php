<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $users = [
            [
                "name" => "Quynh",
                "email" => "quynhhh@gmail.com",
                "address" => "HN"
            ],
            [
                "name" => "Quynhh",
                "email" => "Quynnhh@gmail.com",
                "address" => "HN"
            ]
        ];
        //xu ly logic
        return view('users.list', compact('users'));
    }

    function create()
    {
        return view('users.add');
    }

    function store() {
        // xu them vao database

        // quay tro lai trang danh sach

        return redirect()->route('users.index');
    }

    function edit($id) {
        dd($id);
    }
}
