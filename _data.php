<?php
require_once '_model.php';

$whatsapp = "https://wa.me/554199289837";
$instagram = "https://www.instagram.com/igreenenergyoficial/";
$facebook = "https://www.facebook.com/igreenenergyoficial/";
$youtube = "https://www.youtube.com/@igreenenergyoficial";
$saibaMais = "https://www.igreenenergy.com.br/c%C3%B3pia-hist%C3%B3ria";

$perguntasRespostas = [
    new FAQ("Como funciona a Igreen?", "A Igreen conecta você a usinas de energia limpa que injetam créditos na rede da sua distribuidora."),
    new FAQ("Preciso instalar placas?", "Não, a energia é injetada diretamente na rede da distribuidora local."),
    new FAQ("Quais documentos preciso?", "Apenas seu último talão de energia e um documento de identificação."),
    new FAQ("Existe custo de adesão?", "Não, o cadastro é totalmente gratuito e sem investimentos.")
];

$estados = [
    ''   => new Estado("Selecionar estado", "#", "https://www.youtube.com/embed/xnTeMJwaH7U?si=fgC-dQJ6jWBLOn6h"),
    'pr' => new Estado("Paraná", "/pr", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'sp' => new Estado("São Paulo", "/sp", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'mg' => new Estado("Minas Gerais", "/mg", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'rj' => new Estado("Rio de Janeiro", "/rj", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'sc' => new Estado("Santa Catarina", "/sc", "https://www.youtube.com/embed/xnTeMJwaH7U")
];