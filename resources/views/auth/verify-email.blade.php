<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        Thanks for signing up! Sebelum lanjut, tolong verifikasi email kamu dulu ya.
    </div>

    @if (session('message'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('message') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                Kirim ulang email verifikasi
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                Logout
            </button>
        </form>
    </div>
</x-guest-layout>
