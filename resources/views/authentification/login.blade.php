<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container mt-5 d-flex justify-content-center align-items-center">

        <div class="col-md-6 bg-light ">

            <p class="fw-medium">
                Le personnel, l’équipe médicale et la direction sont heureux de vous accueillir à la Clinique Mk2.<br/><br/>

            <div class="">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse courriel</label>
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email"
                         value="{{ old('email') }}"
                         required autofocus>
                         @if ($errors -> has('email'))
                         <span class="text-danger">
                             {{$errors->first('email')}}
                         </span>
                     @endif
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label
                        @error('password') is-invalid @enderror">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        @if ($errors -> has('password'))
                        <span class="text-danger">
                            {{$errors->first('password')}}
                        </span>
                    @endif
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Souvenez-vous de moi</label>
                    </div>
                    <div>

                    </div>

                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </form>
            </div>
        </div>

        <!-- Image -->
        <div class="ml-5">

            <img src="image/img.png" alt="">

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


