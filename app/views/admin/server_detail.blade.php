@extends('admin.game')

@section('js_game')
<script type="text/javascript">
$("#server_box").show();
$("#server_attr_box").show();
</script>
@stop

@section('server_title')
Properties
@stop

@section('server_add_button')
<button type="button" class="close" onclick="location.href='/admin/server/new/<?php echo $data['game']['game_id']; ?>'"><span class="glyphicon glyphicon-plus"></span></button>
@stop

@section('server_edit_button')
<button type="button" class="close" onclick="location.href='/admin/server/modify/<?php echo $data['game']['game_id']; ?>/<?php echo $data['server']['server_id']; ?>'"><span class="glyphicon glyphicon-pencil"></span></button>
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

@section('server_attributes')
<form action="/admin/server/apply" method="get" >
	<div class="form-group">
		<label>ID</label>
		<input type="text" class="form-control" value="<?php echo $data['server']['server_id']; ?>" disabled />
		<input name="gameId" type="hidden" value="<?php echo $data['game']['game_id']; ?>" />
		<input name="serverId" type="hidden" value="<?php echo $data['server']['server_id']; ?>" />
	</div>
	<fieldset <?php echo $data['disabled']; ?>>
		<div class="form-group">
			<label>Name</label>
			<input name="serverName" type="text" class="form-control" value="<?php echo $data['server']['name']; ?>" />
		</div>
		<div class="checkbox">
			<label>
				<input name="serverIsActive" type="checkbox" <?php echo ($data['server']['is_active'] == 1) ? 'checked' : ''; ?>> Active
			</label>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</fieldset>
</form>
@stop