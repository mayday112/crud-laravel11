<x-layout>
<x-slot:title>Settings</x-slot:title>
<x-slot:header>
    <x-header></x-header>
</x-slot:header>
<x-sidebar-menu></x-sidebar-menu>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="table-responsive small mt-2">
        <div class="container" >
            <div class="row">
              <div class="col-md-8 offset-md-2">
                <div class="card">
                  <div class="card-header">
                    SETTING AKUN
                  </div>
                  <div class="card-body">
                    <form action="{{ route('updateSettings') }}" method="POST">
                        @csrf

                      <div class="form-group mt-2">
                        <label>Nama</label>
                        <input type="text" name="name" placeholder="Masukkan nama" class="form-control mt-2 @error('name')
                            is-invalid
                        @enderror" value="{{ Auth::user()->name }}">
                            @error('name')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                      </div>

                      <div class="form-group mt-2">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Masukkan email" class="form-control mt-2 @error('email')
                            is-invalid
                        @enderror" value="{{ Auth::user()->email }}">
                        @error('email')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>

                      <div class="form-group mt-2">
                        <label>Password baru</label>
                        <input type="password" name="password_new" placeholder="Masukkan password baru" class="form-control mt-2">
                      </div>

                      <div class="form-group mt-2">
                        <label>Konfirmasi Password baru</label>
                        <input type="password" name="password_new_confirm" placeholder="Masukkan password baru" class="form-control mt-2">
                      </div>


                      <div class="float-end mt-3">
                          <button type="submit" class="btn btn-success">SIMPAN</button>
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
