<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jebbouri Company</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  <style>
    body {
      padding-top: 50px;
    }
  </style>
</head>
<body>
  <section id="about" class="py-5">
    <div class="container text-center ">
      <div class="row">
        <div class="col">
          <div class="card w-50 m-auto">
            <div class="card-header">Jebbouri Company</div>
            <div class="card-body">
              <ul class="navbar-nav">
                @if (Route::has('login'))
                  @auth
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link btn btn-success w-25 m-auto">Home</a>
                    </li>
                  @else
                    <li class="nav-item">
                      <a href="{{ route('login') }}" class="nav-link btn btn-primary w-25 m-auto">Log in</a>
                    </li>
                  @endauth
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
