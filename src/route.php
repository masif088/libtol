<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

Route::post('/summernote-upload',function (Request $request){
    $image = $request->file('file');
    $filename = time() . '.' . $image->getClientOriginalExtension();
    $image=Image::make($image)->resize(null, 200, function ($constraint) {
        $constraint->aspectRatio();
    });
    $image->stream();
    Storage::disk('local')->put('public/images/summernote-image/' . $filename, $image, 'public');
    return 'images/summernote-image/' . $filename;
})->name('summernote_upload');
