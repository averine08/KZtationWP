<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KZtation</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
     <!-- Styles -->

</head>
<body class="bg-ungu-regis flex justify-center">
    <div class="flex container join join-vertical " >
        <img src="{{ URL::asset('assets/logo_white.svg') }}" class="mt-5 w-52 my-10"  alt="logo">
                <div class="row flex justify-center w-full mb-20">
                    <div class="col-xl-5 bg-white mb-10" style="width: 581px; height: 100%">
                        <div class="card rounded-3 text-black">
                            <div class="card-body p-md-5 mx-md-4" >

                            <div class="font-bold text-7xl pt-10 pl-7">
                                
                                <h2 class="mt-1 mb-5 pb-1 text-ungu"  >SIGN UP</h2>
                            </div>
                            
                            <div class="pl-7 join join-vertical text-2xl mt-10 ">
                                <label class="w-full max-w-xs pb-2 text-ungu" >Full Name</label>
                                <input type="name" placeholder="" class="input input-ghost w-full " />
                                <hr class="bg-ungu" style="width:85%; color: #4E6DA9 ; height :2px"/>
                            </div>

                            <div class="pl-7 join join-vertical text-2xl mt-10">
                                <label class="w-full max-w-xs pb-2 text-ungu" >Email</label>
                                <input type="email" placeholder="" class="input input-ghost w-full " />
                                <hr class="bg-ungu" style="width:85%; color: #4E6DA9 ; height :2px"/>
                            </div>

                            <div class="pl-7 join join-vertical text-2xl mt-10">
                                <label class="w-full max-w-xs pb-2 text-ungu" >Username</label>
                                <input type="username" placeholder="" class="input input-ghost w-full " />
                                <hr class="bg-ungu" style="width:85%; color: #4E6DA9 ; height :2px"/>
                            </div>

                            <div class="pl-7 join join-vertical text-2xl mt-10">
                                <label class="w-full max-w-xs pb-2 text-ungu" >Phone Number</label>
                                <input type="phonenumber" placeholder="" class="input input-ghost w-full " />
                                <hr class="bg-ungu" style="width:85%; color: #4E6DA9 ; height :2px"/>
                            </div>

                            <div class="pl-7 join join-vertical text-2xl mt-10">
                                <label class="w-full max-w-xs pb-2 text-ungu" >Password</label>
                                <input type="password" placeholder="" class="input input-ghost w-full " />
                                <hr class="bg-ungu" style="width:85%; color: #4E6DA9 ; height :2px"/>
                            </div>

                            <div class="pl-7 join join-vertical text-2xl mt-10">
                                <label class="w-full max-w-xs pb-2 text-ungu" >Confirm Password</label>
                                <input type="cfpassword" placeholder="" class="input input-ghost w-full " />
                                <hr class="bg-ungu" style="width:85%; color: #4E6DA9 ; height :2px"/>
                            </div>
          
          
                            <div class="pl-7 flex space-x-40 mt-12 w-full">
                                <button class="btn btn-outline bg-ungu-regis text-white text-2xl font-semibold" style="width: 133px; height : 64px" type="button" >Log In</button>
                                    <div class="join pt-5">
                                        <p class="text-ungu text-sm">Have account?</p>
                                        <a href="/login" class=" text-sm text-blue link link-hover pl-1"> Sign In</a>
                                    </div>
                                
                               
                            </div>

                            
          
                        </div>
                    </div>
    </div>
</body>
</html>