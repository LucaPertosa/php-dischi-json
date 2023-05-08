<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="app">
        <div class="container my-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Discografia Boolean</h1>
                </div>
                <div class="col-4 my-3" v-for="disk in dischi">
                    <div class="card" @click="get_diskinfo(disk)">
                        <img :src="disk.poster" class="card-img-top" :alt="disk.title">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{disk.title}}</h5>
                            <p class="card-text">{{disk.author}}</p>
                            <p class="card-text">
                                <small class="text-muted">{{disk.year}}</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ms_overlay" v-if="curr_disk !== '' " @click="close_diskinfo">
            <div class="container d-flex align-items-center justify-content-center h-100">
                <div class="row w-100">
                    <div class="col-12">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-5">
                                    <img :src="curr_disk.poster" class="img-fluid rounded-start w-100" :alt="curr_disk.title">
                                </div>
                                <div class="col-7">
                                    <div class="card-body m-5">
                                        <h5 class="card-title">{{curr_disk.title}}</h5>
                                        <p class="card-text">Autore: {{curr_disk.author}}</p>
                                        <p class="card-text">Anno di pubblicazione: {{curr_disk.year}}</p>
                                        <p class="card-text">Genere: {{curr_disk.genre}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>