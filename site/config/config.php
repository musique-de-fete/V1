<?php

return [
    'debug'  => true,
    'routes' => [
      [
        'pattern' => 'tracks/(:any)',
        'action'  => function() {
          return new Page([
           'slug' => 'virtual-reality',
           'template' => 'virtual-page',
           'content' => [
             'title' => 'This is not a real page',
             'text'  => 'Believe it or not, this page is not in the file system'
           ]
          ]);
        }
      ]
    ]
];
