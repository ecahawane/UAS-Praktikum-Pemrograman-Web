<x-default-layout>

<h1 class="mb-4">
    Data Infokus
</h1>

<a href="/infokus/create"
class="btn btn-primary mb-3">

    Tambah Infokus

</a>

<table class="table table-bordered">

    <thead class="table-dark">

        <tr>

            <th>No</th>
            <th>Nama Infokus</th>
            <th>Kode</th>
            <th>Lokasi</th>
            <th>Status</th>
            <th>Aksi</th>

        </tr>

    </thead>

    <tbody>

        @foreach($infokus as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->nama_infokus }}</td>

            <td>{{ $item->kode_infokus }}</td>

            <td>{{ $item->lokasi }}</td>

            <td>{{ $item->status }}</td>

            <td>

                <a href="/infokus/{{ $item->id }}/edit"
                class="btn btn-warning btn-sm">

                    Edit

                </a>

                <form action="/infokus/{{ $item->id }}"
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