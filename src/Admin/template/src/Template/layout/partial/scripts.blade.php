<script src="{{ template_plugin('jquery/jquery.min.js') }}"></script>

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<!-- Bootstrap popper Core JavaScript -->
<script src="{{ template_plugin('bootstrap/js/popper.min.js') }}"></script>
<script src="{{ template_plugin('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ template_theme('bold/js/perfect-scrollbar.jquery.min.js') }}"></script>
<!-- Sticky Kit JavaScript -->
<script src="{{ template_plugin('sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
<!--Wave Effects -->
<script src="{{ template_theme('bold/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ template_theme('bold/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ template_theme('bold/js/custom.min.js') }}"></script>

{{-- Moment --}}
<script src="{{ template_plugin('moment/min/moment.min.js') }}"></script>
{{--<script src="{{ template_plugin('moment/min/locales.js') }}"></script>--}}

<!-- Bootstrap table -->
<script src="{{ template_plugin('bootstrap-table/src/bootstrap-table.js') }}"></script>
{{--<script src="{{ template_plugin('bootstrap-table/src/locale/bootstrap-table-es-MX.js') }}"></script>
<script src="{{ template_plugin('bootstrap-table/src/extensions/export/bootstrap-table-export.js') }}"></script>--}}
<!-- End Bootstrap table -->

<script src="{{ template_plugin('icheck/icheck.min.js') }}"></script>
<script src="{{ template_plugin('bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ template_plugin('bootstrap-tagsinput/src/bootstrap-tagsinput.js') }}"></script>
<script src="{{ template_plugin('dropzone-master/dist/dropzone.js') }}"></script>
<script src="{{ template_plugin('slugify/slugify.js') }}"></script>
<script src="{{ template_plugin('summernote/dist/summernote-bs4.js') }}"></script>

<script src="{{ template_theme('general/js/communicator.js') }}"></script>



<script>
    $(document).ready(function () {

        $('input:not(".iCheckOff"):not("[data-field]")').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass: 'iradio_flat-blue',
            increaseArea: '-20%'
        });

        /*$.extend($.fn.bootstrapTable.defaults, $.fn.bootstrapTable.locales['es-MX']);*/


        $('.bs-tbl').on('load-error.bs.table', function (e, status) {
            new PNotify({title: 'Table remote data', text: 'Status: ' + status + ', Res: ' + res, type: 'error'});
        });
        $('.bs-tbl').on('load-success.bs.table', function (e, data) {
            console.log(data);
            if (data == null) {
                new PNotify({title: 'Table remote data', text: 'data: ' + data, type: 'error'});
            }
        });

        /* Sticky */
        $('.sticky-ele').stick_in_parent();

    });

    /* Unsaved Alert */
    var isChanged = false;
    var isChangedIgnore = false;
    var msg = 'Changes you made may not be saved, do you really want to leave this page.';

    $(document).ready(function()
    {
        // Alert user about unsaved changes!
        //,:select,:checkbox,:radio,:textarea
        $('.unsave-alert :input').change(function(){
            if(!isChanged) isChanged = true;
        });

        window.onbeforeunload = function(){
            if(isChanged && !isChangedIgnore) return msg;
        };

        $('.unsaved-ignore').click(function(e){
            isChangedIgnore = true;
        });
    });
</script>
<!-- End bootstrap -->

@if(View::exists('admin.theme.scripts'))
    @include('admin.theme.scripts')
@endif

@stack('scripts')