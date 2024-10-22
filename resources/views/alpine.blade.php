


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Default Title' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body x-data :class="$store.darkMode.on && 'bg-black'">
    {{-- <div>
        <div x-data="{ open: false, test:'testtt'}">
            <button x-text="open ? 'Close' : 'Click Here'" x-on:click="open = !open"></button>
            <div>
                <span x-show="open">
                    <span>Content: <span x-text="test"></span></span>
                </span>
            </div>
        </div>
    </div> --}}

    <div x-data="dropdown">
        <button x-data @click="$store.darkMode.toggle()> Test </button>
     
        <div x-show="$store.open">Test for payment Stripe </div>
    </div>
    {{-- <button x-data @click="$store.darkMode.toggle()">Toggle Dark Mode</button> --}}
    @livewireScripts
</body>
</html>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('darkMode', {
            open: false,
 
            toggle() {
                this.open = ! this.open
            }
        })
    })
</script>
{{-- <script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('darkMode', {
            on: false,
 
            toggle() {
                this.on = ! this.on
            }
        })
    })
</script> --}}