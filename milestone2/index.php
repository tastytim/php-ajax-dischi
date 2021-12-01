<!DOCTYPE html>
<html>

<?php 
$title="Dischi VuePhp";
include_once __DIR__ . "/components/pageHead.php"  
?>

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