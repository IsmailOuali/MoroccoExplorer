<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Login</title>
</head>
<body>
    <div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat" style="background-image:url('/images/bg-login.jpg')">
        <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
          <div class="text-white">
            <div class="mb-8 flex flex-col items-center">
              <img src="/images/logo-big.png" width="150" alt="" srcset="" />
              <span class="text-gray-300">Enter Login Details</span>
            </div>
            <form action="#">
              <div class="mb-4 text-lg">
                <input class="rounded-3xl border-none bg-yellow-200 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="text" name="name" placeholder="user@email.com" />
              </div>
      
              <div class="mb-4 text-lg">
                <input class="rounded-3xl border-none bg-yellow-200 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="Password" name="name" placeholder="*********" />
              </div>
              <div class="flex items-center mb-2 text=sm">
                <input type="checkbox" class="ml-2 w-4 h-4 border-gray-300 rounded text-blue-600 bg-gray-100">
                <label class="ms-2 text-sm font-medium text-white" for="">Remember me</label>
            </div>
              <div class="mt-8 flex justify-center text-lg text-black">
                <button type="submit" class="rounded-3xl bg-blue-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
</body>
</html>