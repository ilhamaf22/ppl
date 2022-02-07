<?= $this->include('layout/umum/header'); ?>
<?= $this->renderSection('css'); ?>
<?= $this->include('layout/umum/navbar'); ?>
<?= $this->include('layout/umum/sidebar'); ?>
<?= $this->renderSection('content'); ?>
<?= $this->include('layout/umum/footer'); ?>
<?= $this->renderSection('js') ?>