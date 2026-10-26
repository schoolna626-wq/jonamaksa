
<<<<<<< HEAD
@extends('template')
@section('content')
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        .print-title {
            display: none;
        }
>>>>>>> 4d36a15 (cuapek)

<nav class="navbar navbar-dark bg-primary no-print mb-4">
    <form action="/home" method="GET" class="d-flex flex-wrap align-items-center mb-0">
        <button type="submit" class="btn btn-link text-white text-decoration-none" formaction="/home">Home</button>
        <button type="submit" class="btn btn-link text-white text-decoration-none" formaction="/karyawan">Karyawan</button>
        <button type="submit" class="btn btn-link text-white text-decoration-none" formaction="/pelanggan">Pelanggan</button>
        <button type="submit" class="btn btn-link text-white text-decoration-none" formaction="/tkry">Tambah Karyawan</button>
        <button type="submit" class="btn btn-link text-white text-decoration-none" formaction="/tplg">Tambah Pelanggan</button>
        <button type="submit" class="btn btn-light btn-sm ms-auto" formaction="/logout">Logout</button>
    </form>
</nav>

<<<<<<< HEAD
<h1 class="no-print">Welcome to the dashboard <?php echo session('u') ?></h1><br>
<h1 class="print-title">Data Pengguna</h1>

<form class="no-print" action="{{ url('/home') }}" method="GET">
    <label for="from">Dari Tanggal:</label>
    <input type="date" id="from" name="from" value="{{ request('from') }}">

    <label for="to">Sampai Tanggal:</label>
    <input type="date" id="to" name="to" value="{{ request('to') }}">

    <button type="submit" class="btn btn-secondary">Filter</button>
    <a href="/home" class="btn btn-secondary">Reset</a>
</form>

<p class="no-print">
=======
        .no-print,
        input,
        button,
        .btn,
        a,
        #users-table th:last-child,
        #users-table td:last-child:not([colspan]) {
            display: none !important;
        }

        .print-title {
            display: block;
        }

        #users-table {
            width: 100% !important;
            border-collapse: collapse !important;
        }

        #users-table th,
        #users-table td {
            color: #000 !important;
            border: 1px solid #333 !important;
            padding: 8px !important;
        }

        #users-table thead tr th {
            color: #000 !important;
            background-color: #f2f2f2 !important;
            font-weight: bold !important;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }
    }
    </style>
</head>
<body class="p-3">

<h1 class="no-print mb-3">Welcome to the dashboard <?php echo session('u') ?></h1>
<h1 class="print-title">Data Pengguna</h1>

<nav class="navbar bg-light mb-3 no-print p-2 justify-content-start gap-2">
    <a href="/tkry" class="btn btn-primary">Tambah Karyawan</a>
    <a href="/tplg" class="btn btn-success">Tambah Pelanggan</a>
    <a href="/pelanggan" class="btn btn-info text-white">Pelanggan</a>
    <a href="/karyawan" class="btn btn-warning">Karyawan</a>
</nav>

<form class="no-print row g-3 align-items-center mb-3" action="{{ url('/home') }}" method="GET">
    <div class="col-auto">
        <label for="from" class="col-form-label">Dari Tanggal:</label>
    </div>
    <div class="col-auto">
        <input type="date" id="from" name="from" class="form-control" value="{{ request('from') }}">
    </div>

    <div class="col-auto">
        <label for="to" class="col-form-label">Sampai Tanggal:</label>
    </div>
    <div class="col-auto">
        <input type="date" id="to" name="to" class="form-control" value="{{ request('to') }}">
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-secondary">Filter</button>
        <a href="/home" class="btn btn-secondary">Reset</a>
    </div>
</form>

<p class="no-print d-flex gap-2 mb-3">
>>>>>>> 4d36a15 (cuapek)
    <a href="/users/export/excel?from={{ request('from') }}&to={{ request('to') }}">
        <button type="button" class="btn btn-secondary">Export Excel</button>
    </a>
    <a href="/users/export/pdf?from={{ request('from') }}&to={{ request('to') }}" target="_blank">
        <button type="button" class="btn btn-secondary">Export PDF</button>
    </a>
    <button type="button" onclick="window.print()" class="btn btn-secondary">Print</button>
</p>

<<<<<<< HEAD
<br>

<table id="users-table" class="table table-bordered table-striped table-hover align-middle">
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Email</th>
        <th>Level</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no=1;
    foreach ($data as $key => $value) {
    ?>

    <tr>
        <td><?= $no++ ?></td>
        <td><?= $value->username ?></td>
        <td><?= $value->email ?></td>
        <td><?= $value->level ?></td>
        <td>
            <form action="/edit/<?= $value->id_user ?>" method="GET" style="display:inline;">
                <button type="submit" class="btn btn-warning btn-sm">Edit</button>
            </form>

            <form action="/delete/<?= $value->id_user ?>" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>

    <?php
    }
    ?>
=======
<table id="users-table" class="table table-bordered table-striped" border="1">
    <thead class="table-light">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Level</th>
            <th>Nama Karyawan</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th>Agama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no=1;
        foreach ($data as $key => $value) {
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $value->username ?></td>
            <td><?= $value->email ?></td>
            <td><?= $value->level ?></td>
            <td><?= $value->nama_kry ?></td>
            <td><?= $value->alamat_kry ?></td>
            <td><?= $value->nama_jabatan ?></td>
            <td><?= $value->nama_agama ?></td>
            <td>
                <form action="/edit/<?= $value->id_user ?>" method="GET" style="display:inline;">
                    <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                </form>

                <form action="/delete/<?= $value->id_user ?>" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<br>


<a class="no-print" href="/logout">
    <button class="btn btn-danger">Logout</button>
</a>

</body>
</html>
@endsection