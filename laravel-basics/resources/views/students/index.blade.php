@include('partials.header', ['title' => 'Student Information'])
@include('components.navbar')
<x-messages />

<header class='max-w-lg mx-auto mt-20'>
    <a href=''>
        <h1 class="text-4xl font-bold text-center">Student List</h1>
    </a>
</header>
<section class="mt-2">
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-200">
            <thead class="text-xs gray-800 uppercase bg-gray-500">
                <tr>
                    <th scope="col" class="py-3 px-5">
                        Student name
                    </th>
                    <th scope="col" class="py-3 px-5">
                        Section
                    </th>
                    <th scope="col" class="py-3 px-5">
                        Age
                    </th>
                    <th scope="col" class="py-3 px-5">
                        Email
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="bg-neutral-300 border-b-2 border-gray-500">
                        <td class="py-4 px-6 text-neutral-900">
                            {{ $student->name }}
                        </td>
                        <td class="py-4 px-6 text-neutral-900">
                            {{ $student->section }}
                        </td>
                        <td class="py-4 px-6 text-neutral-900">
                            {{ $student->age }}
                        </td>
                        <td class="py-4 px-6 text-neutral-900">
                            {{ $student->email }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mx-auto">
            {{ $students->links() }}
        </div>
    </div>
</section>
@include('partials.footer')
