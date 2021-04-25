<?php
namespace Packages\Application;

class PostUsecase{
    /** PostRepository $postRepository */
    private $postRepository;

    public function __construct($postRepository){
        $this->postRepository = $postRepository;
    }
    public function createPost($name){
        //Domain/Post/Repositories/postRepository.phpのcreate()を呼び出す。
        return $this->postRepository->create($name);
    }
}