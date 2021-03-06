<?php
declare(strict_types=1);
  
namespace Core\Application\Contracts;
  
interface IPostService
{

    public function createPost(string $title, string $text) : void;
  
    public function findPosts() : array;
   
    public function getPostById(int $id);

    public function deletePost(int $id);

}


 ?>