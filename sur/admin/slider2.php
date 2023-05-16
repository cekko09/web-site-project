<?php require_once "header.php"; ?>
<?php require_once "sidebar.php" ;



$slider = $baglan->prepare("SELECT * FROM slider order by sira asc");
$slider->execute();

?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Slider</h3>
                    <?php 
        if(@$_GET["durum"]=="eksik") { ?>
        <span class="text-danger" style="font-size: 2rem;">Resim  girmeden Slider ekleyemezsiniz</span>
      <?php   } ?>
    

                </div>
                <a href="ekle.php?sayfa=slider"> <button class="btn btn-info  btn-block"> Slider ekle+</button></a>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                                                     
                            <th>Resim</th>
                            <th>Başlık</th>                        
                            <th>Alt Başlık</th>                        
                            <th>Buton</th>                        
                            <th>sira</th>                        
                            <th>Düzenle</th>
                            <th>Sil</th>

                        </tr>
                      
<?php 

while($slidercek = $slider->fetch(PDO::FETCH_ASSOC)) {

?>
                      
                            <tr style="height:50px !important ;">
                             
                                <td><img src="../resimlerSite/slider/<?php echo $slidercek["resim"] ?>" width="300" height="150" alt=""></td>
                                <td><?= $slidercek["baslik"] ?></td>
                                <td><?= $slidercek["alt_baslik"] ?></td>
                                <td><?= $slidercek["buton_ismi"] ?></td>
                                <td><?= $slidercek["sira"] ?></td>

                                <td><a style="width:75px !important; height:35px !important; " href="duzenle.php?sayfa=slider&id=<?= $slidercek["id"] ?>"  class="btn btn-success"> düzenle </a></td>

<form action="yukle.php" method="post">
                                <input type="hidden" value="<?= $slidercek["resim"] ?>" name="resim" >
                                <input type="hidden" value="<?= $slidercek["id"] ?>" name="id" >
                               
                                <td><a style="width:75px !important; height:35px !important; "  > <button name="slidersil" class="btn btn-danger">  Sil </button></a></td>
                                </form>

                            </tr>
                       <?php } ?>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</div>
<?php require_once "footer.php" ?>