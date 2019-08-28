### O que é PDO ?

A extensão PHP Data Objects ( PDO ) define uma interface leve e consistente para acessar bancos de dados no PHP. Cada driver de banco de dados que implementa a interface do PDO pode expor recursos específicos do banco de dados como funções de extensão regulares. Note que você não pode executar nenhuma função de banco de dados usando a extensão PDO sozinha; você deve usar um driver PDO específico do banco de dados para acessar um servidor de banco de dados.

O PDO fornece uma camada de abstração de acesso a dados , o que significa que, independentemente de qual banco de dados você está usando, você usa as mesmas funções para emitir consultas e buscar dados. O PDO não fornece uma abstração de banco de dados ; Ele não reescreve o SQL ou emula os recursos ausentes. Você deve usar uma camada de abstração completa se precisar dessa facilidade.

PDO vem com o PHP 5.1, e está disponível como uma extensão PECL para PHP 5.0; O PDO requer os novos recursos OO no núcleo do PHP 5 e, portanto, não será executado com versões anteriores do PHP.
**Link:** [Documentação PHP](https://www.php.net/manual/pt_BR/intro.pdo.php)

## Criando uma conexão entre PHP e o MySQL com PDO

Conectando com MySQL

```php
$host = 'msql:host=localhost;bdname=teste';
$user = 'root';
$senha = '';

$conexao = new PDO($host, $user, $senha);

```

## Tratando erros com Exception (PDOException)

PDOExcpetion - Representa um erro levantado pelo PDO. Você não deve lançar uma PDOException do seu próprio código. Veja Exceções para mais informações sobre Exceções no PHP.
**Link:** [Documentação PHP Exception](https://www.php.net/manual/pt_BR/class.pdoexception.php)

```php
$host = 'msql:host=localhost;bdname=ttteste'; // error causado pois o nome do banco de dados esta errado
$user = 'root';
$senha = '';

try {
$conexao = new PDO($host, $user, $senha);
} catch(PDOException $err) {
  // tratar o error aqui!!!
}
```

## Executar instruções SQL

```sql

$query = '
  CREATE TABLE tb_usuarios (
    id int not null primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    senha varchar(30) not null
  )
';

$conexao->exec($query); /* return 0 */

$query = '
  INSERT INTO tb_usuarios(
    nome, email, senha
  ) VALUES (
    "Jefferson", "test@teste.com", "123"
  )
';

$conexao->exec($query); /* return 1 */
```

## PDOStentament Object (Query) com fetchAll

Retorna uma matriz contendo todas as linhas do conjunto de resultados

```sql

$query = '
  SELECT * FROM tb_usuarios
';

$stmt = $conexao->query($query);
$list = $stmt->fetchAll();

echo $list[1]['email']
```

## PDOStentament Object - fetchAll - Tipos de retorno

PDO::FETCH_ASSOC
PDO::FETCH_NUM
PDO::FETCH_BOTH
PDO::FETCH_OBJ

```sql

$query = '
  SELECT * FROM tb_usuarios
';

$stmt = $conexao->query($query);
$list = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo $list[1]['email']
```
