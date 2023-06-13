<form action="{{$formAction}}" method="post">
    @csrf

    @isset($gameName)
        @method('PUT')
    @endisset
    <div class="col-md-3">
        <label for="name" class="col-form-label fw-bold">Nome: </label>
        <input type="text" name="gameName" id="name" class="form-control" 
        @isset($gameName)
            value="{{$gameName}}"
        @endisset>
    </div>

    <div class="col-md-3">
        <label for="console" class="col-form-label fw-bold">Console: </label>
        <input type="text" name="gameConsole" id="console" class="form-control"
        @isset($gameConsole)
            value="{{$gameConsole}}"
        @endisset>
    </div>

    <div class="col-md-3">
        <label for="year" class="col-form-label fw-bold">Ano: </label>
        <input type="text" name="gameYear" id="year" class="form-control"
        @isset($gameYear)
         value="{{$gameYear}}"
        @endisset>
    </div>

   <div class="row d-flex">
        <div class="mt-2 col-md-2">
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
        <div class="mt-2 col-md-2">
            <a href="{{route('games.index')}}" class="btn btn-secondary">listar</a>
        </div>
    </div> 
</form>
