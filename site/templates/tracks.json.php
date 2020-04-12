<?php

$data = $pages->find('tracks')->children()->published()->flip();
$json = [];

foreach($data as $track) {

  $json[] = [
    'url'   => (string)$track->url(),
    'title' => (string)$track->title(),
    'text'  => (string)$track->text(),
    'date'  => (string)$track->date()
  ];

}

echo json_encode($json);
