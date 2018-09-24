<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{

    private $_dossier = "img";
    private $_path;
    private $_pathToFile;

    /**
     * [Fonction download - Téléchargement de l'image]
     * @param  string $file [img]
     * @return []       []
     */
    public function download(string $file)
    {
        $this->_path ="$this->_dossier/$file";
        $this->_pathToFile = public_path($this->_path);
        return response()->download($this->_pathToFile);
    }
}
