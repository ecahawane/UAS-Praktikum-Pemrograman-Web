<x-default-layout>

<h1 class="mb-4">
    Profile User
</h1>

<div class="card shadow p-4">

    <div class="mb-3">

        <h5>Nama</h5>

        <p>{{ auth()->user()->name }}</p>

    </div>

    <div class="mb-3">

        <h5>Email</h5>

        <p>{{ auth()->user()->email }}</p>

    </div>

    <div class="mb-3">

        <h5>Role</h5>

        <p>{{ auth()->user()->role }}</p>

    </div>

</div>

</x-default-layout>