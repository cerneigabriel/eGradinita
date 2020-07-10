<?php include 'components/header.php'; ?>

<!-- PageTitle -->
<div class="pagetitle pagetitle_container pagetitle_schools">
    <div class="container">
        <div>
            <h1 class="pagetitle_title">
                Lista instituțiilor de învățământ
            </h1>
            <p class="pagetitle_description">
                Districtele și adresele care le deservesc
            </p>
        </div>
    </div>
</div>
<!-- PageTitle End -->

<!-- Schools -->
<div class="container">
    <div class="row align-items-start justify-content-between my-5">
        <div class="col-lg-4 p-3">
            <h5>Domiciliu sau instituția</h5>
            <input type="text" class="input w-100 text-left" placeholder="Caută...">
        </div>
        <div class="col-lg-4 p-3">
            <h5>Profil</h5>
            <div class="combobox w-100" id="profile">
                <div class="combobox_search">
                    <input class="combobox_input" type="text" data-value="">
                    <button type="button" class="combobox_toggler"></button>
                </div>

                <ul class="combobox_list">
                    <li class="combobox_item active" data-value="all">Toate</li>
                    <li class="combobox_item" data-value="general">General</li>
                    <li class="combobox_item" data-value="sport">Sport</li>
                    <li class="combobox_item" data-value="bilingve">Bilingve</li>
                    <li class="combobox_item" data-value="educational_alternative">Alternativă educațională</li>
                    <li class="combobox_item" data-value="art">Arte</li>
                    <li class="combobox_item" data-value="marching_band">Fanfară</li>
                    <li class="combobox_item" data-value="choreography">Coregrafie</li>
                    <li class="combobox_item" data-value="Eehno_folklore">Etno-folclor</li>
                    <li class="combobox_item" data-value="plastic_arts">Arte plastice</li>
                    <li class="combobox_item" data-value="musical_coral">Muzical-coral</li>
                    <li class="combobox_item" data-value="theatrical">Teatral</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 p-3">
            <h5>District</h5>
            <div class="combobox w-100" id="district">
                <div class="combobox_search">
                    <input class="combobox_input" type="text" data-value="">
                    <button type="button" class="combobox_toggler"></button>
                </div>

                <ul class="combobox_list">
                    <li class="combobox_item active" data-value="all">Toate</li>
                    <li class="combobox_item" data-value="botanica">Botanica</li>
                    <li class="combobox_item" data-value="buiucani">Buiucani</li>
                    <li class="combobox_item" data-value="centru">Centru</li>
                    <li class="combobox_item" data-value="ciocana">Ciocana</li>
                    <li class="combobox_item" data-value="rascani">Rascani</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-12 p-3">
        </div>
    </div>
</div>
<!-- Schools End -->

<?php include 'components/footer.php'; ?>