<?php $__env->startSection('contenido'); ?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Proveedor: <?php echo e($persona->nombre); ?></h3>
			<?php if(count($errors)>0): ?>
			<div class="alert alert-danger">
				<ul>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<li><?php echo e($error); ?></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</ul>
			</div>
			<?php endif; ?>
		</div>
	</div>
			<?php echo Form::model($persona,['method'=>'PATCH','route'=>['proveedor.update',$persona->idpersona]]); ?>

			<?php echo e(Form::token()); ?>

			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class"form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" required value="<?php echo e($persona->nombre); ?>" class="form-control" placeholder="Juanita Gonzales">
					</div>
					
				</div>				
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class"form-group">
						<label for="num_documento">Numero del documento</label>
						<input type="text" name="num_documento" required value="<?php echo e($persona->num_documento); ?>" class="form-control" placeholder="Numero del documento...">
					</div>					
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div>
						<label for="tipo_documento">Tipo de documento</label>
						<select class="form-control" name="tipo_documento">	
								<option value="CC" selected>CC</option>
								<option value="CE">CE</option>
								<option value="TI">TI</option>

						</select>					
					</div>	
					
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class"form-group">
						<label for="direccion">Dirección</label>
						<input type="text" name="direccion"  value="<?php echo e($persona->direccion); ?>" class="form-control" placeholder="Dirección del proveedor">
					</div>	
					
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class"form-group">
						<label for="telefono">Telefono</label>
						<input type="text" name="telefono"  value="<?php echo e($persona->telefono); ?>" class="form-control" placeholder="Telefono del proveedor...">
					</div>	
					
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class"form-group">
						<label for="email">E-mail</label>
						<input type="text" name="email"  value="<?php echo e($persona->email); ?>" class="form-control" placeholder="trespapitasconcarne@gmail.com">
					</div>	
					
				</div>
				
				
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Guardar</button>
						<button class="btn btn-danger" type="reset">Cancelar</button>
					</div>
				</div>

				
			</div>
			<?php echo Form::close(); ?>


	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>