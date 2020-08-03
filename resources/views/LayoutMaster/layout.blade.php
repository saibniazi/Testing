
<!doctype html>
<html lang="en">
  <head>

    <link rel="stylesheet" src="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  </head>

  <body>

<div class="container-fluid">
  <div class="">
    <a href="/"><h1>Home Page</h1></a>
    <nav id="" class="row">
      <div class="row">
        <ul class="row">
          <li class="nav-item">
            <a class="nav-link active" href="{{route('roleindex')}}">
              <span data-feather="home"></span>
              Roles
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('userindex')}}">
              <span data-feather="file"></span>
              User
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Integrations
            </a>
          </li>
        </ul>
      </div>
    </nav><hr>

    <main role="main" class="col-md-8">
     
      @yield('content')

    </main>

  </div>
</div>

</body>
</html>
<script href="{{asset('js/app.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>