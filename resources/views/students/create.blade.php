<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>
<x-sidebar-menu></x-sidebar-menu>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="table-responsive small mt-2">
        <div class="container" >
            <div class="row">
              <div class="col-md-8 offset-md-2">
                <div class="card">
                  <div class="card-header">
                    TAMBAH SISWA
                  </div>
                  <div class="card-body">
                    <form action="{{ route('student.store') }}" method="POST">
                        @csrf
                      <div class="form-group mt-2">
                        <label>NISN</label>
                        <input type="text" name="nisn" placeholder="Masukkan NISN Siswa" class="form-control mt-1 @error('nisn')
                            is-invalid
                        @enderror">

                      </div>

                      <div class="form-group mt-2">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Siswa" class="form-control mt-2">
                      </div>

                      <div class="form-group mt-2">
                        <label class="mb-2">Alamat</label>
                        <textarea class="form-control" name="alamat"  placeholder="Masukkan Alamat Siswa" rows="4"></textarea>
                      </div>

                      <div class="float-end mt-3">
                          <a href="{{  route('student.index') }}" class="btn btn-primary">Kembali</a>
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
