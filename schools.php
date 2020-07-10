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
        <div class="col-lg-8">
            <h5>Domiciliu sau instituția</h5>
            <input type="text" class="input w-100 text-left" placeholder="Caută...">
        </div>
        <div class="col-lg-4">
            <h5>District</h5>
            <div class="combobox w-100">
                <input class="combobox_input" type="text">
                <i aria-hidden="true" class="combobox_icon"></i>

                <ul class="combobox_list">
                    <li class="combobox_item active">General</li>
                    <li class="combobox_item">Toate</li>
                    <li class="combobox_item">Sport</li>
                    <li class="combobox_item">Bilingve</li>
                    <li class="combobox_item">Alternativă educațională</li>
                    <li class="combobox_item">Arte</li>
                    <li class="combobox_item">Fanfară</li>
                    <li class="combobox_item">Coregrafie</li>
                    <li class="combobox_item">Etno-folclor</li>
                    <li class="combobox_item">Arte plastice</li>
                    <li class="combobox_item">Muzical-coral</li>
                    <li class="combobox_item">Teatral</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Schools End -->

<?php include 'components/footer.php'; ?>