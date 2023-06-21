<x-app-layout>
    <center>
        <div class="container">
            <div class="row">
                @foreach($Carros as $item)
                    <div class="col-4">
                        <br>
                        <div class="card" style="width: 18rem;">
                          <img src="{{$item -> url}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{$item -> titulo}}</strong></h5>
                                <p class="card-text">{{$item -> des}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </center>
</x-app-layout>
