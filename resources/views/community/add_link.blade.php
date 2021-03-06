@auth
<div class="col-md-4">
	<div class="card">
		<div class="card-header">
			<h3>Contribute a Link</h3>					
		</div>
		<div class="card-body">
			<form method="POST" action="/community">
				@csrf
				<div class="form-group">
					<label for="title">Channel</label>
					<select class="form-control" name="channel_id">
						<option selected disabled>Pick a Channel</option>
						@foreach($channels as $channel)
							<option value="{{$channel->id}}" {{old('channel_id') == $channel->id ? 'selected' : ''}}>{{$channel->title}}</option>
						@endforeach
					</select>
					@error('channel_id')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Whats the title?" value="{{old('title')}}">
					@error('title')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group">
					<label for="link">Link</label>
					<input type="text" name="link" id="link" class="form-control @error('link') is-invalid @enderror" placeholder="Type in the url" value="{{old('link')}}">
					@error('link')
						<p class="text-danger">{{ $message }}</p>
					@enderror
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Contribute Link</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endauth
@guest
<div>
	<p>You need to sign in</p>
</div>
@endguest