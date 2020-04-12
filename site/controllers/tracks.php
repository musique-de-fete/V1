<?php
  return function($page) {
  // fetch the basic set of pages
  $articles = $page->children()->listed()->flip();
  // fetch all genre
  $tags = $articles->pluck('genre', ',', true);
  // add the tag filter
  if($tag = param('tag')) {
    $articles = $articles->filterBy('genre', $tag, ',');
  }
  // apply pagination
  $articles   = $articles->paginate(10);
  $pagination = $articles->pagination();

  return compact('articles', 'genre', 'tag', 'pagination');

};
