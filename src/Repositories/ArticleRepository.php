<?php
namespace Blogufy\Crud\Repositories;


use Illuminate\Support\Str;
use Blogufy\Core\Models\Article;
use Illuminate\Http\Request;

class ArticleRepository
{
    public function getAll()
    {
        return Article::all();
    }

    public function getById($id)
    {
        return Article::findOrFail($id);
    }

    public function make(Request $request, $id = null)
    {
        $author = auth()->user();

        dd($author);
        return $author->articles()->updateOrCreate(
            [
                'id' => $id,
            ],
            [
                'category_id' => $request->category,
                // 'tag_id' => $request->tag,
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'body' => $request->body,
                'description' => $request->description,
                'image' => $request->image,
                'status' => $request->status,
            ]
        );
    }

    public function status($id, $status)
    {
        return Article::whereId($id)->update(['status' => $status]);
    }

    /** list all active records */
    public function published()
    {
        return Article::where('status', 'active')->get();
    }

    /** list all in-active records */
    public function draft()
    {
        return Article::where('status', 'inactive')->get();
    }


    public function delete($id)
    {
        Article::destroy($id);
    }



}
