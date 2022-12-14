<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UniController extends Controller
{
    public function presignedUploadUrl(Request $request)
    {
        $this->validate($request, [
            'filename' => 'string|required',
        ]);

        $filename = "bourbons/".Str::uuid() . $request->filename;

       // dd($filename);

        return Helper::signedUrl($filename, $request->contentType, );
    }

}
