<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Process;
use App\Http\Requests\GenerateRequest;

class GenerateController extends Controller
{
    /**
     * Execute ssh-keygen
     */
    public function __invoke(GenerateRequest $request)
    {
        $f = $request->input('f', 'id_rsa');
        $N = $request->input('N', '');
        $t = $request->input('t');
        $optional_args = '';
        if ($t) {
            $optional_args .= " -t '$t'";
        }

        $relative_dir_path = 'keys' . DIRECTORY_SEPARATOR . Str::random(10);
        $relative_file_path = $relative_dir_path . DIRECTORY_SEPARATOR . $f;
        $directory_path = public_path($relative_dir_path);
        File::makeDirectory($directory_path, recursive: true);
        $file_path = public_path($relative_file_path);
        Process::run("ssh-keygen -f '$file_path' -N '$N'$optional_args");
        return [
            'public_key' => ['path' => "$relative_file_path.pub", 'file' => File::get("$file_path.pub")],
            'private_key' => ['path' => $relative_file_path, 'file' => File::get($file_path)]
        ];
    }
}
