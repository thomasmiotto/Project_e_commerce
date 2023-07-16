<?php

function redirect($url)
{
    header('location: ' . $url);
    exit;
}

function uploader(array $file, string $dossierDestination): string
{
    if (!is_dir($dossierDestination)) {
        mkdir($dossierDestination);
    }

    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $nouveauNom = uniqid() . '.' . $extension;
    move_uploaded_file($file['tmp_name'], $dossierDestination . '/' . $nouveauNom);
    return $nouveauNom;
}
