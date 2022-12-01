@include('partials.header', ['title' => 'Student Login'])
{{-- @include('components.navbar') --}}

<header class='max-w-lg mx-auto'>
    <a href=''>
        <h1 class="text-4xl font-bold text-center">{{ $title }}</h1>
    </a>
</header>
<main class="bg-gray-600 max-w-lg mx-auto p-8 my-10 rounded-lg shadow">
    <section>
        <h3 class="font-bold text-2xl text-white text-center">Welcome to Student System</h3>
        <p class="text-gray-200 text-center pt-4">Create new account <a href='/register' class="underline">here</a> </p>
    </section>
    <section class="mt-10">
        <form action="login/process" method='post' class="flex flex-col">
            @csrf
            @error('email')
                <p class="text-red-600 text-xs my-2 px-4">{{ $message }}</p>
            @enderror
            <div class="mb-6 pt-3 rounded bg-gray-300">
                <label for="email" class="block text-gray-800 text-sm font-bold mb-2 ml-3">Email</label>
                <input type="email" name='email'
                    class="bg-gray-300 rounded text-gray-800 w-full focus:outline-none border-b-4 border-gray-500 px-4" />
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-300">
                <label for="password" class="block text-gray-800 text-sm font-bold mb-2 ml-3">Password</label>
                <input type="password" name='password'
                    class="bg-gray-300 rounded text-gray-800 w-full focus:outline-none border-b-4 border-gray-500 px-4" />
            </div>
            <button
                class="bg-blue-600 text-white font-bold rounded py-2 shadow-lg hover:bg-blue-700 transition duration-200"
                type='submit'>Login</button>
        </form>
    </section>

</main>

@include('partials.footer')
