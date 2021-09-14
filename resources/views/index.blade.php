<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <a href="{{ route('karyawan.create') }}" class="btn btn-primary btn-sm my-1">+ Tambah Data</a>
  <table class="table">
    <thead>
      <tr>
        <td>mulai kerja</td>
        <td>posisi</td>
        <td>nama</td>
        <td>rekening</td>
        <td>tempat tanggal lahir</td>
        <td>alamat</td>
        <td>no ktp</td>
        <td>no hp</td>
        <td>action</td>
      </tr>
    </thead>
    <tbody>
        @forelse ($items as $item)
            <tr>
                <td>{{ $item->mulai_kerja }}</td>
                <td>{{ $item->posisi }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->rekening }}</td>
                <td>{{ $item->tempat_lahir }}, {{ $item->tgl_lahir }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->no_ktp }}</td>
                <td>{{ $item->no_hp }}</td>
                <td>
                    <a href="#" class="btn btn-success btn-sm">
                        <i class="fa fa-pencil"></i>
                    </a>

                    <form action="{{ route('karyawan.destroy', $item->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">
                        Belum Ada Data
                    </td>
                </tr>
            @endforelse
    </tbody>
  </table>
</div>

</body>
</html>