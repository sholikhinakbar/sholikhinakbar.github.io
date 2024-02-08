<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'data' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'category' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $validateDataPost = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'image|file|max:5024',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validateDataPost['image'] = $request->file('image')->store('posts-images');
        }


        $validateDataPost['user_id'] = Auth()->user()->id;
        $validateDataPost['excerpt'] =  Str::limit(strip_tags($request->body), 200);
        $validateDataPost['author_id'] = Auth()->user()->id;
        $validateDataAuthor['name'] = Auth()->user()->name;
        $validateDataAuthor['slug'] = Auth()->user()->name;


        Post::create($validateDataPost);
        Author::create($validateDataAuthor);


        return redirect('/dashboard/posts')->with('succsess', 'Post Baru Sudah di tambahkan ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {



        return view('dashboard.posts.show', [

            'data' => $post,
            'category' => Category::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'category' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:5024',
            'body' => 'required'
        ];


        if ($request->slug != $post->slug) {

            $rules['slug'] = 'required|unique:posts';
        }


        $validateDataPost = $request->validate($rules);

        if ($request->file('image')) {

            if ($request->oldimage) {

                Storage::delete($request->oldimage);
            }

            $validateDataPost['image'] = $request->file('image')->store('posts-images');
        }

        $validateDataPost['user_id'] = Auth()->user()->id;
        $validateDataPost['excerpt'] =  Str::limit(strip_tags($request->body), 200);
        $validateDataPost['author_id'] = Auth()->user()->id;

        Post::where('id', $post->id)
            ->update($validateDataPost);

        return redirect('dashboard/posts')->with('succsess', 'edit data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        if ($post->image) {
            Storage::delete($post->image);
        }
        Post::destroy($post->id);



        return redirect('/dashboard/posts')->with('succsess', 'Post has Been Deleted ');
    }






    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
