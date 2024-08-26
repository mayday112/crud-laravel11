<x-layout>
<x-slot:title>Pengajar</x-slot:title>
<x-slot:header>
    <x-header></x-header>
</x-slot:header>
<x-sidebar-menu></x-sidebar-menu>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="table-responsive small mt-2">
        <h2>Data Pengajar</h2>
        <a href="{{ route('teacher.create') }}" class="btn btn-md btn-light float-end" style="margin-bottom: 10px">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
              </svg>
        </a>
        <table class="table table-striped table-sm" id="myTable">
          <thead>
            <tr>
              <th scope="col">NO.</th>
              <th scope="col">NAMA LENGKAP</th>
              <th scope="col">JENIS KELAMIN</th>
              <th scope="col">MATA PELAJARAN</th>
              <th scope="col">ALAMAT</th>
              <th scope="col">AKSI</th>
            </tr>
          </thead>
          <tbod
          </tbody>
        </table>


        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready( function () {
                $('#myTable').DataTable({
                    processing: true,
                    serverSide: true,
                    stateSave: true,
                    ajax: {
                      url: '{{ route("teacher.index") }}',
                    },
                    columns : [
                        {data : 'id', name : 'id'},
                        {data : 'nama_lengkap', name : 'nama_lengkap'},
                        {data : 'jenis_kelamin', name : 'jenis_kelamin', orderable : false, searchable: false},
                        {data : 'mata_pelajaran', name : 'mata_pelajaran'},
                        {data : 'alamat', name : 'alamat'},
                        {data : 'action', name : 'action', orderable: false, searchable: false,},
                    ],
                });
            } );
        </script>

    </div>
</main>
</x-layout>