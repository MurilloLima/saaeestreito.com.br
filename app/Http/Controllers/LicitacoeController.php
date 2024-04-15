<?php

namespace App\Http\Controllers;

use App\Models\Licitacoe;
use Illuminate\Http\Request;

class LicitacoeController extends Controller
{
    private $licitacoe;
    public function __construct(Licitacoe $licitacoe)
    {
        $this->licitacoe = $licitacoe;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Licitacoe::latest()->get();
        return view('admin.pages.licitacoes.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.licitacoes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required',
            'title' => 'required'
        ]);

        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $imageName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('upload/arquivos'), $imageName);
            $this->licitacoe->file = $imageName;
            $this->licitacoe->title = $request->title;
            $this->licitacoe->save();
            return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Licitacoe $licitacoe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Licitacoe $licitacoe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Licitacoe $licitacoe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->licitacoe->destroy($id);
        return redirect()->back()->with('msg', 'Deletada com sucesso!');
    }
}
