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
<body class="bg-pink-regis flex justify-center">
    <div class="flex container join join-vertical " >
        <img src="{{ URL::asset('assets/logo_white.svg') }}" class="mt-5 w-52 my-10"  alt="logo">
                <div class="row flex justify-center w-full">
                    <div class="col-xl-5 bg-white " style="width: 581px; height: 629px">
                        <div class="card rounded-3 text-black">
                            <div class="card-body p-md-5 mx-md-4" >

                            <div class="font-bold text-7xl pt-10 pl-7">
                                
                                <h2 class="mt-16 mb-5 pb-1 text-pink-regis"  >SIGN IN</h2>
                            </div>
                            
                            <div class="pl-7 join join-vertical text-2xl mt-10">
                                <label class="w-full max-w-xs pb-2 " style="color: #9A7F8B" >Email</label>
                                <input type="Email" placeholder="" class="input input-ghost w-full " />
                                <hr class="bg-pink-regis" style="width:85%; color: #EAC4D5 ; height :2px"/>
                            </div>
          
                            <div class="pl-7 join join-vertical text-2xl">
                                <label class="w-full max-w-xs pb-2 text" style="color: #9A7F8B">Password</label>
                                <input type="password" placeholder="" class="input input-ghost w-full" />
                                <hr class="bg-pink-regis" style="width:85%; color: #EAC4D5 ; height :2px"/>
                                
                            </div>
          
                            <div class="pl-7 flex space-x-40 mt-12 w-full">
                                <button class="btn btn-outline bg-pink-regis text-white text-2xl font-semibold" style="width: 133px; height : 64px" type="button" >Log In</button>
                                <div class="join pt-5">
                                    <p class="text-pink-regis text-sm">New Here?</p>
                                    <a href="/register" class=" text-sm text-blue link link-hover pl-1"> Sign Up</a>
                                </div>
                                
                               
                            </div>

                            
          
                        </div>
                    </div>
    </div>
</body>
</html>