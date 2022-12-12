<footer>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>
                            <span>&copy; Website RS.Sayang dan Layanan Pengaduan atau saran.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Facebook"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Twitter"><i
                                    class="fa fa-twitter"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Linkedin"><i
                                    class="fa fa-linkedin"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Pinterest"><i
                                    class="fa fa-pinterest"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Google plus"><i
                                    class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>

<script src="assets2/js/jquery.js"></script>
<script src="assets2/js/jquery.easing.1.3.js"></script>
<script src="assets2/materialize/js/materialize.min.js"></script>
<script src="assets2/js/bootstrap.min.js"></script>
<script src="assets2/js/jquery.fancybox.pack.js"></script>
<script src="assets2/js/jquery.fancybox-media.js"></script>
<script src="assets2/js/jquery.flexslider.js"></script>
<script src="assets2/js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="assets2/js/modernizr.custom.js"></script>
<script src="assets2/js/jquery.isotope.min.js"></script>
<script src="assets2/js/jquery.magnific-popup.min.js"></script>
<script src="assets2/js/animate.js"></script>
<script src="assets2/js/custom.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('body').on("keyup", ".id_pasien", function() {
        var ketik = $(this).val();
        var data = "data=" + ketik;
        $.ajax({
            type: 'POST',
            url: "ajax.php",
            data: data,
            success: function(html) {
                if (html != "0") {
                    $('.tempat_id_pasien').html(html);
                } else {
                    $('.tempat_id_pasien').html("");
                }
            }
        });
    });
});
</script>
</body>

</html>