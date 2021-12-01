<?php
   
   include_once __DIR__ ."/../data/cd.php";
   include __DIR__ ."/components/Card.php";

?>


<!DOCTYPE html>
<html>

<head>
    <title>Dischi</title>

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
        <div class="container-fluid">
            <div class="container">
                <div class="row row-cols-5">

                    <?php 
            foreach($cdList as $cd){
                printCard($cd);
            }
            ?>

                </div>
            </div>
        </div>

    </main>
    <footer></footer>
</body>

</html>