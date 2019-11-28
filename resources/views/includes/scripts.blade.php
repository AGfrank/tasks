<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.js"></script>

<!-- Scripts -->
{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
<script src="{{ asset('js/jquery-ui.min.js') }}" ></script>
<script src="{{ asset('js/jquery.scrollUp.js') }}" ></script>
<script src="{{ asset('js/script.js') }}" ></script>
<script src="{{ asset('js/custom.js') }}" ></script>
<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>

<!-- App scripts -->
@stack('scripts')
<script>
    $(document).ready(function(){
        var nua = navigator.userAgent
        var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)

        if (isAndroid) {
            $('select.form-control').removeClass('form-control').css('width', '100%')
        }

        $('#show_password').click(function(e){
            e.preventDefault;

            changePassToText('#password');
        })
        .hover(function(e){
            e.preventDefault;

            changePassToText('#password');
        });

        $('#show_password_confirm').click(function(e){
            e.preventDefault;

            changePassToText('#password-confirm');
        })
        .hover(function(e){
            e.preventDefault;

            changePassToText('#password-confirm');
        });
    });
</script>
