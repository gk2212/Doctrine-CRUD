<?php
declare(strict_types=1);
  
namespace Core\Application\Contracts;
  
interface IPostRepository
{

    public function createOrUpdate($post);

    public function findPosts();
    
    public function getPostById(int $id);
    
    public function deletePost($post);
   

}


 ?>