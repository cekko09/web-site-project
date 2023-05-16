



<footer class="container-fluid " id="footer">
        <div class="container footer">
            <h6 class="footer-baslik">İletişim Bilgileri</h6>
            <hr>

            <div class="row">
                <div class="col-md-4">
                    <div class="footer-sec-1">
                        <h6>Adres Bilgilerimiz</h6>
                        <p><span>Adres:</span><?= $ayarlarcek["adres"] ?></p>

                        <p><span>Tel No:</span> <a style="text-decoration: none; color:#c5c5c5;" href="tel:<?= $ayarlarcek["tel"] ?>"><?= $ayarlarcek["tel"] ?></a></p>
                    </div>

                </div>
                <div class="col-md-4">
                   
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.687593892498!2d29.08369341195214!3d37.773922812091456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c73f5ecd44880b%3A0xa2de0bdbe1f5967f!2sFix%20kebap%20kahvalt%C4%B1!5e0!3m2!1str!2str!4v1683639330445!5m2!1str!2str" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  

                </div>
                <div class="col-md-4">
                    <div class="footer-sec-1">
                        <h6>Sosyal Medya Hesaplarımız</h6>
                    <div class="medya text-center">
                     <a href="<?= $ayarlarcek["insta"] ?>">   <i style="color:white;" class="fa-brands fa-instagram"></i></a>
                     <?php if($ayarlarcek["face"] == "") { ?>
                    <?php echo "" ?>
                   <?php }else { ?>
                    <?php  echo  "<a href='$ayarlarcek[face] '>  <i class='fa-brands fa-facebook'></i></a>" ?>
                    <?php } ?>
                     <p>Afiyet Olsun...</p>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <div class="isot-lahmacun">
            <p>@Fix Kebap Kahvaltı</p>
    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
    crossorigin="anonymous"></script>

<script src="jquery-3.6.4.js"></script>
<script>
    new WOW().init();
    </script>
        <script>

            $(document).ready(function(){

                $(window).scroll(function(){
                kaydirma = $(window).scrollTop()
                    if( kaydirma > 50) {
                        $(".yukari").fadeIn()
                    }else {
                        $(".yukari").fadeOut()
                    }
                })

                $(".yukari").click(function(){
                    $(window).scrollTop(0)
                })




              
})





        </script>

        <script>


        window.addEventListener("scroll",lowerOp)

        const menu = document.getElementById("nav")
        function lowerOp() {
            const kaydir = window.scrollY

            if(kaydir > 90) {
                menu.classList.add("header")
            }else if (kaydir < 90){
                menu.classList.remove("header")
            }

        }
        const   icon = document.getElementById("icon")
        const button = document.getElementById("navbar-toggler")

        button.addEventListener("click",change)

        function change() {
            menu.classList.add("header")
        }

        </script>

      
</body>

</html>