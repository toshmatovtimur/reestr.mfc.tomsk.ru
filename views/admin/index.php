<?php

/** @var yii\web\View $this */

$this->title = 'Администрирование';
$this->params['breadcrumbs'][] = $this->title;
?>

<body>
<main>
    <h1 class="visually-hidden">Примеры функций</h1>

    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Администрирование</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
                </div>
                <div>

                    <a href="../user/index">
                        <h2>Пользователи</h2>
                    </a>
                    <p>Компонент, который управляет информацией о пользователях на веб-сайте.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
                </div>
                <div>
                    <a href="../empty">
                        <h2>Районы</h2>
                    </a>
                    <p>Список районов</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
                </div>
                <div>
                    <a href="../admin/empty">
                        <h2>Населенные пункты</h2>
                    </a>
                    <p>Список населенных пунктов </p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
                </div>
                <div>
                    <a href="../admin/empty">
                        <h2>Выплаты</h2>
                    </a>
                    <p>Модуль категории выплат (пополняемый справочник). </p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
                </div>
                <div>
                    <a href="../admin/empty">
                        <h2>Льготы</h2>
                    </a>
                    <p>Модуль категории льгот (пополняемый справочник). </p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
                </div>
                <div>
                    <a href="../admin/empty">
                        <h2>Решения</h2>
                    </a>
                    <p>Модуль категории решений (пополняемый справочник). </p>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="../../web/Функции · Bootstrap v5.0_files/bootstrap.bundle.min.js.Без названия" crossorigin="anonymous"></script>

</body>