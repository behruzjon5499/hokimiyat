<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Adminstrator</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
//                    ['label' => 'Categories', 'icon' => 'file-code-o', 'url' => ['/categories'],],
                    ['label' => 'News', 'icon' => 'file-code-o', 'url' => ['/news'],],
                    ['label' => 'Feedback', 'icon' => 'file-code-o', 'url' => ['/feedback'],],
                    ['label' => 'About', 'icon' => 'file-code-o', 'url' => ['/about'],],
                    ['label' => 'Saylov', 'icon' => 'file-code-o', 'url' => ['/saylov'],],
                    ['label' => 'Services', 'icon' => 'file-code-o', 'url' => ['/services'],],
                    ['label' => 'Meeting', 'icon' => 'file-code-o', 'url' => ['/meeting'],],
                    ['label' => 'Gallery', 'icon' => 'file-code-o', 'url' => ['/gallery'],],
                    ['label' => 'Faoliyat', 'icon' => 'file-code-o', 'url' => ['/faoliyat'],],
                    ['label' => 'categories Foydali Havolalar', 'icon' => 'file-code-o', 'url' => ['/catgeries-foydali-havolalar'],],
                    ['label' => 'Foydali Havolalar', 'icon' => 'file-code-o', 'url' => ['/foydali-havolalar'],],
                    ['label' => 'Login', 'url' => ['/login'], 'visible' => Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>
