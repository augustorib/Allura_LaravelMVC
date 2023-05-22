<x-layout title="GameFlix">
    <form action="/games/store" method="post">
        @csrf
        <div class="col-md-3">
            <label for="name" class="col-form-label fw-bold">Nome: </label>
            <input type="text" name="gameName" id="name" class="form-control">
        </div>

        <div class="col-md-3">
            <label for="console" class="col-form-label fw-bold">Console: </label>
            <input type="text" name="gameConsole" id="console" class="form-control">
        </div>

        <div class="col-md-3">
            <label for="year" class="col-form-label fw-bold">Ano: </label>
            <input type="text" name="gameYear" id="year" class="form-control">
        </div>

        <div class="mt-2">
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
        
    </form>
</x-layout>