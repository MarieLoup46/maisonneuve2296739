<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}} - @yield('title')</title>    
    <!-- Bootstrap CSS CDN -->
    <!-- Lien qui provient du site get bootstrap - Incule via CDN - 1er lien -->
    <!-- https://getbootstrap.com/ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 pt-4">
                <h1 class="display-1 mt-5">
                    {{ config('app.name') }}
                </h1>
                <!-- message de succès pour un article effacée -->
                <!-- Provient de https://getbootstrap.com/docs/5.3/components/alerts/#examples section Dismissing -->
                <!-- Ce code ajoute de la couleur et un 'X' à la fin -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            @yield('content')
            </div>
        </div>
    </div>
</body>
    <!-- Bootstrap CSS CDN -->
    <!-- Lien qui provient du site get bootstrap - Incule via CDN - 2e lien -->
    <!-- https://getbootstrap.com/ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>