<?php

namespace App\Http\Controllers;

use JavaScript;
use Illuminate\Support\Facades\DB;




use App\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function listeoffres()
    {

        $listeoffres = Offre::all();
        return view('offres.listeoffres', compact('listeoffres'));
    }


    public function details($id)
    {



        $offre = DB::table('offres')->where('id', $id)->first();

        return view('offres.detailoffre', compact('offre'));
    }

    public function offresmaps(){

        $offres = Offre::all();

        JavaScript::put([

            'offres' =>  $offres,

        ]);

        return view('offres.offremaps');

    }


    public function index()

    {


        $offres = Offre::where('user_id', auth()->user()->id)->latest()->paginate(5);

        return view('offres.index', compact('offres'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        //$offres = Offre::all();

        //JavaScript::put([

          //  'user' =>  $offres,

       // ]);

        return view('offres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $request->validate([
            'superficie' => 'required',
            'commentaire' => 'required',
            'capacite' => 'required',
            'tele' => 'required',
            'type' => 'required',
            'prix' => 'required',
            'adresseX' => 'required',
            'adresseY' => 'required',
            'image'    => 'required',
            'image.*'  => 'image|mimes:jpeg,png,jpg|max : 2048'
        ]);

        if ($request->hasfile('image')) {

            foreach ($request->file('image') as $img) {

                $name = $img->getClientOriginalName();
                $img->move(public_path() . '/images/', $name);
                $data[] = $name;
            }
        }


        $offre = new Offre([

            'user_id' => auth()->user()->id,
            'prix' => $request->get('prix'),
            'type' => $request->get('type'),
            'commentaire' => $request->get('commentaire'),
            'superficie' => $request->get('superficie'),
            'capacite' => $request->get('capacite'),
            'tele' => $request->get('tele'),
            'adresseX' => $request->get('adresseX'),
            'adresseY' => $request->get('adresseY'),
            'image' => json_encode($data),

        ]);



        $offre->save();
        return redirect()->route('offres.index')
            ->with('success', 'Offre created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function show(Offre $offre)
    {
        return view('offres.show', compact('offre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function edit(Offre $offre)
    {
        return view('offres.edit', compact('offre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offre $offre)
    {



        $request->validate([
            'superficie' => 'required',
            'capacite' => 'required',
            'tele' => 'required',
            'commentaire' => 'required',
            'type' => 'required',
            'prix' => 'required',
            'adresseX' => 'required',
            'adresseY' => 'required',
            // 'image' => 'required',
            // 'image.*'  =>'image|mimes:jpeg,png,jpg|max : 2048'
        ]);





        $offre->update($request->all());
        return redirect()->route('offres.index')
            ->with('success', 'Offre updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offre $offre)
    {
        $offre->delete();
        return redirect()->route('offres.index')
            ->with('success', 'Offre deleted successfully');
    }
}
