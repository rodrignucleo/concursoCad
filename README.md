

# Teste Desenvolvedor PHP / Laravel / Angular

Antes de iniciar o teste recomenda-se seguir o tutorial para configuração
do ambiente de trabalho, disponível em: [Ubuntu-Laravel-Angular-Environment-Config](https://github.com/DaanKrug/Ubuntu-Laravel-Angular-Environment-Config)

Se você usa outro sistema operacional diferente do Ubuntu, não há problemas, desde que consiga
ter instaladas as ferramentas/programas listados ali neste tutorial 
- (NodeJs e NPM não serão necessários caso não vá usar Angular e afins para criar a interface).

## Instruções
- Importar a aplicação e rodar use: php artisan serve
- Para rodar as migrations com a base de dados use: php artisan migrate
- Após rodas o migrate rode o arquivo .sql no PhpMyAdmin


- Editar o arquivo .env para apontar corretamente a conexão com o banco de dados
	
		DB_CONNECTION=mysql
		DB_HOST=127.0.0.1
		DB_PORT=3306
		DB_DATABASE=concurso
		DB_USERNAME=root
		DB_PASSWORD=123456
	