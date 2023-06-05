<?php
require_once __DIR__ . '/../models/prodotti.php';
require_once __DIR__ . '/../models/pet.php';
// require_once __DIR__ . '/../models/categoria.php';

$arrayProdotti = [
    new Pet('Pallina', 10, 'https://images.unsplash.com/photo-1598628461950-268968751a2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80', 'cane','giochi'),
    new Pet('Tiragraffi', 30, 'https://images.unsplash.com/photo-1616492222236-e393b08f6994?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80', 'gatto', 'giochi'),
    new Pet('Forza10', 58, 'https://images.unsplash.com/photo-1596854650262-2c415cb9f3ee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80', 'cane', 'mangime'),
    new Pet('Friskies', 66, 'https://images.unsplash.com/photo-1616668983570-a971956d8928?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1886&q=80', 'gatto', 'mangime')
];

?>