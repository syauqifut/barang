<footer class="bg-white">
    <div class="container py-5">
        <div class="container text-center">
            <h2>APLIKASI MANAJEMEN BARANG</h2>
        </div>
    </div>
    <hr class="p-0 m-0 b-0">
    <div class="bg-dark py-2">
        <div class="container text-center">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-jet-dropdown-link>
            </form>
        </div>
    </div>
    <hr class="p-0 m-0 b-0">
    <div class="bg-dark py-2">
        <div class="container text-center">
            <p class="text-muted mb-0 py-2"> </p>
        </div>
    </div>
</footer>