<?php

$data = $pages->find('tracks')->children()->published()->flip();
$json = [];

// condition get user choice from frontend --> modify data

foreach($data as $track) {

  $json[] = [
    // if user as select: genre +
    'artist'   => (string)$track->artist(),
    'tracktitle' => (string)$track->tracktitle(),
    'date'  => (string)$track->date(),
    'label'  => (string)$track->label(),
    'genre'  => (string)$track->genre(),
    'duration'  => (string)$track->duration(),
    'text'  => (string)$track->text(),
    'cover'  => (string)$track->cover(),
    'mp3'  => (string)$track->mp3()

  ];

}

echo json_encode($json);


//Output the JSON string to the browser.
