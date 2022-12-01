@include('partials.header', ['title' => 'Student Register'])
{{-- @include('components.navbar') --}}

<header class='max-w-lg mx-auto'>
    <a href=''>
        <h1 class="text-4xl font-bold text-center">{{ $title }}</h1>
    </a>
</header>
<main class="bg-gray-600 max-w-lg mx-auto p-8 my-10 rounded-lg shadow">
    <section>
        <h3 class="font-bold text-2xl text-white text-center">Welcome to Student System</h3>
        <p class="text-gray-200 text-center pt-4">Login to your account <a href='/login' class="underline">here</a></p>
    </section>
    <section class="mt-10">
        <form action="/store" class="flex flex-col" method="POST">
            @csrf
            <div class="mb-6 pt-3 rounded bg-gray-300">
                <label for="name" class="block text-gray-800 text-sm font-bold mb-2 ml-3">Name</label>
                <input type="name" name='name'
                    class="bg-gray-300 rounded text-gray-800 w-full focus:outline-none px-4" />
                @error('name')
                    <p class="text-red-600 text-xs my-2 px-4">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-300">
                <label for="email" class="block text-gray-800 text-sm font-bold mb-2 ml-3">Email</label>
                <input type="email" name='email'
                    class="bg-gray-300 rounded text-gray-800 w-full focus:outline-none px-4" />
                @error('email')
                    <p class="text-red-600 text-xs my-2 px-4">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-300">
                <label for="password" class="block text-gray-800 text-sm font-bold mb-2 ml-3">Password</label>
                <input type="password" name='password'
                    class="bg-gray-300 rounded text-gray-800 w-full focus:outline-none px-4" />
                @error('password')
                    <p class="text-red-600 text-xs my-2 px-4">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-300">
                <label for="password_confirmation" class="block text-gray-800 text-sm font-bold mb-2 ml-3">Confirm
                    Password</label>
                <input type="password" name='password_confirmation'
                    class="bg-gray-300 rounded text-gray-800 w-full focus:outline-none px-4" />
                @error('password_confirmation')
                    <p class="text-red-600 text-xs my-2 px-4">{{ $message }}</p>
                @enderror
            </div>
            <button
                class="bg-blue-600 text-white font-bold rounded py-2 shadow-lg hover:bg-blue-700 transition duration-200"
                type='submit'>Register</button>
        </form>
    </section>

</main>

@include('partials.footer')
