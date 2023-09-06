<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Are you doctor ? So please update your profile') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your doctor account's profile information") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('apply.doctor.profile') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="fname" :value="__('First Name')"/>
            <x-text-input id="fname" name="fname" type="text" class="mt-1 block w-full"
                          :value="old('fname', $user->name)"
                          required autofocus autocomplete="name"/>
            <x-input-error class="mt-2" :messages="$errors->get('fname')"/>
        </div>
        <div>
            <x-input-label for="mname" :value="__('Middle Name')"/>
            <x-text-input id="mname" name="mname" type="text" class="mt-1 block w-full" :value="old('mname')"
                           autofocus autocomplete="mname"/>
            <x-input-error class="mt-2" :messages="$errors->get('mname')"/>
        </div>
        <div>
            <x-input-label for="lname" :value="__('Last Name')"/>
            <x-text-input id="lname" name="lname" type="text" class="mt-1 block w-full" :value="old('lname')"
                          required autofocus autocomplete="lname"/>
            <x-input-error class="mt-2" :messages="$errors->get('lname')"/>
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                          :value="old('email', $user->email)" required autocomplete="username"/>
            <x-input-error class="mt-2" :messages="$errors->get('email')"/>
        </div>
        <div>
            <x-input-label for="phone" :value="__('Phone')"/>
            <x-text-input id="phone" name="phone" type="number" class="mt-1 block w-full" :value="old('phone')"
                          required autofocus autocomplete="phone"/>
            <x-input-error class="mt-2" :messages="$errors->get('phone')"/>
        </div>
        <div>
            <x-input-label for="avatar" :value="__('Photo')"/>
            <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full" :value="old('avatar')"
                          required autofocus autocomplete="avatar"/>
            <x-input-error class="mt-2" :messages="$errors->get('avatar')"/>
        </div>

        <div>
            <x-input-label for="year_of_experience" :value="__('Year Of Experience')"/>
            <x-text-input id="year_of_experience" name="year_of_experience" type="text" class="mt-1 block w-full" :value="old('year_of_experience')"
                          required autofocus autocomplete="year_of_experience"/>
            <x-input-error class="mt-2" :messages="$errors->get('year_of_experience')"/>
        </div>
        <div>
            <x-input-label for="year_of_experience" :value="__('Available Schedule Time')"/>
            <x-text-input id="available_schedule_time" name="available_schedule_time" type="text" class="mt-1 block w-full" :value="old('available_schedule_time')"
                          required autofocus autocomplete="available_schedule_time" placeholder="Example: 9am-5pm" />
            <x-input-error class="mt-2" :messages="$errors->get('available_schedule_time')"/>
        </div>
        <div>
            <x-input-label for="fee" :value="__('Fee')"/>
            <x-text-input id="fee" name="fee" type="number" class="mt-1 block w-full" :value="old('fee')"
                          required autofocus autocomplete="fee" placeholder="Example: 700" />
            <x-input-error class="mt-2" :messages="$errors->get('fee')"/>
        </div>


        <div>
            <x-input-label for="about" :value="__('Describe Your Self')"/>
            <x-form-textarea id="about" name="about" :rows="10" > Write here you about </x-form-textarea>
            <x-input-error class="mt-2" :messages="$errors->get('about')"/>
        </div>

        <div>
            <x-input-label for="qualification" :value="__('Describe Your Qualification')"/>
            <x-form-textarea id="qualification" name="qualification" :rows="10" > Write here you Qualification </x-form-textarea>
            <x-input-error class="mt-2" :messages="$errors->get('qualification')"/>
        </div>

        <div>
            <x-input-label for="chamber" :value="__('Chamber Location')"/>
            <x-form-textarea id="chamber" name="chamber" :rows="3" > Write here you chamber location </x-form-textarea>
            <x-input-error class="mt-2" :messages="$errors->get('chamber')"/>
        </div>



    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification"
                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            </div>
            @endif
            </div>
            <br>
            <br>
            <br>
            <div class="flex items-center gap-4">

                <x-primary-button>{{ __('Save') }}</x-primary-button>

                @if (session('status') === 'profile-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400"
                    >{{ __('Saved.') }}</p>
                @endif
            </div>
    </form>
</section>
