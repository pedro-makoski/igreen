<?php
require_once '../src/_data.php';
require_once '../src/_model.php';

$path = isset($_GET['state']) ? strtolower(trim($_GET['state'])) : '';
$current = $estados[$path] ?? $estados[''];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igreen - <?php echo $current->nome; ?></title>
    <link rel="stylesheet" href="./styles/vars.css?v=13">
    <link rel="stylesheet" href="./styles/styles.css?v=13">
    <link rel="shortcut icon" href="./assets/imgs/favicon.ico" type="image/x-icon">
</head>

<body>
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <header>
                <div class="head-wrapper">
                    <div class="head">
                        <img src="./assets/imgs/tecnologia-igreen.png" alt="Texto escrito: Tecnologia Igreen">
                        <div class="socials">
                            <a href="<?php echo $instagram; ?>" class="social" aria-label="Instagram" target="_blank" rel="external">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 6.5H17.51M7 2H17C19.7614 2 22 4.23858 22 7V17C22 19.7614 19.7614 22 17 22H7C4.23858 22 2 19.7614 2 17V7C2 4.23858 4.23858 2 7 2ZM16 11.37C16.1234 12.2022 15.9813 13.0522 15.5938 13.799C15.2063 14.5458 14.5931 15.1514 13.8416 15.5297C13.0901 15.9079 12.2384 16.0396 11.4078 15.9059C10.5771 15.7723 9.80976 15.3801 9.21484 14.7852C8.61992 14.1902 8.22773 13.4229 8.09407 12.5922C7.9604 11.7616 8.09207 10.9099 8.47033 10.1584C8.84859 9.40685 9.45419 8.79374 10.201 8.40624C10.9478 8.01874 11.7978 7.87659 12.63 8C13.4789 8.12588 14.2649 8.52146 14.8717 9.12831C15.4785 9.73515 15.8741 10.5211 16 11.37Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="<?php echo $facebook; ?>" class="social" aria-label="Facebook" rel="external" target="_blank">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 2H15C13.6739 2 12.4021 2.52678 11.4645 3.46447C10.5268 4.40215 10 5.67392 10 7V10H7V14H10V22H14V14H17L18 10H14V7C14 6.73478 14.1054 6.48043 14.2929 6.29289C14.4804 6.10536 14.7348 6 15 6H18V2Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="<?php echo $youtube; ?>" class="social" aria-label="Youtube" rel="external" target="_blank">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.50001 17C1.80143 13.7033 1.80143 10.2967 2.50001 7C2.5918 6.66521 2.76914 6.36007 3.01461 6.11461C3.26008 5.86914 3.56522 5.69179 3.90001 5.6C9.26346 4.71146 14.7366 4.71146 20.1 5.6C20.4348 5.69179 20.7399 5.86914 20.9854 6.11461C21.2309 6.36007 21.4082 6.66521 21.5 7C22.1986 10.2967 22.1986 13.7033 21.5 17C21.4082 17.3348 21.2309 17.6399 20.9854 17.8854C20.7399 18.1309 20.4348 18.3082 20.1 18.4C14.7366 19.2887 9.26344 19.2887 3.90001 18.4C3.56522 18.3082 3.26008 18.1309 3.01461 17.8854C2.76914 17.6399 2.5918 17.3348 2.50001 17Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10 15L15 12L10 9V15Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="<?php echo $whatsapp; ?>" class="social filled-not-stroke" aria-label="Whatsapp" rel="external" target="_blank">
                                <svg fill="#000000" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.576 5.363c-2.69-2.69-6.406-4.354-10.511-4.354-8.209 0-14.865 6.655-14.865 14.865 0 2.732 0.737 5.291 2.022 7.491l-0.038-0.070-2.109 7.702 7.879-2.067c2.051 1.139 4.498 1.809 7.102 1.809h0.006c8.209-0.003 14.862-6.659 14.862-14.868 0-4.103-1.662-7.817-4.349-10.507l0 0zM16.062 28.228h-0.005c-2.319 0-4.489-0.64-6.342-1.753l0.056 0.031-0.451-0.267-4.675 1.227 1.247-4.559-0.294-0.467c-1.185-1.862-1.889-4.131-1.889-6.565 0-6.822 5.531-12.353 12.353-12.353s12.353 5.531 12.353 12.353c0 6.822-5.53 12.353-12.353 12.353h-0zM22.838 18.977c-0.371-0.186-2.197-1.083-2.537-1.208-0.341-0.124-0.589-0.185-0.837 0.187-0.246 0.371-0.958 1.207-1.175 1.455-0.216 0.249-0.434 0.279-0.805 0.094-1.15-0.466-2.138-1.087-2.997-1.852l0.010 0.009c-0.799-0.74-1.484-1.587-2.037-2.521l-0.028-0.052c-0.216-0.371-0.023-0.572 0.162-0.757 0.167-0.166 0.372-0.434 0.557-0.65 0.146-0.179 0.271-0.384 0.366-0.604l0.006-0.017c0.043-0.087 0.068-0.188 0.068-0.296 0-0.131-0.037-0.253-0.101-0.357l0.002 0.003c-0.094-0.186-0.836-2.014-1.145-2.758-0.302-0.724-0.609-0.625-0.836-0.637-0.216-0.010-0.464-0.012-0.712-0.012-0.395 0.010-0.746 0.188-0.988 0.463l-0.001 0.002c-0.802 0.761-1.3 1.834-1.3 3.023 0 0.026 0 0.053 0.001 0.079l-0-0.004c0.131 1.467 0.681 2.784 1.527 3.857l-0.012-0.015c1.604 2.379 3.742 4.282 6.251 5.564l0.094 0.043c0.548 0.248 1.25 0.513 1.968 0.74l0.149 0.041c0.442 0.14 0.951 0.221 1.479 0.221 0.303 0 0.601-0.027 0.889-0.078l-0.031 0.004c1.069-0.223 1.956-0.868 2.497-1.749l0.009-0.017c0.165-0.366 0.261-0.793 0.261-1.242 0-0.185-0.016-0.366-0.047-0.542l0.003 0.019c-0.092-0.155-0.34-0.247-0.712-0.434z"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="select-state">
                            <button class="select-state"><span><?php echo $current->nome; ?></span><img src="./assets/imgs/low-dropdown.svg"></button>
                            <div class="states-wrapper">
                                <ul class="states">
                                    <?php foreach ($estados as $slug => $est): if ($slug === '') continue; ?>
                                        <li>
                                            <div class="hover-flecha-menu">
                                                <a href="?state=<?php echo $slug; ?>" rel="next" target="_self"><?php echo $est->nome; ?></a>
                                            </div>
                                            <div class="popup-state"><img src="https://placehold.co/320x180?text=<?php echo urlencode($est->nome); ?>" alt="<?php echo $est->nome; ?>"></div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero">
                    <h1>Economize na sua conta de luz</h1>
                    <p>Invista numa conta de luz Igreen, sem burocracia, e economize em até <strong>8% até 100%</strong> todos os meses</p>
                    <div class="cadastrar-button hover-flecha-menu">
                        <a href="<?php echo $current->linkCadastro; ?>" rel="external" target="_blank">Cadastrar</a>
                    </div>
                </div>
                <img src="./assets/imgs/tela-app.png" alt="Tela do aplicativo Igreen plus" class="header-image">
                <img src="./assets/imgs/placa-solar.png" alt="Imagem de uma placa solar" class="header-image">
            </header>
            <main>
                <section class="why-igreen">
                    <h2>Por que o igreen?</h2>
                    <p>Energia limpa e economia real para sua casa ou empresa.</p>
                    <ul>
                        <li class="why">
                            <img src="./assets/imgs/circle-dollar-sign.svg" alt="Imagem de uma moeda">
                            <h3>Economico</h3>
                            <p>Economia todos os meses na conta de luz</p>
                        </li>
                        <li class="why">
                            <img src="./assets/imgs/store.svg" alt="Imagem de uma loja">
                            <h3>Clube de benefícios</h3>
                            <p>Com descontos exclusivos em várias lojas pelo Brasil</p>
                        </li>
                        <li class="why">
                            <img src="./assets/imgs/solar-panel.svg" alt="Imagem de uma loja">
                            <h3>Energia Limpa</h3>
                            <p>Produzimos a energia de forma limpa e responsável</p>
                        </li>
                    </ul>
                </section>
                <section class="video">
                    <div class="video-content">
                        <h2>Assista o vídeo</h2>
                        <iframe width="560" height="315" src="<?php echo $current->iframeVideo; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </section>
                <section class="process">
                    <h2>Processo</h2>
                    <ol>
                        <div class="progresso-wrapper">
                            <div class="progresso"></div>
                        </div>
                        <li class="part-process">
                            <p>A fazenda produz energia solar</p>
                            <img src="./assets/imgs/solar-energy.svg" alt="Imagem de uma placa solar">
                        </li>
                        <li class="part-process">
                            <p>A energia é injetada na rede da distribuidora</p>
                            <img src="./assets/imgs/energy-font.svg" alt="Imagem de um poste de energia">
                        </li>
                        <li class="part-process">
                            <p>Que distribuirá para sua casa ou empresa</p>
                            <img src="./assets/imgs/house-energy.svg" alt="Imagem de uma casa de energia">
                        </li>
                        <li class="part-process">
                            <p>Você economiza sem investimentos</p>
                            <img src="./assets/imgs/economy.svg" alt="Imagem que simboliza dinheiro e economia">
                        </li>
                    </ol>
                </section>
                <div class="law-wrapper">
                    <section class="law" data-speed="0.9">
                        <h2>Lei 14.300/2022</h2>
                        <p>Essa lei estabelece o direito dos consumidores escolherem a fonte de energia que irão
                            consumir, normalmente a energia consumida é de hidroelétricas que é uma fonte de energia não
                            renovável e com custo elevado</p>
                    </section>
                </div>
                <section class="do-your-login">
                    <h2>Faça seu cadastro</h2>
                    <ul class="formas-de-cadastro">
                        <li><img src="./assets/imgs/ticket-check.svg" alt="Imagem de um talão">
                            <p>Ultimo talão de energia</p>
                        </li>
                        <li><img src="./assets/imgs/file-check.svg" alt="Imagem de um documento">
                            <p>Documento</p>
                        </li>
                        <li><img src="./assets/imgs/scan-face.svg" alt="Imagem de um sistema de reconhecimento facial">
                            <p>Reconhecimento facial</p>
                        </li>
                        <li><img src="./assets/imgs/smartphone.svg" alt="Imagem de um celular">
                            <p>Celular/E-mail</p>
                        </li>
                    </ul>
                    <div class="cadastrar-button-black cadastrar-button hover-flecha-menu">
                        <a href="<?php echo $current->linkCadastro; ?>" rel="external" target="_blank">Cadastrar</a>
                    </div>
                </section>

                <section class="faq">
                    <h2>FAQ</h2>
                    <div>
                        <?php foreach ($perguntasRespostas as $faq): ?>
                            <article>
                                <div class="question">
                                    <h3><?php echo $faq->pergunta; ?></h3>
                                    <img src="./assets/imgs/big-dropdown.svg">
                                </div>
                                <div class="response">
                                    <p><?php echo $faq->resposta; ?></p>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </section>
            </main>
            <footer>
                <div class="infos">
                    <h2>Tecnologia Igreen</h2>
                    <div class="buttons">
                        <div class="cadastrar-button-black cadastrar-button hover-flecha-menu">
                            <a href="<?php echo $current->linkCadastro; ?>" rel="external" target="_blank">Cadastrar</a>
                        </div>
                        <div class="cadastrar-button-black cadastrar-button hover-flecha-menu">
                            <a href="<?php echo $saibaMais; ?>" rel="external" target="_blank">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="texto-infinito">
                    <?php for ($i = 0; $i < 8; $i++): ?><p>Energia Barata - </p><?php endfor; ?>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/SplitText.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollSmoother.min.js"></script>
    <script src="./scripts/select-states.js?v=13"></script>
    <script src="./scripts/handle-faq.js?v=13"></script>
    <script src="./scripts/animations.js?v=13"></script>
</body>

</html>