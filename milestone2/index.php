<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    
    <!-- Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <!-- Axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <header>
        <div class="navbar-custom"></div>
    </header>
    <main>
        
        <div class="container-fluid" id="VueApp">
            <div class="container">
                <div class="row row-cols-5">



                    <div class="col" v-for="(item,index) in cdarray" :key="index">
                        <div class="card">
                            <img :src="item.img" class="card-img-top" :alt="item.img">
                            <div class="card-body">
                                <h5 class="card-title">{{item.artist}}</h5>
                                <p class="card-text">{{item.album}}</p>
                                <p class="card-text">{{item.year}}</p>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </main>
    <footer></footer>
    <script src="app.js"></script>
</body>

</html>