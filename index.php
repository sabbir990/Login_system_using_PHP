<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    },

                    fontFamily: {
                        "poppins": ["Poppins", "sans-serif"]
                    }
                }
            }
        }
    </script>
</head>

<body class="h-screen flex flex-col justify-center space-y-6">
    <div class="font-poppins px-10 py-6 bg-white text-gray-800 rounded-xl shadow-lg w-[70%] mx-auto text-center border-2 border-gray-500">
        <h1 class="text-3xl ">Here's your name : Not logged in yet!</h1>
    </div>

    <div class="flex justify-center space-x-8">
        <a href="Pages/sign_up.php" class="bg-black text-white px-8 py-2 rounded-lg font-poppins shadow-md border border-black hover:text-black hover:bg-white transition-all duration-300 ease-in-out">Sign Up</a>
        <a href="Pages/log_in.php" class="bg-white text-black px-8 py-2 rounded-lg font-poppins shadow-md border border-black hover:text-white hover:bg-black transition-all duration-300 ease-in-out">Login</a>
    </div>
</body>

</html>