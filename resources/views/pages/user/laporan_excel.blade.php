<?php

header("content-type: application/vnd-ms-excel");
header("content-Disposition: attachment; filename=laporan-bulanan.xls");

?>

<p align="center" style="font-weight:bold;font-size:16pt">LAPORAN DATA USER</p>

<table border="1" align="center">
    <tr>
        <th width="50">No</th>
        <th width="100">Nama</th>
        <th width="200">Email</th>
        <th width="50">Status</th>
        <th width="100">Tanggal</th>
    </tr>
    @foreach( $user as $u )
    <tr>
        <td align="center">{{ $loop->iteration}}</td>
        <td>{{ $u->name }}</td>
        <td>{{ $u->email }}</td>
        <td align="center">{{ $u->status }}</td>
        <td align="center">{{ $u->date }}</td>
    </tr>
    @endforeach
</table>
