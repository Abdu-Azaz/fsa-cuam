<?php
use Diglactic\Breadcrumbs\Breadcrumbs;

// home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('home', route('homepage'));
});

Breadcrumbs::for('doyen', function ($trail) {
$trail->parent('home', route('homepage'));
$trail->push(__('messages.deans-word'), route('doyen'));
});

Breadcrumbs::for('formations', function ($trail) {
    $trail->parent('home', route('homepage'));
    $trail->push(__("messages.courses"), route('formations'));
});

Breadcrumbs::for('departments', function ($trail) {
    $trail->parent('home', route('homepage'));
    $trail->push(__('messages.faculty'), route('homepage'));
    $trail->push(__('messages.departments'), route('departements'));
});

Breadcrumbs::for('departments.gisi', function ($trail) {
    $trail->parent('home', route('homepage'));
    $trail->push('Faculté', route('formations'));
    $trail->push(__('messages.depratments'), route('departements'));
    $trail->push(__('messages.gisi-department'), route('departement', ['slug'=>'genie-informatique-et-systemes-intelligents']));
});

Breadcrumbs::for('departments.physique', function ($trail) {
    $trail->parent('home', route('homepage'));
    $trail->push(__('messages.faculty'), route('homepage'));
    $trail->push(__('messages.depratments'), route('departements'));
    $trail->push(__('messages.physics-department'), route('departement', ['slug'=>'physique-appliquee']));
});
// ----------------------------------------------------------------------
Breadcrumbs::for('departments.chimie', function ($trail) {
    $trail->parent('home', route('homepage'));
    $trail->push(__('messages.faculty'), route('homepage'));
    $trail->push(__('messages.depratments'), route('departements'));
    $trail->push(__('messages.chemistry-department'), route('departement', ['slug'=>'chimie-appliquee']));
});

Breadcrumbs::for('departments.sv', function ($trail) {
    $trail->parent('home', route('homepage'));
    $trail->push(__('messages.faculty'), route('homepage'));
    $trail->push(__('messages.depratments'), route('departements'));

    $trail->push('SV', route('departement', ['slug'=>'sciences-de-vivants']));
});

Breadcrumbs::for('departments.maths', function ($trail) {
    $trail->parent('home', route('homepage'));
    $trail->push(__('messages.faculty'), route('homepage'));
    $trail->push(__('messages.depratments'), route('departements'));
    $trail->push(__('messages.maths-department'), route('departement', ['slug'=>'mathematiques-appliquees']));
});

Breadcrumbs::for('departments.licenceinformatique', function ($trail) {
    $trail->parent('home', route('homepage'));
    $trail->push(__('messages.faculty'), route('homepage'));
    $trail->push('Mathematiques', route('maths'));
    $trail->push('Licence Informatique', route('licenceinformatique'));
});

Breadcrumbs::for('presentation', function ($trail) {
    $trail->parent('home', route('homepage'));
    $trail->push('Presentation', route('presentation'));
});

Breadcrumbs::for('howto', function ($trail) {
    $trail->parent('home', route('homepage'));
    $trail->push(__('messages.howto'), route('presentation'));
});

Breadcrumbs::for('administration', function ($trail) {
    $trail->parent('home', route('homepage'));
    $trail->push('Administration', route('administration'));
});