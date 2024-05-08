<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dischi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <link rel="stylesheet" href="./style/style.css">
</head>

<body>

  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <div id="app">

    <header class="bg-brand-darker">
      <div class=" container py-3">
        <div class="row align-items-center">
          <div class="col">Logo</div>
        </div>
      </div>
    </header>

    <main class="flex-grow-1 bg-brand-light">

      <div class="container pt-3">
        <div class="row">
          <div class="col-4 p-3" v-for="record in records">
            <div class="card bg-brand-dark text-center text-white h-100" @click="albumModal(record)">
              <div class="card-body">
                <img :src="record.poster" alt="" class="w-50">
                <h4 class="mt-3"> {{record.title}} </h4>
                <p> {{record.author}} </p>
                <h5>{{record.year}}</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <div class="my-modal" v-if="highlightedRecord !== null">
      <div class="my-modal-wrapper d-flex justify-content-center align-items-center">
        <div class="my-close-button">
          <button class="btn btn-light" @click="closeAlbumModal()">X</button>
        </div>
        <div class="my-modal-album w-50">
          <div class="card bg-transparent text-center text-white">
            <div class="card-body">
              <img :src="highlightedRecord.poster" alt="" class="w-50">
              <h4 class="mt-3"> {{highlightedRecord.title}} </h4>
              <p> {{highlightedRecord.author}} </p>
              <h5>{{highlightedRecord.year}}</h5>
            </div>
          </div>
        </div>
      </div>

    </div>

    <script src="./js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
</body>

</html>