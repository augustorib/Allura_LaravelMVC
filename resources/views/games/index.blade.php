<x-layout title="Listar Jogos">

    @isset($mensagemSucesso)
        <div class="alert alert-success">{{$mensagemSucesso}}</div> 
    @endisset

    <ul class="list-group">
        @foreach ($games as $game)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$game->Name}}

                <span class="d-flex">
                    <a href="{{route('games.edit', $game->id)}}" class="btn btn-warning fw-bold mx-2">E</a>

                    <form action="{{route('games.destroy', $game->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger fw-bold" >X</button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>

    <div class="d-flex mt-2">
        <a href="{{route('games.create')}}" class="btn btn-primary ">Adicionar</a>

        <a href="{{route('games.index')}}" class="btn btn-secondary mx-2">Listar</a>
    </div>
</x-layout>