@extends('layouts.app')

@section('content')
    <div class="bg-gradient-to-b from-red-400 to-red-500 w-full p-20 h-full lg:h-screen font-lobster flex items-center justify-center">
        <div class="lg:flex content-center">
            <div class="text-center">
                @switch($spellName)
                    @case('energy-cleansing')
                        <p class="text-2xl">Energy Cleansing</p>
                        <img class="mx-auto lg:h-96 rounded-md flex mt-10" src="{{asset('imgs/spells/3rd-removal.png')}}" />
                        <p class="mt-2 text-2xl">Helps to clear away negative influences and restore balance.</p>
                        @break
                    @case('harmony-alignment')
                        <p class="text-2xl">Harmony Alignment</p>
                        <img class="mx-auto lg:h-96 rounded-md flex mt-10" src="{{asset('imgs/spells/binding.jpg')}}" />
                        <p class="mt-2 text-2xl">Supports building stronger connections and mutual understanding.</p>
                        @break
                    @case('focus-enhancement')
                        <p class="text-2xl">Focus Enhancement</p>
                        <img class="mx-auto lg:h-96 rounded-md flex mt-10" src="{{asset('imgs/spells/illusion.png')}}" />
                        <p class="mt-2 text-2xl">Aids in channeling focus and clarity toward a specific goal.</p>
                        @break
                    @case('relationship-renewal')
                        <p class="text-2xl">Relationship Renewal</p>
                        <img class="mx-auto lg:h-96 rounded-md flex mt-10" src="{{asset('imgs/spells/spark.png')}}" />
                        <p class="mt-2 text-2xl">Reignites emotional connections and strengthens relationships.</p>
                        @break
                    @case('reconnection')
                        <p class="text-2xl">Reconnection</p>
                        <img class="mx-auto lg:h-96 rounded-md flex mt-10" src="{{asset('imgs/spells/come_back.png')}}" />
                        <p class="mt-2 text-2xl">Helps to rebuild bridges and restore meaningful relationships.</p>
                        @break
                    @case('confidence-boost')
                        <p class="text-2xl">Confidence Boost</p>
                        <img class="mx-auto lg:h-96 rounded-md flex mt-10" src="{{asset('imgs/spells/domination.png')}}" />
                        <p class="mt-2 text-2xl">Empowers you to take control and achieve your goals.</p>
                        @break
                    @case('quick-resolution')
                        <p class="text-2xl">Quick Resolution</p>
                        <img class="mx-auto lg:h-96 rounded-md flex mt-10" src="{{asset('imgs/spells/magic.png')}}" />
                        <p class="mt-2 text-2xl">Speeds up results to bring faster clarity and outcomes.</p>
                        @break
                    @case('customized-charm')
                        <p class="text-2xl">Customized Charm</p>
                        <img class="mx-auto lg:h-96 rounded-md flex mt-10" src="{{asset('imgs/spells/custom.png')}}" />
                        <p class="mt-2 text-2xl">A personalized charm tailored to your specific needs.</p>
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
