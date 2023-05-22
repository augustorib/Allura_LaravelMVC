<x-layout title="GameFlix">
    <ul class="list-group">
        @foreach ($games as $game)
            <li class="list-group-item">{{$game}}</li> 
        @endforeach  
    </ul>

    <a href="/games/create" class="btn btn-primary mt-2">Adicionar Jogo</a>
</x-layout>
