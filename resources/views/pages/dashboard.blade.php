@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')

<div class="flex flex-col w-full h-screen">
    <div class="flex w-full h-[60px] items-center">
        <div class="flex h-full w-auto items-center">    
            <h2 class=" mr-2 ml-4 md:mx-8 font-bold text-2xl">Laporan</h2>
        </div>
        <div class="mr-2.5 md:mr-5">
            <button type="button" class="flex bg-white py-1 px-4 ml-3 rounded-md items-center shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                </svg>
                <h1 class="mx-1 text-sm font-normal hidden md:block">Filter</h1>
            </button>
        </div>
        <div class="mr-2.5 md:mr-5">
            <a href="/user/show" type="button" class="flex bg-white py-1 px-4 ml-3 rounded-md items-center shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15m0-3-3-3m0 0-3 3m3-3V15" />
                </svg>
                <h1 class="mx-1 text-sm font-normal hidden md:block">Export</h1>
            </a>
        </div>
        <div class="flex h-full w-auto items-center ml-2.5 md:ml-5">
            <a href="user/tambah" class="flex font-medium bg-blue-500 py-1 md:py-2 px-6 text-white rounded-md shadow-md">+ <h1 class=" hidden md:block">Tambah</h1></a>
        </div>
    </div>
    <div class="flex w-[365px] md:w-full h-full ">
        <div class="flex w-[365px] md:w-full lg:w-full mt-5 mx-4 md:mx-8 bg-white rounded-t-3xl shadow-md overflow-y-auto">
            <div class="w-full">
                <table class="table-auto w-[310px] md:w-full h-auto">
                    <thead>
                        <tr class="border-b">
                            <th class="py-3 px-2 text-sm font-semibold tracking-wide text-slate-500 text-center">No.</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left text-slate-500">Nama</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left text-slate-500">Email</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-center text-slate-500">Laporan</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left text-slate-500">Status</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left text-slate-500">Tanggal</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-center text-slate-500">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $user as $u )
                        <tr class="border-b">
                            <td class="py-2 text-center">{{ $loop->iteration}}</td>
                            <td class="text-left">{{ $u->name }}</td>
                            <td class="text-left">{{ $u->email }}</td>
                            <td class="text-center">PDF</td>
                            <td class="text-left">
                            @php
                                    $statusColor = match(strtolower($u->status)) {
                                        'aktif' => 'py-1.5 px-5 text-xs font-semibold text-green-500 rounded-full bg-green-50',
                                        'pending' => 'py-1.5 px-5 text-xs font-semibold text-red-500 rounded-full bg-red-50',
                                        'in-progress' => 'py-1.5 px-5 text-xs font-semibold text-yellow-500 rounded-full bg-yellow-50'
                                    };
                                @endphp
                                <span class="{{ $statusColor }} font-semibold">
                                    {{ ucfirst($u->status) }}
                                </span>
                            </td>
                            <td class="text-left">{{ $u->date }}</td>
                            <td class="text-center">
                                <a href="/user/{{ $u->id }}/edit" class=" bg-yellow-300 py-1 px-4 rounded-md text-white shadow-md">Edit</a>
                                <a href="/user/{{ $u->id }}/delete" class=" bg-red-500 py-1 px-4 rounded-md text-white shadow-md" onclick="return confirm('Yakin mau di hapus ?')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection