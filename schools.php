<?php include 'components/header.php'; ?>

<!-- PageTitle -->
<div class="PageTitle PageTitle--container PageTitle--schools">
    <div class="container">
        <div>
            <h1 class="PageTitle__title">
                Lista instituțiilor de învățământ
            </h1>
            <p class="PageTitle__description">
                Districtele și adresele care le deservesc
            </p>
        </div>
    </div>
</div>
<!-- PageTitle End -->

<!-- Schools -->
<div class="container">
    <div class="row align-items-start justify-content-between my-5">
        <div class="col-lg-8">
            <h5>Domiciliu sau instituția</h5>
            <input type="text" class="Input" placeholder="Caută...">
        </div>
        <div class="col-lg-4">
            <h5>District</h5>
            <div class="Combobox Combobox--open">
                <input class="Combobox__input" type="text">
                <i aria-hidden="true" class="Combobox__icon"></i>

                <ul class="Combobox__list">
                    <li class="Combobox__item Combobox__item--active">General</li>
                    <li class="Combobox__item">Toate</li>
                    <li class="Combobox__item">Sport</li>
                    <li class="Combobox__item">Bilingve</li>
                    <li class="Combobox__item">Alternativă educațională</li>
                    <li class="Combobox__item">Arte</li>
                    <li class="Combobox__item">Fanfară</li>
                    <li class="Combobox__item">Coregrafie</li>
                    <li class="Combobox__item">Etno-folclor</li>
                    <li class="Combobox__item">Arte plastice</li>
                    <li class="Combobox__item">Muzical-coral</li>
                    <li class="Combobox__item">Teatral</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Schools End -->

<?php include 'components/footer.php'; ?>