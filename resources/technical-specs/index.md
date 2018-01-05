---
layout: custom
title: "Especificações técnicas"
---

<div class="about-monero">
    <section class="container">
        <div class="row">
            <!-- left two-thirds block-->
            <div class="full col-xs-12">
                <div class="info-block text-adapt">

                    <div class="row">
                        <div class="col">
                            <h3>No premine, no instamine, no token</h3>
                        </div>
                    </div>

<div markdown="1">
* Monero had no premine or instamine
* Monero did not sell any token
* Monero had no presale of any kind
</div>

                    <div class="row">
                        <div class="col">
                            <h3>Proof of Work</h3>
                        </div>
                    </div>

<div markdown="1">
* CryptoNight
* pode mudar no futuro
</div>

                    <div class="row">
                        <div class="col">
                            <h3>Dificuldade de retarget</h3>
                        </div>
                    </div>

<div markdown="1">
* cada bloco
* com base nos últimos 720 blocos, excluindo 20% dos outliers de marca de tempo
</div>

                    <div class="row">
                        <div class="col">
                            <h3>Block time</h3>
                        </div>
                    </div>

<div markdown="1">
* +/- 2 minutos
* pode mudar no futuro, desde que a curva de emissão seja preservada
</div>

                    <div class="row">
                        <div class="col">
                            <h3>Block reward</h3>
                        </div>
                    </div>

<div markdown="1">
* diminuindo suavemente e sujeito a penalidades por blocos maiores que o tamanho médio dos últimos 100 blocos (M100)
* see the [latest block](https://moneroblocks.info/) coinbase transaction amount for current reward
</div>

                    <div class="row">
                        <div class="col">
                            <h3>Block size</h3>
                        </div>
                    </div>

<div markdown="1">
* dinâmico, máximo de 2 * M100
</div>

                    <div class="row">
                        <div class="col">
                            <h3>Curva de emissão</h3>
                        </div>
                    </div>

<div markdown="1">
* first, main curve: ~18.132 million coins by the end of May 2022
* then, tail curve: 0.6 XMR per 2-minute block, kicks in once main emission is done, translates to <1% inflation decreasing over time
* see [charts and details](https://www.reddit.com/r/Monero/comments/512kwh/useful_for_learning_about_monero_coin_emission/)
</div>

                    <div class="row">
                        <div class="col">
                            <h3>Oferta máxima</h3>
                        </div>
                    </div>

<div markdown="1">
* infinite
</div>

                    <div class="row">
                        <div class="col">
                            <h3>Privacidade do remetente</h3>
                        </div>
                    </div>

<div markdown="1">
* Ring signatures
</div>

                    <div class="row">
                        <div class="col">
                            <h3>Privacidade do destinatário</h3>
                        </div>
                    </div>

<div markdown="1">
* Endereços furtivos
</div>

                    <div class="row">
                        <div class="col">
                            <h3>Amount obfuscation</h3>
                        </div>
                    </div>

<div markdown="1">
* Ring confidential transactions
</div>

                </div>
            </div>
            <!-- end right one-third block-->
        </div>
        
    </section>
</div>
