@stack('note')
<!-- Start JS -->
<script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/detect.js') }}"></script>
<script src="{{ asset('assets/backend/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/backend/js/horizontal-menu.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/switchery/switchery.min.js') }}"></script>
<!-- End JS -->
<script src="{{ asset('assets/helper.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@include('sweetalert::alert')
@stack('script')
<!-- Core JS -->
<script src="{{ asset('assets/backend/js/core.js') }}"></script>

