<legend>
	Select 2
</legend>

<div class="form-group">
	<label>{{ $title }}</label>
	<select style="width:100%" class="select2" name="{{ $name }}">
    	@foreach ($items as $item)
    		<option value="{{ $item['value'] }}" {{ ($item['value'] == $value) ? "selected" : "" }}>{{ $item['name'] }}</option>
    	@endforeach
	</select>
</div>
