<?php require_once "header.php"; ?>
<?php require_once "sidebar.php" ;



$icerik = $baglan->prepare("SELECT * FROM icerik order by sira asc");
$icerik->execute();

?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">İçerik</h3>
                    <?php 
        if(@$_GET["durum"]=="eksik") { ?>
        <span class="text-danger" style="font-size: 2rem;">Resim  girmeden İçerik ekleyemezsiniz</span>
      <?php   } ?>
    

                </div>
                <a href="ekle.php?sayfa=icerik"> <button class="btn btn-info  btn-block"> İçerik ekle+</button></a>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                                                     
                            <th>Resim</th>
                            <th>Başlık</th>                        
                            <th>Açıklama</th>                        
                                                
                            <th>sira</th>                        
                            <th>Düzenle</th>
                            <th>Sil</th>

                        </tr>
                      
<?php 

while($icerikcek = $icerik->fetch(PDO::FETCH_ASSOC)) {

?>
                      
                            <tr style="height:50px !important ;">
                             
                                <td><img src="../resimlerSite/galeri/<?php echo $icerikcek["resim"] ?>" width="300" height="150" alt=""></td>
                                <td><?= $icerikcek["baslik"] ?></td>
                                <td><?= $icerikcek["aciklama"] ?></td>
                                
                                <td><?= $icerikcek["sira"] ?></td>

                                <td><a style="width:75px !important; height:35px !important; " href="duzenle.php?sayfa=icerik&id=<?= $icerikcek["id"] ?>"  class="btn btn-success"> düzenle </a></td>

<form action="yukle.php" method="post">
                                <input type="hidden" value="<?= $icerikcek["resim"] ?>" name="resim" >
                                <input type="hidden" value="<?= $icerikcek["id"] ?>" name="id" >
                               
                                <td><a style="width:75px !important; height:35px !important; "  > <button name="iceriksil" class="btn btn-danger">  Sil </button></a></td>
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