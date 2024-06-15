<x-layout>
    <x-slot >
        <x-slot name="page_name">Halaman Pasien / </x-slot>
        <x-slot name="page_title"> Form Data Pasien</x-slot>
        <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('dashboard/pasien/update', $pasien->id) }}" method="post">
              @csrf
              @method('put')
                <div class="form-group">
                  <label for="kode">Kode</label>
                  <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode" value="{{ $pasien->kode }}">
                </div>
                <div class="form-group">
                    <label for="nama pasien">Nama Pasien</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan Nama" value="{{ $pasien->nama}}">
                  </div>
                  <div class="form-group">
                    <label for="tmp_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" placeholder="Masukan tempat lahir" value="{{ $pasien->tmp_lahir}}">
                  </div>
                  <div class="form-group">
                    <label for="tmp_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukan tanggal lahir" value="{{ $pasien->tgl_lahir }}">
                  </div>
                  <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender" value="{{ $pasien->gender }}">
                      <option value="L">Pria</option>
                      <option value="P">Wanita</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" value="{{ $pasien->email }}">
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">{{ $pasien->alamat }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="faskes">Faskes</label>
                    <input type="text" class="form-control" id="kel_nama" name="kel_nama" placeholder="Masukan Faskes" value="{{ $pasien->faskes }}">
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                        <button type="reset" class="btn btn-warning" name="reset">Reset</button>
                    </div>
                </div>
              </form>
        </x-slot>
    </x-slot>
    </x-layout>