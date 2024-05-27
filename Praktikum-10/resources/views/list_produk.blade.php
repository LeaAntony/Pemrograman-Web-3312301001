<!DOCTYPE html>
<html lang="en" data-theme="cyberpunk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praktikum 8-9-10</title>
    <link rel="stylesheet" href="/css/daisyui/daisyui.min.css">
    <link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
    <link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
    <script src="/js/daisyui/daisyui.min.js"></script>
    <script src="/js/jquery/jquery-3.7.1.js"></script>
    <script src="/js/datatables/datatables.js"></script>
    <script src="/js/datatables/datatables.tailwindcss.js"></script>
</head>

<body class="m-10">
    <div class="overflow-x-auto shadow-md">
        <table id="data-tables" class="table table-pin-rows table-pin-cols border-collapse border border-yellow-500 font-bold">
            <thead>
                <tr>
                    <th class="border border-yellow-600 bg-neutral text-neutral-content text-xl">No</th>
                    <th class="border border-yellow-600 bg-neutral text-neutral-content text-xl">Nama Produk</th>
                    <th class="border border-yellow-600 bg-neutral text-neutral-content text-xl">Deskripsi Produk</th>
                    <th class="border border-yellow-600 bg-neutral text-neutral-content text-xl">Harga Produk</th>
                    <th class="border border-yellow-600 bg-neutral text-neutral-content text-xl">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nama as $index => $item)
                <tr class="hover">
                    <td class="border border-yellow-600">{{ $index + 1 }}</td>
                    <td class="border border-yellow-600">{{ $item }}</td>
                    <td class="border border-yellow-600">{{ $desc[$index] }}</td>
                    <td class="border border-yellow-600">{{ $harga[$index] }}</td>
                    <td class="border border-yellow-600">
                        <form action="{{ route('produk.delete', $id[$index]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-primary text-red-600" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus {{ $item }}?')">Hapus</button>
                        </form>
                    </td>
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
    <div class="mt-10 card bg-neutral text-neutral-content p-2 font-bold">
        <h1 class="text-2xl">Input Produk</h1>
        <form method="POST" action="{{ route('produk.simpan') }}">
            @csrf
            <table class="table">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td class="w-full">
                        <input type="text" class="input input-bordered input-error w-full text-neutral" id="nama" name="nama">
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td class="w-full">
                        <textarea class="input input-bordered input-error w-full text-neutral" id="deskripsi" name="deskripsi"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td class="w-full">
                        <input type="number" class="input input-bordered input-error w-full text-neutral" id="harga" name="harga">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" class="btn text-yellow-300">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

<script src="/js/datatables/datatables.script.js"></script>

</html>