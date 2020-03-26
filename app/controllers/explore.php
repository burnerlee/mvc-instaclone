<?php

namespace Controller;
session_start();

class Explore {

  public function get() {
        $username = $_SESSION['username'];
        echo \View\Loader::make()->render("templates/home.twig", array(
            "posts" => \Model\Post::get_trending(),
            "user" => \Model\User::get_user($username),
            "comments" => \Model\Post::get_comments()
        ));
    }

}
