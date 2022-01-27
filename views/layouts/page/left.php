<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <?php echo Html::img('@web/adminLTE/dist/img/AdminLTELogo.png', ['alt'=> 'AdminLTE Logo', 'class'=>'brand-image img-circle elevation-3', 'style' => 'opacity: .8']) ?>
      <span class="brand-text font-weight-light">Admin LTE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php echo Html::img('@web/adminLTE/dist/img/user2-160x160.jpg', ['alt'=> 'User Image', 'class'=>'img-circle elevation']) ?>
        </div>
        <div class="info">
          <a href="" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <?= Html::a('<i class="nav-icon fas fa-tachometer-alt"></i><p> Dashboard</p>', ['site/index'], ['class' => 'nav-link']) ?>
          </li>

          <li class="nav-item menu-open">
            <?= Html::a('<i class="nav-icon fas fa-user-cog"></i><p> Master <i class="right fas fa-angle-left"></i></p>', [''], ['class' => 'nav-link']) ?>
            <ul class="nav nav-treeview" style="display">
              <li class="nav-item">
                <?= Html::a('<i class="far fa-circle nav-icon"></i><p> User</p>', [''], ['class' => 'nav-link']) ?>
              </li>

              <li class="nav-item">
                <?= Html::a('<i class="far fa-circle nav-icon"></i><p> Menu</p>', [''], ['class' => 'nav-link']) ?>
              </li>

              <li class="nav-item">
                <?= Html::a('<i class="far fa-circle nav-icon"></i><p> Role</p>', ['role/index'], ['class' => 'nav-link']) ?>
              </li>
            </ul>
          </li> 

          <li class="nav-item">
            <?= Html::a('<i class="nav-icon fas fa-cash-register"></i><p> Loket</p>', [''], ['class' => 'nav-link']) ?>
          </li>

        </ul>
      <nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

