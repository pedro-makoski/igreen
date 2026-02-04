<?php
require_once '_model.php';

$whatsapp = "https://wa.me/554199289837";
$instagram = "https://www.instagram.com/sangalli.igreen/";
$facebook = "https://www.facebook.com/share/1DgpDBesmB/";
$youtube = "https://youtube.com/@jovemrico_igreen";
$saibaMais = "https://www.igreenenergy.com.br/c%C3%B3pia-hist%C3%B3ria";

$perguntasRespostas = [
    new FAQ(
        "O que é a iGreen Energy?",
        "A iGreen Energy é uma empresa brasileira de energia solar compartilhada, fundada em 2021 em Uberlândia (MG). Seu objetivo é democratizar o acesso à energia limpa, oferecendo soluções sustentáveis e econômicas para residências e empresas."
    ),

    new FAQ(
        "Qual é o propósito da iGreen Energy?",
        "A empresa surgiu com o propósito de conscientizar sobre práticas sustentáveis e liderar a transição energética no Brasil, promovendo o uso de energia renovável de forma acessível."
    ),

    new FAQ(
        "Como funciona a energia solar compartilhada da iGreen Energy?",
        "A iGreen Energy gera energia em suas próprias usinas solares e compartilha essa produção com os clientes. Assim, é possível usar energia solar sem instalar painéis em casa, recebendo créditos diretamente na conta de luz."
    ),

    new FAQ(
        "Preciso instalar painéis solares para usar a iGreen Energy?",
        "Não. A iGreen Energy cuida de toda a geração de energia por meio de suas usinas solares. O cliente apenas se cadastra e passa a receber créditos de energia na fatura."
    ),

    new FAQ(
        "Quantas usinas solares a iGreen Energy possui?",
        "A iGreen Energy opera mais de 100 usinas solares, atendendo cerca de 90 mil clientes em diferentes regiões do Brasil."
    ),

    new FAQ(
        "Como funcionam os créditos de energia solar?",
        "Os clientes recebem créditos proporcionais ao seu consumo de energia solar, que são aplicados diretamente na conta de luz, reduzindo significativamente o valor da fatura mensal."
    ),

    new FAQ(
        "A iGreen Energy está de acordo com a Lei 14.300?",
        "Sim. A empresa atua em conformidade com a Lei 14.300, que regulamenta e incentiva a geração distribuída de energia solar no Brasil."
    ),

    new FAQ(
        "Quais são as principais soluções oferecidas pela iGreen Energy?",
        "A empresa oferece quatro soluções: Conexão Livre (média e alta tensão), Conexão Placas (instalação de painéis solares), Conexão Green (energia solar sem investimento inicial) e Conexão Club (descontos e cashback sustentável)."
    ),

    new FAQ(
        "Quais são os benefícios financeiros para o cliente?",
        "O cliente economiza na conta de luz sem custos iniciais, pagando apenas pelo consumo, além de se beneficiar de energia mais barata e previsível."
    ),

    new FAQ(
        "É possível gerar renda com a iGreen Energy?",
        "Sim. A empresa possui um programa de indicação e licenciamento, permitindo que parceiros ganhem comissões recorrentes ao indicar novos clientes."
    ),

    new FAQ(
        "A iGreen Energy oferece monitoramento de consumo?",
        "Sim. Os clientes têm acesso a um sistema de monitoramento em tempo real, permitindo acompanhar o consumo e as economias geradas com a energia solar."
    ),

    new FAQ(
        "Qual é o impacto ambiental da iGreen Energy?",
        "Ao utilizar energia solar, a iGreen Energy ajuda a reduzir a dependência de combustíveis fósseis, diminui a emissão de gases poluentes e contribui para um futuro mais sustentável."
    ),

    new FAQ(
        "Quem pode contratar a iGreen Energy?",
        "Tanto consumidores residenciais quanto empresas podem contratar a iGreen Energy, mesmo sem espaço físico para instalação de painéis solares."
    )
];


$link_cadastro = "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=8";

$estados = [
    ''   => new Estado(
        "Selecionar estado",
        $link_cadastro,
        "https://www.youtube.com/embed/xnTeMJwaH7U"
    ),

    'al' => new Estado("Alagoas", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=8", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'ba' => new Estado("Bahia", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=8", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'ce' => new Estado("Ceará", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'es' => new Estado("Espírito Santo", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'go' => new Estado("Goiás", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'ma' => new Estado("Maranhão", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=8", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'mg' => new Estado("Minas Gerais", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),

    'ac' => new Estado("Acre", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'am' => new Estado("Amazonas", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'ap' => new Estado("Amapá", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'df' => new Estado("Distrito Federal", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'ms' => new Estado("Mato Grosso do Sul", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'mt' => new Estado("Mato Grosso", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'pa' => new Estado("Pará", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'pb' => new Estado("Paraíba", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'pe' => new Estado("Pernambuco", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'pi' => new Estado("Piauí", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'pr' => new Estado("Paraná", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'rj' => new Estado("Rio de Janeiro", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'rn' => new Estado("Rio Grande do Norte", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'ro' => new Estado("Rondônia", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'rr' => new Estado("Roraima", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'rs' => new Estado("Rio Grande do Sul", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'sc' => new Estado("Santa Catarina", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'se' => new Estado("Sergipe", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'sp' => new Estado("São Paulo", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
    'to' => new Estado("Tocantins", "https://digital.igreenenergy.com.br/?id=120325&sendcontract=true&desc=10", "https://www.youtube.com/embed/xnTeMJwaH7U"),
];
