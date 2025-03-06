<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

Route::get('/image', function (Request $request) {
    $upload = $request->file('image');
    $image = Image::read($upload)
        ->resize(300, 200);

    Storage::put(
        Str::random() . '.' . $upload->getClientOriginalExtension(),
        $image->encodeByExtension($upload->getClientOriginalExtension(), quality: 70)
    );
});