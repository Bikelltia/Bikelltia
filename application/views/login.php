<html>
<?php $this->load->helper('form');echo form_open("login/usuario");?>
<div style="background-color:#222;height:100%;width:100%;">
<div style="height:150px;">
	
</div>
<div id="login-form" style="" 								>
	<form>
		<div style="padding: 10px 20px; text-align:center;">
			<h3>Iniciar Sesion</h3>
		</div>
		<div class="input-text" id="usuario">
		<?php echo form_error('usuario'); ?>
			<div class="input-group" style="border: 1px solid #e0e0e0; width:318px; height:34px;">						
				<span class="input-group-addon" >
					<i class="fa fa-user"></i>
				</span>				
				<input name="usuario" value="<?php echo set_value('usuario'); ?>" required onfocus="foco('usuario');" onblur="noFoco('usuario');" class="form-control" type="text" placeholder="Usuario" style="border:0px solid #fff; box-shadow:none; padding:6px 12px; margin:0; display: table-cell; width:100%; height:100%;">
			</div>
		</div>
		<div class="input-text" id="contrasena">
			<div class="input-group" style="border: 1px solid #e0e0e0; width:318px; height:34px;">
				<span class="input-group-addon">
					<i class="fa fa-key"></i>
				</span>
				<?php echo form_error('contrasena'); ?>
				<input type="password" name="contrasena" value="<?php echo set_value('contrasena'); ?>" required onfocus="foco('contrasena');" onblur="noFoco('contrasena');" class="form-control" type="text" placeholder="Contraseña" style="border:0px solid #fff; box-shadow:none; padding:6px 12px; margin:0; display: table-cell; width:100%; height:100%;">			
			</div>
		</div>	
		<div class="login-form-action clearfix" style="padding:15px 20px  30px 20px;">
			<button class="btn btn-success pull-right" type="submit">
				Ingresar  
				<i class="fa fa-chevron-right"></i>
			</button>
		</div>
	</form>
</div>
<div >
</div>		
</div>	
<script type="text/javascript">
	function foco(id){
		$("#"+id).addClass('focused');
	}
	function noFoco(id){
		$("#"+id).removeClass("focused");
	}
</script>