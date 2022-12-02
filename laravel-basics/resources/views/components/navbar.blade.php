<nav class="bg-gray-900 border-gray-200 text-white px-2 py-5 fixed w-full z-20 top-0 left-0">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/students">
            <span class="self-centered text-xl font-semibold whitespace-nowrap">
                Student System
            </span>
        </a>
        @auth
            <div class="flex gap-4">
                <a href="/add/student">
                    <span class="self-centered text-xl text-green-600 font-semibold whitespace-nowrap ">
                        Add New
                    </span>
                </a>
                <form action='/logout' method='post'>
                    @csrf
                    <button type="submit">
                        <span class="self-centered text-xl text-red-600 font-semibold whitespace-nowrap ">
                            Logout
                        </span>
                    </button>
                </form>
            @else
                <a href="/login">
                    <span class="self-centered text-xl text-blue-600 font-semibold whitespace-nowrap ">
                        Login
                    </span>
                </a>
                <a href="/register">
                    <span class="self-centered text-xl text-green-600 font-semibold whitespace-nowrap ">
                        Register
                    </span>
                </a>
            @endauth

        </div>
    </div>
</nav>
