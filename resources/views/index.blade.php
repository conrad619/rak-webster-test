@extends('layouts.main')

@section('content')
    <div class="flex z-10 relative">
        <button class="btn btn-blue trigger-1">
            Button here
        </button>
        <button class="btn btn-blue trigger-2">
            Button here
        </button>
        <button class="bg-gradient-to-r from-blue-grad-1 via-blue-grad-2 to-blue-grad-3 p-3 px-8 text-white rounded-full trigger-3">
            Button here
        </button>
    </div>
    <div class="flex">
        <div class="bg-gradient-to-r from-black to-neutral-700 w-36 h-36 img img-1"></div>
        <div class="bg-gradient-to-r from-neutral-900 to-neutral-700 w-36 h-36 img img-2"></div>
        <div class="bg-gradient-to-r from-neutral-50 to-white w-36 h-36 img img-3"></div>
    </div>
    <div class="flex">
        <div class="bg-neutral-50 rounded-full w-24 h-24"></div>
        <div class="bg-neutral-100 rounded-full w-24 h-24"></div>
        <div class="bg-neutral-200 rounded-full w-24 h-24"></div>
        <div class="bg-neutral-300 rounded-full w-24 h-24"></div>
        <div class="bg-neutral-400 rounded-full w-24 h-24"></div>
        <div class="bg-neutral-500 rounded-full w-24 h-24"></div>
        <div class="bg-neutral-600 rounded-full w-24 h-24"></div>
        <div class="bg-neutral-700 rounded-full w-24 h-24"></div>
        <div class="bg-neutral-800 rounded-full w-24 h-24"></div>
        <div class="bg-neutral-900 rounded-full w-24 h-24"></div>
    </div>
    <div class="flex">
        <div class="bg-green-600 rounded-full w-24 h-24"></div>
        <div class="bg-green-400 rounded-full w-24 h-24"></div>
        <div class="bg-green-200 rounded-full w-24 h-24"></div>
        <div class="bg-green-50 rounded-full w-24 h-24"></div>
    </div>
    <div class="flex">
        <div class="bg-yellow-600 rounded-full w-24 h-24"></div>
        <div class="bg-yellow-400 rounded-full w-24 h-24"></div>
        <div class="bg-yellow-200 rounded-full w-24 h-24"></div>
        <div class="bg-yellow-50 rounded-full w-24 h-24"></div>
    </div>
    <div class="flex">
        <div class="bg-red-600 rounded-full w-24 h-24"></div>
        <div class="bg-red-400 rounded-full w-24 h-24"></div>
        <div class="bg-red-200 rounded-full w-24 h-24"></div>
        <div class="bg-red-50 rounded-full w-24 h-24"></div>
    </div>
    <div class="flex">
        <div class="bg-blue-900 rounded-full w-24 h-24"></div>
        <div class="bg-blue-600 rounded-full w-24 h-24"></div>
        <div class="bg-blue-300 rounded-full w-24 h-24"></div>
        <div class="bg-gradient-to-b from-blue-grad-1 via-blue-grad-2 to-blue-grad-3 w-36 h-36"></div>
    </div>
    <div class="text-d1">text-d1 56px </div>
    <div class="text-h1">text-h1 36px </div>
    <div class="text-h2">text-h2 34px </div>
    <div class="text-h3">text-h3 28px </div>
    <div class="text-h4">text-h4 24px </div>
    <div class="text-h5">text-h5 20px </div>
    <div class="text-h6">text-h6 18px </div>
    <div class="text-c1">text-c1 28px </div>
    <div class="text-c2">text-c2 24px </div>
    <div class="text-c3">text-c3 22px </div>
    <div class="grid grid-cols-3 gap-4">
        {{-- hover --}}
        <div>
            <button class="mt-50px bg-gradient-to-r from-blue-grad-1 via-blue-grad-2 to-blue-grad-3 py-2 px-12 text-white rounded-full text-c3 tracking-wide shadow-md hover:shadow-inner-light hover:shadow-none hover:from-blue-600 hover:to-blue-600 active:opacity-50" >
                Learn More
            </button>
        </div>
        <div>
            <button class="bg-gradient-to-r from-blue-grad-1 via-blue-grad-2 to-blue-grad-3 py-2 px-6 text-white rounded-full text-h6 tracking-wide hover:shadow-inner-light">
                Find More
            </button>
        </div>    
        <div>
            <button class="bg-gradient-to-r from-blue-grad-1 via-blue-grad-2 to-blue-grad-3 py-1 px-4 text-white rounded-full text-base tracking-wide hover:shadow-inner-light">
                Button
            </button>
        </div>
        {{-- disabled --}}
        <div>
            <button class="mt-50px bg-gradient-to-r from-blue-grad-1 via-blue-grad-2 to-blue-grad-3 py-2 px-12 text-white rounded-full text-c3 tracking-wide disabled:from-neutral-700 disabled:to-neutral-700 disabled:opacity-50 " disabled>
                Learn More
            </button>
        </div>
        <div>
            <button class="bg-gradient-to-r from-blue-grad-1 via-blue-grad-2 to-blue-grad-3 py-2 px-6 text-white rounded-full text-h6 tracking-wide disabled:from-neutral-700 disabled:to-neutral-700 disabled:opacity-50 " disabled>
                Find More
            </button>
        </div>    
        <div>
            <button class="bg-gradient-to-r from-blue-grad-1 via-blue-grad-2 to-blue-grad-3 py-1 px-4 text-white rounded-full text-base tracking-wide disabled:from-neutral-700 disabled:to-neutral-700 disabled:opacity-50 " disabled>
                Button
            </button>
        </div>
        
    </div>
    <div class="w-32 h-32 bg-red-600 hover:shadow-inner-light"></div>

@endsection


@section('body_inject')
<script>
    var fadein = {
        duration: 1000,
        opacity: 1,
        easing:'easeInSine',
        autoplay:true,
        translateY: 0,
    }
    var fadeout = {
        duration: 1000,
        opacity: 0,
        easing:'easeInSine',
        autoplay:true,
        translateY: -100
    }
    
    document.querySelector('.trigger-1').onclick = ()=>{
        anime({
            targets: '.img',
            ...fadeout
        })
        anime({
            targets: '.img-1',
            ...fadein
        })
    };
    document.querySelector('.trigger-2').onclick = ()=>{
        anime({
            targets: '.img',
            ...fadeout
        })
        anime({
            targets: '.img-2',
            ...fadein
        })
    };
    document.querySelector('.trigger-3').onclick = ()=>{
        anime({
            targets: '.img',
            ...fadeout
        })
        anime({
            targets: '.img-3',
            ...fadein
        })
    };
</script>
@endsection