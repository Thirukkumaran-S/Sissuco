<?php

namespace App\Http\Controllers;

use App\Models\Extension;
use App\Models\Subscription;
use Illuminate\Http\Request;

class ExtensionController extends Controller
{
  function extensiondetails()
  {
    $extensiondetails = Extension::all();
    $data = compact('extensiondetails');
    return view('extensiondetails')->with($data);
  }
  public function delete($id)
  {
    $extension = Extension::find($id);
    $extension->delete();


    return back();
  }

}
