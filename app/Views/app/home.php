<?php $this->extend('layouts/app'); ?>

<?php $this->section('css_scripts'); ?>
<style>
.bg-card {
    transition: 0.3s;
}

.bg-card:hover {
    box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.5) !important;
}

.note {
    /* background-color: #ffffff; */
    /* margin: 10px; */
    /* width: 300px; */
    /* box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); */
    transition: 0.3s;
    /* border-radius: 5px; 5px rounded corners */
    /* margin-bottom: 20px; */
}

/* On mouse-over, add a deeper shadow */
.note:hover {
    box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.5) !important;
}

/* Add some padding inside the card container */
.content {
    padding: 2px 16px;
}

.note-header {
    border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    display: flex;
    justify-content: left;
    font-weight: 600;
    padding: 0.1rem;
}

.note-text {
    padding: 0.1rem;
}

.show {
    display: '';
}

.hide {
    display: none;
}

.text-navy {
    color: #202A44;
}

.text-smaller {
    font-size: 90%;
}

.btn-outline-edit {
    color: #075db8;
    border-color: #075db8;
}

.btn-outline-edit:hover {
    color: white;
    background: #075db8;
    border-color: #075db8;
}

.repo-badge-text {
    font-size: 85%;
}
</style>
<link rel="stylesheet" href="{{ asset('css/bootstrap-multiselect.min.css') }}">
<?php $this->endSection('css_scripts'); ?>

<?php $this->section('content'); ?>

<?php $this->endSection(); ?>

<?php $this->section('modals'); ?>
<?php $this->endSection(); ?>


<?php $this->section('js_scripts'); ?>
<?php $this->endSection('js_scripts'); ?>