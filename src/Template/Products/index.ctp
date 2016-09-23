<div class="row">
    <div class="page-header">
        <h2>
            Productos
            <?= $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo', ['controller' => 'Products', 'action' => 'add'], ['class' => 'btn btn-primary pull-right', 'escape' => false]) ?>
        </h2>
    </div>

    <?php foreach ($products as $product): ?>
        <div class="col-md-4">
            <section>
                <article class="well">
                    <h3><?= h($product->name) ?></h3>
                    <?= $this->Html->image('../files/products/photo/' . $product->photo_dir . '/square_' . $product->photo, ['alt' => $product->name, 'class' => 'img-responsive img-thumbnail center-block']) ?>
                    <p>
                        <br>
                        <strong>Cantidad: </strong> <?= h($product->quantity) ?>
                        <br>
                        <strong>Precio: </strong> <?= h($product->price) ?>
                    </p>
                    <?= $this->Html->link('Ver', ['action' => 'view', $product->id], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link('Editar', ['action' => 'edit', $product->id], ['class' => 'btn btn-sm btn-primary']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $product->id], ['confirm' => 'Eliminar producto?', 'class' => 'btn btn-sm btn-danger']) ?>
                </article>
            </section>
        </div>
<?php endforeach; ?>
</div>

<div class="row">
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< Anterior') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('Siguiente >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>