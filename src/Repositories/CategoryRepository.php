<?php
namespace Blogufy\Crud\Repositories;

use Blogufy\Core\Models\Category;
use Blogufy\Crud\Interfaces\Crudable;

class CategoryRepository implements Crudable
{

    public function getAll()
    {
        return Category::all();
    }

    public function getById($id)
    {
        return Category::findOrFail($id);
    }


    public function new(array $details, $author)
    {
        return $author->categories()->create($details);
    }

    public function update($id, array $details, $author)
    {
        return Category::whereId($id)->update($details);
    }

    public function status($id, string $status)
    {
        return Category::whereId($id)->update(['status', $status]);
    }

    public function delete($id)
    {
        Category::destroy($id);
    }

    public function articlesByCategory($id)
    {
        $category = Category::findOrFal($id);
        return $category->articles();
    }
}
