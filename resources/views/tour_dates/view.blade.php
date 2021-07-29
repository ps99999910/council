<x-guest-layout>

    <section class="py-8 max-w-md mx-auto">
        <h1 class="text-lg font-bold mb-4">
            2020/21 VSA School Tour Booking System (Year 1 admissions)
        </h1>
        <x-panel>
            <form method="POST" action="/booking/store">
                @csrf
                <input class="border border-gray-400 p-2 w-full"
                       type="text"
                       name="year"
                       id="year"
                       value="2021"
                       required
                       hidden
                >

                <input class="border border-gray-400 p-2 w-full"
                       type="text"
                       name="pos_code"
                       id="pos_code"
                       value="P"
                       required
                       hidden
                >
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="student_name"
                    >
                        Name of student
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="student_name"
                           id="student_name"
                           value="{{ old('student_name') }}"
                           required
                    >

                    @error('student_name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="email"
                           id="email"
                           value="{{ old('email') }}"
                           requiredx
                    >

                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="mobile"
                    >
                        Parent's Mobile
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="mobile"
                           id="mobile"
                           value="{{ old('mobile') }}"
                           required
                    >

                    @error('mobile')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="kindergarten"
                    >
                        Name of Kindergarten
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="kindergarten"
                           id="kindergarten"
                           value="{{ old('kindergarten') }}"
                           required
                    >

                    @error('kindergarten')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="class_attend"
                    >
                        Class
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="class_attend"
                           id="class_attend"
                           value="{{ old('class_attend') }}"
                           required
                    >

                    @error('class_attend')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>



                <x-label>
        view tour dates


            <select name="tour_date" id="tour_date">
                @if ($tourDates->count())

                     @foreach ($tourDates as $td)
                        <option
                            value="{{ $td->tour_date }}"
                            {{ old('tour_date') == $td->tour_date ? 'selected' : '' }}
                        >{{ $td->tour_date }}</option>
                    @endforeach
                @endif

            </select>

        </x-label>
                <x-submit-button>Submit</x-submit-button>
            </form>
        </x-panel>
    </section>
</x-guest-layout>
