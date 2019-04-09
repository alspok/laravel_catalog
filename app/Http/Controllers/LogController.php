<?php

namespace App\Http\Controllers;

use App\rc;
use Illuminate\Http\Request;
use ZipArchive;

class LogController extends Controller
{
    /**
     * Add file to zip archive.
     *
     * @return \Illuminate\Http\Response
     */
    public function createLogZip()
    {
        $zip = new ZipArchive();
        $zipFileName = 'C:/Users/Alvydas/catalog/laravel/catalog/storage/logs/laravel-log.zip';

        if ($zip->open($zipFileName, ZipArchive::CREATE) === TRUE){
            $zip->addFile('C:/Users/Alvydas/catalog/laravel/catalog/storage/logs/laravel-2019-03-18.log');
            $zip->close();
        }
        else echo 'Error creating zip file';

    }
}
