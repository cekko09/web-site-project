<?php require_once "header.php";
require_once "sidebar.php";


?>
<!-- Left side column. contains the logo and sidebar -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php if ($_GET["sayfa"] == "arkaplan") { ?>
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Arkaplan ekle</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" action="yukle.php" method="post" enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">

            <label for="exampleInputEmail1">RESİM</label>
            <input type="file" class="form-control" id="exampleInputEmail1" name="resim">
          </div>

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" name="backgroundkaydet" class="btn btn-primary">kaydet</button>
        </div>
      </form>
    </div>

    <!-- /.content -->
</div>
<?php }
  if ($_GET["sayfa"] == "logo") { ?>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Logo ekle</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="yukle.php" method="post" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group">

          <label for="exampleInputEmail1">RESİM</label>
          <input type="file" class="form-control" id="exampleInputEmail1" name="resim">
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" name="logokaydet" class="btn btn-primary">kaydet</button>
      </div>
    </form>
  </div>

  <!-- /.content -->
  </div>
<?php } else if ($_GET["sayfa"] == "kategori") { ?>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Kategori ekle</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="yukle.php" method="post" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group">

          <label for="exampleInputEmail1">RESİM</label>
          <input type="file" class="form-control" id="exampleInputEmail1" name="resim">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">Baslik</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="baslik">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">Sira</label>
          <input type="number" class="form-control" id="exampleInputEmail1" name="sira">
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" name="kategorikaydet" class="btn btn-primary">kaydet</button>
      </div>
    </form>
  </div>

  <!-- /.content -->
  </div>
<?php  } else if ($_GET["sayfa"] == "urunler") { ?>
  <?php  $katid = $_GET["katid"] ?>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">urun ekle</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="yukle.php" method="post">
      <div class="box-body">

        <div class="form-group">

          <label for="exampleInputEmail1">Baslik</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="baslik">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">icindekiler</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="icindekiler">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">fiyat</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="fiyat">
        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">sira</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="sira">
        </div>
      </div>
      <input type="hidden" value="<?= $katid ?>" name="katid">
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" name="urunkaydet" class="btn btn-primary">kaydet</button>
      </div>
    </form>
  </div>

  <!-- /.content -->
  </div>
<?php  }  else if ($_GET["sayfa"] == "galeri") { ?>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">galeriye resim ekle</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="yukle.php" method="post" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group">

          <label for="exampleInputEmail1">RESİM</label>
          <input type="file" class="form-control" id="exampleInputEmail1" name="resim">
        </div>
        <div class="form-group">

<label for="exampleInputEmail1">Sıra</label>
<input type="number" class="form-control" id="exampleInputEmail1" name="sira">
</div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" name="galerikaydet" class="btn btn-primary">kaydet</button>
      </div>
    </form>
  </div>

  <!-- /.content -->
  </div>
 
<?php  }  else if ($_GET["sayfa"] == "slider") { ?>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Slider Ekle</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" action="yukle.php" method="post" enctype="multipart/form-data">
      <div class="box-body">
        
        <div class="form-group">
          

          <label for="exampleInputEmail1">Resim</label>
          <input type="file" class="form-control" name="resim">
        </div>

        <div class="form-group">

<label for="exampleInputEmail1">Başlık</label>
<input type="text" class="form-control" id="exampleInputEmail1" name="baslik">
</div>
   
      <div class="form-group">

<label for="exampleInputEmail1">Alt Başlık</label>
<input type="text"  class="form-control" id="exampleInputEmail1" name="altbas">
</div>
      

      <div class="form-group">

<label for="exampleInputEmail1">Buton</label>
<input type="text"  class="form-control" id="exampleInputEmail1" name="buton">
</div>
      

        <div class="form-group">

<label for="exampleInputEmail1">Sıra</label>
<input type="number"  class="form-control" id="exampleInputEmail1" name="sira">
</div>
      </div>
      <!-- /.box-body -->
      

      <div class="box-footer">
        <button type="submit" name="sliderekle" class="btn btn-primary">kaydet</button>
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
        
        <div class="form-group">
          

          <label for="exampleInputEmail1">Resim</label>
          <input type="file" class="form-control" name="resim">
        </div>

        <div class="form-group">

<label for="exampleInputEmail1">Başlık</label>
<input type="text" class="form-control" id="exampleInputEmail1" name="baslik">
</div>
   
      <div class="form-group">

<label for="exampleInputEmail1">Açıklama</label>
<input type="text"  class="form-control" id="exampleInputEmail1" name="aciklama">
</div>
      

     
      

        <div class="form-group">

<label for="exampleInputEmail1">Sıra</label>
<input type="number"  class="form-control" id="exampleInputEmail1" name="sira">
</div>
      </div>
      <!-- /.box-body -->
      

      <div class="box-footer">
        <button type="submit" name="icerikekle" class="btn btn-primary">kaydet</button>
      </div>
    </form>
  </div>

  <!-- /.content -->
  </div>
 
<?php  } ?>


<!-- /.content-wrapper -->
<?php require_once "footer.php";  ?>