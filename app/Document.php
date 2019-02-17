<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Caffeinated\Shinobi\Traits\ShinobiTrait;

class Document extends Model
{
    use ShinobiTrait;

    const WRITERS = array('Word2007' => 'docx', 'ODText' => 'odt', 'RTF' => 'rtf', 'HTML' => 'html', 'PDF' => 'pdf');

    protected $fillable = [
        'name', 'type', 'section', 'meta',
    ];

    protected $hidden = [
        'is_active'
    ];

    protected $casts = [
        'meta' => 'array',
        'is_active' => 'boolean',
    ];

    public function getContent()
    {
        $source = __DIR__ . "/resources/{$this->name}.docx";
        // echo date('H:i:s'), " Reading contents from `{$source}`", EOL;
        $phpWord = \PhpOffice\PhpWord\IOFactory::load($source);

        echo write($phpWord, basename(__FILE__, '.php'), WRITERS);
    }

    public function saveContent()
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();

        $section = $phpWord->addSection();
        $text = $section->addText($this->name);
        // $text = $section->addText($request->get('email'));
        // $text = $section->addText($request->get('number'), array('name' => 'Arial', 'size' => 20, 'bold' => true));
        // $section->addImage("./images/Krunal.jpg");
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

        $objWriter->save("{$this->name}.docx");

        return response()->download(public_path("{$this->name}.docx"));
    }
}
