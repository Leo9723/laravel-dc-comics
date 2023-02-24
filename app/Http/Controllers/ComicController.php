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
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
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

        $form_data = $this->validation($request->all());


        $comics = config('comics');

        $newComic = new Comic();

/*         $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $comics[0]['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type']; */

        $newComic->fill($form_data);

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);


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


        //con lo slug, in quel caso dovrei passare $slug alla funzione show:

        // $comic = Comic::where('slug', $slug)->get();
        
        //ricerca composta da piu parametri:
        // $comic = Comic::where('tipo', 'avventura')->where('prezzo', '3,99')->get();

        $data = [
            'single' => $comic
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
        $comic = Comic::find($id);

        if($comic){
            $data = [
                'comic' => $comic
            ];

            return view ('comics.edit', $data);
        };
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
        $comic = Comic::find($id);

        $form_data = $this->validation($request->all());

        $comic->update($form_data);

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
        $comic = Comic::find($id);

        $comic->delete();
        return redirect()->route('comics.index');

    }

    private function validation($data){

        $validator = Validator::make($data, [
            'title' => 'required|max:100',
            'description' => 'required|max:900',
            'thumb' => 'nullable',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'nullable',
            'type' => 'nullable|max:50',
        ],
        [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo è superiore a :max caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'description.max' => 'La descrizione superiore a :max caratteri',
            'price.required' => 'Il prezzo è obbligatorio',
            'series.required' => 'La serie di appartenenza è obbligatoria',
            'type.max' => 'La tipologia è superiore a :max caratteri',
        ]
        )->validate();

        return $validator;



    }
}
