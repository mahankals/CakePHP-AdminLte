<!DOCTYPE html>
<html>
<head>
    <title><?= $this->fetch('title') ?> - My Custom Theme</title>
    <?= $this->Html->css(['custom']) ?>
</head>
<body>
    <h1>Admin LTE 4 Theme</h1>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>
