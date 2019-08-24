# Curso de Ajax

Uma métodologia de programação que possibilita a comunicação assicrona entre front-end e back-end de aplicaçãoes.

<!-- ## Requisição Sicronas

## Requisição Assicrona -->

# Fazendo uma requisicão Ajax com XMLHttpRequest()

**Método XMLHttpRequest()** - Cria um novo objeto XMLHttpRequest.

**Método open()** - Especifica o pedido, o tipo de solicitação GET ou POST, url - url: o local do arquivo
assíncrono: verdadeiro (assíncrono) ou falso (síncrono).

**Método send()** - Envia o pedido para o servidor
Usado para solicitações GET.

Exemplo

```javascript
function requisitarPagina(url) {
  const ajax = new XMLHttpRequest();
  ajax.open("GET", url);
  ajax.send();
}
```

# Propriedades do objeto XMLHttpRequest()

**Propriedade: onreadystatechange** - Define uma função a ser chamada quando a propriedade readyState é alterada

Exemplo

```javascript
function requisitarPagina(url) {
  const ajax = new XMLHttpRequest();
  ajax.onreadystatechange = () => {
    console.log(ajax.readyState);
  };
}
```

**Propriedade: readyState** - Mantém o status do XMLHttpRequest
Status
0: pedido não inicializado
1: conexão do servidor estabelecida
2: pedido recebido
3: solicitação de processamento
4: pedido finalizado e resposta pronta

Exemplo

```javascript
function requisitarPagina(url) {
  const ajax = new XMLHttpRequest();
  ajax.open("GET", url);
  console.log(
    ajax.readState
  ); /* Retorna uma conexão estabelicida com o servidor, state = 1 */
}
```

**Propriedade: responseText** - Retorna os dados da resposta como uma string

**Propriedade: responseXML** - Retorna os dados de resposta como dados XML

**Propriedade: status** - Retorna o número do status de uma solicitação
Status
200: "OK"
403: "Forbidden"
404: "Not Found"

**Propriedade: statusTest** - Retorna o texto de status (por exemplo, "OK" ou "Não encontrado")
