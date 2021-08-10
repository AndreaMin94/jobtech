@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-12 col-md-6 text-left my-auto align-items-center">
            <h1 class="mb-2 text-accent font-weight-bold">
                Benvenuto in Quotation Manager
            </h1>
            <p class="font-weight-light">Il tuo sistema personalizzato di gestione dei preventivi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis nihil laudantium rem aperiam eaque odit nobis consequatur quo blanditiis quae a et sint debitis perspiciatis ullam, aliquid mollitia laborum. Similique?</p>
        </div>
        <div class="col-12 col-md-6">
            <img src="/img/home-pic1.png" alt="" class="img-fluid">
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-6">
            <img src="/img/home-pic2.png" alt="" class="img-fluid">
        </div>
        <div class="col-12 col-md-6 text-left">
            <h2 class="font-weight-bold text-accent">Gestisci i tuoi preventivi</h2>
            <ul class="mr-3 my-3">
                <li>
                    <h4 class="font-weight-bold">
                        Crea 
                    </h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut debitis aspernatur
                    </p>
                </li>
                <li>
                    <h4 class="font-weight-bold">
                        Aggiorna 
                    </h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut debitis aspernatur
                    </p>
                </li>
                <li>
                    <h4 class="font-weight-bold">
                        Gestisci 
                    </h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut debitis aspernatur
                    </p>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="card rounded">
                <div class="card-body">
                  <h3 class="card-title text-center font-weight-bold mb-4">Basic</h3>
                  <h5 class="card-subtitle mb-2">Funzionalità</h5>
                  <ul>
                      <li>Fun 1</li>
                      <li>Fun 2</li>
                  </ul>
                  <h3 class="text-center font-weight-bold">€ 29.90</h3>
                  <a href="#" class="card-link btn btn--secondary px-3">Abbonati</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card rounded border--secondary">
                <div class="card-body">
                  <h3 class="card-title text-center font-weight-bold">Middle</h3>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card rounded">
                <div class="card-body">
                  <h3 class="card-title text-center font-weight-bold">Advanced</h3>
                  <h6 class="card-subtitle mb-2 text-muted">Funzionalità</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
