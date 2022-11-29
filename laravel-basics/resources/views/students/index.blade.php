<ul>
    @foreach ($students as $student)
    <li>
        <b>Name:</b> {{$student->name}} <b>Section:</b> {{$student->section}} <b>Age:</b> {{$student->age}}
    </li>
    @endforeach
</ul>