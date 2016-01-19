
<link rel="stylesheet" type="http://localhost/SARA/text/css" media="screen" href="http://localhost/SARA/css/layout.css" />
<title>SARA :: Menu admin</title>
		<link rel="shortcut icon" type="image/x-icon" href="http://localhost/SARA/imagenes/u.ico" >
<style>
  p {
    color: white;
  }
  .paragraph1 {
    font-size: 35px;
      font-weight: bold;
  }
  
</style>

<p class="paragraph1">Usuarios</p>

<p><?php echo lang('index_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<table cellpadding=0 cellspacing=10>
	<tr>
		<th><?php echo lang('index_fname_th');?></th>
		<th><?php echo lang('index_lname_th');?></th>
		<th><?php echo lang('index_email_th');?></th>
        <th><?php echo ('Identificación');?></th>
		<th><?php echo ('Tipo');?></th>
		<th><?php echo lang('index_status_th');?></th>
		<th><?php echo lang('index_action_th');?></th>
	</tr>
	<?php foreach ($users as $user):?>
		<tr>
            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->company,ENT_QUOTES,'UTF-8');?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                <?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
			<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
		</tr>
	<?php endforeach;?>
</table>

<p>  <?php echo anchor('auth/mapa', 'Mapa')?> | <?php echo anchor('auth/estadistica', 'Estadísticas')?> | <?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/eliminar','Eliminar usuario')?> |  <?php echo anchor('auth/habilitar','Habilitar aula')?> | <?php echo anchor('auth/deshabilitar','Desabilitar aula')?> | <?php echo anchor('auth/logout', lang('index_logout'))?></p>