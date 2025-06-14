<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Welcome to the Admin Dashboard</h3>
                    <p>You are logged in as an administrator.</p>
                    {{-- <p class="mt-4">This area is restricted to admin users only.</p>
                    
                    <div class="mt-6">
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Admin Logout') }}
                            </button>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 