<x-default-layout>

<h1 class="mb-4">
    Data Peminjaman
</h1>

<a href="/peminjaman/create"
class="btn btn-primary mb-3">

    Tambah Peminjaman

</a>

<table class="table table-bordered">

    <thead class="table-dark">

        <tr>

            <th>No</th>
            <th>User</th>
            <th>Infokus</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
            <th>Aksi</th>

        </tr>

    </thead>

    <tbody>

        @foreach($peminjaman as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->user->name }}</td>

            <td>{{ $item->infokus->nama_infokus }}</td>

            <td>{{ $item->tanggal_pinjam }}</td>

            <td>{{ $item->tanggal_kembali }}</td>

            <td>{{ $item->status }}</td>

            <td>

                <a href="{{ route('peminjaman.show', $item->id) }}"
                class="btn btn-info btn-sm">

                    Detail

                </a>

                <a href="/peminjaman/{{ $item->id }}/edit"
                class="btn btn-warning btn-sm">

                    Edit

                </a>

                <form action="/peminjaman/{{ $item->id }}"
                      method="POST"
                      class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">

                        Hapus

                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

</x-default-layout>