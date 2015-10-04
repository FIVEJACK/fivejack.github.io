@extends('admin.game')

@section('js_game')
<script type="text/javascript">
$("#game_attr_box").show();
</script>
@stop

@section('game_title')
Add a New Game
@stop

@section('game_attributes')
<form action="/admin/game/add" method="get" >
	<div class="form-group">
		<label>ID</label>
		<input type="text" class="form-control" value="" disabled />
	</div>
	<div class="form-group">
		<label>Name</label>
		<input name="gameName" type="text" class="form-control" value="" />
	</div>
	<div class="form-group">
		<label>Code</label>
		<input name="gameCode" type="text" class="form-control" value="" />
	</div>
	<div class="checkbox">
		<label>
			<input name="gameIsActive" type="checkbox"> Active
		</label>
	</div>
	<button type="submit" class="btn btn-primary">Add</button>
</form>
@stop