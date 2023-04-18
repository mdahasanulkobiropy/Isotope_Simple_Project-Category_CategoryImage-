<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function edit($id){
        $title = Title::find($id);
        return view('admin-title-edit' , compact('title'));
    }

    public function update(Request $request, $id){
        $title = Title::find($id);
        if($request->title){
            $title->update( $request->except('_token') + ['updated_at' => Carbon::now()]);
        }
        $title->save();
        return to_route('index.category.image');
    }
}
