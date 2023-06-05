<x-layout title="Listar Jogos">

    <ul class="list-group">
        @foreach ($games as $game)
            <li class="list-group-item d-flex justify-content-between align-items-center">{{$game->Name}}
                <form action="{{route('games.destroy', $game->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger fw-bold" >X</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{route('games.index')}}" class="btn btn-primary mt-2">Menu</a>
</x-layout>