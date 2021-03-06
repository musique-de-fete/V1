<?php  $tracks = page('tracks')->children()->listed(); ?>
<?php foreach($tracks as $track): ?>
  <div class="track">
    <div class="track-artist">
      <?= $track->artist() ?>
    </div>
    <div class="track-title">
      <?= $track->tracktitle() ?>
    </div>
    <div class="track-date">
      <?= $track->date() ?>
    </div>
    <div class="track-label">
      <?= $track->label() ?>
    </div>
    <div class="track-genre">
      <?= $track->genre() ?>
    </div>
    <div class="track-duration">
      <?= $track->duration() ?>
    </div>
  </div>
<?php endforeach ?>
