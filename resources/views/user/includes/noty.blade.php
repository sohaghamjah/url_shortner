<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/noty@3.2.0-beta/lib/noty.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/noty@3.2.0-beta/lib/themes/nest.css">
<style>
    .noty_theme__nest.noty_bar .noty_body {
        padding: 12px !important;
        font-size: 16px !important;
    }
</style>
<script>
    $(document).ready(function () {
        @if (session('error'))
            @if (is_array(session('error')))
                @foreach (session('error') as $item)
                    new Noty({
                        type: 'error',
                        layout: 'topRight',
                        theme: 'nest',
                        text: "{{ __($item) }}",
                        timeout: '2000',
                        progressBar: true,
                        killer: true,
                    }).show();
                @endforeach
            @endif
        @elseif (session('success'))
            @if (is_array(session('success')))
                @foreach (session('success') as $item)
                    new Noty({
                        type: 'success',
                        layout: 'topRight',
                        theme: 'nest',
                        text: "{{ __($item) }}",
                        timeout: '2000',
                        progressBar: true,
                        killer: true,
                        
                    }).show();
                @endforeach
            @endif
        @elseif (session('warning'))
            @if (is_array(session('warning')))
                @foreach (session('warning') as $item)
                    new Noty({
                        type: 'warning',
                        layout: 'topRight',
                        theme: 'nest',
                        text: "{{ __($item) }}",
                        timeout: '2000',
                        progressBar: true,
                        killer: true,
                        
                    }).show();
                @endforeach
            @endif
        @elseif ($errors->any())
            @foreach ($errors->all() as $item)
                new Noty({
                    type: 'error',
                    layout: 'topRight',
                    theme: 'nest',
                    text: "{{ __($item) }}",
                    timeout: '2000',
                    progressBar: true,
                    killer: true,
                    
                }).show();
            @endforeach
        @endif
    });


    function flashMessage(type, message){
        new Noty({
            type: type,
            layout: 'topRight',
            theme: 'nest',
            text: message,
            timeout: '2000',
            progressBar: true,
            killer: true,
            
        }).show();
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/noty@3.2.0-beta/lib/noty.min.js"></script>