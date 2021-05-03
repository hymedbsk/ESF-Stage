<?php

namespace App\Http\Controllers;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;


class AlbumsController extends Controller
{
    public function getList()
  {
    $albums = Album::with('Photos')->get();
    return view('album.index',compact('albums'));
  }
  public function getAlbum($id)
  {
    $album = Album::with('Photos')->find($id);
    return view('album.album',compact('album'));
  }
  public function getForm()
  {
    return view('album.createalbum');
  }
  public function postCreate(Request $request)
  {


    $file = Request::file('cover_image');
    $random_name = str_random(8);
    $destinationPath = 'albums/';
    $extension = $file->getClientOriginalExtension();
    $filename=$random_name.'_cover.'.$extension;
    $uploadSuccess = $request->input(file('cover_image'));
    ->move($destinationPath, $filename);
    $album = Album::create(array(
      'name' => Request::get('name'),
      'description' => Request::get('description'),
      'cover_image' => $filename,
    ));

    return Redirect('show_album',array('id'=>$album->id));
  }

  public function getDelete($id)
  {
    $album = Album::find($id);

    $album->delete();

    return Redirect('index');
  }
}
