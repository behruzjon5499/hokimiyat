<?php

/* @var $members Members */

use common\helpers\LanguageHelper;
use common\models\Members;

?>
<div class="container" style="max-width: 100% !important;">
    <div class="wrapper">
        <div class="row" >
            <?php foreach ($members as $member): ?>
            <div class="col-md-9" style="margin-top: 30px;">
                    <div class="bs-example">
                        <div class="card" style="max-width: 100%;">
                            <div class="row no-gutters">
                                <div class="col-sm-5" style="background: #868e96;">
                                    <img src="/uploads/members/<?= $member->photo ?>" class="card-img-top"
                                         style="height: 100%;" alt="...">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $member->lavozimi ?></h5>
                                        <h5 style="color: blue;" class="card-title"><?= $member->full_name ?></h5>
                                        <p class="card-text"><?= $member->email ?></p>
                                        <p class="card-text"><?= $member->phone ?></p>
                                        <p class="card-text"><?= $member->qabul_kunlari ?></p>
                                        <p class="card-text"><?= $member->hudud->title_ru ?></p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                            Tarjimai hol
                                        </button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
                                       Majburiyatlari
                                        </button>
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Tarjimai hol</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?= LanguageHelper::get($member, 'description') ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Majburiyatlari</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?= LanguageHelper::get($member, 'majburiyat') ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <?php endforeach; ?>
            <div class="col-md-3 col-sm-12">
            </div>

        </div>
    </div>
</div>