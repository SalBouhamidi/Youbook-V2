@extends('layout')
@section('content')

<button type="button" class="btn btn-primary mt-5 fw-bold text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
Add new Book
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add new book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route ('create')}}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="nom" class="form-control" >
             </div>

            <div class="mb-3">
                <label class="form-label">Author's name</label>
                <input type="text" name="auteur" class="form-control" >
            </div>

            <div class="mb-3">
                <label class="form-label">Edition</label>
                <input type="text" name="edition" class="form-control">
            </div>

            <div class="mb-3">
                <label  class="form-label">Book description</label>
                <input type="text" name="description" class="form-control" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Disponible</label>
                <select name="disponibilité">
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
            </div>
        <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
        </form>
      </div>
   
    </div>
  </div>
</div>

<div class="d-flex justify-content-center">
    <h3 class="mt-5 text-decoration-underline">Avialable books</h3>
</div>
<section class="d-flex justify-content-between  flex-wrap mt-4 w-100">
  @foreach($books as $book)
    <div class="card bg-dark w-25 px-5 me-3 mb-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title fw-bold text-light">{{$book->nom}}</h5>
            <p class="card-text text-light">{{$book->description}}</p>
            <a href="#" class="btn btn-info text-secondary fw-bold">Booking this Book</a>
          <div class="mt-2">
              <form action="{{route('delete.book',$book->id)}}" method="post">
                @csrf
                @method('DELETE')
                  <button  class="btn btn-danger me-2">Delete</button>
              </form>

              <button type="button" class="btn btn-success mt-5 fw-bold text-light" data-bs-toggle="modal" data-bs-target="#exampleModal{{$book->id}}">
                   Edit
              </button>
          </div>      
        </div>        
    </div>



    <div class="modal fade" id="exampleModal{{$book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route ('update',$book->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="nom" value="{{$book->nom}}" class="form-control" >
             </div>

            <div class="mb-3">
                <label class="form-label">Author's name</label>
                <input type="text" name="auteur" value="{{$book->auteur}}"  class="form-control" >
            </div>

            <div class="mb-3">
                <label class="form-label">Edition</label>
                <input type="text" name="edition" value="{{$book->edition}}" class="form-control">
            </div>

            <div class="mb-3">
                <label  class="form-label">Book description</label>
                <input type="text" name="description" value="{{$book->description}}" class="form-control" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Disponible</label>
                <select name="disponibilité" >
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
            </div>
        <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
        </form>
      </div>
   
    </div>
  </div>
</div>


@endforeach

</section>

@endsection