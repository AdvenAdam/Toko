<nav class="t-header navbar-light navbar-expand ">
    <div class="t-header-brand-wrapper">
        <a href="index.html">
            <img class="logo" src="/zz/src/assets/images/logo.svg" alt="">
            <img class="logo-mini" src="/zz/src/assets/images/logo_mini.svg" alt="">
        </a>
    </div>
    <div class="t-header-content-wrapper">
        <div class="t-header-content">
            <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
                <i class="mdi mdi-menu"></i>
            </button>
            <form action="" class="t-header-search-box">
                <div class="input-group">
                    <input type="text" class="form-control" id="inlineFormInputGroup" value="<?= format_indo(date('Y-m-d')); ?>" readonly>
                    <button class="btn btn-primary" type="submit"><i class="mdi mdi mdi-calendar-blank "></i></button>
                </div>
            </form>
        </div>
    </div>
</nav>