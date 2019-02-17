<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:users.index')->only(['index']);
        $this->middleware('permission:users.show')->only(['show']);
        $this->middleware('permission:users.create')->only(['create', 'store']);
        $this->middleware('permission:users.edit')->only(['edit', 'update']);
        $this->middleware('permission:users.destroy')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::paginate();

        return view('documents.index', compact('documents'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }

    public function index2(Request $request)
    {
        //copy the example doc file into your storage directory or corret this path
        $local_template_file = 'example_template.docx';
        //define date to be replaced
        $data = [
            [
                'name' => 'Someone Other',
                'captions' => '*[[DONOTESCAPE]]*<b>something bold</b><br />and so on',
                'img_url' => '[IMG-REPLACE]http://placehold.it/350x150[/IMG-REPLACE]',
            ],
            [
                'name' => 'Person X',
                'captions' => '*[[DONOTESCAPE]]*<b>something bold</b><br />and so on',
                'img_url' => '[IMG-REPLACE]http://placehold.it/350x150[/IMG-REPLACE]',
            ],
            [
                'name' => 'Person Y',
                'captions' => '*[[DONOTESCAPE]]*<b>something bold</b><br />and so on',
                'img_url' => '[IMG-REPLACE]http://placehold.it/350x150[/IMG-REPLACE]',
            ],
        ];
        //call class
        $docx_creation = new \WrkLst\DocxMustache\DocxMustache(['items' => $data], $local_template_file);
        //optionally change some setting before the class gets executed
        $docx_creation->storageDisk = 'local';
        $docx_creation->storagePathPrefix = 'temp/';
        //execute class
        $docx_creation->execute();
        //return path of generated docx file
        return [
            'docx_file' => $docx_creation->local_path . $docx_creation->template_file_name,
        ];
    }
}
