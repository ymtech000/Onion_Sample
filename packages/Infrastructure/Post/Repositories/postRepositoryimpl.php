<?php

class PostRepositoryImpl implements PostRepository{
    public function create($name){
        //保存処理
         $post = new Post;
         $post->name = $name;
         $post->save();
         return new PostDomain($post->id, $post->name);
    }
}