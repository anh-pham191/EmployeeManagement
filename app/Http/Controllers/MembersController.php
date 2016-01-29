<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Member;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class MembersController extends Controller
{
    public function index()
    {
        return view('member.index') -> with('members', Member::all());
    }

    public function create()
    {
        return view('member.create');
    }

    public function store(MemberRequest $request){
        $input = $request->all();
        $member = new Member();
        $member->name = $input['name'];
        $member->email = $input['email'];
        $member->phone = $input['phone'];


        if ($request->file()) {
            $image = $request->file('image');
            $filename = $request->file('image')->getClientOriginalName();
            $path = public_path('img/' . $filename);

            $size = '200,200';
            Image::make($image->getRealPath())->resize(intval($size), null, function($contstraint){
                $contstraint->aspectRatio();
            })->save($path);
            $member->image = 'img/' . $filename;
        }

        $member->save();
        return redirect('member');

    }

    public function show($id){
        $member = Member::find($id);
        return view('member.show', compact('member'));
    }

    public function edit($id){
        $member = Member::find($id);
        return view('member.edit', compact('member'));
    }

    public function update($id, MemberRequest $request){
        $member = Member::find($id);
        $input = Input::all();
        $member->name = $input['name'];
        $member->email = $input['email'];
        $member->phone = $input['phone'];
        if ($request->file()) {
            $image = $request->file('image');
            $filename = $request->file('image')->getClientOriginalName();
            $path = public_path('img/' . $filename);

            $size = '200,200';
            Image::make($image->getRealPath())->resize(intval($size), null, function($contstraint){
                $contstraint->aspectRatio();
            })->save($path);
            $member->image = 'img/' . $filename;
        }

        $member->save();
        return redirect('member');
    }

    public function destroy($id){
        $member = Member::find($id);
        $member->delete();
        return redirect('member');
    }

}
