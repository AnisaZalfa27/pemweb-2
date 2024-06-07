<x-layout>
    <x-slot name="page_name">Halaman Kelurahan / Detail Tabel Kelurahan</x-slot>
    <x-slot name="page_title"> List Data Kelurahan</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Nama Kelurahan</th>
                <th>Nama Kecamatan</th>
                <th>Data dibuat pada</th>
                <th>Data diupdate pada</th>
            </tr>
            <tr>
                    <td>{{ $kelurahan->id }}</td>
                    <td>{{ $kelurahan->nama }}</td>
                    <td>{{ $kelurahan->kecamatan_nama }}</td>
                    <td>{{ $kelurahan->created_at }}</td>
                    <td>{{ $kelurahan->update_at }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>