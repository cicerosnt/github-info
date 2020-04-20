# Consumindo a api do GitHub com PHP com auxilio do Composer: Lista repositório e seguidores.

## Testar

### Altere a  variável “$user” dentro de dentro do arquivo header.php

```sh
$user = 'your_user';
```

### Paginas dinâmicas 

Para alterar os nomes das paginas, altere os valores do array “$pages” no arquivo index.php com os valores atuais.

```sh
$url = (isset($_GET['url'])) ? strip_tags(addslashes($_GET['url'])) : '';
$params = explode('/', $url);
$ispage = $params[0];

$pages = array('repositories','followers','all','exit');

if(isset($ispage) && $ispage == ''){
  include "repositories.php";
}elseif(isset($ispage) && $ispage == 'all'){
  include "repositories.php";
  include "followers.php";
}elseif(isset($ispage) && in_array($ispage, $pages)){
  include "$ispage".'.php';
}else{
  include "error.php";
}
```

### Using Bower

após a configuração, acesse o script no Browser.

```sh
localhost/github-info
```