<x-layout title="Editando '{{$game->Name}}'" >
    <x-games.form
        :formAction="route('games.update', $game->id)"
        :gameName="$game->Name"
        :gameConsole="$game->Console"
        :gameYear="$game->Year"
    >
    </x-games.form>  
</x-layout>