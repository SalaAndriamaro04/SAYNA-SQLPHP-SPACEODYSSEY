<!-- btn-xs : class bootstrap pour réduire la taille du boutton
    ?? : s'il existe $type, sinon info -->
<a class="btn btn-<?= $type ?? 'info' ?> btn-xs" href="<?= $url ?>"> <?= $label ?> </a>