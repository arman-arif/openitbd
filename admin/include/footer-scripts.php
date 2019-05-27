

<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src='assets/vendors/scroll/scrollbar.min.js'></script>
<script src="assets/js/functions.js"></script>
<script src="assets/vendors/chart/chart.min.js"></script>
<script src="assets/js/admin.js"></script>
<script src='assets/vendors/calendar/moment.min.js'></script>

<!--<script src="assets/js/ckeditor.js"></script>-->
<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>

<script src="assets/js/formValidation.js"></script>

<script type="text/javascript">
    $(function () {
        TriggerAlertClose();

        function TriggerAlertClose() {
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 2000);
        }
    });



    // $(function () {
    //     var nMaxLength = 300;
    //     $('#remaining').text(nMaxLength);
    //     $('#txt_bottom').keydown(function (event){
    //         LimitCharacters($(this));
    //     });
    //     $('#txt_bottom').keyup(function (event){
    //         LimitCharacters($(this));
    //     });
    //
    //     function LimitCharacters(description){
    //         if (description.val().length > nMaxLength) {
    //             description.val(description.val().substring(0, nMaxLength));
    //         } else {
    //             var nRemaining = nMaxLength - description.val().length;
    //             $('.remaining').text(nRemaining);
    //         }
    //     }
    // });
</script>
