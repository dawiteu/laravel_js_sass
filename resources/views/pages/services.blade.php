@extends('layouts.index')


@section('content')
    <img src="https://dummyimage.com/1200x300/b0b0b0/fff&text=CS16" alt="cs 16 les bgss" class='img-fluid'>

    <div class="row my-5">
        <div class="col-4">
            <div class="card mx-auto" style="width: 18rem;">
                <img src={{asset('img/cbr1.jpeg')}} class="card-img-top" alt="cbr.">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        <div class="col-4">
            <div class="card mx-auto" style="width: 18rem;">
                <img src={{asset('img/cbr1.jpeg')}} class="card-img-top" alt="br.">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        <div class="col-4">
            <div class="card mx-auto" style="width: 18rem;">
                <img src={{asset('img/cbr1.jpeg')}} class="card-img-top" alt="cbr bg">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
    </div>
@endsection

