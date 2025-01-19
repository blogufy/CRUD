<?php
namespace Blogufy\Crud\Repositories;

use Blogufy\Core\Models\Tag;
use Blogufy\Core\Traits\HasCruds;

class TagRepository
{
    use HasCruds;

    public function getById($id) 
    { 
        return Tag::findOrFail($id);
    }

    public function new(array $details, $author) 
    { 
        return $author->tags()->create($details);
    }

    public function update($id, array $details, $author) 
    { 
        $tag = Tag::whereId($id);
        return $tag->update($details);
    }

    public function status($id, string $status) { }

    public function delete($id) 
    { 
        return Tag::destroy($id);
    }

    // Tag and its related articles
    public function articlesByTag($id)
    {
        $tag = Tag::findOrFail($id);
        return $tag->articles();
    }
    
}