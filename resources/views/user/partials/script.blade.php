<!-- jQuery -->
<script src="{{ asset('public/asset/') }}/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/asset') }}/js/bootstrap.bundle.min.js"></script>
<!-- Seelct 2 -->
<script src="{{ asset('public/asset/js/select2.min.js') }}"></script>
<!-- spartan multi image picker -->
<script src="{{ asset('public/asset/js/spartan-multi-image-picker-min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('public/asset') }}/js/adminlte.min.js"></script>
<script src="{{ asset('public/asset') }}/js/main.js"></script>
<script>
    $(document).ready(function () {
        $(document).on('click', '.logout-btn', function(){
            let method = 'POST';
            let url = "{{ route('user.logout') }}";
            let title = 'Logout';
            let message = "Are Your Sure To Logout?";
            alertModalShow(method,url,title,message);
        });
    });
</script>
@stack('script')