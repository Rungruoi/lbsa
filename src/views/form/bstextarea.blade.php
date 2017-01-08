<div class="form-group">
	@if (isset($title))
	<label class="control-label">{{ $title }}</label>
	@endif

    <?php
    	$attrs = array('class' => 'form-control');
		if (isset($placeholder))
		{
			$attrs['placeholder'] = $placeholder;
		}
		if (isset($validation))
		{
			$attrs = array_merge_recursive($attrs, $validation);
		}
    ?>
    {{ Form::textarea($name, $value, $attrs) }}

    @if (isset($hin))
	    <div class="note">
	        {{ $hin }}
	    </div>
    @endif
    @if ($errors->has($name))
    	@foreach ($errors->get($name) as $error)
			<div class="note note-error">{{ $error }}</div>
		@endforeach
    @endif
</div>
