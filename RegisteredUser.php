<?php
class  RegisteredUser  extends User
 {
  public function login() {
  echo "Logowanie użytkownika ".$this->name." do strefy użytkowników zarejestrowanych…";
  }
 }