</body>
<script>
fetch('/tracks.json')
    .then(function(response) {
      return response.json();
    })
    .then(function(track) {
      console.log(JSON.stringify(track));
  });
</script>
</html>
