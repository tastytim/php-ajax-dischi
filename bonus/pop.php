<?php
   
   include_once __DIR__ ."/../data/cd.php";
   include __DIR__ ."/components/Card.php";

?>

<!DOCTYPE html>
<html>
<?php 
$title="Pop";
include __DIR__ . "/components/pageHead.php"  ;
?>

<body>
    <header>
        <div class="navbar-custom"></div>
    </header>
    <main>
        <div class="filter-bar">
            <ul>
                <li><a href="index.php">All</a></li>
                <li><a href="pop.php">Pop</a></li>
                <li><a href="rock.php">Rock</a></li>
            </ul>
        </div>

        <div class="container-fluid">
            <div class="container dischi-container">
                <div class="row row-cols-5">
                    <?php 
            foreach($cdList as $cd){
                if($cd['genre'] == "pop"){
                    printCard($cd);
                }
                
            }
            ?>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>