<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @routes()
    <title>PROYECTO | @yield('title')</title>
    {{-- CSRF Token meta tag --}}
    <meta id='csrf' name='csrf-token' content='{{ csrf_token() }}'>
    {{-- Include modal --}}
    @include('modal.modal')
    <!-- CSS -->
    <link href="{{ asset('js/libs/toast/jquery.toast.min.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
    <!-- JAVASCRIPT -->
    <script defer src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script defer src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
    <script defer src="{{ asset('js/libs/toast/jquery.toast.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
</head>

<body>
    <div>
        @yield('body')
    </div>
</body>
<script>
    const showToast = (heading, text, icon) => {
        // Show a toast alert
        $.toast({
            heading,
            text,
            position: 'bottom-right',
            showHideTransition: 'slide',
            icon
        });
    }

    const validateDelete = async () => {
        // Ask to the user if he/she is sure about deleting this record
        return await Swal.fire({
            title: '¿Segur@ que deseas eliminar este registro?',
            showDenyButton: true,
            allowOutsideClick: false,
            confirmButtonText: 'Si',
            denyButtonText: 'No',

        });
    }

    const setMethodHeaders = (method, body = []) => {
        switch (method) {
            case 'POST':
                return {
                    method,
                    body,
                    headers: {
                        'X-CSRF-TOKEN': $('#csrf').attr('content'),
                        Accept: 'application/json'
                    }
                }
                break;
            case 'PUT':
                return {
                    method,
                    body: JSON.stringify(Object.fromEntries(body)),
                        headers: {
                            'X-CSRF-TOKEN': $('#csrf').attr('content'),
                            Accept: 'application/json',
                            'Content-Type': 'application/json'
                        }
                }
                break;
            case 'DELETE':
                return {
                    method,
                    headers: {
                        'X-CSRF-TOKEN': $('#csrf').attr('content'),
                        Accept: 'application/json'
                    }
                }
        }
    }

    const openSidebar = () => {
        document.getElementById('sidebar').style.width = "300px";
    }

    const closeSidebar = () => {
        document.getElementById('sidebar').style.width = "0px";
    }
</script>
@stack('scripts')

</html>