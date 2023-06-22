<!DOCTYPE html>
<html lang="en">

<head>
  <title>E-Learning</title>
  <meta name="description" content="Generated by create next app">
  <link rel="icon" href="/img/favicon.ico">

  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
  <div id="root">
    <div class="w-screen h-screen md:flex lg:flex text-black justify-between">
      <div class="h-full w-full hidden md:block bg-[url('images/paper-pattern.png')]">
        <div class="w-4/5 flex flex-col justify-center h-full mx-auto">
          <div class="w-fit relative">
            <img src="images/font-decorator.png" alt="indocor" width="154" height="139" class="w-16 absolute -top-8 -right-6 z-10">
            <h1 class="font-extrabold font-serif text-black text-4xl">E-Learning</h1>
          </div>
          <div class="relative space-y-8">
            <img src="images/splash.png" width="82" height="81" class="absolute -top-4 -left-6 z-10 w-8">
            <h1 class="text-7xl font-serif font-extrabold text-[#7256A0] tracking-widest">Keep Smile</h1>
            <h1 class="text-4xl font-serif font-bold text-[#7256A0] tracking-wide">Have you nice day</h1>
          </div>
        </div>
      </div>
      <div class="bg-white h-full sm:w-screen lg:w-3/5">
        <div id="content" class="w-full h-full flex justify-center items-center">
          <div class="w-full h-full flex justify-center items-center">
            <div class="w-4/5 h-fit flex flex-col gap-y-10">
              <div class="space-y-4">
                <h3 class="font-extrabold text-4xl">Log In</h3>
                <h3 class="text-[#B19CD8] text-xl font-medium">Enter your credentials to log in</h3>
              </div>
              <div>
                <form action="POST_login.php" method="post">
                  <div class="mt-4">
                    <label for="email" class="font-secondary font-semibold !text-lg md:text-[16px]">Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter your email" class="font-secondary font-normal border-2 mt-1 px-3 py-3 text-black rounded-lg w-full !text-lg md:text-[16px]">
                  </div>
                  <div class="mt-4">
                    <label for="password" class="font-secondary font-semibold !text-lg md:text-[16px]">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" class="font-secondary font-normal border-2 mt-1 px-3 py-3 text-black rounded-lg w-full !text-lg md:text-[16px]">
                  </div>
                  <div class="w-full pt-10">
                    <button type="submit" name="login" class="w-full font-secondary text-white bg-[#9470CE] px-6 !text-xl md:text-[16px] py-3 rounded-md cursor-pointer hover:bg-[#845bc6] border-2 border-solid font-semibold">Log In</button>
                  </div>
                </form>
                <div class="pt-4 text-center">
                  <h3 class="font-semibold">
                    Don't have an account? <a href="register.php" class="underline text-[#9470CE]">Sign Up</a>
                  </h3>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</body>

</html>