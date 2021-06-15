<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Http\Requests\Artikel\StoreRequest;
use App\Http\Requests\Artikel\UpdateRequest;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Throwable;


class artikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View
     */
    public function index()
    {
        return view('artikel.index', ['artikel' => Artikel::orderBy('titel')->get()]);
    }

    /**
     * Display the form for new article creation.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        //return create form voor artikel
        return view('artikel.create');
    }

    /**
     * Validate the submitted data via the form and create a new article.
     *
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        //slaat artikel op in db
        $artikel = new Artikel();
        $artikel->titel = $request->input('titel');
        $artikel->content = $request->input('content');
        $artikel->afbeelding = $request->input('afbeelding');
        echo  $artikel->titel;
        $artikel->save();
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Artikel $artikel
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View
     */
    public function show(Artikel $artikel)
    {
        return view('artikel.show', ['artikel' => $artikel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Artikel $artikel
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View
     */
    public function edit(Artikel $artikel)
    {
        return view('artikel.edit', ['artikel' => $artikel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param Artikel $artikel
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, Artikel $artikel)
    {
        $artikel->update($request->all());

        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Artikel $artikel
     * @return RedirectResponse
     */
    public function destroy(Artikel $artikel)
    {
        try {
            $artikel->delete();
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors(['An error occurred during the article deletion process.']);
        }

        return redirect()->route('artikel.index');
    }
}
