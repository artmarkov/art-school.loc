<div>
    <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com" class="header-icon d-flex align-items-center justify-content-center ml-2">
        <img src="<?= $assetBundle->baseUrl ?>/img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
        <!-- you can also add username next to the avatar with the codes below:
        <span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
        <i class="ni ni-chevron-down hidden-xs-down"></i> -->
    </a>
    <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
        <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
            <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                            <span class="mr-2">
                                                <img src="<?= $assetBundle->baseUrl ?>/img/demo/avatars/avatar-admin.png" class="rounded-circle profile-image" alt="Dr. Codex Lantern">
                                            </span>
                <div class="info-card-text">
                    <div class="fs-lg text-truncate text-truncate-lg">Dr. Codex Lantern</div>
                    <span class="text-truncate text-truncate-md opacity-80">drlantern@gotbootstrap.com</span>
                </div>
            </div>
        </div>
        <div class="dropdown-divider m-0"></div>
        <a href="#" class="dropdown-item" data-action="app-reset">
            <span data-i18n="drpdwn.reset_layout">Reset Layout</span>
        </a>
        <a href="#" class="dropdown-item" data-toggle="modal" data-target=".js-modal-settings">
            <span data-i18n="drpdwn.settings">Settings</span>
        </a>
        <div class="dropdown-divider m-0"></div>
        <a href="#" class="dropdown-item" data-action="app-fullscreen">
            <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
            <i class="float-right text-muted fw-n">F11</i>
        </a>
        <a href="#" class="dropdown-item" data-action="app-print">
            <span data-i18n="drpdwn.print">Print</span>
            <i class="float-right text-muted fw-n">Ctrl + P</i>
        </a>
        <div class="dropdown-divider m-0"></div>
        <a class="dropdown-item fw-500 pt-3 pb-3" href="<?= Yii::$app->urlManager->hostInfo . '/auth/logout'?>">
            <span data-i18n="drpdwn.page-logout"><?=  Yii::t('art', 'Logout')?></span>
            <span class="float-right fw-n">&commat;<?= Yii::$app->user->identity->username?></span>
        </a>
    </div>
</div>
