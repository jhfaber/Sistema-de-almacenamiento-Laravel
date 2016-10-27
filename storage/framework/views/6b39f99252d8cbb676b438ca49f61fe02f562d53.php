<div class="modal fade moda-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-<?php echo e($cat->idcategoria); ?>">
	<?php echo e(Form::Open(array('action'=>array('CategoriaCotroller@destroy',$cat->idcategoria),'method'=>'delete'))); ?>

	<div class="moda-dialog">
		<div class="modal-header">
			<buttton typpe="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">x</span>
				
			</buttton>
			<h4 class="modal-title">Eliminar categoría</h4>
		</div>
		<div class="modal-body">
			<p>Confirme si desea Eliminar la categoria</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary">Confirmar</button>
		</div>
	</div>

	<?php echo e(Form::Close()); ?>

</div>