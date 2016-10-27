<?php $__env->startSection('contenido'); ?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Categoría: <?php echo e($categoria->nombre); ?></h3>
			<?php if(count($errors)>0): ?>
			<div class="alert alert-danger">
				<ul>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<li><?php echo e($error); ?></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</ul>
			</div>
			<?php endif; ?>
			<?php echo Form::model($categoria,['method'=>'PATCH','route'=>['categoria.update',$categoria->idcategoria]]); ?>

			<?php echo e(Form::token()); ?>

			<div class"form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" value="<?php echo e($categoria->nombre); ?>">
			</div>
			<div class"form-group">
				<label for="descripcion">Descripción</label>
				<input type="text" name="descripcion" class="form-control" value="<?php echo e($categoria->descripcion); ?>" >
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			<?php echo Form::close(); ?>


		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>