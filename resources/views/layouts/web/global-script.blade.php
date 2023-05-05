<script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
{{-- <script src="{{ asset('web/js/slick/slick.js') }}"></script> --}}
<script src="{{ asset('web/js/slick/slick.min.js') }}"></script>
<script src="{{ asset('admin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script>
    $("#hamburger").on("click", function() {
        $("#menuMobile").toggleClass('active');
        $("#bodyContent").toggleClass('overflow-hidden');
    });
</script>
