<!-- <h1>heeeeeeeeeeeeeey</h1> -->
@extends('layout')
@section('content')

<div class="d-flex justify-content-center">
    <h3 class="mt-5 text-decoration-underline">Books</h3>
</div>

<div>
    <a href="{{route ('mybooks')}}" class="btn btn-info text-secondary fw-bold">My reserved books</a>
</div>

<section class="d-flex justify-content-between  flex-wrap mt-4 w-100">
  @foreach($books as $book)
    <div class="card bg-dark w-25 px-5 me-3 mb-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title fw-bold text-light">{{$book->nom}}</h5>
            <p class="card-text text-light">{{$book->description}}</p>
<!-- 
            <form action="{{route('reserve.book',$book->id)}}" method="post">
              @csrf
              @method('POST')
                 <button class="btn btn-info text-secondary fw-bold ">Booking this Book</button>
                 </form> -->
                    <!-- <button type="button" class="btn btn-info text-secondary fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    return this book
                    </button> -->

                <button type="button" class="btn btn-info text-secondary fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Booking this book
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Reserving This book</h1>
                        <button type="button" class="btn-close btn btn-info text-secondary fw-bold" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('reserve.book',$book->id)}}" method="post">
                            @csrf
                            @method('POST')
                                <div class="mb-3">
                                    <label class="form-label">Starting date</label>
                                    <input type="date" name="start_date" class="form-control" >
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Returning date</label>
                                    <input type="date" name="end_date" class="form-control" >
                                </div>
                            <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
          @endforeach


                 

                
</section>



@endsection