<?php
class Estado {
    public string $nome;
    public string $linkCadastro;
    public string $iframeVideo;

    public function __construct($nome, $linkCadastro, $iframeVideo) {
        $this->nome = $nome;
        $this->linkCadastro = $linkCadastro;
        $this->iframeVideo = $iframeVideo;
    }
}

class FAQ {
    public string $pergunta;
    public string $resposta;

    public function __construct($pergunta, $resposta) {
        $this->pergunta = $pergunta;
        $this->resposta = $resposta;
    }
}