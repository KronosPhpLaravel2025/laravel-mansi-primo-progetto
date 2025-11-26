<x-main>
    <div class="container">
        <form action="/salva-dati" method="POST">
           @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Chiave</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="key" placeholder="Inserisici una Chiave univoca">
        </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome del Servizio</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Inserisic un nome ">
        </div>
       <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Icona</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="icon" placeholder="Immagine facoltativa">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-success">Salva</button>

        </div>
    
    </form>
    </div>
</x-main>