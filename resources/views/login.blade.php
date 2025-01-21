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
    <div class="flex min-h-full flex-col justify-center px-10 py-12 lg:px-8">
        <div class=" sm:mx-auto sm:w-full sm:max-w-sm my-12">
            <h2 class=" text-center text-3xl font-bold text-blue-800">cignifi</h2>
        </div>
        <div class=" sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="/dashboard" method="" autocomplete="off">
                <h1 class=" font-semibold text-lg text-slate-500">Login to your Account</h1>
                <div class=" mt-6 text-center">
                    <input type="email" name="email" id="email" placeholder="   Email" class=" border min-w-full h-[50px] rounded-md shadow-md">
                </div>
                <div class=" mt-6 text-center">
                    <input type="password" name="password" id="password" placeholder="  Password" class=" border min-w-full h-[50px] rounded-md shadow-md">
                </div>
                <div class=" mt-6 text-center">
                    <button class=" bg-blue-800 text-white min-w-full h-[50px] rounded-md font-medium shadow-md shadow-blue-800">Sign in</button>
                </div>
            </form>
        </div>
        <div class=" mt-14 sm:mx-auto sm:w-full sm:max-w-sm text-center">
            <label for="" class=" text-slate-400 font-medium">- Or sign in with -</label>
            <div class="mt-6 flex items-stretch justify-center space-x-7">
                <div class=" flex size-20 border mx-2 h-16 items-center justify-center">
                    <a href="#" class=""><img src="/assets/img/google.png" class=" size-8" alt=""></a>
                </div>
                <div class=" flex size-20 border mx-2 h-16 items-center justify-center">
                    <a href="#" class=""><img src="/assets/img/facebook.png" class=" size-8" alt=""></a>
                </div>
                <div class=" flex size-20 border mx-2 h-16 items-center justify-center">
                    <a href="#" class=""><img src="/assets/img/x.png" class=" size-8" alt=""></a>
                </div>
            </div>
        </div>
        <div class=" mt-20 flex justify-center">
            <h2 class=" text-slate-400 font-medium">Don,t have an account?</h2>
            <a href="/signup" class=" font-medium text-blue-500 ml-1">Sign up</a>
        </div>
    </div>
</body>
</html>