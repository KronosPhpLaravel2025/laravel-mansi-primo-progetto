<div class="list-group">
  <a href="/dettaglio-servizio/{{$servizio['key']}}" class="list-group-item list-group-item-action " aria-current="true">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{ $servizio['name'] }}</h5> 
      <form action="/cancella-servizio/{{$servizio['key']}}" method="POST">
        @method('delete')
        @csrf
          <button type="submit" class="btn btn-danger">Elimina</button>  
      </form>
    </div>  
  </a>
</div>