<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comic = Comic::orderBy('id', 'desc')->get();

        $data = [
            'comics' => $comic
        ];

        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate(
            [
                'title' => 'required|min:5|max:100',
                'thumb' => 'required|min:10|max:150',
                'price' => 'required|decimal:2',
                'series' => 'required|min:3|max:100',
                'sale_date' => 'required|date|after:yesterday',
                'type' => 'required|min:3|max:50',
                'description' => 'nullable|min:10|max:1000',
            ]
        );

        $formData = $request->all();
        $newComic = new Comic();
            // $newComic->title = $formData['title'];
            // $newComic->description = $formData['description'];
            // $newComic->thumb = $formData['thumb'];
            // $newComic->price = $formData['price'];
            // $newComic->series = $formData['series'];
            // $newComic->sale_date = $formData['sale_date'];
            // $newComic->type = $formData['type'];
            $newComic->fill($formData);
            $newComic->save();

            return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $comic = Comic::find($id);

        $data = [
            'comic' => $comic
        ];

        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        $data = [
            'comic' => $comic
        ];

        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $comic = Comic::findOrFail($id);
        $formData = $request->all();

        $comic->update($formData);

        return redirect()->route('comics.show', ['comic' => $comic->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
