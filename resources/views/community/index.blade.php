@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>Communities</h1>
				<ul class="links">
					@forelse($links as $link)
					<li class="links_link">
						<span class="badge badge-default" style="background-color: {{$link->channel->color}};">{{$link->channel->title}}</span>
						<a href="{{$link->link}}" target="_blank">{{$link->title}}</a>
						<small>Contributed by <a href="#">{{$link->user->name}}</a> {{$link->updated_at->diffForHumans()}}</small>
					</li>
					@empty
						<p>There is nothing to display at the moment</p>
					@endforelse
				</ul>
			</div>
			@include('community.add_link')
		</div>
	</div>
@endsection