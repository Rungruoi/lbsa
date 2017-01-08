<div class="form-group">
	@if (isset($title))
	<label class="control-label">{{ $title }}</label>
	@endif
	<select style="width:100%" class="form-control" name="{{ $name }}">
    	@foreach ($items as $item)
    		<option value="{{ $item['value'] }}" {{ ($item['value'] == $value) ? "selected" : "" }}>{{ $item['name'] }}</option>
    	@endforeach
	</select>
</div>
