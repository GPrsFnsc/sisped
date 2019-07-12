CooperSystem - Sisped
Passos para instação do sistema.

No terminal do seu sistema operacional, acesse a pasta onde deseja clonar o projeto

Digite o seguinte comando:

git clone https://github.com/GuilhermePeres/sisped.git

Após clonar o projeto, atualize os pacotes com o camando:

composer update

crie o nome da base como sisped.

abra o arquivo TABELA.txt e execute e script de criação tabelas no seu banco MYSQL.

Abra o aquivo .env na raiz o projeto e altere as linhas com as credenciais do seu banco de dados.

No terminal execute o comando:

php artisan serve

Passo a passo - vá em "login", faça seu cadastro, após o cadastro, conseguirá logar no sistema e cadastrar produtos e pedidos.


