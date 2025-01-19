<?php
namespace Blogufy\Crud\Http\Controllers\Backend;


use App\Models\User;
use Blogufy\Core\Models\Tag;
use Illuminate\Http\Request;
use Blogufy\Crud\Repositories\TagRepository;
use Blogufy\Crud\Http\Controllers\Controller;

class TagController extends Controller
{

    public TagRepository $tags;

    public function __construct()
    {
        // $tag = new Tag;
        $this->tags = new TagRepository(new Tag);
    }

    public function index()
    {
        return $this->tags->get();
    }

    public function create(Request $request)
    {
        // validate the record

        $input = [
            'name' => 'boys',
            'slug' => 'boys',
            'description' => 'some cool games tag'
        ];

        // dd($input);
        $author = User::first();
        // $author = auth()->user();
        
        // dd($author);
        $tag = $this->tags->new($input, $author);

        return $tag;
    }

    public function store(Request $request)
    {
        $input = $request->validate([

        ]);

        $author = auth()->user();
        $tag = $this->tags->new($input, $author);

        return $tag;
    }

    public function update(Request $request, $id)
    {
        $input = $request->validate([

        ]);

        $author = auth()->user();
        $tag = $this->tags->update($id, $input, $user);

        return $tag;
    }
}