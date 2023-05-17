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
      <h1 class="text-center mb-5">Tambah Data Siswa</h1>
      <a href="{{ route('siswa.index') }}" class="btn btn-primary btn-sm mb-3">Data Siswa</a>
      <div class="card">
        <div class="card-body">
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf
                <form>
                    <div class="mb-3">
                    <label for="NIS" class="form-label">NIS</label>
                    <input type="text" class="form-control" name="NIS" id="NIS">
                    </div>
                    <div class="mb-3">
                    <label for="Nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="Nama" id="Nama">
                    </div>
                    <div class="mb-3">
                    <label for="Jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" name="Jurusan" id="Jurusan">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Tambah</button>
                </form>
            </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>