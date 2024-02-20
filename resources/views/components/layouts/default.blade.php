<main>
    @livewireStyles
    <header>
        <h2>Header</h2>
    </header>
    {{ $slot }} <!-- Here will go all content of pages that we are going to render -->
    @livewireScripts
</main>
