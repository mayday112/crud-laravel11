<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>
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
                    TAMBAH PENGAJAR
                  </div>
                  <div class="card-body">
                    <form action="{{ route('teacher.store') }}" method="POST">
                        @csrf

                      <div class="form-group mt-2">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Pengajar" class="form-control mt-2 @error('nama_lengkap') is-invalid @enderror" value=" {{  old('nama_lengkap') }} ">
                        @error('nama_lengkap')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                        @enderror
                      </div>

                      <div class="form-group mt-2">
                        <div>Jenis Kelamin</div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value="l" {{ old('jenis_kelamin') == 'l' ? 'checked' : '' }}>
                          <label class="form-check-label" for="flexRadioDefault1">
                            Laki-Laki
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2" value="p" {{ old('jenis_kelamin') == 'l' ? 'checked' : '' }}>
                          <label class="form-check-label" for="flexRadioDefault2">
                              Perempuan
                          </label>
                        </div>
                      </div>

                      <div class="form-group mt-2">
                        <label class="mb-2">Mata Pelajaran</label>
                        <textarea class="form-control" name="mata_pelajaran"  placeholder="Masukkan Mata Pelajaran" rows="4">{{  old('mata_pelajaran') }}</textarea>
                      </div>

                      <div class="form-group mt-2">
                        <label class="mb-2">Alamat</label>
                        <textarea class="form-control" name="alamat"  placeholder="Masukkan Alamat Pengajar" rows="4">{{ old('alamat') }}</textarea>
                      </div>

                      <div class="float-end mt-3">
                          <a href="{{  route('teacher.index') }}" class="btn btn-primary">Kembali</a>
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
