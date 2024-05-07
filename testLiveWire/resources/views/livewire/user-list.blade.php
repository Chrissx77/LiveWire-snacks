<div>
    <h1 style="text-align: center" class="text-4xl font-bold">LISTA UTENTI NEL DB:</h1>

    @if (session()->has('success'))
        <span class="rounded bg-green-400 m-5 p-5">
            {{session('success')}}
        </span>
    @endif
    <form class="p-5" wire:submit.prevent = "createUser" action="">
        <input class="block rounded border border-black-100 px-3 py-1 mb-1" wire:model = "name" type="text"
            placeholder="name">
        @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <input class="block rounded border border-black-100 px-3 py-1 mb-1" wire:model = "email" type="email"
            placeholder="email">
        @error('email')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <input class="block rounded border border-black-100 px-3 py-1 mb-1" wire:model = "password" type="password"
            placeholder="password">
        @error('password')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <button class="block rounded border bg-gray-400 px-3 py-2 text-white" type="submit">Create</button>
    </form>

    @foreach ($users as $user)
        <h3 class="block rounded border border-black-100 px-3 py-1 mb-1 m-5">
            <b>Nome: </b>{{ $user->name }}, <br>
            <b>Email: </b> {{ $user->email }} <br>
            <b>Password: </b> ****
        </h3>
    @endforeach

    {{$users -> links()}}
</div>
