<?php
declare(strict_types=1);
  
namespace Core\Application\Services;


use Core\Application\Contracts\IPostService;
use Core\Domain\Entities\Post;
use Core\Infrastructure\Repositories\PostRepository;

class PostService implements IPostService
{

  private PostRepository $post;
   
  
  function __construct(PostRepository $post)
  {
     $this->post = $post;
  }


  public function createPost(string $title, string $text) : void
  {
     $post = new Post();
     $post->setTitle($title);
     $post->setText($text);
     $this->post->createOrUpdate($post);
  }



  public function findPosts() : array
  {
     return $this->post->findPosts();
  }
  

  public function getPostById(int $id)
  {
     return $this->post->getPostById($id);
  }


  public function deletePost(int $id)
  {
     $post = $this->post->getPostById($id);
     return $this->post->deletePost($post);
  }



}


 ?>