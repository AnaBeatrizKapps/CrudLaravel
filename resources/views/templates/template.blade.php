<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">
</head>
<body>
    @yield('content')
    <script src="{{url("assets/js/javascript.js")}}"></script>

    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js">
    </script>

    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
    </script>

    <script  
        src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js">
    </script>

    <script
        src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js">
    </script>

    <script>
        @yield('script')
    </script>
</body>
</html>