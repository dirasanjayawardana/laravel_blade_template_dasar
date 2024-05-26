{{-- @each(namaTemplate, dataArray, namaItemVariabel) --> unutk include template berkali kali sesuai dengan iterasi jumlah array --}}
{{-- @once --> diletakkan di layout, jika layout tersebut ditampilkan berkali-kali, maka bagian @once tetap akan ditampilkan atau dieksekusi sekali saja --}}

@once
    <style>
        .red {
            color: red;
        }
    </style>
@endonce


<h1>{{ $user['name'] }}</h1>
<ul>
    @foreach ($user['hobbies'] as $hobby)
        <li class="red">{{ $hobby }}</li>
    @endforeach
</ul>
