# Info4m

Aluno: Giácomo Gabriel de Pontes Alves

Primeiro, em cada código, colocamos o <?php e fechando com ?> para mencionar o php. No primeiro arquivo, o Conexao.php funciona como ponte para a conexão com o banco de dados, exigindo dados como o nome de usuário, a senha, database e host.
Para o segundo arquivo, o index.php, é criado o html para o usuario digitar seu email e senha, e o php para requisitos desses dados e sua procura dentro do banco de dados.
O terceiro arquivo, o logout.php, é usado para a saída do usuário, quebrando a sessão formada para o início de outra.
O protect.php impede o usuário não logado de acessar páginas do site disponíveis apenas para quem possui login e está cadastrado no banco de dados.
Por fim, o painel.php, também possuindo html, apresenta uma mensagem de boas vindas para o usuário cadastrado que possui acesso ao painel, antes proibido pelo protect.php para usuários não cadastrados, mostrando a mensagem "Bem-vindo ao painel," e após a vírgula o nome cadastrado.
