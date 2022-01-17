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
  <style>
    table, thead, tbody, tr, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
  </style>
</head>
<body class="m-1">
    <table width="100%">
    <thead>
      <tr class="text-center">
        <td class="align-middle">Mulai Kerja</td>
        <td class="align-middle">Posisi</td>
        <td class="align-middle">Nama</td>
        <td class="align-middle">Nama Bank</td>
        <td class="align-middle">Rekening</td>
        <td class="align-middle">Tempat Tanggal Lahir</td>
        <td class="align-middle">Alamat Tinggal</td>
        <td class="align-middle">No ktp</td>
        <td class="align-middle">No hp</td>
        <td class="align-middle">Nama Emergency Call</td>
        <td class="align-middle">Emergency Call</td>
        <td class="align-middle">Status</td>
      </tr>
    </thead>
    <tbody>
        @forelse ($items as $item)
            <tr>
                <td>{{ $item->mulai_kerja }}</td>
                <td>{{ $item->posisi }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nama_bank }}</td>
                <td>{{ $item->no_rekening }}</td>
                <td>{{ $item->tempat_lahir }}, {{ $item->tgl_lahir }}</td>
                <td>{{ $item->alamat_tinggal }}</td>
                <td>{{ $item->no_ktp }}</td>
                <td>{{ $item->no_hp }}</td>
                <td>{{ $item->nama_emergency_call }}</td>
                <td>{{ $item->emergency_call }}</td>
                <td class="text-center">{{ $item->status }}</td>
            </tr>
            @empty
                <tr>
                    <td colspan="12" class="text-center">
                        Belum Ada Data
                    </td>
                </tr>
            @endforelse
    </tbody>
  </table>

</body>
</html>
