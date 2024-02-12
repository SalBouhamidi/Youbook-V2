<h1>heey</h1>

<!-- <h1>heeeeeeeeeeeeeey</h1> -->
@extends('layout')
@section('content')

<div class="d-flex justify-content-center">
    <h3 class="mt-5 text-decoration-underline">Books</h3>
</div>

<section class="d-flex justify-content-between  flex-wrap mt-4 w-100">
  @foreach($reservedbooks as $book)
    <div class="card bg-dark w-25 px-5 me-3 mb-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title fw-bold text-light">{{$book->nom}}</h5>
            <p class="card-text text-light">{{$book->description}}</p>
        </div>
    </div>
          @endforeach


                 

                
</section>



@endsection