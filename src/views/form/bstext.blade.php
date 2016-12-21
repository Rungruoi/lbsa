<section>
    <label class="label">{{ $title }}</label>
    <label class="input 
    @if ($errors->has($name))
	state-error
	@endif
	">
	    
	    <?php
	    	$attrs = array('class' => 'form-control');
			if (isset($place_holder))
			{
				$attrs['placeholder'] = $place_holder;
			}
			if (isset($validation))
			{
				$attrs = array_merge_recursive($attrs, $validation);
			}
	    ?>
	    {{ Form::text($name, $value, $attrs) }}

    </label>

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
</section>