<?php /* @var $orders Orders[] */ ?>
<main>
    <div class="title-bar">
        <h1>Заказы</h1>
    </div><!--/title-bar-->

    <div class="content">

        <div class="title-table">
            <div class="cell">Клиент</div>
            <div class="cell type">Дата</div>
            <div class="cell type">Пакет</div>
            <div class="cell type">Статус</div>
            <div class="cell type">Цена</div>
            <div class="cell type">Скидка</div>
            <div class="cell action">Дейтсвия</div>
        </div><!--table-->
        <div class="sortable">

            <?php foreach($orders as $order): ?>
                <div class="menu-table" data-menu="1">
                    <div class="cell block">
                        <div class="inner-table">
                            <div class="row root" data-id="0">
                                <div class="cell ">Вася</div>
                                <div class="cell type"><?php date('Y.m.d',$order->order_time); ?></div>
                                <div class="cell type"><?php echo $order->product->name; ?></div>
                                <div class="cell type"><?php echo $order->payment_status; ?></div>
                                <div class="cell type">-</div>
                                <div class="cell type">-</div>

                                <div class="action">
                                    <a href="#" class="edit"><span class="ficoned pencil"></span></a>
                                    <a href="#" class="delete"><span class="ficoned trash-can"></span></a>
                                </div>
                            </div><!--/row root-->
                        </div><!--/inner-table-->
                    </div><!--/menu-table-->
                </div><!--table-->
            <?php endforeach; ?>


        </div><!--/sortable-->

    </div><!--/content-->

    <div class="pagination">
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
    </div><!--/pagination-->


</main>