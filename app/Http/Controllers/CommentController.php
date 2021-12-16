<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //where doesn't seem to be working
        $comment = Comment::all();
        //dd($comments);
        return view('comments.index', ['comments'=>$comment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'contact_number'=>'nullable|max:20',
            'content'=>'required|max:255',
            'post_id'=>'required|integer',
            
        ]);
        $a = new Comment;
        $a->name = $validatedData['name'];
        $a->email = $validatedData['email'];
        $a->contact_number = $validatedData['contact_number'];
        $a->content = $validatedData['content'];
        $a->post_id= $validatedData['post_id'];

        $a->save();

        session()->flash('message', 'Comment was created.');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$comment = Comment::findAll()->where('post_id', '=', '$id');
        $comment = Comment::findOrFail($id);
        return view('comments.show', ['comment'=>$comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
