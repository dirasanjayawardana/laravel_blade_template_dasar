<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class</title>

    <style>
        .red {
            color: red;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>

<body>
    {{-- untuk mengubah class css berdasarkan kondisi tertentu dengan menggunakan @class --}}

    <ul>
        @foreach ($hobbies as $item)
            {{-- class bold akan dieksekusi ketika $item["love"] bernilai true --}}
            <li @class(['red', 'bold' => $item['love']])>{{ $item['name'] }}</li>

            {{-- atau bisa menggunakan if, namun akan menyulitkan jika kondisinya banyak --}}
            {{-- <li class="@if ($item['love']) bold @endif red">{{ $item['name'] }}</li> --}}
        @endforeach
    </ul>
</body>

</html>
