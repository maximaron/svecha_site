@extends('layouts.app')

@section('content')
    <div class="bg-gradient-to-b from-red-400 to-red-500 w-full p-20 h-full lg:h-screen font-lobster flex items-center justify-center">
        <div class="lg:flex content-center">
            <div class="text-center">
                @switch($spellName)
                    @case('third-party-removal')
                        <p class="text-2xl">Third party removal spell</p>
                        <img class="mx-auto lg:h-96 rounded-md flex mt-10" src="{{asset('imgs/spells/3rd-removal.jpg')}}" />
                        <p class="mt-2 text-2xl">This spell helps to remove unwanted third parties from your life.</p>
                        @break
                    @case('binding')
                        <p class="text-2xl">Binding spell</p>
                        <img class="mx-auto lg:h-96 rounded-md flex mt-10" src="{{asset('imgs/spells/binding.jpg')}}" />
                        <p class="mt-2 text-2xl">This spell binds someone to you, ensuring their loyalty.</p>
                        @break
                    @case('obsession-illusion')
                        <p class="text-2xl">Obsession illusion spell</p>
                        <img class="mx-auto lg:h-96 rounded-md flex mt-10" src="{{asset('imgs/spells/illusion.png')}}" />
                        <p class="mt-2 text-2xl">This spell creates an illusion of obsession in someone's mind.</p>
                        @break
                    @case('obsession')
                        <p class="text-2xl">Obsession spell</p>
                        <img class="mx-auto lg:h-96 rounded-md flex mt-10" src="{{asset('imgs/spells/spark.png')}}" />
                        <p class="mt-2 text-2xl">This spell makes someone obsess over you.</p>
                        @break
                    @case('come-back')
                        <p class="text-2xl">Come back to me spell</p>
                        <img class="mx-auto lg:h-96 rounded-md flex mt-10" src="{{asset('imgs/spells/come_back.png')}}" />
                        <p class="mt-2 text-2xl">This spell helps to bring someone back into your life.</p>
                        @break
                    @case('domination')
                        <p class="text-2xl">Domination spell</p>
                        <img class="mx-auto lg:h-96 rounded-md flex mt-10" src="{{asset('imgs/spells/domination.png')}}" />
                        <p class="mt-2 text-2xl">This spell allows you to dominate someone's will.</p>
                        @break
                    @case('expedite')
                        <p class="text-2xl">Expedite any spell</p>
                        <img class="mx-auto lg:h-96 rounded-md flex mt-10" src="{{asset('imgs/spells/magic.png')}}" />
                        <p class="mt-2 text-2xl">This spell expedites the effects of any other spell.</p>
                        @break
                    @case('custom-charm')
                        <p class="text-2xl">Custom charm spell</p>
                        <img class="mx-auto lg:h-96 rounded-md flex mt-10" src="{{asset('imgs/spells/custom.png')}}" />
                        <p class="mt-2 text-2xl">This spell is a custom charm tailored to your needs.</p>
                        @break
                @endswitch
            </div>
            <div class="flex justify-center mt-4 lg:mt-0">
                <form class="mx-auto" method="POST" action="{{ route('spell.first_info_add') }}">
                    @csrf
                    <div class="p-5 lg:w-96 w-72 bg-white rounded-xl lg:ml-20">
                        <p class="font-bold">Basic information</p>
                        @if ($errors->any())
                            <div class="bg-red-500 text-white p-3 rounded mb-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="mt-5">
                            <input placeholder="Enter your name" type="text" id="name" name="name" required minlength="4" maxlength="20" class="w-full rounded-md h-12 @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                            @error('name')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                            <input placeholder="Enter your email" type="email" id="email" name="email" required class="w-full rounded-md h-12 mt-2 @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                            @error('email')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                            <input placeholder="Your specific person firstname" type="text" id="specific_person" name="specific_person" required class="w-full rounded-md h-12 mt-2 @error('specific_person') border-red-500 @enderror" value="{{ old('specific_person') }}">
                            @error('specific_person')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                            @if($spellName === 'third-party-removal')
                                <input placeholder="Third parties firstname" type="text" id="third_part" name="third_part" class="w-full rounded-md h-12 mt-2 @error('third_part') border-red-500 @enderror" value="{{ old('third_part') }}">
                                @error('third_part')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            @endif
                            <div class="mt-2">
                                <textarea id="going_on" name="going_on" class="w-full p-3 border rounded @error('going_on') border-red-500 @enderror" rows="2" required placeholder="Please add a brief description what's going on">{{ old('going_on') }}</textarea>
                                @error('going_on')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <textarea id="previous_contact" name="previous_contact" class="w-full p-3 border h-40 rounded @error('previous_contact') border-red-500 @enderror" required rows="2" placeholder="If we spoke over DMs on TikTok or Instagram? If so please share your @ and the platform you contacted me on so I can easily locate your messages">{{ old('previous_contact') }}</textarea>
                                @error('previous_contact')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mt-3">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
