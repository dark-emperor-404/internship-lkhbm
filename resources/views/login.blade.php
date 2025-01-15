<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/styles.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 outline -outline-offset-1 outline-1">
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm py-8 outline -outline-offset-1 outline-1 rounded-xl shadow-[1px_1px_12px_rgba(0,0,0,0.01)] shadow-black p-5">
            <form class="space-y-6" action="/dashboard" method="#">
                <div class="mx-5 text-center font-bold text-2xl">
                    <h1>Login</h1>
                </div>
                
                <div class="mt-5 sm:mx-5">
                    <label for="" class>username</label>
                    <div class="mt-2">    
                        <input type="text" name="username" id="username" class="block w-full rounded-md px-3 py-1 text-base text-gray-900 outline -outline-offset-1 outline-1 bg-white" >
                    </div>
                </div>
                <div class="mt-5 sm:mx-5">
                    <label for="">password</label>
                    <div class="mt-2">
                        <input type="password" name="password" id="password" class="block w-full rounded-md px-3 py-1 text-base text-gray-900 outline -outline-offset-1 outline-1 bg-white">
                    </div>
                </div>
                <div class="px-5">
                    <button  class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1 text-white font-semibold shadow-[4px_4px_5px_rgba(0,0,0,0.2)] shadow-indigo-500 ">login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>