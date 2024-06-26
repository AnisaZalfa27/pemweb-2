<x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>
    <x-slot name="page_title"> List Data Pasien</x-slot>
    <x-slot name="page_content">
        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan')}}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <a href="{{ url('dashboard/pasien/create') }}" class="btn btn-primary">+ Tambah Pasien</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Kode</th>
                <th>Nama Pasien</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Faskes</th>
                <th>aksi</th>
            </tr>
            @foreach ($list_pasien as $pasien)
                <tr>
                    <td>{{ $pasien->kode }}</td>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->tmp_lahir }}</td>
                    <td>{{ $pasien->tgl_lahir }}</td>
                    <td>{{ $pasien->gender }}</td>
                    <td>{{ $pasien->email }}</td>
                    <td>{{ $pasien->alamat }}</td>
                    <td>{{ $pasien->kel_nama }}</td>
                    <td>
                        {{ $pasien->aksi }}
                        <a href="{{ url('dashboard/pasien/show', $pasien->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> 
                        <a href="{{ url('dashboard/pasien/edit', $pasien->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> 
                        <form action="{{ url('dashboard/pasien/destroy', $pasien->id) }}" class="d-inline" method="">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus data?')"><i class="far fa-trash-alt"></i>Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>