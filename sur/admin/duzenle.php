<?php require_once "header.php";
require_once "sidebar.php";
$id = @$_GET["id"];
$logo = $baglan->prepare("SELECT * FROM logo");
$logo->execute();
$logocek = $logo->fetch(PDO::FETCH_ASSOC);

$background = $baglan->prepare("SELECT * FROM background");
$background->execute();
$backgroundcek = $background->fetch(PDO::FETCH_ASSOC);

$kategori = $baglan->prepare("SELECT * FROM kategori where id=?");
$kategori->execute(array($id));
$kategoricek = $kategori->fetch(PDO::FETCH_ASSOC);

$slider = $baglan->prepare("SELECT * FROM slider where id=?");
$slider->execute(array($id));
$slidercek = $slider->fetch(PDO::FETCH_ASSOC);

$urunler = $baglan->prepare("SELECT * FROM urunler where id=?");
$urunler->execute(array($id));
$urunlercek = $urunler->fetch(PDO::FETCH_ASSOC);

$galeri = $baglan->prepare("SELECT * FROM galeri where id=?");
$galeri->execute(array($id));
$galericek = $galeri->fetch(PDO::FETCH_ASSOC);

$icerik = $baglan->prepare("SELECT * FROM icerik where id=?");
$icerik->execute(array($id));
$icerikcek = $icerik->fetch(PDO::FETCH_ASSOC);

