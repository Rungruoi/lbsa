<section>
	{{ Form::label($title, null, ['class' => 'label']) }}
	<label class="input">
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
</section>
