<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use App\Http\Requests\StoreNewsModelRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UpdateNewsModelRequest;
use Illuminate\Http\Request;
use Error;

class NewsModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'data' => NewsModel::all()
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul' => 'required|filled',
            'isi' => 'required|filled',
        ]);

        if ($validate) {
            $news = new NewsModel();
            $news->judul = $request->judul;
            $news->isi = $request->isi;
            $news->save();
            return response()->json([
                'message' => "Berita Berhasil Ditambahkan",
                'success' => true
            ], 200);
        }
        return response()->json([
            'message' => 'Berita Gagal Ditambah',
            'success' => false,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsModel  $newsModel
     * @return \Illuminate\Http\Response
     */
    public function show(NewsModel $newsModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsModel  $newsModel
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsModel $newsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsModelRequest  $request
     * @param  \App\Models\NewsModel  $newsModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsModelRequest $request, NewsModel $newsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsModel  $newsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsModel $newsModel)
    {
        //
    }
}
