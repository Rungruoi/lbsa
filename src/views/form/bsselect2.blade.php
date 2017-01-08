<section>
	@if (isset($title))
	<label>{{ $title }}</label>
	@endif
	<select style="width:100%" class="select2" name="{{ $name }}">
    	@foreach ($items as $item)
    		<option value="{{ $item['value'] }}" {{ ($item['value'] == $value) ? "selected" : "" }}>{{ $item['name'] }}</option>
    	@endforeach
	</select>
</section>