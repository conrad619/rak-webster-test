@extends('layouts.main')

@section('header')
<div class="bg-black z-30 sticky top-0">
    <div class="max-w-[1150px] mx-auto flex justify-between content-center items-center">
    <img src="https://res.rakwireless.com/tracked/rak/logo/logo-rak-medium-white.svg" class="ml-[-10px]"/>
        <div class="flex space-x-5 items-center">
            <ul class="flex items-center flex-wrap">
                <li>
                    <a href="#" class="text-neutral-50 p-4 opacity-[55%] hover:opacity-100 text-base">Why RAK</a>
                </li>
                <li>
                    <a href="#" class="text-neutral-50 p-4 opacity-[55%] hover:opacity-100 text-base">Company - Us</a>
                </li>
                <li>
                    <a href="#" class="text-neutral-50 p-4 opacity-[55%] hover:opacity-100 text-base">Applications</a>
                </li>
                <li>
                    <a href="#" class="text-neutral-50 p-4 opacity-[55%] hover:opacity-100 text-base">Products</a>
                </li>
                <li>
                    <a href="#" class="text-neutral-50 p-4 opacity-[55%] hover:opacity-100 text-base">Resources</a>
                </li>
                <li>
                    <a href="#" class="text-neutral-50 p-4 opacity-[55%] hover:opacity-100 text-base">Connect With Us</a>
                </li>
            </ul>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <div class="btn btn-sm">Store</div>
        </div>
    </div>
</div>
@endsection

@section('content')
<section class="relative h-[75vh] min-h-[25rem] w-full overflow-hidden">
    <div class="absolute bg-[#000] top-0 left-0 h-full w-full opacity-50 z-10"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="absolute top-[50%] left-[50%] transform translate-x-[-50%] translate-y-[-50%] min-w-full min-h-full w-auto h-auto max-w-min z-0">
        <source src="https://res.rakwireless.com/tracked/bg/video/mp4/vid-agri-1.mp4" type="video/mp4">
    </video>
    <div class="container mx-auto relative z-10 flex justify-center content-center items-center text-center h-full flex-col">
        <h2 class="text-[72px] font-light">
            Pioneer in<br>
            <b>LPWAN Solutions</b>
        </h2>
        <div class="text-h5 mb-5">for <b>IoT Network Infrastructure</b> and <b>End Devices</b></div>
        <a href="#" class="btn btn-lg px-7">Find out more</a>
    </div>
