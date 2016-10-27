<?php $__env->startSection('contenido'); ?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Articulo: <?php echo e($articulo->nombre); ?></h3>
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
			<?php echo Form::model($articulo,['method'=>'PATCH','route'=>['articulo.update',$articulo->idarticulo], 'files'=>'true']); ?>

			<?php echo e(Form::token()); ?>

			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class"form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" required value="<?php echo e($articulo->nombre); ?>" class="form-control" >
					</div>
					
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label>Categoria</label>
						<select name="idcategoria" class="form-control">
							<?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<?php if($cat->idcategoria==$articulo->idcategoria): ?>
								<option value="<?php echo e($cat->idcategoria); ?>" selected><?php echo e($cat->nombre); ?></option>
								<?php else: ?>
								<option value="<?php echo e($cat->idcategoria); ?>"><?php echo e($cat->nombre); ?></option>
								<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						</select>
					</div>
					
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class"form-group">
						<label for="codigo">Código</label>
						<input type="text" name="codigo" required value="<?php echo e($articulo->codigo); ?>" class="form-control" placeholder="Código del articulo...">
					</div>					
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class"form-group">
						<label for="stock">Stock</label>
						<input type="text" name="stock" required value="<?php echo e($articulo->stock); ?>" class="form-control" placeholder="Stock del articulo...">
					</div>	
					
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class"form-group">
						<label for="descipcion">Descripción</label>
						<input type="text" name="descripcion"  value="<?php echo e($articulo->descripcion); ?>" class="form-control" placeholder="Descripción del articulo...">
					</div>	
					
				</div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class"form-group">
						<label for="imagen">Imagen</label>
						<input type="File" name="imagen"   class="form-control" >
						<?php if(($articulo->imagen)!=""): ?>
							<img src="<?php echo e(asset('imagenes/articulos/'.$articulo->imagen)); ?>" height="300px" width="300px">
						<?php endif; ?>
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