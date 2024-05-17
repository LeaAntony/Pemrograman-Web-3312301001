<!DOCTYPE html>
<html lang="en" data-theme="luxury">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/daisyui/daisyui.min.css">
    <script src="/js/daisyui/daisyui.min.js"></script>
</head>
<body>
    <div class="overflow-x-auto shadow-md">
        <table class="table table-pin-rows table-pin-cols border-collapse border border-yellow-500">
            <thead>
                <tr>
                    <th class="border border-yellow-600">No</th>
                    <th class="border border-yellow-600">Nama Produk</th>
                    <th class="border border-yellow-600">Deskripsi Produk</th>
                    <th class="border border-yellow-600">Harga Produk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nama as $index => $item)
                <tr class="hover">
                    <td class="border border-yellow-600">{{ $index + 1 }}</td>
                    <td class="border border-yellow-600">{{ $item }}</td>
                    <td class="border border-yellow-600">{{ $desc[$index] }}</td>
                    <td class="border border-yellow-600">{{ $harga[$index] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{-- @foreach ($nama as $index => $item)
            Nama Produk {{$index + 1}}: {{ $item }} <br>
            Deskripsi Produk {{$index + 1}}: {{ $desc[$index] }} <br>
            Harga Produk {{$index + 1}}: {{ $harga[$index] }} <br>
        @endforeach --}}
    </div>
</body>
</html>