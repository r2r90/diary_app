<?php

require __DIR__ . '/inc/functions.inc.php';
require __DIR__ . '/inc/db-connect.inc.php';

$stmt = $pdo->prepare("SELECT * FROM `entries`");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php require __DIR__ . '/views/header.php'; ?>
    <h1 class="main-heading">Entries</h1>
            <?php foreach ($results as $result) : ?>
                <div class="card">
                    <div class="card__image-container">
                        <img class="card__image" src="images/pexels-canva-studio-3153199.jpg" alt=""/>
                    </div>
                    <div class="card__desc-container">
                        <div class="card__desc-time"><?php echo e($result['date']) ?></div>
                        <h2 class="card__heading"><?php echo e($result['title']) ?></h2>
                        <p class="card__paragraph">
                            <?php echo nl2br(e($result['message'])) ?>
                        </p>
                    </div>
                </div>
            <?php endforeach ?>

            <ul class="pagination">
                <li class="pagination__li">
                    <a class="pagination__link" href="#">⏴</a>
                </li>
                <li class="pagination__li">
                    <a class="pagination__link pagination__link--active" href="#">1</a>
                </li>
                <li class="pagination__li">
                    <a class="pagination__link" href="#">2</a>
                </li>
                <li class="pagination__li">
                    <a class="pagination__link" href="#">3</a>
                </li>
                <li class="pagination__li">
                    <a class="pagination__link" href="#">⏵</a>
                </li>
            </ul>
<?php require __DIR__ . '/views/footer.php'; ?>