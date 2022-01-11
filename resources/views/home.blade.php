@extends('layouts.app')


@section('content')
<div class="container">
    <h1>
        My library
    </h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum doloremque nemo voluptatibus accusantium vel, consequuntur qui itaque iure. Repellat incidunt numquam earum architecto exercitationem quos odit quas accusamus adipisci cupiditate.</p>

    <section class="books">
        <h2>Our books</h2>
        @forelse ($books as $book)

            <div class="book">
                <h4>{{$book->title}}</h4>
                <div class="description">
                    <p>{{$book->plot}}</p>
                </div>
            </div>
            
        @empty
            
        @endforelse
    </section>
</div>
@endsection