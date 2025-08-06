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
                    },

                    backgroundImage: {
                        "sign_up_bg": "url(../Assets/sign_up_bg.jpg)"
                    }
                }
            }
        }
    </script>
</head>

<body class="h-screen bg-sign_up_bg bg-cover bg-center bg-white flex items-center justify-center">
    <div
        class="px-8 py-5 bg-gradient-to-t from-white/50 to-blue-300/50 min-w-[30%] rounded-xl shadow-lg flex flex-col items-center space-y-6">
        <div class="mx-w-[30%] flex items-center justify-center bg-white p-4 opacity-100 rounded-xl">
            <img src="../Assets/add-user.png" class="w-12" />
        </div>

        <div class="border border-gray-500 border-dashed w-[50%] ">

        </div>

        <div>
            <h3 class="text-3xl text-center font-bold text-gray-800 font-poppins">Create Your Account</h3>
            <p class="text-cente text-gray-600 font-poppins">Join us and unlock all the features. It only takes a
                minute!</p>
        </div>

        <div class="border border-gray-500 border-dashed w-[50%] ">

        </div>

        <form action="../includes/sign_up.inc.php" method="post">
            <div class="w-full space-y-3">

                <!-- Username -->

                <div class="flex items-center px-3 py-3 rounded-md bg-white space-x-4 font-poppins w-[90%] mx-auto">
                    <img src="../Assets/user (3).png" class="w-6" />
                    <input name="username" type="text" placeholder="Username" class="outline-none w-full">
                </div>

                <!-- Email -->

                <div class="flex items-center px-3 py-3 rounded-md bg-white space-x-4 font-poppins w-[90%] mx-auto">
                    <img src="../Assets/mail-inbox-app.png" class="w-6" />
                    <input name="email" type="email" placeholder="Email" class="outline-none w-full">
                </div>

                <!-- Password -->

                <div class="flex items-center px-3 py-3 rounded-md bg-white space-x-4 font-poppins w-[90%] mx-auto">
                    <img src="../Assets/padlock.png" class="w-6" />
                    <input name="password" type="password" placeholder="Password" class="outline-none w-full">
                </div>

                <!-- Confirm Password -->

                <div class="flex items-center px-3 py-3 rounded-md bg-white space-x-4 font-poppins w-[90%] mx-auto">
                    <img src="../Assets/padlock (1).png" class="w-6" />
                    <input name="confirmPassword" type="password" placeholder="Confirm Password" class="outline-none w-full">
                </div>

            </div>
            <br>

            <button
                class="group mx-auto w-[90%] bg-blue-500 text-white rounded-md border border-blue-500 hover:text-black hover:bg-white hover:border-white font-poppins py-2 transition-all duration-300 ease-in-out flex items-center justify-center space-x-3">
                <p>Sign Up</p>
                <img class="w-6 group-hover:hidden transition-all duration-300 ease-in-out"
                    src="../Assets/log-in (1).png" />
                <img class="w-6 hidden group-hover:block transition-all duration-300 ease-in-out"
                    src="../Assets/log-in.png" />
            </button>
        </form>

        <!-- Devider of socials -->

        <div class="flex items-center justify-center w-[90%] text-gray-600 space-x-6 font-poppins">
            <div class="border border-gray-500 border-dashed w-[20%] ">

            </div>

            <p>Or sign up with</p>

            <div class="border border-gray-500 border-dashed w-[20%] ">

            </div>
        </div>

        <!-- Social Section starts from here -->

        <div class="w-[90%] flex items-center justify-center space-x-2">

            <!-- Facebook -->

            <button class="bg-white rounded-lg shadow-md w-full py-3 flex items-center justify-center">
                <img src="../Assets/facebook (1).png" class="w-6" />
            </button>

            <!-- Google -->

            <button class="bg-white rounded-lg shadow-md w-full py-3 flex items-center justify-center">
                <img src="../Assets/google.png" class="w-6" />
            </button>

            <!-- Apple -->

            <button class="bg-white rounded-lg shadow-md w-full py-3 flex items-center justify-center">
                <img src="../Assets/apple-logo.png" class="w-6" />
            </button>
        </div>

        <!-- Login Rediraction starts from here -->

        <div class="text-sm text-gray-700 text-center font-poppins flex space-x-1">
            <p>Already have an account?</p> <a href="log_in.php" class="font-bold text-black underline">Log In</a>
        </div>

    </div>
</body>

</html>