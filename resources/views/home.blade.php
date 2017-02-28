@extends('layouts.app')

@section('content')
    <div class="header">
        <img id="left-img" src="{{ "img/header/truck-left.png" }}" alt="">
        <img id="right-img" src="{{ "img/header/truck.png" }}" alt="">
        <div class="container">
          <div class="col-md-12 text-center" id="header-text">
              <h1> Pro oratio persius ne, ne has porro veniam evertitur</h1>
              <h4>Pri homero adipisci facilisis cu. Mel docendi gubergren ex</h4>
          </div>
        </div>
    </div>
    <div class="body">
        <img src="{{ "img/body/textura.jpg" }}" alt="">
        <div class="container">
            <div class="col-md-6 text-center choice">
                <div class="choice-body">
                    <div class="choice-img">
                        <img src="{{asset("img/body/office.jpg")}}" alt="">
                    </div>
                    <div class="choice-text">
                        <h3>Nonumy noster viderer</h3>
                        <p>An dolor quaerendum vim. Augue voluptatum contentiones est eu</p>
                        <p>Vis cu quas menandri honestatis</p>
                        <a href="" class="btn">Augue</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center choice">
                <div class="choice-body">
                    <div class="choice-img">
                        <img src="{{asset("img/body/odvoz.jpg")}}" alt="">
                    </div>
                    <div class="choice-text">
                        <h3>Nonumy noster viderer</h3>
                        <p>An dolor quaerendum vim. Augue voluptatum contentiones est eu</p>
                        <p>Vis cu quas menandri honestatis</p>
                        <a href="" class="btn">Augue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
