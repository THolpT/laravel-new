<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Список студентов</title>

    @fonts

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <h1>Список студентов</h1>

    <div class="overflow-x-auto">
        <h1>{{ $student->fullName() }}</h1>

        <form action="{{ route('students.update', $student) }}" method="POST">
            @csrf
            @method('PUT')

        <input type="text" name="firstName" placeholder="firstName" class="border-2 p-3" value="{{$student->firstName}}" required>
        <input type="text" name="lastName" placeholder="LastName" class="border-2 p-3" value="{{$student->lastName}}" required>
        <input type="text" name="middleName" placeholder="MiddleName" class="border-2 p-3" value="{{$student->middleName}}">
        <input type="date" name="birthday" placeholder="Birthday" class="border-2 p-3" value="{{$student->birthday}}" required>
        <input type="submit" class="border-2 p-3" placeholder="Submit" value="Обновить">
        </form>
    </div>

</body>

</html>