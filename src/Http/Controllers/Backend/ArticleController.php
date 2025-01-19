<?php
namespace Blogufy\Crud\Http\Controllers\Backend;

use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Blogufy\Crud\Http\Controllers\Controller;
use Blogufy\Crud\Repositories\ArticleRepository;

class ArticleController extends Controller
{
    private ArticleRepository $articles;
    
    public function __construct(ArticleRepository $articles)
    {
        $this->articles = $articles;
    }

    public function index()
    {
        return $this->articles->getAll();
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        // dd($request);
        $author = Auth::user();
        dd($author);
        // $author = User::first();
        $article = $this->articles->make($request);
        return $article;
    }

    public function update(Request $request, $id)
    {
        // validate request
        $request->validate([

        ]);

        $author = auth()->user();
        $this->articles->update($id, $request, $author);

        return $request;
    }

    public function statusUpdate(string $id, string $status)
    {
        $this->articles->status($id, $status);
    }

    public function active()
    {
        return $this->articles->published();
    }

    public function inactive()
    {
        return $this->articles->draft();
    }

    public function destroy($id)
    {
        return $this->articles->delete($id);
    }

}