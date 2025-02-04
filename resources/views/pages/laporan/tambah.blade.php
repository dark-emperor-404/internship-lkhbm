<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/styles.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tambah</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class=" flex h-screen bg-gray-200 items-center justify-center">
        <div class=" w-1/3 h-5/6 bg-white rounded-xl">
            <div class=" flex py-3 px-4 h-14">
                <div class=" flex">
                    <a href="/laporan" class=" flex p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class=" w-4 h-4 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </a>
                </div>
                <!-- <div>
                    <button class=" p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class=" w-3.5 h-3.5 stroke-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                        </svg>
                    </button>
                </div> -->
                <div>
                    <h1 class=" px-20 text-gray-400 font-semibold">Tambah</h1>
                </div>
            </div>
            <div class=" py-3 px-4">
                <form action="/laporan" method="" autocomplete="off">
                    <div class=" mb-3.5">
                        <label for="" class="form-label">Nama</label>
                        <input
                            type="text"
                            class="form-control border"
                            name="nama"
                            id="nama"
                            aria-describedby="helpId"
                            placeholder=" nama"
                            />
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="mb-3.5">
                        <label for="" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control border"
                            name="email"
                            id="email"
                            aria-describedby="helpId"
                            placeholder=" email"
                            />
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="mb-3.5">
                        <label for="" class="form-label">Password</label>
                        <input
                            type="password"
                            class="form-control border"
                            name="password"
                            id="password"
                            aria-describedby="helpId"
                            placeholder=" password"
                            />
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="mb-3.5">
                        <label for="" class="form-label">Status</label>
                        <select
                            class="form-select form-select-lg border"
                            name="status"
                            id="status"
                            >
                            <option selected>Aktif</option>
                            <option value="">Pending</option>
                            <option value="">In Progres</option>
                        </select>
                    </div>
                    <div class="mb-3.5">
                        <label for="" class="form-label">Date</label>
                        <input
                            type="date"
                            class="form-control border"
                            name="date"
                            id="date"
                            aria-describedby="helpId"
                            placeholder=""
                            />
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" class=" p-1 border bg-blue-500 text-white rounded-md">simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>