<script>
    $(document).ready(function() {
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        @if (Session::has('toastrsSuccess'))
            let success = @json(Session::get('toastrsSuccess'));
            toastr.success(success.message, success.title);
        @endif

        @if (Session::has('toastrsError'))
            let error = @json(Session::get('toastrsError'));
            toastr.error(error.message, error.title);
        @endif

        @if (Session::has('toastrsWarning'))
            let warning = @json(Session::get('toastrsWarning'));
            toastr.warning(warning.message, warning.title);
        @endif

        @if (Session::has('toastrsInfo'))
            let info = @json(Session::get('toastrsInfo'));
            toastr.info(info.message, info.title);
        @endif
    });
</script>