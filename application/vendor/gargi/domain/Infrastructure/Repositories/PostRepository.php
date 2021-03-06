<?php
declare(strict_types=1);
  
namespace Core\Infrastructure\Repositories;

use Core\Application\Contracts\IPostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Core\Domain\Entities\Post;

class PostRepository implements IPostRepository
{

  private EntityManagerInterface $em; 

  function __construct(EntityManagerInterface $em)
  {
      $this->em = $em;
  }


  public function findPosts() : array
  {
    return $this->em->getRepository(Post::class)->findAll();
  }


  public function getPostById(int $id)
  {
    return $this->em->find(Post::class, $id);
  }

  
  public function createOrUpdate($post)
  {
    $this->em->persist($post);
    $this->em->flush();
  }

  
  public function deletePost($post)
  {
    $this->em->remove($post);
    $this->em->flush();
  }


}

 ?>