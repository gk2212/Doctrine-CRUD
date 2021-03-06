<?php

namespace App\Http\Controllers;

use Core\Application\Contracts\IUserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

   public IUserService $user;
  

   function __construct(IUserService $user)
   {
       $this->user = $user;
   }


   public function register()
   {
      return view('register');
   }

   
   public function registerPost(Request $request)
   {
      $firstname = $request->input('firstname');
      $lastname = $request->input('lastname');
      $email = $request->input('email');
      $password = $request->input('password');
    
      $this->user->createOrUpdate($firstname, $lastname, $email, $password);
      return redirect('/');
  
   }

   
   public function findAllUser()
   {
      dd($this->user->findUsers());
   }


   public function findUserById($id)
   {
      dd( $this->user->getUserById($id) );
   }

   
   public function deleteUser($id)
   {
       $this->user->deleteUser($id);
       return redirect('/');
   }



}
