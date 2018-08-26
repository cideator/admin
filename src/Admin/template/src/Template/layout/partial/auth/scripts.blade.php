<script src="{{ template_plugin('jquery/jquery.min.js') }}"></script>

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<!-- Bootstrap popper Core JavaScript -->
<script src="{{ template_plugin('bootstrap/js/popper.min.js') }}"></script>
<script src="{{ template_plugin('bootstrap/js/bootstrap.min.js') }}"></script>

<!--Custom JavaScript -->
<script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
</script>
<!-- End bootstrap -->

@stack('scripts')