<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BandRequestEmail;
use App\Models\Bang;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function submitBangRequest(Request $request){
        
        $userData = $request->all();
        Mail::to('raheelaslam548@gmail.com')->send(new BandRequestEmail($userData));
        $bang = new Bang();
        $bang->name = "";
        $bang->type = $request->bang_type;
        $bang->bang_id = $request->bangId;
        $bang->save();
        $user = new User();
        $user->name = "";
        $user->email = $request->email;
        $user->bang_id = $bang->id;
        $user->postal_code = $request->postal_code;
        $user->password = "";
        $user->address = $request->address;
        $user->save();
        return [
            'status'=> true,
            'data'=> $request->all()
        ];
      //  dd($request->all());

    }
}
