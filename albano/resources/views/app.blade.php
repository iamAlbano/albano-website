<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

    <!-- Flickity CSS -->
    <link href="{{ URL::asset('flickity/css/flickity-docs.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('flickity/flickity.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('flickity/css/flickity.min.css') }}" rel="stylesheet">

    <title>{{__('messages.title')}}</title>
    
  </head>
  <body>

    @yield('content')


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Flickity JS -->
    <script src="{{ URL::asset('flickity/js/flickity-docs.js') }}" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('flickity/flickity.pkgd.js') }}" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('flickity/flickity.pkgd.min.js') }}" crossorigin="anonymous"></script>
  </body>




  <div class="containe footer">
    <footer class=" d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <span class="text-muted">Developed by Guilherme Albano</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#">
          
        </li>

        <li class="ms-3"><a class="text-muted" href="#">
          
        </li>
      </ul>

    </footer>
  </div>
</html>