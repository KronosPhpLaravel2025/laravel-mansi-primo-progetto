<x-main>
 
 <h2>Lista dei miei servizi </h2> <a href="/crea-servizio" class="btn btn-success">Nuovo Servizio</a>

 <div class="container">
  @foreach ($servizi as $servizio)
    <x-card :$servizio></x-card>
  @endforeach 
 </div>
 
</x-main>
