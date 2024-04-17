<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Admin\Contato;
use App\Models\Contato as ModelsContato;
use App\Models\Licitacoe;
use App\Models\Noticia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $contato;
    public function __construct(Contato $contato)
    {
        $this->contato = $contato;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = Noticia::limit(3)->get();
        return view('home.pages.index', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function sobre()
    {
        return view('home.pages.sobre');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function contatos()
    {

        return view('home.pages.contato');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function licitacao()
    {
        $data = Licitacoe::latest()->get();
        return view('home.pages.licitacao', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'fone' => 'required',
            'email' => 'required',
            'assunto' => 'required',
            'msg' => 'required',

        ]);
        $this->contato->name = $request->name;
        $this->contato->fone = $request->fone;
        $this->contato->email = $request->email;
        $this->contato->assunto = $request->assunto;
        $this->contato->msg = $request->msg;
        $this->contato->save();
        return redirect()->back()->with('msg', 'Mensagem recebida com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function download()
    {
        $file_path = public_path('upload/file.pdf');
        // $file_name = 'custom_file_name.pdf';

        return response()->download('upload/005-2024.pdf');
    }

    public function noticias()
    {
        $data = Noticia::latest()->get();
        return view('home.pages.noticia.index', compact('data'));
    }
}
