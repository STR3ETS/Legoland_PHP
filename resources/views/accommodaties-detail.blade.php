@extends('layout')

@section('content')
    <div class="subpage-hero" style="background-image: url('{{ Vite::asset('resources/images/subpage-bg.png') }}')">
        <div class="max-w-[1400px] h-full mx-auto flex flex-col justify-end">
        </div>
    </div>
    <div class="w-full h-auto">
        <div class="max-w-[1400px] h-full mx-auto py-[4rem]">
            <a href="/accommodaties" class="underline opacity-75 hover:opacity-100 transition">Terug naar alle accommodaties</a>
            <div class="flex gap-[4rem] justify-between items-center mt-[1rem]">
                <div class="w-[60%] h-full">
                    <img src="{{ Vite::asset('resources/images/' . $accommodatie['afbeelding_url']) }}">
                </div>
                <div class="w-[40%] h-full">
                    <h1 class="text-[55px] font-[700] text-[#282828] mb-[3rem] leading-[1]">{{$accommodatie->naam}}</h1>
                    <p class="text-[18px] leading-[2] mb-[4rem]">{{$accommodatie->omschrijving}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection('content')