<div>
    @php($languages = ['en' => 'English', 'ru' => 'Russian', 'tm' => 'Turkmen'])
    <div data-lazy="true" class="main-container" x-data="{open:false}">
        <!-- Your main content here -->
        <button type="button" x-on:click="open = !open" class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            <img src="{{asset('flags/'.Session::get('locale', 'en').'-flag.png')}}" alt="english"  class="h-6 aspect-square rounded-full me-2">
            {{ $languages[Session::get('locale', 'en')] }} <span class="uppercase ml-1"> ({{Session::get('locale', 'en')}}) </span> 
            {{-- 
            <div>Language: {{ $languages[Session::get('locale', 'en')] }}</div> --}}
        </button>
        <!-- Dropdown -->
        <div x-show="open" x-on:click.outside="open = false" class="absolute z-50  my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700" id="language-dropdown-menu">
            <ul class="py-2 font-medium" role="none">
                <li>
                    <a href="{{route('change.lang', ['lang' => 'en'])}}" wire:navigate class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                        <div class="inline-flex items-center">
                        <img src="{{asset('flags/en-flag.png')}}" alt="russian"  class="h-6 aspect-square rounded-full me-2">
                        English (US)
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('change.lang', ['lang' => 'ru'])}}" wire:navigate class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                        <div class="inline-flex items-center">
                        <img src="{{asset('flags/ru-flag.png')}}" alt="russian"  class="h-6 aspect-square rounded-full me-2">
                        Русский (RU)
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('change.lang', ['lang' => 'tm'])}}" wire:navigate class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                        <div class="inline-flex items-center">
                        <img src="{{asset('flags/tm-flag.png')}}" alt="russian"  class="h-6 aspect-square rounded-full me-2">
                        Türkmen (TM)
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>