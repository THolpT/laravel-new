<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    @csrf

    <form action="{{ route('students.store') }}" method="post" class="flex-col items-center">
        <input type="text" name="firstName" placeholder="firstName" class="border-2 p-3" required>
        <input type="text" name="lastName" placeholder="LastName" class="border-2 p-3" required>
        <input type="text" name="middleName" placeholder="MiddleName" class="border-2 p-3">
        <input type="date" name="birthday" placeholder="Birthday" class="border-2 p-3" required>
        <input type="submit" class="border-2 p-3" placeholder="Submit">
    </form>
</body>

</html>