<section>
	<label class="label">{{ $title }}</label>
    @if ($errors->has($name))
	<label class="textarea textarea-resizable state-error">
    else
	<label class="textarea textarea-resizable state-error">
    @endif								
		<textarea rows="3" class="custom-scroll" placeholder="{{ @$placeholder }}" name="{{ $name }}">{{ $value }}</textarea> 
	</label>
	<!-- <div class="note">
		<strong>Note:</strong> height of the textarea depends on the rows attribute.
	</div> -->
    @if ($errors->has($name))
    	@foreach ($errors->get($name) as $error)
			<div class="note note-error">{{ $error }}</div>
		@endforeach
    @endif
</section>