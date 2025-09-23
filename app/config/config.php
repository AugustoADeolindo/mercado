<?php

const DB_HOST = 'localhost';
const DB_NAME = 'mercado';
const DB_USER = 'root';
const DB_PASS = 'sua_senha_aqui';

const OPTIONS = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
