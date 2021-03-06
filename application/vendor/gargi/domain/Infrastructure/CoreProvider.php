<?php
declare(strict_types=1);
namespace Core\Infrastructure;

use Core\Application\Contracts\IPostRepository;
use Core\Application\Contracts\IPostService;
use Core\Application\Contracts\IUserRepository;
use Core\Application\Contracts\IUserService;
use Core\Application\Services\UserService;
use Core\Infrastructure\Repositories\UserRepository;
use Core\Application\Services\PostService;
use Core\Infrastructure\Repositories\PostRepository;

use Illuminate\Support\ServiceProvider;

class CoreProvider extends ServiceProvider{
    
    public function register() {

        $this->app->bind(IUserRepository::class, UserRepository::class);
        $this->app->bind(IUserService::class, UserService::class);
        
        $this->app->bind(IPostRepository::class, PostRepository::class);
        $this->app->bind(IPostService::class, PostService::class);
        
    }
}