---
layout: custom
title: "Aceitar a Petcoin"
---

<section class="container">
            <div class="row">
                <!-- left two-thirds block-->
                <div class="full">
                    <div class="info-block text-adapt">
                        <div class="row center-xs">
                            <div class="col">
                                <h2>Instruções para a interface de linha de comando</h2>
                            </div>
                        </div>
<div markdown="1">
                           
### Os básicos

A Petcoin funciona de uma maneira um pouco diferente do que possa estar habituado com outras criptografias. No caso de uma moeda digital como a Bitcoin e os seus muitos sistemas de pagamento de derivados, os comerciantes geralmente criarão um novo endereço de destinatário para cada pagamento ou utilizador.
No entanto, como a Petcoin possui endereços secretos, não é necessário ter endereços de destinatários separados para cada pagamento ou utilizador e pode ser publicado um único endereço de conta. Em vez disso, ao receber pagamentos, um comerciante irá fornecer à pessoa que paga uma "identificação de pagamento".
Uma identificação de pagamento é uma sequência hexadecimal de 64 caracteres e normalmente é criada aleatoriamente pelo comerciante. Um exemplo de uma identificação de pagamento é:
 
```
666c75666679706f6e7920697320746865206265737420706f6e792065766572
```

### Verificando um pagamento na petcoin-wallet-cli

Se quiser verificar se há um pagamento usando a petocoin-wallet-cli pode usar o comando "pagamentos" seguido da identificação do pagamento ou identificações de pagamentos que deseja verificar. Por exemplo:

```
[wallet 49VNLa]: payments 666c75666679706f6e7920697320746865206265737420706f6e792065766572
            payment                           transaction               height     amount     unlock time
 666c75666679706f6e79206973207     7ba4cd810c9b4096869849458181e98e     441942     30.00000   0
[wallet 49VNLa]: █
```

Se precisar de verificar os pagamentos de forma programada, seguem-se os detalhes na próxima seção.

### Recebendo um pagamento passo-a-passo

* Gere uma string hexadecimal aleatória de 64 caracteres para o pagamento  
* Comunique o endereço de pagamento e o endereço Petcoin ao indivíduo que efetua o pagamento  
* Verifique o pagamento usando o comando "pagamentos" em petcoin-wallet-cli

### Verificar um Pagamento Programado

Para verificar um pagamento programado, pode usar o get_payments ou get_bulk_payments JSON RPC API calls.

*get_payments*: requer um parâmetro payment_id com uma única identificação de pagamento.

*get_bulk_payments*: este é o método preferencial e requer dois parâmetros, payment_ids - a JSON array of payment IDs - e um opcional min_block_height - a altura do bloco para escanear.

Um exemplo de dados retornados é o seguinte:

```
[ monero->~ ]$ curl -X POST http://127.0.0.1:18500/json_rpc -d '{"jsonrpc":"2.0","method":"get_bulk_payments","id":"test", "params":{"payment_ids": ["666c75666679706f6e7920697320746865206265737420706f6e792065766572"]}}' -H "Content-Type: application/json"
{
  "id": "test",
  "jsonrpc": "2.0",
  "result": {
    "payments": [{
      "amount": 30000000000000,
      "block_height": 441942,
      "payment_id": "666c75666679706f6e7920697320746865206265737420706f6e792065766572",
      "tx_hash": "7ba4cd810c9b4096869849458181e98e18b6474ab66415de0f4ccf7ab1162fdf",
      "unlock_time": 0
    }]
  }
}
```

É importante notar que os montantes devolvidos estão em unidades básicas de Petcoin e não nas unidades de exibição normalmente usadas em aplicativos de utilizadores finais. Além disso, uma vez que uma transação normalmente terá vários resultados que somam o total necessário para o pagamento, os valores devem ser agrupados pelo tx_hash ou pelo payment_id e adicionados juntamente. Além disso, como várias saídas podem ter a mesma quantidade, é imperativo não tentar filtrar os dados retornados de uma única chamada de get_bulk_payments.
Antes de verificar os pagamentos, é útil verificar o daemon RPC API (a chamada do get_info RPC) para ver se foram recebidos blocos adicionais. Normalmente, quer que eles scanem apenas a partir desse bloco recebido, especificando-o como o min_block_height to get_bulk_payments.

### Programatically Scanning for Payments

* Obtenha a altura atual do bloco do daemon, e continue apenas se aumentou desde a nossa última verificação  
* Call the get_bulk_payments RPC API call with our last scanned height and the list of all payment IDs in our system  
* Armazene a altura atual do bloco como a nossa última altura escaneada  
* Remova duplicados com base nos hashes de transações que já recebemos e processamos  
                           
</div>
                    </div>
                </div>
    
                
                <!-- end right one-third block-->
            </div>
        </section>
                