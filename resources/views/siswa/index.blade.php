<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container mt-5">
      <h1 class="text-center mb-5">Data Siswa</h1>
      <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
      @if (session('success'))
          <div class="alert alert-success" role="alert">
            {{ session('success') }}
          </div>
      @endif

      @if (session('success-del'))
      <div class="alert alert-danger" role="alert">
        {{ session('success-del') }}
      </div>
      @endif
      <div class="card">
        <div class="card-body">
          <table class="table">
            <thead>
              <th>NO</th>
              <th>NIS</th>
              <th>NAMA</th>
              <th>JURUSAN</th>
              <th>AKSI</th>
            </thead>
            <tbody>
              @foreach ($siswa as $no => $Hasil)
                  <tr>
                  <th>{{ $no+1 }}</th>
                    <td>{{ $Hasil->NIS }}</td>
                    <td>{{ $Hasil->Nama }}</td>
                    <td>{{ $Hasil->Jurusan }}</td>
                    <td>
                      <form action="{{ route('siswa.destroy', $Hasil->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="{{ route("update",$Hasil->id) }}" class="btn btn-success btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                      </form>
                    </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>