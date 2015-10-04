@extends('admin.game')

@section('js_game')
<script type="text/javascript">
$("#game_attr_box").show();
$("#server_box").show();
</script>
@stop

@section('game_title')
Properties
@stop

@section('game_button')
<button type="button" class="close" onclick="location.href='/admin/game/modify/<?php echo $data['game']['game_id']; ?>'"><span class="glyphicon glyphicon-pencil"></span></button>
@stop

@section('game_attributes')
<form action="/admin/game/apply" method="get" >
	<div class="form-group">
		<label>ID</label>
		<input type="text" class="form-control" value="<?php echo $data['game']['game_id']; ?>" disabled />
		<input name="gameId" type="hidden" value="<?php echo $data['game']['game_id']; ?>" />
	</div>
	<fieldset <?php echo $data['disabled']; ?>>
		<div class="form-group">
			<label>Name</label>
			<input name="gameName" type="text" class="form-control" value="<?php echo $data['game']['name']; ?>" />
		</div>
		<div class="form-group">
			<label>Code</label>
			<input name="gameCode" type="text" class="form-control" value="<?php echo $data['game']['code']; ?>" />
		</div>
		<div class="checkbox">
			<label>
				<input name="gameIsActive" type="checkbox" <?php echo ($data['game']['is_active'] == 1) ? 'checked' : ''; ?>> Active
			</label>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</fieldset>
</form>
@stop

@section('server_add_button')
<button type="button" class="close" onclick="location.href='/admin/server/new/<?php echo $data['game']['game_id']; ?>'"><span class="glyphicon glyphicon-plus"></span></button>
@stop

@section('server_list')
<label>Game Name</label>
<?php echo $data['game']['name']; ?>
<ul class="list-group">
<?php
	foreach ($data['servers'] as $server)
	{
?>
			<li class="list-group-item list-group-item-<?php echo ($server['is_active'] == 1) ? 'success' : 'danger'; ?>">
				<?php echo $server['name']; ?>
				<button type="button" class="close" onclick='confirmDeleteServer(<?php echo $data['game']['game_id']; ?>, <?php echo $server['server_id']; ?>)'><span class="glyphicon glyphicon-remove"></span></button>
				<button type="button" class="close" onclick="location.href='/admin/server/view/<?php echo $data['game']['game_id']; ?>/<?php echo $server['server_id']; ?>'"><span class="glyphicon glyphicon-search"></span></button>
			</li>
<?php
	}
?>
</ul>
@stop