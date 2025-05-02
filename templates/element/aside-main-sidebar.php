<?php

use Cake\Core\Configure;

$sidemenus = Configure::read('admin-lte.sidemenus');

?>

<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="./index.html" class="brand-link">
      <!--begin::Brand Image-->
      <?= $this->Html->image(Configure::read('admin-lte.logo'), array('alt' => 'Brand Logo', 'class' => 'brand-image opacity-75 shadow')); ?>
      <!--end::Brand Image-->
      <!--begin::Brand Text-->
      <span class="brand-text fw-light"><?= Configure::read('admin-lte.title') ?></span>
      <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
  </div>
  <!--end::Sidebar Brand-->
  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!--begin::Sidebar Menu-->
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="menu"
        data-accordion="false">
        <?php foreach ($sidemenus as $sidemenu): ?>
          <!-- <?php debug($sidemenu) ?> -->
          <?php if (empty($sidemenu['path']) && empty($sidemenu['submenus']) && !empty($sidemenu['title'])): ?>
            <li class="nav-header"><?= $sidemenu['title'] ?></li>
          <?php elseif (!empty($sidemenu['title'])): ?>
            <li class="nav-item">
              <a href="<?= $sidemenu['path'] ?? '#' ?>" class="nav-link active">
                <?php if (!empty($sidemenu['icon'])): ?>
                  <?= $sidemenu['icon'] ?>
                <?php endif; ?>
                <p>
                  <?= $sidemenu['title'] ?>
                  <?php if (!empty($sidemenu['submenus'])): ?>
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  <?php endif; ?>
                </p>
                <!-- <?= empty($sidemenu['submenus']) ? 'NA' : 'Yes' ?> -->
              </a>
              <ul class="nav nav-treeview">
                <?php foreach ($sidemenu['submenus'] as $submenu): ?>
                  <li class="nav-item">
                    <a href="<?= $submenu['path'] ?? '#' ?>" class="nav-link active">
                      <?php if (!empty($submenu['icon'])): ?>
                        <?= $submenu['icon'] ?>
                      <?php endif; ?>
                      <p>
                        <?= $submenu['title'] ?>
                      </p>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
      <!--end::Sidebar Menu-->
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>
