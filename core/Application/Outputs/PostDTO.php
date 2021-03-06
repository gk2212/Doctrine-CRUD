<?php
declare(strict_types=1);
  
namespace Core\Application\Outputs;

use Core\Domain\Entities\Post;

class PostDTO extends BaseDTO
{

    public $id;
    public $title;
    public $text;

  public static function fromEntity(Post $post) : PostDTO
  {
      return new self([
         'id' => $post->getId(),
         'title' => $post->getTitle(),
         'text'  => $post->getText(),
      ]);
  }

  public static function fromCollection(array $post) : array
  {
      $postCollection = [];

      if (!empty($post)) {
          foreach ($post as $post) {
              if ($post instanceof Post) {
                  $postCollection = self::fromEntity($post);
              }
          }
      }

      return $postCollection;
  }

}
 ?>