<?php
namespace Blogufy\Crud\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Blogufy\Crud\Http\Controllers\Controller;
use Blogufy\Crud\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    private CategoryRepository $categories;

    public function __construct(CategoryRepository $categories)
    {
        $this->categories = $categories;
    }

    public function index()
    {
        return $this->categories->getAll();
    }

    public function create()
    {

        return '';
    }

    public function store(Request $request)
    {
        $input = $request->validate([

        ]);

        $author = auth()->user();
        $category = $this->categories->new($input, $author);

        return $category;
    }

    public function update(Request $request, $id)
    {
        $input = $request->validate([

        ]);

        $author = auth()->user();
        $category = $this->categories->update($id, $input, $user);

        return $category;
    }
}