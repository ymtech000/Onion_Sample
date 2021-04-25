<?php

interface postRepository{
    //Infrastructure/Post/Repositories/postRepositoryimpl.phpのcreate()を呼び出す。
    public function create($name);
}