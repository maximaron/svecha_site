@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-br from-white to-red-500 h-full w-full p-10 lg:p-20">
    <div class="flex gap-20">
        <div class="hidden md:block sticky content-center top-0 h-full">
            <img class="mx-auto h-96 rounded-md flex mt-10" src="{{asset('imgs/img.png')}}" />
            <p class="text-center mt-5 text-3xl font-bold">Mary K</p>
            <p class="text-center mt-5 w-full text-xl">Lets manifest your desires together</p>
            <div class="flex gap-x-5 mt-2">
                <div>
                    <a href=https://www.instagram.com/hescomingbackgirl?igsh=MWp4bmlsbmp1Nnd0bg==" target="_blank" rel="noopener noreferrer">
                        <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                            <path d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z"></path>
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="https://www.tiktok.com/@hescomingbackgirl?_t=8sDSb4jU7Ug&_r=1">
                        <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                            <path d="M 9 4 C 6.2495759 4 4 6.2495759 4 9 L 4 41 C 4 43.750424 6.2495759 46 9 46 L 41 46 C 43.750424 46 46 43.750424 46 41 L 46 9 C 46 6.2495759 43.750424 4 41 4 L 9 4 z M 9 6 L 41 6 C 42.671576 6 44 7.3284241 44 9 L 44 41 C 44 42.671576 42.671576 44 41 44 L 9 44 C 7.3284241 44 6 42.671576 6 41 L 6 9 C 6 7.3284241 7.3284241 6 9 6 z M 26.042969 10 A 1.0001 1.0001 0 0 0 25.042969 10.998047 C 25.042969 10.998047 25.031984 15.873262 25.021484 20.759766 C 25.016184 23.203017 25.009799 25.64879 25.005859 27.490234 C 25.001922 29.331679 25 30.496833 25 30.59375 C 25 32.409009 23.351421 33.892578 21.472656 33.892578 C 19.608867 33.892578 18.121094 32.402853 18.121094 30.539062 C 18.121094 28.675273 19.608867 27.1875 21.472656 27.1875 C 21.535796 27.1875 21.663054 27.208245 21.880859 27.234375 A 1.0001 1.0001 0 0 0 23 26.240234 L 23 22.039062 A 1.0001 1.0001 0 0 0 22.0625 21.041016 C 21.906673 21.031216 21.710581 21.011719 21.472656 21.011719 C 16.223131 21.011719 11.945313 25.289537 11.945312 30.539062 C 11.945312 35.788589 16.223131 40.066406 21.472656 40.066406 C 26.72204 40.066409 31 35.788588 31 30.539062 L 31 21.490234 C 32.454611 22.653646 34.267517 23.390625 36.269531 23.390625 C 36.542588 23.390625 36.802305 23.374442 37.050781 23.351562 A 1.0001 1.0001 0 0 0 37.958984 22.355469 L 37.958984 17.685547 A 1.0001 1.0001 0 0 0 37.03125 16.6875 C 33.886609 16.461891 31.379838 14.012216 31.052734 10.896484 A 1.0001 1.0001 0 0 0 30.058594 10 L 26.042969 10 z M 27.041016 12 L 29.322266 12 C 30.049047 15.2987 32.626734 17.814404 35.958984 18.445312 L 35.958984 21.310547 C 33.820114 21.201935 31.941489 20.134948 30.835938 18.453125 A 1.0001 1.0001 0 0 0 29 19.003906 L 29 30.539062 C 29 34.707538 25.641273 38.066406 21.472656 38.066406 C 17.304181 38.066406 13.945312 34.707538 13.945312 30.539062 C 13.945312 26.538539 17.066083 23.363182 21 23.107422 L 21 25.283203 C 18.286416 25.535721 16.121094 27.762246 16.121094 30.539062 C 16.121094 33.483274 18.528445 35.892578 21.472656 35.892578 C 24.401892 35.892578 27 33.586491 27 30.59375 C 27 30.64267 27.001859 29.335571 27.005859 27.494141 C 27.009759 25.65271 27.016224 23.20692 27.021484 20.763672 C 27.030884 16.376775 27.039186 12.849206 27.041016 12 z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="grid  grid-cols-1 lg:grid-cols-2 place-items-center gap-4 mt-5 mb-5">
                @foreach ([
                    ['id' => 'third-party-removal', 'title' => 'Third-party Removal', 'description' => 'Remove a 3rd party and get your soulmate back', 'price' => '200$', 'img' => 'imgs/spells/3rd-removal.jpg'],
                    ['id' => 'binding', 'title' => 'Binding Spell', 'description' => 'Align them with your desires', 'price' => '200$', 'img' => 'imgs/spells/binding.jpg'],
                    ['id' => 'obsession-illusion', 'title' => 'Obsession Illusion Spell', 'description' => 'Help them focus solely on you', 'price' => '200$', 'img' => 'imgs/spells/3rd-removal.jpg'],
                    ['id' => 'obsession', 'title' => 'Obsession Spell', 'description' => 'Reignite the Spark', 'price' => '200$', 'img' => 'imgs/spells/love.png'],
                    ['id' => 'come-back', 'title' => 'Come Back To Me', 'description' => 'Reconciles lovers, friends, & family', 'price' => '175$', 'img' => 'imgs/spells/love.png'],
                    ['id' => 'domination', 'title' => 'Domination Spell', 'description' => 'Get what you want how you want it', 'price' => '250$', 'img' => 'imgs/spells/love.png'],
                    ['id' => 'expedite', 'title' => 'Expedite Any Spell', 'description' => 'Get your spell within 24 hours', 'price' => '100$', 'img' => 'imgs/spells/love.png'],
                    ['id' => 'custom-charm', 'title' => 'Custom Charm', 'description' => 'Available options: Protection, Cord Cutting, Good Luck Charm, Self Love Charm, Inner Peace, and Mental Wellness', 'price' => '100$', 'img' => 'imgs/spells/love.png'],
                ] as $spell)
                    <div class="w-11/12 h-64 text-white flex bg-black bg-opacity-60 rounded-xl">
                        <img class="w-6/12 h-full rounded-tl-xl rounded-bl-xl" src="{{asset($spell['img'])}}" />
                        <div class="ml-2 mt-2">
                            <p class="font-bold text-2xl">{{ $spell['title'] }}</p>
                            <p class="pr-0.5">{{ $spell['description'] }}</p>
                            <p>Price - {{ $spell['price'] }}</p>
                            <a href="{{ route('spell.form', ['spellName' => $spell['id']]) }}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mt-3 inline-block">
                                Order Now
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{route("terms-of-use")}}">
                <div class="w-full h-20 bg-opacity-10 bg-black flex items-center justify-center text-white rounded-lg">
                    Terms of use
                </div>
            </a>
        </div>
    </div>
@endsection
