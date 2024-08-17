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
        $filename = Str::uuid();
        $N = $request->input('N', '');
        $C = $request->input('C', '');
        $t = $request->input('t');
        $b = $request->input('b');
        $optional_args = '';
        if ($t) {
            $optional_args .= " -t '$t'";
        }
        if ($b) {
            $optional_args .= " -b '$b'";
        }

        $result = Process::run("ssh-keygen -f '$filename' -N '$N' -C '$C' $optional_args");

        if ($result->failed()) {
            return $result->errorOutput();
        }

        $public_key = File::get("$filename.pub");
        $private_key = File::get($filename);
        File::delete("$filename.pub");
        File::delete($filename);
        return [
            'public_key' => $public_key,
            'private_key' => $private_key
        ];
    }
}
