<div class="well">
<h2><?= h($product->name) ?></h2>
    <br>
    <dl>
        <dt>Descripción</dt>
        <dd>
            <?= $this->Text->autoParagraph(h($product->description)); ?>
            &nbsp;
        </dd>
        <br>

        <dt>Cantidad</dt>
        <dd>
            <?= $this->Number->format($product->quantity) ?>
            &nbsp;
        </dd>
        <br>

        <dt>Precio</dt>
        <dd>
            <?= $this->Number->format($product->price) ?>
            &nbsp;
        </dd>
        <br>

        <dt>Creado</dt>
        <dd>
            <?= h($product->created->nice()) ?>
            &nbsp;
        </dd>
        <br>

        <dt>Modificado</dt>
        <dd>
            <?= h($product->modified->nice()) ?>
            &nbsp;
        </dd>
    </dl>
</div>