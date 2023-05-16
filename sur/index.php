
<?php  include_once "header.php";




 ?>
    <!-- <section id="slider" class="container-fluid" style="background: url(./resimlerSite/slider/<?= $slidercek["resim"] ?>);">

        <div class="overlay">
            <h1 class="wow fadeInDown"><?= $slidercek["baslik"] ?></h1>
            <h3 class="wow fadeInUp"><?= $slidercek["alt_baslik"] ?></h3>
            <a class="wow fadeInUp" data-wow-delay=".3s"  href="./menu/anasayfa"><?= $slidercek["buton_ismi"] ?></a>
        </div>


    </section> -->

    <div id="carouselExampleFade" class="carousel slide  carousel-slide vertical" data-bs-ride="carousel">
    <div class="carousel-inner">

            <?php  while($slidercek = $slider->fetch(PDO::FETCH_ASSOC)) {?>
              <?php if($slidercek["sira"] == 1) { ?>    <div class="carousel-item  active"  > <?php }else { ?>
                <div class="carousel-item">  <?php  } ?>
                         
                <section id="slider" class="container-fluid" style="background: url(./resimlerSite/slider/<?= $slidercek["resim"] ?>);">

<div class="overlay">
    <h1 class="wow fadeInDown "><?= $slidercek["baslik"] ?></h1>
    <h3 class="wow fadeInUp"><?= $slidercek["alt_baslik"] ?></h3>
    <a class="wow fadeInUp" data-wow-delay=".3s"  href="./menu/anasayfa"><?= $slidercek["buton_ismi"] ?></a>
</div>


</section> 
            </div>
                
                <?php } ?>
                
           
            </div>
          
                 
          
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">prev</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      
    </div>

  


    <div class="container-fluid new-section"> 
    <h3 class="text-center">"Sıcacık Bir Köşe: Rahatlatıcı Atmosferiyle Sizi Karşılayan Kafe"</h3>

        
        <div class="row">
        <?php  while($icerikcek = $icerik->fetch(PDO::FETCH_ASSOC)) { ?>

            <?php if($icerikcek["sira"] % 2 == 1) { ?>
            <div class="col-md-6 b">
                <div class="yazi">
                <h4><?= $icerikcek["baslik"] ?></h4> 
             <p> <?= $icerikcek["aciklama"] ?></p>      
            </div>       
                     </div>
            <div class="col-md-6 b" >
            <img src="resimlerSite/galeri/<?= $icerikcek["resim"] ?>" alt="">
            </div>
<?php }else { ?>


            <div class="col-md-6 b" >
                <img src="resimlerSite/galeri/<?= $icerikcek["resim"] ?>" alt="">
            </div>
            <div class="col-md-6 b">
                <div class="yazi">
                <h4><?= $icerikcek["baslik"] ?></h4> 
             <p> <?= $icerikcek["aciklama"] ?></p>    
            </div>
                            </div>
                            <?php } ?>
            <?php } ?>

          
        </div>       
    </div>  

    <?php $icerik = $baglan->prepare("SELECT * FROM icerik order by sira");
$icerik->execute(); ?>
     <div class="container-fluid new-section2"> 
    <h3 class="text-center">"Sıcacık Bir Köşe: Rahatlatıcı Atmosferiyle Sizi Karşılayan Kafe"</h3>

      <div class="row">
      <?php  while($icerikcek = $icerik->fetch(PDO::FETCH_ASSOC)) { ?>

          <div class="col-md-6 b">
             <div class="yazi">
             <h4><?= $icerikcek["baslik"] ?></h4> 
             <p> <?= $icerikcek["aciklama"] ?></p>
             </div>
          </div>
          <div class="col-md-6 b" >
          <img src="resimlerSite/galeri/<?= $icerikcek["resim"] ?>" alt="">

        </div>

<?php  } ?>
        
      </div>       
  </div>   
   

    <section class="container-fluid bolum3" id="galeri">
        <div class="galeri">
            <h3>Galeri</h3>
        </div>

        <div class="kapsayici">

            <div class="row" style="width: 100%; margin: 0 !important;">

            <?php while($galericek = $galeri->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="col-lg-4 col-md-6 ">
                    <div class="galeri-resim">
                        <img src="resimlerSite/galeri/<?= $galericek["resim"] ?>" alt="">
                    </div>
                </div>
<?php  }?>
             

            </div>

        </div>


    </section>

    <section class="container-fluid" id="bolum2" >
        <div class="overlay2">
            <h5 class="wow fadeInRight">Menümüze Göz Atmak İster misiniz ?</h5>
            <a class="menu-buton wow fadeInLeft" href="./menu/anasayfa">Menü</a>
        </div>

    </section>

    <span class="yukari"><i class="fa-sharp fa-solid fa-arrow-up"></i></span>

   
    <?php  include_once "footer.php"; ?>
