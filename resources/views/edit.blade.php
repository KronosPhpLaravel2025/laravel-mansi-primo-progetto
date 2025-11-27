<x-main>
    <div class="container">
        <form action="/aggiorna-dati/{{$servizio['key']}}" method="POST">
           @csrf
           @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Chiave</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="key" placeholder="Inserisici una Chiave univoca" value="{{$servizio['key']}}">
        </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome del Servizio</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Inserisic un nome" value="{{$servizio['name']}}">
        </div>
       <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Icona</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="icon" placeholder="Immagine facoltativa" value="{{$servizio['icon']}}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-success">Aggiorna</button>

        </div>
    
    </form>
    </div>
</x-main>