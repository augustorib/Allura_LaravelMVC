<x-layout title="Listar Jogos">
    <ul class="list-group">
        @foreach ($games as $game)
            <li class="list-group-item">{{$game->Name}}</li>
        @endforeach
    </ul>
</x-layout>