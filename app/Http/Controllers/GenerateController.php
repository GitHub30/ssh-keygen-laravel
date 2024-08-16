<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Process;

class GenerateController extends Controller
{
    /**
     * Execute ssh-keygen
     */
    public function __invoke()
    {
        $directory_path = public_path('keys' . DIRECTORY_SEPARATOR . Str::random(10));
        File::makeDirectory($directory_path, recursive: true);
        $file_path = $directory_path . DIRECTORY_SEPARATOR . 'id_rsa';
        $password = '';
        $result = Process::run("ssh-keygen -f '$file_path' -N '$password'");
        return $result->output();
    }
}
