<script>

window.penguin.toastrSet();
    var toastCount = 0;
    var toastIndex = toastCount++;
    var msg = '';

    @foreach (['error', 'warning', 'success', 'info'] as $msg)
      @if(session()->has($msg))
        var $toast = toastr['{{$msg}}']('{{session()->get($msg)}}');
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
    @endforeach

</script>


