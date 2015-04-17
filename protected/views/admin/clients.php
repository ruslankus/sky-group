<?php /* @var $clients Clients[] */ ?>
<main>
    <div class="title-bar">
        <h1>Клиенты</h1>
        <ul class="actions">
            <li><a href="" class="action add"></a></li>
        </ul>
    </div><!--/title-bar-->

    <div class="content">
        <div class="title-table">
            <div class="cell">Имя</div>
            <div class="cell">Эл. почта</div>
            <div class="cell type">Статус</div>
            <div class="cell type">Текущий пакет</div>
            <div class="cell action">Дейтсвия</div>
        </div><!--table-->
        <div class="sortable">

            <?php foreach($clients as $client): ?>
                <div class="menu-table" data-menu="1">
                    <div class="cell block">
                        <div class="inner-table">
                            <div class="row root" data-id="0">
                                <div class="cell name"><?php echo $client->login ?></div>
                                <div class="cell"><?php echo $client->login ?></div>
                                <div class="cell type"><?php echo $client->status_id == 1 ? 'Не подтвержден' : 'Подтвержден' ?></div>
                                <div class="cell type"><?php echo $client->currentPacket->name; ?></div>

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