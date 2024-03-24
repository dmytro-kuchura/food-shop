<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">KUBFOOD</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Панель адміністратора</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Сайт
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#orders" aria-expanded="true">
            <i class="fas fa-shopping-cart"></i>
            <span>Замовлення</span>
        </a>
        <div id="orders" class="collapse">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Список замовлень</a>
                <a class="collapse-item" href="cards.html">Доставка</a>
                <a class="collapse-item" href="cards.html">Оплата</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#catalog" aria-expanded="true">
            <i class="fas fa-shopping-bag"></i>
            <span>Каталог товарів</span>
        </a>
        <div id="catalog" class="collapse">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="cards.html">Товари</a>
                <a class="collapse-item" href="buttons.html">Категорії</a>
                <a class="collapse-item" href="cards.html">Характеристики</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#artcles" aria-expanded="true">
            <i class="fas fa-file-alt"></i>
            <span>Статті</span>
        </a>
        <div id="artcles" class="collapse">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="utilities-color.html">Новини</a>
                <a class="collapse-item" href="utilities-color.html">Коментарі</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Налашутвання
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
           aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Налашутвання</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="login.html">Користувачі</a>
                <a class="collapse-item" href="register.html">Параметри</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Інше</h6>
                <a class="collapse-item" href="404.html">Зворотній звʼязок</a>
                <a class="collapse-item" href="404.html">Статистика</a>
                <a class="collapse-item" href="blank.html">Аналітика</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-power-off"></i>
            <span>Система</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-database"></i>
            <span>Системні сторінки</span></a>
    </li>
</ul>
