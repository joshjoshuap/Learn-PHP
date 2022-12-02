@include('partials.header', ['title' => 'Add New Student'])

<header class='max-w-lg mx-auto'>
    <a href=''>
        <h1 class="text-4xl font-bold text-center">Add new Student</h1>
    </a>
</header>
<main class="bg-gray-600 max-w-lg mx-auto p-8 my-10 rounded-lg shadow">
    <section class="mt-10">
        <form action="/add/student" method='post' class="flex flex-col">
            @csrf
            <div class="mb-6 pt-3 rounded bg-gray-300">
                <label for="name" class="block text-gray-800 text-sm font-bold mb-2 ml-3">Name</label>
                <input type="text" name='name'
                    class="bg-gray-300 rounded text-gray-800 w-full focus:outline-none border-b-4 border-gray-500 px-4" />
                @error('name')
                    <p class="text-red-600 text-xs my-2 px-4">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-300">
                <label for="section" class="block text-gray-800 text-sm font-bold mb-2 ml-3">Section</label>
                <input type="text" name='section'
                    class="bg-gray-300 rounded text-gray-800 w-full focus:outline-none border-b-4 border-gray-500 px-4" />
                @error('section')
                    <p class="text-red-600 text-xs my-2 px-4">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-300">
                <label for="age" class="block text-gray-800 text-sm font-bold mb-2 ml-3">Age</label>
                <input type="text" name='age'
                    class="bg-gray-300 rounded text-gray-800 w-full focus:outline-none border-b-4 border-gray-500 px-4" />
                @error('age')
                    <p class="text-red-600 text-xs my-2 px-4">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-300">
                <label for="email" class="block text-gray-800 text-sm font-bold mb-2 ml-3">Email</label>
                <input type="email" name='email'
                    class="bg-gray-300 rounded text-gray-800 w-full focus:outline-none border-b-4 border-gray-500 px-4" />
                @error('email')
                    <p class="text-red-600 text-xs my-2 px-4">{{ $message }}</p>
                @enderror
            </div>
            <button
                class="bg-blue-600 text-white font-bold rounded py-2 shadow-lg hover:bg-blue-700 transition duration-200"
                type='submit'>Add New</button>
        </form>
    </section>

</main>

@include('partials.footer')
