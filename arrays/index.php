<?php

class Post {
    public $title;
    public $published;
    public $author;

    public function __construct($title, $author, $published) {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [
  new Post('My First Post', 'LW', true),
    new Post('My Second post', 'JB', false),
    new Post ('My Third Post', 'BE',true),
    new Post('My fourth Post', 'AY',false),
];


// array_filter
$unpublishedPosts = array_filter($posts, function ($post) {
   return !$post->published;
});

$publishedPosts = array_filter($posts, function ($post) {
    return $post->published;
});


// array map
$modified = array_map(function ($post) {
    return 'foobar';
}, $posts);

$modified = array_map(function ($post) {
    return ['title' => $post->title];
}, $posts);

$titles = array_map(function ($post) {
    return $post->title;
}, $posts);


// array column
$titles = array_column($posts, 'title');
$authors = array_column($posts, 'author', 'title');


var_dump($authors);