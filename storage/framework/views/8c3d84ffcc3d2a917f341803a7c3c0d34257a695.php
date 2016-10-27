<?php $__env->startSection('contenido'); ?>
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Articulos <a href="articulo/create"><button class="btn btn-success">Nuevo</button></a></h3>
			<?php echo $__env->make('almacen/articulo/search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
		</div>
	</div>
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class= "table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th>Id</th>
							<th>Nombre</th>
							<th>Código</th>
							<th>Categoria</th>
							<th>Stock</th>
							<th>Imagen</th>
							<th>Estado</th>
							<th>Opciones</th>													
						</thead>						
						<?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<tr>
								<td><?php echo e($art->idarticulo); ?></td>
								<td><?php echo e($art->nombre); ?></td>
								<td><?php echo e($art->codigo); ?></td>
								<td><?php echo e($art->categoria); ?></td>
								<td><?php echo e($art->stock); ?></td>
								<td>
									<img src="<?php echo e(asset('imagenes/articulos/'.$art->imagen)); ?>" alt="<?php echo e($art->nombre); ?>" height="100px" width="100px" class="img-thumbnail"> <!--la class de boostrap no permite que se deforme demasiado la imagen por lo que aparece irrespetando los margenes. -->
								</td>
								<td><?php echo e($art->estado); ?></td>
								<td>
									<a href="<?php echo e(URL::action('ArticuloController@edit',$art->idarticulo)); ?>"><button class="btn btn-info">Editar</button></a>
									<a href="" data-target="#modal-delete-<?php echo e($art->idarticulo); ?>" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
								</td>
							</tr>
						<?php echo $__env->make('almacen/articulo/eliminar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
					</table>
				</div>
					<?php echo e($articulos->render()); ?>

			</div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>