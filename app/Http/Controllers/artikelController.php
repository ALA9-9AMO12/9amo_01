<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Http\Requests\Artikel\StoreRequest;
use App\Http\Requests\Artikel\UpdateRequest;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Throwable;


class artikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['artikelen'] = Artikel::orderBy('id')->paginate(10);
        return view('artikelen.index',$data);
    }

    /**
     * Display the form for new article creation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return create form voor artikelen
        return view('artikelen.create');
    }

    /**
     * Validate the submitted data via the form and create a new article.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titel' => 'required',
            'content' => 'required',
//            'afbeelding' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
//        $image =  $insert['afbeelding'] = $request->get('afbeelding');
//        if ($request->file('afbeelding')) {
//            $imagePath = $request->file('afbeelding');
//            $imageName = $imagePath->getClientOriginalName();
//
//            $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
//        }
//        $image->name = $imageName;
//        $image->path = '/storage/'.$path;
//        $image->save();
        $insert['titel'] = $request->get('titel');
        $insert['content'] = $request->get('content');
        Artikel::insert(request()->except(['_token']));
        return Redirect::to('artikelen/create')
            ->with('success','Great! Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikelen = Artikel::findOrFail($id);

        return view('artikelen.edit', compact('artikelen'));
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

        return redirect()->route('artikelen.index');
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

        return redirect()->route('artikelen.index');
    }
}
