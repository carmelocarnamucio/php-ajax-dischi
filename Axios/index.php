<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <title>CD Vue</title>
  </head>
  <body>

    <nav class='app-header'>
      <img src="img/logo.png" alt="">
    </nav>

    <div id='app'>

      <span>Filter by artist:</span>

      <button v-for="author in authors" @click="album(author)">{{author}}</button>

      <button @click="album('all')">All Artists</button>

      <ul class='cds-list'>
        <li class='cd' v-for='cd in cds'>
          <div class='wrap-image'>
            <img :src='cd.poster' :alt='cd.title'>
          </div>
          <h3 class='title'>{{cd.title}}</h3>
          <div class='author'>{{cd.author}}</div>
          <div class='year'>{{cd.year}}</div>
        </li>
      </ul>
    </div>

    <script src="script.js"></script>

  </body>
</html>
