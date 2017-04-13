@extends('main')

@section('title','Home')

 @section('content')
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
          <h1>Welcome to our Blog</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, sit quasi dolorem nesciunt consectetur quis molestiae voluptatem in similique, ipsa cumque aliquid officiis fugiat quidem neque ullam optio adipisci quibusdam?</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8"> <!-- posts -->
        
        @foreach($posts as $post)
         <div class="post">
            <h2>{{$post->title}}</h2>
            <p>{{substr($post->body, 0, 300)}}{{$post->body > 300 ? "...":""}}</p>

            <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">Read More</a>
        </div>
        <hr>   

        @endforeach
        <div class="text-center">
            {!! $posts->links() !!}
        </div> 
    </div>
    
    <div class="col-md-3 col-md-offset-1"> <!-- sidebar -->
        <div class="widget">
            <h2>Categories</h2>
            <ul>
                <li>Technology & Science</li>
                <li>Engineering</li>
                <li>Philosophy</li>
                <li>Languages</li>
                <li>Sport</li>
            </ul>
        </div>
    </div>
</div>
@endsection