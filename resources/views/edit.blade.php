<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test Perintis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <strong>Edit Karyawan : </strong>
            <p>{{ $item->nama }}</p>
        </div>
        <div class="card-body card-block">
             <form action="{{ route('karyawan.update', $item->id) }}" method="post">
                 @method('PUT')
                 @csrf
                 <div class="form-group">
                     <label for="mulai_kerja" class="form-control-label">Mulai Kerja</label>
                     <input type="date" name="mulai_kerja"
                     value="{{ old('mulai_kerja') ? old('mulai_kerja') : $item->mulai_kerja }}"
                     class="form-control @error('mulai_kerja') is-invalid @enderror"/>
                     @error('mulai_kerja') <div class="text-muted">{{ $message }}</div> @enderror
                 </div>

                 <div class="form-group">
                     <label for="posisi" class="form-control-label">Posisi</label>
                     <input type="text" name="posisi" value="{{ old('posisi') ? old('posisi') : $item->posisi }}"
                     class="form-control @error('posisi') is-invalid @enderror"/>
                     @error('posisi') <div class="text-muted">{{ $message }}</div> @enderror
                 </div>

                 <div class="form-group">
                     <label for="nama" class="form-control-label">Nama</label>
                     <input type="text" name="nama" value="{{ old('nama') ? old('nama') : $item->nama }}"
                     class="form-control @error('nama') is-invalid @enderror"/>
                     @error('nama') <div class="text-muted">{{ $message }}</div> @enderror
                 </div>

                 <div class="form-group">
                    <label for="nama_bank" class="form-control-label">Nama Bank</label>
                    <input type="text" name="nama_bank" value="{{ old('nama_bank') ? old('nama_bank') : $item->nama_bank }}" class="form-control @error('nama_bank') is-invalid @enderror"/>
                    @error('nama_bank') <div class="text-muted">{{ $message }}</div> @enderror
                 </div>

                 <div class="form-group">
                     <label for="no_rekening" class="form-control-label">No. Rekening</label>
                     <input type="text" name="no_rekening" value="{{ old('no_rekening') ? old('no_rekening') : $item->no_rekening }}"
                     class="form-control @error('no_rekening') is-invalid @enderror"/>
                     @error('no_rekening') <div class="text-muted">{{ $message }}</div> @enderror
                 </div>

                 <div class="form-group">
                    <label for="tempat_lahir" class="form-control-label">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir"
                    value="{{ old('tempat_lahir') ? old('tempat_lahir') : $item->tempat_lahir }}"
                    class="form-control @error('tempat_lahir') is-invalid @enderror"/>
                    @error('tempat_lahir') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="tgl_lahir" class="form-control-label">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir"
                    value="{{ old('tgl_lahir') ? old('tgl_lahir') : $item->tgl_lahir }}" class="form-control
                    @error('tgl_lahir') is-invalid @enderror"/>
                    @error('tgl_lahir') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="alamat">alamat</label>
                    <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror">
                        {{ old('alamat') ? old('alamat') : $item->alamat }}
                    </textarea>
                    @error('alamat') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="no_ktp" class="form-control-label">No. ktp</label>
                    <input type="text" name="no_ktp" value="{{ old('no_ktp') ? old('no_ktp') : $item->no_ktp }}"
                    class="form-control @error('no_ktp') is-invalid @enderror"/>
                    @error('no_ktp') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="no_hp" class="form-control-label">No. hp</label>
                    <input type="text" name="no_hp" value="{{ old('no_hp') ? old('no_hp') : $item->no_hp }}"
                    class="form-control @error('no_hp') is-invalid @enderror"/>
                    @error('no_hp') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="nama_emergency_call" class="form-control-label">Nama Emergency Call</label>
                    <input type="text" name="nama_emergency_call" value="{{ old('nama_emergency_call') ? old('nama_emergency_call') : $item->nama_emergency_call }}" class="form-control @error('nama_emergency_call') is-invalid @enderror"/>
                    @error('nama_emergency_call') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="emergency_call" class="form-control-label">Emergency Call</label>
                    <input type="text" name="emergency_call" value="{{ old('emergency_call') ? old('emergency_call') : $item->emergency_call }}"
                    class="form-control @error('emergency_call') is-invalid @enderror"/>
                    @error('emergency_call') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                 <div class="form-group">
                     <button class="btn btn-primary btn-block" type="submit">Edit Karyawan</button>
                 </div>
             </form>
        </div>
    </div>
</body>
</html>
