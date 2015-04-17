<?php /* @var $products Products[] */ ?>

<main>
    <div class="title-bar">
        <h1>Пакеты услуг</h1>
    </div><!--/title-bar-->

    <?php if(!empty($products)): ?>
    <div class="content list">
        <div class="list-row title">
            <div class="cell"><span class="order asc">Название<span></span></span></div>
            <div class="cell price">Цена</div>
            <div class="cell price">Число клиентов</div>
            <div class="cell status">Статус</div>
            <div class="cell action">Действия</div>
        </div><!--/list-row-->

        <?php foreach($products as $product): ?>
            <div class="list-row h94">
                <div class="cell"><?php echo $product->name; ?></div>
                <div class="cell price">&euro; <?php echo $product->priceFmt(); ?></div>
                <div class="cell price"><?php echo count($product->clients); ?></div>
                <div class="cell status">Enabled</div>
                <div class="cell action">
                    <a href="#" class="action edit" data-id="1"></a>
                    <a href="#" class="action delete" data-id="1"></a>
                </div>
            </div><!--/list-row-->
        <?php endforeach; ?>
    </div><!--/content-->

    <div class="pagination">
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
    </div><!--/pagination-->
    <?php else: ?>
    <div class="content list">
        <div class="list-row">
            <div class="cell">Список пуст</div>
        </div><!--/list-row-->
    </div>
    <?php endif; ?>
</main>