<script src="{{ asset('back-theme/v2/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('back-theme/v2/lib/jquery-ui/ui/widgets/datepicker.js') }}"></script>
<script src="{{ asset('back-theme/v2/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
{{--<script src="{{ asset('back-theme/v2/lib/ionicons/ionicons.js') }}"></script>--}}
<script src="{{ asset('back-theme/v2/lib/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
<script src="{{ asset('back-theme/v2/lib/spectrum-colorpicker/spectrum.js') }}"></script>
<script src="{{ asset('back-theme/v2/lib/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('back-theme/v2/lib/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>

<script src="{{ asset("back-theme/v2/js/azia.js") }}"></script>

<script src="{{ asset('assets/js/plugins/sweetalert2.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.1/bootbox.min.js" type="text/javascript"></script>
<script src="{{ asset('plugins/dropify/js/dropify.js' )}}" type="text/javascript"></script>

<script src="{{ asset('back-theme/v2/lib/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('back-theme/v2/lib/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
<script src="{{ asset('back-theme/v2/lib/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('back-theme/v2/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js') }}"></script>

<script type="text/javascript">

    var appUrl = '{{ config('app.url') }}';
    var csrfToken = '{{ csrf_token() }}';
    $(document).ready(function () {
        $('.dropify').dropify();
        $('.select2').select2();
    });
</script>
