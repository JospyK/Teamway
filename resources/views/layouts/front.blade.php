<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ config('app.name') }} | @yield('page_name')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

    <header class="p-3 text-bg-primary">
        <div class="container">
            <div class="d-flex justify-content-between align-middle">
                <a class="navbar-brand text-white mt-2" href="/"><h4>PERSONALITY TEST</h4></a>
                <a class="navbar-brand text-white" href="{{ route('test') }}">
                    <a href="{{ route('test') }}" type="button" class="btn btn-warning">Take my test</a>
                </a>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="text-center container mt-5">
    <hr>
    <p class="my-4">Build with ❤️ by <a href="https://github.com/JospyK">Jospy GOUDALO</a> for <a href="https://teamway.io">Teamway</a></p>
    </footer>


<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->


<script src="https://unpkg.com/@coreui/coreui@3.2/dist/js/coreui.min.js"></script>

@yield('scripts')
</body>

</html>


</body>
</html>
