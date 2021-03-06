<?php
declare(strict_types=1);
namespace App\ViewModels;

use Core\Application\Outputs\PostDTO;

class PostModel {
    public int $id;
    public string $title;
    public string $text;


    public function __construct(PostDTO $post) {
        $this->id = $post->id;
        $this->title = "((( {$post->title} ))))";
        $this->text = $post->text;

    }

    public static function modelList(array $collection) : array
    {
        $list = [];
        if(!empty($collection)){
            foreach($collection as $post){
                if($post instanceof PostDTO){
                    $list[] = new self($post);
                }
            }
        }
        return $list;
    }
}