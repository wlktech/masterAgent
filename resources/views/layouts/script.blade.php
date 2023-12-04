<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets/backend/vendor/jquery/jquery.min.js') }}"></script>
<script src="https://kit.fontawesome.com/b829c5162c.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('assets/backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('assets/backend/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('assets/backend/vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('assets/backend/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('assets/backend/js/demo/chart-pie-demo.js') }}"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
@if (Session::has('error'))
    <script>
        Toastify({
            text:"{{Session::get('error')}}",
            className:"text-white",
            style: {
                background: "#cc2900",
            },
            position:'center'
        }).showToast();
    </script>
@endif
@if (Session::has('success'))
    <script>
        Toastify({
            text:"{{Session::get('success')}}",
            className:"text-white",
            style: {
                background: "#38d100",
            },
            position:'center'
        }).showToast();
    </script>
@endif
@yield('script')
</body>

</html>
