<x-default-layout>

<h1 class="mb-4">
    Detail Peminjaman
</h1>

<div class="card p-4">

    <div class="mb-3">

        <h5>Nama User</h5>

        <p>{{ $peminjaman->user->name }}</p>

    </div>

    <div class="mb-3">

        <h5>Nama Infokus</h5>

        <p>{{ $peminjaman->infokus->nama_infokus }}</p>

    </div>

    <div class="mb-3">

        <h5>Tanggal Pinjam</h5>

        <p>{{ $peminjaman->tanggal_pinjam }}</p>

    </div>

    <div class="mb-3">

        <h5>Tanggal Kembali</h5>

        <p>{{ $peminjaman->tanggal_kembali }}</p>

    </div>

    <div class="mb-3">

        <h5>Status</h5>

        <p>{{ $peminjaman->status }}</p>

    </div>

    <a href="/peminjaman"
       class="btn btn-secondary">

        Kembali

    </a>

</div>

</x-default-layout>