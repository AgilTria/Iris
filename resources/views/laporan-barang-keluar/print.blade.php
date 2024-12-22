<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Required meta tags --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    {{-- Title --}}
    <title>Laporan Barang Keluar</title>
    
    {{-- custom style --}}
    <style type="text/css">
        body,
        html {
            font-family: sans-serif;
            font-size: 14px;
            color: #29343d;
        }

        table, th, td {
            border: 1px solid #dee2e6;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px 5px;
        }

        hr {
            color: #dee2e6;
        }
    </style>
</head>

<body>
    {{-- judul laporan --}}
    <div style="text-align:center;margin-bottom:20px">
        <h3 style="margin-bottom:10px">LAPORAN DATA BARANG KELUAR</h3>
        <span>Tanggal {{ Carbon\Carbon::parse(request('tgl_awal'))->translatedFormat('j F Y') . ' s.d. ' . Carbon\Carbon::parse(request('tgl_akhir'))->translatedFormat('j F Y') }}</span>
    </div>

    <hr style="margin-bottom:20px">

    {{-- tabel tampil data --}}
    <table style="width:100%">
        <thead style="background-color: #6861ce; color: #ffffff">
            <th>No</th>
            <th>Tanggal</th>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah Keluar</th>
            <th>Satuan</th>
        </thead>
        <tbody>
        @php
            $no = 1;
        @endphp
        @forelse ($barangKeluar as $data)
            {{-- jika data ada, tampilkan data --}}
            <tr>
                <td width="30" align="center">{{ $no++ }}</td>
                <td width="120">{{ Carbon\Carbon::parse($data->tanggal)->translatedFormat('j F Y') }}</td>
                <td width="100" align="center">{{ $data->barang_id }}</td>
                <td width="200">{{ $data->nama_barang }}</td>
                <td width="100" align="right">{{ $data->jumlah_keluar }}</td>
                <td width="120">{{ $data->nama_satuan }}</td>
            </tr>
        @empty
            {{-- jika data tidak ada, tampilkan pesan data tidak tersedia --}}
            <tr>
                <td align="center" colspan="6">Tidak ada data tersedia.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <div style="margin-top: 25px; text-align: right">Bandar Lampung, {{ Carbon\Carbon::now()->translatedFormat('j F Y') }}</div>
</body>

</html>
