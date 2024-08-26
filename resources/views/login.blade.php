<x-layout>
<x-slot:title>Login Form</x-slot:title>
<x-slot:header>
    <x-header></x-header>
</x-slot:header>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
    <div class="table-responsive small mt-2">
        <div class="container" >
            <div class="row">
              <div class="col-md-8 offset-md-2">
                <div class="card" style="width:60%;">
                  <div class="card-header">
                    Login
                  </div>
                  <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}">
                            <label for="floatingInput">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mt-3">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                          </div>

                        <div class="float-end mt-3">
                            <a href="/" class="btn btn-link">Kembali</a>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</main>


</x-layout>