</section>
<section class="bg-gradient-to-b from-black to-neutral-700">
    <div class="mx-auto container">
        <hr>
        <div class="text-center pt-10">
            <h2 class="text-h2"><b>IoT with simplicity and effectiveness</b></h2>
            <span class="opacity-60">Flexible Hardware and Software tools to deploy end-to-end solutions.</span>
        </div>
        <div class="flex justify-between max-w-[600px] mx-auto my-10">
            <div class="flex justify-center items-center trigger trigger-1">
                <div class="box p-1 rounded-xl relative overflow-hidden h-[76px] w-[76px] selected" >
                    <div class="boxs-shadow absolute top-0 left-0 w-full h-full z-0"></div>
                    <img class="relative w-full h-full" src="https://res.rakwireless.com/tracked/iot-simplicity-effectiveness/endpoint/icon-tracking.svg?w=100" alt="endpoint">
                </div>
                <span class="ml-4">Endpoint</span>
            </div>
            <div class="flex justify-center items-center trigger trigger-2">
            <div class="box p-1 rounded-xl relative overflow-hidden h-[76px] w-[76px] unselected">
                    <div class="boxs-shadow absolute top-0 left-0 w-full h-full z-0" ></div>
                    <img class="relative w-full h-full" src="https://res.rakwireless.com/tracked/iot-simplicity-effectiveness/network/icon-network.svg?w=100" alt="network">
                </div>
                <span class="ml-4">Network</span>
            </div>
            <div class="flex justify-center items-center trigger trigger-3">
                <div class="box p-1 rounded-xl relative overflow-hidden h-[76px] w-[76px] unselected">
                    <div class="boxs-shadow absolute top-0 left-0 w-full h-full z-0"></div>
                    <img class="relative w-full h-full" src="https://res.rakwireless.com/tracked/iot-simplicity-effectiveness/fleet/icon-fleet.svg?w=100" alt="fleet">
                </div>
                <span class="ml-4">Fleet</span>
            </div>
        </div>

        <div class="relative max-w-[800px] mx-auto">
            <img src="https://via.placeholder.com/800x400" class="opacity-0 w-full">
            <div class="imgs-1 imgs absolute h-full w-full left-0 top-0">
                <img class="img img-1 absolute top-0 left-0 right-0 m-auto" src="https://res.rakwireless.com/tracked/iot-simplicity-effectiveness/fleet/screen 2x/laptop-wisdm@2x.png?w=600" alt="">
                <img class="img img-2 absolute top-[42%] right-[15%]" src="https://res.rakwireless.com/tracked/iot-simplicity-effectiveness/fleet/screen 2x/mobile-wisdm@2x.png?w=100" alt="">
                <img class="img img-3 absolute top-[6%]" src="https://res.rakwireless.com/tracked/iot-simplicity-effectiveness/fleet/fleet.png?w=352" alt="">
            </div>
            <div class="imgs-2 imgs absolute h-full w-full left-0 top-0">
                <img class="img img-1 opacity-0 absolute top-0 left-0 right-0 m-auto" src="https://res.rakwireless.com/tracked/iot-simplicity-effectiveness/fleet/screen 2x/laptop-wisdm@2x.png?w=600" alt="">
                <img class="img img-2 opacity-0 absolute top-[42%] right-[15%]" src="https://res.rakwireless.com/tracked/iot-simplicity-effectiveness/fleet/screen 2x/mobile-wisdm@2x.png?w=100" alt="">
                <img class="img img-3 opacity-0 absolute top-[6%]" src="https://res.rakwireless.com/tracked/iot-simplicity-effectiveness/fleet/fleet.png?w=352" alt="">
            </div>
            <div class="imgs-3 imgs absolute h-full w-full left-0 top-0">
                <img class="img img-1 opacity-0 absolute top-0 left-0 right-0 m-auto" src="https://res.rakwireless.com/tracked/iot-simplicity-effectiveness/fleet/screen 2x/laptop-wisdm@2x.png?w=600" alt="">
                <img class="img img-2 opacity-0 absolute top-[42%] right-[15%]" src="https://res.rakwireless.com/tracked/iot-simplicity-effectiveness/fleet/screen 2x/mobile-wisdm@2x.png?w=100" alt="">
                <img class="img img-3 opacity-0 absolute top-[6%]" src="https://res.rakwireless.com/tracked/iot-simplicity-effectiveness/fleet/fleet.png?w=352" alt="">
            </div>
        </div>
    </div>
</section>
@endsection

@section('body_inject')
<script>
    var fadein = {
        duration: 1000,
        easing:'easeInSine',
        autoplay:true,
        translateY: [-100,0],
        opacity:[0,1]
    }
    var fadeout = {
        duration: 1000,
        easing:'easeInSine',
        autoplay:true,
        translateY: [0,-100],
        opacity:[1,0]
    }
    
    $('.trigger').on('click',function(){
        $('.trigger').children('.box').removeClass('selected')
        $('.trigger').children('.box').addClass('unselected')
        $(this).children('.box').removeClass('unselected')
        $(this).children('.box').addClass('selected')

    })

    $('.trigger-1').on('click',function(){
        anime({
            targets: ".imgs-2 .img",
            ...fadeout
        })
        anime({
            targets: ".imgs-3 .img",
            ...fadeout
        })
        
        anime({
            targets: ".imgs-1 .img",
            ...fadein
        })
        anime({
            targets: ".imgs-1 .img",
            ...fadein,
            begin: function(anim){
                $('.imgs-1').css('display','block')
            },
            complete: function(anim) {
                $('.imgs-2,.imgs-3').css('display','none')
            }
        })
    })
    $('.trigger-2').on('click',function(){
        anime({
            targets: ".imgs-1 .img",
            ...fadeout
        })
        anime({
            targets: ".imgs-3 .img",
            ...fadeout
        })
        anime({
            targets: ".imgs-2 .img",
            ...fadein
        })
        anime({
            targets: ".imgs-2 .img-2,.imgs-2 .img-3",
            ...fadein,
            begin: function(anim){
                $('.imgs-2').css('display','block')
            },
            complete: function(anim) {
                $('.imgs-1,.imgs-3').css('display','none')
            }
        })
    })

    $('.trigger-3').on('click',function(){
        anime({
            targets: ".imgs-1 .img",
            ...fadeout
        })
        anime({
            targets: ".imgs-2 .img",
            ...fadeout
        })
        anime({
            targets: ".imgs-3 .img",
            ...fadein,
        })
        anime({
            targets: ".imgs-3 .img-2,.imgs-3 .img-3",
            ...fadein,
            begin: function(anim){
                $('.imgs-3').css('display','block')
            },
            complete: function(anim) {
                $('.imgs-1,.imgs-2').css('display','none')
            }
        })
    })
</script>
@endsection