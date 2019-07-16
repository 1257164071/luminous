<script>

window.penguin.toastrSet();

    var toastCount = 0;
    var toastIndex = toastCount++;
    var msg = '';
    @if (count($errors) > 0)

    @foreach($errors->all() as $error)
        msg += "{{$error}}"+"<br>";
    @endforeach
        var $toast = toastr['error'](msg);
        $toastlast = $toast;
        if ($toast.find('#okBtn').length) {
            $toast.delegate('#okBtn', 'click', function () {
                alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
                $toast.remove();
            });
        }
        if ($toast.find('#surpriseBtn').length) {
            $toast.delegate('#surpriseBtn', 'click', function () {
                alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
            });
        }
    @endif
</script>
