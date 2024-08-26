<x-layout>
    <x-slot:title>Sunting Data Pengguna</x-slot:title>
    <x-sidebar-menu></x-sidebar-menu>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="table-responsive small mt-2">
            <div class="container" >
                <div class="row">
                  <div class="col-md-8 offset-md-2">
                    <div class="card">
                      <div class="card-header">
                        TAMBAH PENGGUNA
                      </div>
                      <div class="card-body">
                        <form action="{{ route('user.update', $user['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                          <div class="form-group mt-2">
                            <label>Nama</label>
                            <input type="text" name="name" placeholder="Masukkan Nama" class="form-control mt-2 @error('name') is-invalid @enderror" value="{{ $user['name'] }}">
                            @error('name')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                          </div>

                          <div class="form-group mt-2">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Masukkan EMail" class="form-control mt-2 @error('email') is-invalid @enderror" value="{{ $user['email'] }}">
                            @error('email')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $email }}
                                </div>
                            @enderror
                          </div>

                          <div class="form-group mt-2">
                            <label class="mb-2">Password</label>
                            <input type="password" name="password" id="password" placeholder="Masukkan EMail" class="form-control mt-2 @error('password') is-invalid @enderror">
                            @error('password')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                          </div>

                          <div class="form-group mt-2">
                            <label class="mb-2">Role</label>
                                <select name="role" class="form-select @error('role') is-invalid @enderror" aria-label="Default select example">
                                  <option selected>Open this select menu</option>
                                  <option value="admin" {{ $user['role'] == 'admin' ? 'selected' : '' }}>Admin</option>
                                  <option value="client" {{ $user['role'] == 'client' ? 'selected' : '' }}>Client</option>
                                </select>
                                  @error('role')
                                      <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                  @enderror
                          </div>



                          <div class="float-end mt-3">
                              <a href="{{ route('user.index') }}" class="btn btn-primary">Kembali</a>
                              <button type="reset" class="btn btn-warning">RESET</button>
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
