<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<style>
    body {
        background: url('images/reg1.jpg');
        background-position: top;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;
    }
</style>

<body class="bg-linear-gradient(123deg, #71b8e7,#9b59b6)">
    <div class="font-blod text-center text-4xl text-black mt-5">Registation</div>
    <form action="#" class=" w-max border-4 border-sky-200 rounded-xl bg-sky-200 text-center ml-auto mr-auto mt-16 ">
        <div class="mt-5 ml-2 mr-2 ">
            <div class=" p-3 space-x-2">
                <span class="text-lg text-black ">Full name:</span>
                <input type="text" placeholder="Name" required class="text-sm text-black">
            </div>
            <div class="p-3 space-x-2">
                <span class="text-lg text-black">User name:</span>
                <input type="text" placeholder=" Username" required class="text-sm text-black ">
            </div>
            <div class="p-3 space-x-2">
                <span class="text-lg text-black">Email:</span>
                <input type="text" placeholder="Email" required class="text-sm text-black ">
            </div>
            <div class="p-3 space-x-2">
                <span class="text-lg text-black">Phone:</span>
                <input type="text" placeholder="Phone" required class="text-sm text-black ">
            </div>
            <div class="p-3 space-x-2">
                <span class="text-lg text-black">Password:</span>
                <input type="text" placeholder="Password" required class="text-sm text-black ">
            </div>
            <div class="p-3 space-x-2">
                <span class="text-lg text-black ">Confirm Password:</span>
                <input type="text" placeholder="Confirm-Password" required class="text-sm text-black ">
            </div>
            <div class="p-3 space-x-2">
                <span class="text-lg text-black">Gender:</span>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
            </div>

            <div class="button">
                <input type="submit" value="Register" class="p-2 border-4 bg-black border-black text-white rounded-xl">
            </div>
        </div>
    </form>

</body>

</html>