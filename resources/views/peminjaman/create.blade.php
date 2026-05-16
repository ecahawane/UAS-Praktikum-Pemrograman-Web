<x-default-layout>

<h1 class="mb-4">
    Tambah Peminjaman
</h1>

<form action="/peminjaman" method="POST">

    @csrf

    <div class="mb-3">

        <label>Pilih Infokus</label>

        <select name="infokus_id"
                class="form-control">

            @foreach($infokus as $item)

            <option value="{{ $item->id }}">

                {{ $item->nama_infokus }}

            </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">

        <label>Tanggal Pinjam</label>

        <input type="date"
               name="tanggal_pinjam"
               class="form-control">

    </div>

    <div class="mb-3">

        <label>Tanggal Kembali</label>

        <input type="date"
               name="tanggal_kembali"
               class="form-control">

    </div>

    <button class="btn btn-primary">

        Simpan

    </button>

</form>

</x-default-layout>