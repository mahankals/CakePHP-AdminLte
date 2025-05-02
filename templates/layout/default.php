<?php

use Cake\Core\Configure;

?>

<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?= $this->fetch('title') ?> | <?= Configure::read('admin-lte.title') ?></title>

  <?= $this->Html->css('AdminLte.source-sans-3.index') ?>
  <?= $this->Html->css('AdminLte.overlayscrollbars.min') ?>
  <?= $this->Html->css('AdminLte.bootstrap-icons.min') ?>
  <?= $this->Html->css('AdminLte.adminlte.min') ?>
  <?= $this->Html->css('app') ?>
  <?= $this->fetch('css'); ?>
</head>
<!--end::Head-->
<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary sidebar-mini clickup-chrome-ext_installed app-loaded">
  <div class="app-wrapper">
    <?php echo $this->element('AdminLte.nav-top'); ?>
    <?php echo $this->element('AdminLte.aside-main-sidebar'); ?>

    <main class="app-main">
      <?= $this->fetch('content') ?>
    </main>

    <?php echo $this->element('AdminLte.footer'); ?>
    <?php echo $this->element('AdminLte.aside-control-sidebar'); ?>
    <div class="control-sidebar-bg"></div>

    <?= $this->fetch('end-content'); ?>
  </div>

  <?= $this->Html->script('AdminLte.overlayscrollbars.browser.es6.min') ?>
  <?= $this->Html->script('AdminLte.bootstrap.bundle.min') ?>
  <?= $this->Html->script('AdminLte.adminlte.min') ?>
  <?= $this->Html->script('AdminLte.jquery.min') ?>

  <!--begin::OverlayScrollbars Configure-->
  <script>
    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
    const Default = {
      scrollbarTheme: 'os-theme-light',
      scrollbarAutoHide: 'leave',
      scrollbarClickScroll: true,
    };
    document.addEventListener('DOMContentLoaded', function() {
      const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
      if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
        OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
          scrollbars: {
            theme: Default.scrollbarTheme,
            autoHide: Default.scrollbarAutoHide,
            clickScroll: Default.scrollbarClickScroll,
          },
        });
      }
    });
  </script>
  <!--end::OverlayScrollbars Configure-->

  <?= $this->Html->script('app') ?>
  <?= $this->fetch('script'); ?>
</body>

</html>
