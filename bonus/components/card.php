<?php  

function printCard($cd){
    if(!isset($cd)){
        return;
    }


    $cdAlbum = $cd['album'];
    $cdArtist = $cd['artist'];
    $cdYear = $cd['year'];
    $cdImg = $cd['img'];



?>

<div class="col">
    <div class="card">
        <img src="<?php echo $cdImg ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $cdAlbum ?></h5>
            <p class="card-text"><?php echo $cdArtist ?></p>
            <p class="card-text"><?php echo $cdYear ?></p>
        </div>
    </div>
</div>
<?php
} 
  ?>