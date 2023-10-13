<?php
namespace App\Repositories;
use App\Models\Post;
class PostRepository{

    function create(array $data){
        try {
            return Post::create($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function findById(int $id){
        try {
            return Post::find($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    function destroy(Post $post){
        try {
            return $post->delete();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}