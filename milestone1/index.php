<?php
   
   include_once __DIR__ ."/../data/cd.php";
   include __DIR__ ."/components/Card.php";

?>

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