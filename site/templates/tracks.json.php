<?php

$data = $pages->find('tracks')->children()->published()->flip();
$json = [];

// condition get user choice from frontend --> modify data

foreach($data as $track) {

  $json[] = [
    // if user as select: genre +
    'url'   => (string)$track->url(),
    'title' => (string)$track->title(),
    'text'  => (string)$track->text(),
    'date'  => (string)$track->date()
    'date'  => (string)$track->date()
    'date'  => (string)$track->date()
    'date'  => (string)$track->date()
    'date'  => (string)$track->date()
    'date'  => (string)$track->date()

  ];

}

echo json_encode($json);