?>
<!-- Left side column. contains the logo and sidebar -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php if ($_GET["sayfa"] == "logo") {   ?>

    <?php
    if (@$_GET["durum"] == "ok") { ?>
      <span class="text-success" style="font-size: 2rem;">İşlem Başarılı</span>
    <?php   } else if (@$_GET["durum"] == "no") { ?>
      <span style="font-size: 2rem;" class="text-success">İşlem başarısız</span>
    <?php } ?>
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Logo düzenle</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" action="yukle.php" method="post" enctype="multipart/form-data">
        <div class="box-body">
          <div>


            <img src="../resimler/logo/<?= $logocek["logo"] ?>" width="250" height="150" alt="">
          </div>

          <div class="form-group">
            <input type="hidden" value="<?= @$logocek["logo"] ?>" name="eskiresim">

            <label for="exampleInputEmail1">Logo</label>
            <input type="file" value="<?php echo $logocek["logo"] ?>" class="form-control" name="resim">
          </div>



        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" name="logoduzenle" class="btn btn-primary">kaydet</button>
        </div>
      </form>
    </div>

    <!-- /.content -->
</div>

<?php  } else if ($_GET["sayfa"] == "arkaplan") { ?>
  <?php
    if (@$_GET["durum"] == "ok") { ?>
    <span class="text-success" style="font-size: 2rem;">İşlem Başarılı</span>
  <?php   } else if (@$_GET["durum"] == "no") { ?>
    <span style="font-size: 2rem;" class="text-success">İşlem başarısız</span>
  <?php } ?>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">arkaplan düzenle</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="yukle.php" method="post" enctype="multipart/form-data">
      <div class="box-body">
        <div>


          <img src="../resimler/background/<?= $backgroundcek["background"] ?>" width="250" height="150" alt="">
        </div>

        <div class="form-group">
          <input type="hidden" value="<?= @$backgroundcek["background"] ?>" name="eskiresim">

          <label for="exampleInputEmail1">background</label>
          <input type="file" value="<?php echo $backgroundcek["background"] ?>" class="form-control" name="resim">
        </div>



      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" name="backgroundduzenle" class="btn btn-primary">kaydet</button>
      </div>
    </form>
  </div>

  <!-- /.content -->
  </div>

<?php } else if ($_GET["sayfa"] == "kategori") { ?>

  <?php
    if (@$_GET["durum"] == "ok") { ?>
    <span class="text-success" style="font-size: 2rem;">İşlem Başarılı</span>
  <?php   } else if (@$_GET["durum"] == "no") { ?>
    <span style="font-size: 2rem;" class="text-success">İşlem başarısız</span>
  <?php } ?>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">kategori düzenle</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="yukle.php" method="post" enctype="multipart/form-data">
      <div class="box-body">
        <div>
          <img src="../resimler/kategori/<?= $kategoricek["resim"] ?>" width="250" height="150" alt="">
        </div>

        <div class="form-group">
          <input type="hidden" value="<?= @$kategoricek["resim"] ?>" name="eskiresim">

          <label for="exampleInputEmail1">kategori</label>
          <input type="file" value="<?php echo $kategoricek["resim"] ?>" class="form-control" name="resim">
        </div>

        <div class="form-group">

          <label for="exampleInputEmail1">Baslik</label>
          <input type="text" value="<?= @$kategoricek["baslik"] ?>" class="form-control" id="exampleInputEmail1" name="baslik">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">Sira</label>
          <input type="number" value="<?= @$kategoricek["sira"] ?>" class="form-control" id="exampleInputEmail1" name="sira">
        </div>
        <input type="hidden" value="<?= $kategoricek["id"] ?>" name="id">

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" name="kategoriduzenle" class="btn btn-primary">kaydet</button>
      </div>
    </form>
  </div>

  <!-- /.content -->
  </div>

<?php } else if ($_GET["sayfa"] == "urunler") { ?>
  <?php $katid = @$_GET["katid"] ?>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">urun düzenle</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="yukle.php" method="post">
      <div class="box-body">

        <div class="form-group">

          <label for="exampleInputEmail1">Baslik</label>
          <input type="text" value="<?= $urunlercek["baslik"] ?>" class="form-control" id="exampleInputEmail1" name="baslik">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">icindekiler</label>
          <input type="text" value="<?= $urunlercek["icindekiler"] ?>" class="form-control" id="exampleInputEmail1" name="icindekiler">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">fiyat</label>
          <input type="text" value="<?= $urunlercek["fiyat"] ?>" class="form-control" id="exampleInputEmail1" name="fiyat">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">sira</label>
          <input type="text" value="<?= $urunlercek["sira"] ?>" class="form-control" id="exampleInputEmail1" name="sira">
        </div>
      </div>
      <?php if ($katid > 0) { ?>
        <input type="hidden" value="<?= $katid ?>" name="katid">
      <?php } ?>
      <input type="hidden" value="<?= $id ?>" name="id">
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" name="urunduzenle" class="btn btn-primary">kaydet</button>
      </div>
    </form>
  </div>

  <!-- /.content -->
  </div>
<?php  } else if ($_GET["sayfa"] == "galeri") { ?>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Galeri Resim Düzenle</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="yukle.php" method="post" enctype="multipart/form-data">
      <div class="box-body">
      <div>
          <img src="../resimlerSite/galeri/<?= $galericek["resim"] ?>" width="250" height="150" alt="">
        </div>

        <div class="form-group">
          <input type="hidden" value="<?= @$galericek["resim"] ?>" name="eskiresim">

          <label for="exampleInputEmail1">Resim</label>
          <input type="file" value="<?php echo $galericek["resim"] ?>" class="form-control" name="resim">
        </div>
        <div class="form-group">

<label for="exampleInputEmail1">Sıra</label>
<input type="number" value="<?= $galericek["sira"] ?>" class="form-control" id="exampleInputEmail1" name="sira">
</div>
      </div>
      <!-- /.box-body -->
      <input type="hidden" value="<?= $id ?>" name="id">

      <div class="box-footer">
        <button type="submit" name="galeriduzenle" class="btn btn-primary">kaydet</button>
      </div>
    </form>
  </div>

  <!-- /.content -->
  </div>
 
<?php  }  else if ($_GET["sayfa"] == "galeri") { ?>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Galeri Resim Düzenle</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="yukle.php" method="post" enctype="multipart/form-data">
      <div class="box-body">
      <div>
          <img src="../resimlerSite/galeri/<?= $galericek["resim"] ?>" width="250" height="150" alt="">
        </div>

        <div class="form-group">
          <input type="hidden" value="<?= @$galericek["resim"] ?>" name="eskiresim">

          <label for="exampleInputEmail1">Resim</label>
          <input type="file" value="<?php echo $galericek["resim"] ?>" class="form-control" name="resim">
        </div>
        <div class="form-group">

<label for="exampleInputEmail1">Sıra</label>
<input type="number" value="<?= $galericek["sira"] ?>" class="form-control" id="exampleInputEmail1" name="sira">
</div>
      </div>
      <!-- /.box-body -->
      <input type="hidden" value="<?= $id ?>" name="id">

      <div class="box-footer">
        <button type="submit" name="galeriduzenle" class="btn btn-primary">kaydet</button>
      </div>
    </form>
  </div>

  <!-- /.content -->
  </div>
 
<?php  }  else if ($_GET["sayfa"] == "slider") { ?>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Slider Düzenle</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="yukle.php" method="post" enctype="multipart/form-data">
      <div class="box-body">
        <div>
          <img src="../resimlerSite/slider/<?= $slidercek["resim"] ?>" width="250" height="150" alt="">
        </div>

        <div class="form-group">
          <input type="hidden" value="<?= @$slidercek["resim"] ?>" name="eskiresim">

          <label for="exampleInputEmail1">Resim</label>
          <input type="file" value="<?php echo $slidercek["resim"] ?>" class="form-control" name="resim">
        </div>

        <div class="form-group">

<label for="exampleInputEmail1">Başlık</label>
<input type="text" value="<?= $slidercek["baslik"] ?>" class="form-control" id="exampleInputEmail1" name="baslik">
</div>
   
      <div class="form-group">

<label for="exampleInputEmail1">Alt Başlık</label>
<input type="text" value="<?= $slidercek["alt_baslik"] ?>" class="form-control" id="exampleInputEmail1" name="altbas">
</div>
      

      <div class="form-group">

<label for="exampleInputEmail1">Buton</label>
<input type="text" value="<?= $slidercek["buton_ismi"] ?>" class="form-control" id="exampleInputEmail1" name="buton">
</div>
      

        <div class="form-group">

<label for="exampleInputEmail1">Sıra</label>
<input type="number" value="<?= $slidercek["sira"] ?>" class="form-control" id="exampleInputEmail1" name="sira">
</div>
      </div>
      <!-- /.box-body -->
      <input type="hidden" value="<?= $id ?>" name="id">

      <div class="box-footer">
        <button type="submit" name="sliderduzenle" class="btn btn-primary">kaydet</button>
      </div>
    </form>
  </div>

  <!-- /.content -->
  </div>
 
<?php  } else if ($_GET["sayfa"] == "icerik") { ?>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">İçerik Ekle</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="yukle.php" method="post" enctype="multipart/form-data">
      <div class="box-body">

      <div>
          <img src="../resimlerSite/galeri/<?= $icerikcek["resim"] ?>" width="250" height="150" alt="">
        </div>

        <div class="form-group">
          <input type="hidden" value="<?= @$icerikcek["resim"] ?>" name="eskiresim">

          <label for="exampleInputEmail1">Resim</label>
          <input type="file" value="<?php echo $icerikcek["resim"] ?>" class="form-control" name="resim">
        </div>

        <div class="form-group">

<label for="exampleInputEmail1">Başlık</label>
<input type="text" value="<?= $icerikcek["baslik"]  ?>" class="form-control" id="exampleInputEmail1" name="baslik">
</div>
   
      <div class="form-group">

<label for="exampleInputEmail1">Açıklama</label>
<input type="text"  value=" <?= $icerikcek["aciklama"]  ?> " class="form-control" id="exampleInputEmail1" name="aciklama">
</div>
      

     
      

        <div class="form-group">

<label for="exampleInputEmail1">Sıra</label>
<input type="number" value="<?= $icerikcek["sira"]  ?>"  class="form-control" id="exampleInputEmail1" name="sira">
</div>
      </div>
      <!-- /.box-body -->
      <input type="hidden" value="<?= $id ?>" name="id">
      

      <div class="box-footer">
        <button type="submit" name="icerikduzenle" class="btn btn-primary">kaydet</button>
      </div>
    </form>
  </div>

  <!-- /.content -->
  </div>
 
<?php  } ?>






</div>


<!-- /.content-wrapper -->
<?php require_once "footer.php";  ?>