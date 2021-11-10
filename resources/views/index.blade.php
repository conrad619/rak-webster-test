@extends('layouts.main')

@section('content')
    <div class="flex z-10 relative">
        <div>
            <button class="btn btn-lg trigger-1" >
                Learn More
            </button>
        </div>
        <div>
            <button class="btn btn-md trigger-2" >
                Learn More
            </button>
        </div>
        <div>
            <button class="btn btn-sm trigger-3" >
                Learn More
            </button>
        </div>
        
    </div>
    <div class="flex">
        <div class="bg-gradient-to-r from-black to-neutral-700 w-36 h-36 img img-1"></div>
        <div class="bg-gradient-to-r from-neutral-900 to-neutral-700 w-36 h-36 img img-2"></div>
        <div class="bg-gradient-to-r from-neutral-50 to-white w-36 h-36 img img-3"></div>
    </div>
    <hr>
    <hr>
    <hr>
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
    <div class="text-d1 ">text-d1 56px </div>
    <div class="text-h1">text-h1 36px </div>
    <div class="text-h2">text-h2 34px </div>
    <div class="text-h3">text-h3 28px </div>
    <div class="text-h4">text-h4 24px </div>
    <div class="text-h5">text-h5 20px </div>
    <div class="text-h6">text-h6 18px </div>
    <div class="text-c1">text-c1 28px </div>
    <div class="text-c2">text-c2 24px </div>
    <div class="text-c3">text-c3 22px </div>
        {{-- hover --}}
<pre><code data-code='<button class="btn btn-lg">Learn More</button> 
<button class="btn btn-md">Learn More</button> 
<button class="btn btn-sm">Learn More</button> 
'></code></pre>
    <a href="#">
        <button class="btn btn-lg" >
            Learn More
        </button>
    </a>
    <button class="btn btn-md">
        Find More
    </button>
    <button class="btn btn-sm">
        Button
    </button>
<pre><code data-code='<button class="btn-disabled btn-lg">Learn More</button> 
<button class="btn-disabled btn-md">Learn More</button> 
<button class="btn-disabled btn-sm">Learn More</button> 
'></code></pre>
    {{-- disabled --}}
    <button class="btn-disabled btn-lg" disabled>
        Learn More
    </button>
    <button class="btn-disabled btn-md" disabled>
        Find More
    </button>
    <button class="btn-disabled btn-sm" disabled>
        Button
    </button>
<pre><code data-code='<a href="#" class="text-c3 link">
    Link CTA<span class="inline-block align-middle -translate-y-0.5">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg></span>
</a>
'></code></pre>
    <div class="p-5">
        <a href="#" class="text-c3 link">
            Link CTA<span class="inline-block align-middle -translate-y-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </span></a>
        <a href="#2" class="text-h6 link">
            Link CTA<span class="inline-block align-middle -translate-y-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </span></a>
        <a href="#3" class="text-base link">
            Link CTA<span class="inline-block align-middle -translate-y-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </span></a>
       
    </div>


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