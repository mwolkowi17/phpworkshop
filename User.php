<?php
//include 'Post.php';

class User
  {
   public $name;
   public $email;
   public function __construct($name) {
   $this->name = $name;
   return true;
   }
   public function publish(Post $post) {
       echo $post->postTitle;
   return true;
   }
   public function login() {
    return true;
    }
 }