@extends('template.base')

@section('title')
Games - Configuration
@stop

@section('css_import')
<link rel="stylesheet" type="text/css" href="{{{ Config::get('constant.RESOURCE_URL') . 'css/admin.css' }}}">
@stop

@section('js')
<script type="text/javascript">
function confirmDeleteGame(gameId)
{
	if (confirm("Are you sure to delete the game?"))
		location.href = '/admin/game/delete/' + gameId;
}
</script>

<script type="text/javascript">
function confirmDeleteServer(gameId, serverId)
{
	if (confirm("Are you sure to delete the server?"))
		location.href = '/admin/server/delete/' + gameId + '/' + serverId;
}
</script>
@stop

@section('main')
<div class="row">
	<div class="col-sm-4">
		<div class="page-header">
			<span style="font-size:20px;">Games</span>
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="location.href='/admin/game/new'"><span class="glyphicon glyphicon-plus"></span></button>
		</div>
		<ul class="list-group">
<?php
	foreach ($data['games'] as $game)
	{
?>
			<li class="list-group-item list-group-item-<?php echo ($game['is_active'] == 1) ? 'success' : 'danger'; ?>">
				<?php echo $game['name']; ?>
				<button type="button" class="close" onclick='confirmDeleteGame(<?php echo $game['game_id']; ?>)'><span class="glyphicon glyphicon-remove"></span></button>
				<button type="button" class="close" onclick="location.href='/admin/game/view/<?php echo $game['game_id']; ?>'"><span class="glyphicon glyphicon-search"></span></button>
			</li>
<?php
	}
?>
		</ul>
	</div>
	<div id="game_attr_box" class="col-sm-4" style="display:none">
		<div class="page-header">
			<span style="font-size:20px;">@yield('game_title')</span>
			@yield('game_button')
		</div>
		@yield('game_attributes')
	</div>
	<div id="server_box" class="col-sm-4" style="display:none">
		<div class="page-header">
			<span style="font-size:20px;">Servers</span>
			@yield('server_add_button')
		</div>
		@yield('server_list')
	</div>
	<div id="server_attr_box" class="col-sm-4" style="display:none">
		<div class="page-header">
			<span style="font-size:20px;">@yield('server_title')</span>
			@yield('server_edit_button')
		</div>
		@yield('server_attributes')
	</div>
</div>
@yield('js_game')
@stop