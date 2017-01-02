<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 * @Traduzido por: http://phpbbportugal.com - segundo as normas do Acordo Ortográfico
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Painel de Instalação',
	'SELECT_LANG'	=> 'Selecione o idioma',

	'STAGE_INSTALL'	=> 'Instalando o phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Introdução',
	'INTRODUCTION_BODY'		=> 'Bem-vindo ao phpBB3!<br /><br />PhpBB® é a solução de Forum open source mais utilizada no mundo. PhpBB3 é a última parcela de uma linha de pacotes iniciada em 2000. Como seus predecessores, phpBB3 é rico em recursos, fácil de usar e totalmente suportado pela equipe phpBB. PhpBB3 melhora muito o que fez phpBB2 popular, e adiciona recursos comumente solicitados que não estavam presentes em versões anteriores. Esperamos que exceda suas expectativas.<br /><br />Este sistema de instalação irá guiá-lo através da instalação phpBB3, atualizando para a versão mais recente do phpBB3 de versões anteriores, bem como a conversão para phpBB3 a partir de um sistema de discussão diferente bordo (incluindo phpBB2). Para obter mais informações, recomendamos que você leia <a href="../docs/INSTALL.html"> O guia de instalação </a>.<br /><br />Para ler a licença phpBB3 ou aprender sobre a obtenção de suporte e nossa posição sobre ele, por favor selecione as opções respectivas no menu lateral. Para continuar, selecione a guia apropriada acima.',

	// Support page
	'SUPPORT_TITLE'		=> 'Suporte',
	'SUPPORT_BODY'		=> 'O suporte total será fornecido para a versão estável atual do phpBB3, gratuitamente. Isso inclui:</p><ul><li>instalação</li><li>configuração</li><li>questões técnicas</li><li>Problemas relacionados com potenciais bugs no software</li><li>Atualizando do Release Candidate (RC) para a versão estável mais recente</li><li>Conversão de phpBB 2.0.x para phpBB3</li><li>Conversão de outros softwares de discussão para phpBB3(Por favor veja o <a href="https://www.phpbb.com/community/viewforum.php?f=486">Fórum de conversores</a>)</li></ul><p>Encorajamos os usuários ainda executando versões beta do phpBB3 a substituir a instalação por uma nova cópia da versão mais recente.</p><h2>Extensions / Styles</h2><p>Para questões relativas a extensões, por favor, postar no apropriado <a href="https://www.phpbb.com/community/viewforum.php?f=451">Extensões Fórum</a>.<br />Para questões relacionadas a estilos, modelos e temas, por favor, postar no apropriado <a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a>.<br /><br />Se a sua pergunta se refere a um pacote específico, publique diretamente no tópico dedicado ao pacote.</p><h2>Obtendo Suporte</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">The phpBB Welcome Package</a><br /><a href="https://www.phpbb.com/support/">Support Section</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Quick Start Guide</a><br /><br />Para garantir que você fique atualizado com as últimas notícias e lançamentos, por que não <a href="https://www.phpbb.com/support/">Subscreva a nossa mailing list</a>?<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'Licença Pública Geral',

	// Install page
	'INSTALL_INTRO'			=> 'Bem-vindo à Instalação',
	'INSTALL_INTRO_BODY'	=> 'Com esta opção, é possível instalar o phpBB3 no seu servidor.</p><p>Para prosseguir, você precisará de suas configurações de banco de dados. Se você não souber suas configurações de banco de dados, entre em contato com o seu host e pedir para eles. Você não será capaz de continuar sem eles. Você precisa:</p>

	<ul>
		<li>O Tipo da Base de Dados - a Base de Dados que irá utilizar.</li>
		<li>O Endereço ou DNS do seu servidor de Base de Dados - o endereço do servidor da Base de Dados.</li>
		<li>A Porta do servidor de Base de Dados - a porta do servidor da Base de Dados (geralmente não é necessário).</li>
		<li>O Nome da Base de Dados - o nome da Base de Dados no servidor.</li>
		<li>P Nome do utilizador e Senha da Base de Dados - os dados para aceder à Base de Dados.</li>
	</ul>

	<p><strong>Nota:</strong> Se a sua instalação utiliza SQLite, tem que indicar o endereço completo dos ficheiros da Base de Dados no campo DNS e deixar em branco o Nome de Utilizador e Senha. Por razões de segurança, deve certificar-se que este ficheiro da Base de Dados não esteja em locais acessíveis pela web.</p>

	<p>Bases de Dados suportadas pelo phpBB3:</p>
	<ul>
		<li>MySQL 3.23 ou superior (Suporte a MySQLi)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 ou superior (direto ou via ODBC)</li>
		<li>MS SQL Server 2005 ou superior (nativo)</li>
		<li>Oracle</li>
	</ul>

	<p>Apenas as Bases de Dados suportadas pelo seu servidor estarão disponíveis.',

	'ACP_LINK'			=> 'Aceder à <a href="%1$s">ACP</a>',

    'INSTALL_PHPBB_INSTALLED'		=> 'PhpBB já está instalado.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'PhpBB ainda não está instalado.'
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'O arquivo não existe',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'Para poder instalar o phpBB o %1$s arquivo precisa existir.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Recomenda-se que o %1$s arquivo existe para uma melhor experiência do usuário fórum.',
	'FILE_NOT_WRITABLE'						=> 'Arquivo não gravável',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'Para poder instalar o phpBB o %1$s arquivo precisa ser gravável.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Recomenda-se que o %1$s arquivo seja gravável para uma melhor experiência do usuário fórum.',

	'DIRECTORY_NOT_EXISTS'						=> 'O diretório não existe',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'Para poder instalar o phpBB o %1$s diretório precisa existir.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Recomenda-se que o %1$s diretório existe para uma melhor experiência do usuário fórum.',
	'DIRECTORY_NOT_WRITABLE'					=> 'O diretório não pode ser gravado',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'Para poder instalar o phpBB o %1$s diretório precisa ser gravável.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Recomenda-se que o %1$s diretório seja gravável para uma melhor experiência do usuário fórum.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'Versão do PHP',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'PhpBB requer PHP versão 5.4.0 ou superior.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'A função PHP getimagesize () é necessária',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Para que phpBB funcione corretamente, a função getimagesize precisa estar disponível.',
	'PCRE_UTF_SUPPORT'					=> 'Suporte PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'PhpBB não será executado se sua instalação do PHP não for compilada com suporte UTF-8 na extensão PCRE.',
	'PHP_JSON_SUPPORT'					=> 'Suporte PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'Para que phpBB funcione corretamente, a extensão PHP JSON precisa estar disponível.',
	'PHP_XML_SUPPORT'					=> 'Suporte PHP XML / DOM',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'Para que phpBB funcione corretamente, a extensão PHP XML / DOM precisa estar disponível.',
    'PHP_SUPPORTED_DB'					=> 'Bancos de dados suportados',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Você deve ter suporte para pelo menos um banco de dados compatível dentro do PHP. Se nenhum módulo de banco de dados for mostrado como disponível, você deve entrar em contato com seu provedor de hospedagem ou revisar a documentação de instalação PHP relevante para obter aconselhamento.',

	'RETEST_REQUIREMENTS'	=> 'Requisitos de reanálise',

	'STAGE_REQUIREMENTS'	=> 'Verificar os requisitos'
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Você deve preencher todos os campos deste bloco.',

	'TIMEOUT_DETECTED_TITLE'	=> 'O instalador detectou um tempo limite',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'O instalador detectou um tempo limite, você pode tentar atualizar a página, o que pode levar a corrupção de dados. Sugerimos que você aumente suas configurações de tempo limite ou tente usar o CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Definir dados de instalação',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Detalhes do administrador',

	// Form labels
	'ADMIN_CONFIG'				=> 'Configuração do administrador',
	'ADMIN_PASSWORD'			=> 'Senha do Administrador',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirmar senha de administrador',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Introduza uma palavra-passe com um comprimento entre 6 e 30 caracteres.',
	'ADMIN_USERNAME'			=> 'Nome de usuário do administrador',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Introduza um nome de utilizador com um comprimento entre 3 e 20 caracteres.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'O endereço de e-mail inserido é inválido.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'As palavras-passe que introduziu não corresponderam.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'A senha inserida é muito longa. O comprimento máximo é de 30 caracteres.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'A senha inserida é muito curta. O comprimento mínimo é de 6 caracteres.',
	'INST_ERR_USER_TOO_LONG'		=> 'O nome de usuário inserido é muito longo. O comprimento máximo é de 20 caracteres.',
	'INST_ERR_USER_TOO_SHORT'		=> 'O nome de usuário inserido é muito curto. O comprimento mínimo é de 3 caracteres.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Boletim configuração do Forum',
	'DEFAULT_LANGUAGE'	=> 'Idioma padrão',
	'BOARD_NAME'		=> 'Titulo do Forum ',
	'BOARD_DESCRIPTION'	=> 'Breve descrição do Forum',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Configurações do banco de dados',

	// Form labels
	'DB_CONFIG'				=> 'Configuração do banco de dados',
	'DBMS'					=> 'Tipo de banco de dados',
	'DB_HOST'				=> 'Nome do Servidor da Base de Dados / DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN significa Data Source Name e apenas é relevante para instalações ODBC. No PostgreSQL, use localhost para ligar ao servidor local através do domínio socket UNIX e 127.0.0.1 para conetar através do TCP. Para SQLite, insira o caminho completo para o ficheiro da sua Base de Dados.',
	'DB_PORT'				=> 'Porta do Servidor da Base de Dados',
	'DB_PORT_EXPLAIN'		=> 'Só indique se o Servidor utilizar outra que não a porta padrão.',
	'DB_PASSWORD'			=> 'Senha da Base de Dados',
	'DB_NAME'				=> 'Nome da Base de Dados',
	'DB_USERNAME'			=> 'Nome de Utilizador da Base de Dados',
	'DATABASE_VERSION'		=> 'Versão da base de dados',
    'TABLE_PREFIX'			=> 'Prefixo para tabelas no banco de dados',
	'TABLE_PREFIX_EXPLAIN'	=> 'O prefixo deve começar com uma letra e deve conter apenas letras, números e sublinhados.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL com Extensão MySQLi',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'				=> 'Não é possível carregar o módulo PHP para o tipo de banco de dados selecionado.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'O prefixo inserido é inválido. Deve começar com uma letra e deve conter apenas letras, números e sublinhados.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'O prefixo de tabela que você especificou é muito longo. O comprimento máximo é %d caracteres.',
	'INST_ERR_DB_NO_NAME'			=> 'Nenhum nome de banco de dados especificado.',
	'INST_ERR_DB_FORUM_PATH'		=> 'O arquivo de banco de dados especificado está dentro da árvore de diretórios do. Você deve colocar esse arquivo em um local não acessível pela web.',
	'INST_ERR_DB_CONNECT'			=> 'Não foi possível conectar-se ao banco de dados, consulte a mensagem de erro abaixo.',
	'INST_ERR_DB_NO_ERROR'			=> 'Nenhuma mensagem de erro fornecida.',
	'INST_ERR_PREFIX'				=> 'Tabelas com o prefixo especificado já existem, escolha uma alternativa.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'A versão do MySQL instalada nesta máquina é incompatível com a opção "MySQL com MySQLi Extension" que você selecionou. Por favor, tente a opção "MySQL" em vez disso.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'A versão da extensão SQLite que você instalou é muito antiga, ele deve ser atualizado para pelo menos 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'A versão do Oracle instalada nesta máquina requer que você defina o parâmetro <var> NLS_CHARACTERSET </ var> em <var> UTF8 </ var>. Atualize sua instalação para 9.2+ ou altere o parâmetro.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'O banco de dados selecionado não foi criado na codificação <var> UNICODE </ var> ou <var> UTF8 </ var>. Tente instalar com um banco de dados em <var> UNICODE </ var> ou <var> UTF8 </ var> codificação.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'O arquivo de esquema não pode ser gravado',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'Configuração de e-mail',

// Package info
	'PACKAGE_VERSION'					=> 'Versão do pacote instalada',
	'UPDATE_INCOMPLETE'				=> 'Sua instalação do phpBB não foi atualizada corretamente.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Leia as informações abaixo para corrigir este erro.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Atualização incompleta</h1>

		<p>Percebemos que a última atualização de sua instalação do phpBB não foi concluída. Visite a <a href="%1$s" title="%1$s">Atualizador de banco de dados</a>, garantir <em>Atualizar apenas o banco de dados</em> Selecionado e clique em <strong>Enviar</strong>. Não se esqueça de apagar o diretório "install" depois de atualizar o banco de dados com êxito.</p>',

	//
	// Server data
	//
	// Form labels
	'SERVER_CONFIG'				=> 'Configuração do servidor',
	'SCRIPT_PATH'				=> 'Caminho de script',
	'SCRIPT_PATH_EXPLAIN'		=> 'O caminho onde phpBB está localizado em relação ao nome de domínio, e.g. <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'			=> 'Atenciosamente, A Administração',
	'CONFIG_SITE_DESC'					=> 'Escreva um pequeno texto a descrever o seu Fórum',
	'CONFIG_SITENAME'					=> 'oseudominio.com',

	'DEFAULT_INSTALL_POST'				=> 'Esta é uma Mensagem de exemplo, (criada automaticamente durante a instalação) do seu novo Fórum phpBB3. Pode apagar esta Mensagem, o Tópico e o Fórum quando quiser! Se tiver alguma dúvida, sugestão ou comentário sobre esta tradução para português europeu do phpBB3x, consulte a comunidade phpBB Portugal. Da mesma forma, pode visitar-nos, se desejar fazer alguma observação sobre esta tradução e o acordo ortográfico da língua portuguesa. Estamos a construir uma Comunidade phpBB em Portugal. O contributo de todos é importante. O nosso compromisso é ajudar quem nos procura. Responderemos a todos os contactos tão rápido quanto possível. A sua participação é o maior incentivo que pode nos dar. A tradução deste Fórum respeita o acordo ortográfico da língua portuguesa em vigor desde Janeiro de 2009.',

	'FORUMS_FIRST_CATEGORY'				=> 'A minha primeira Categoria',
	'FORUMS_TEST_FORUM_DESC'			=> 'Este é um Fórum de Testes.',
	'FORUMS_TEST_FORUM_TITLE'			=> 'O meu primeiro Fórum',

	'RANKS_SITE_ADMIN_TITLE'			=> 'Administrador',
	'REPORT_WAREZ'						=> 'A mensagem denunciada contém endereços ilegais ou de software pirateado.',
	'REPORT_SPAM'						=> 'A mensagem denunciada tem apenas o propósito de anunciar um sítio web ou um produto.',
	'REPORT_OFF_TOPIC'					=> 'A mensagem denunciada é desnecessária, e não faz sentido.',
	'REPORT_OTHER'						=> 'A mensagem denunciada não se encaixa em nenhuma outra categoria, use o campo de descrição para especificar uma.',

	'SMILIES_ARROW'						=> 'Seta',
	'SMILIES_CONFUSED'					=> 'Confuso',
	'SMILIES_COOL'						=> 'Fixe',
	'SMILIES_CRYING'					=> 'A chorar ou muito triste',
	'SMILIES_EMARRASSED'				=> 'Envergonhado',
	'SMILIES_EVIL'						=> 'Maligno ou muito mau',
	'SMILIES_EXCLAMATION'				=> 'Exclamação',
	'SMILIES_GEEK'						=> 'Cromo',
	'SMILIES_IDEA'						=> 'Ideia',
	'SMILIES_LAUGHING'					=> 'Alegre',
	'SMILIES_MAD'						=> 'Zangado',
	'SMILIES_MR_GREEN'					=> 'Sr. Verde',
	'SMILIES_NEUTRAL'					=> 'Neutro',
	'SMILIES_QUESTION'					=> 'Pergunta',
	'SMILIES_RAZZ'						=> 'Gargalhada',
	'SMILIES_ROLLING_EYES'				=> 'Olhos rolantes',
	'SMILIES_SAD'						=> 'Triste',
	'SMILIES_SHOCKED'					=> 'Chocado',
	'SMILIES_SMILE'						=> 'Sorridente',
	'SMILIES_SURPRISED'					=> 'Surpreendido',
	'SMILIES_TWISTED_EVIL'				=> 'Muito Mau',
	'SMILIES_UBER_GEEK'					=> 'Grande Cromo',
	'SMILIES_VERY_HAPPY'				=> 'Muito Feliz',
	'SMILIES_WINK'						=> 'Piscar o olho',

	'TOPICS_TOPIC_TITLE'				=> 'Bem-vindo ao phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Vista Geral',
	'MENU_INTRO'		=> 'Introdução',
	'MENU_LICENSE'		=> 'Licença',
	'MENU_SUPPORT'		=> 'Suporte',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Criando arquivo de configuração',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Adicionar definições de configuração',
	'TASK_ADD_DEFAULT_DATA'				=> 'Adicionando configurações padrão à base de dados',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Criando arquivo de esquema de banco de dados',
	'TASK_SETUP_DATABASE'				=> 'Configurar o banco de dados',
	'TASK_CREATE_TABLES'				=> 'Criando tabelas',

	// Install data
	'TASK_ADD_BOTS'			=> 'Registar bots',
	'TASK_ADD_LANGUAGES'	=> 'Instalação de idiomas disponíveis',
	'TASK_ADD_MODULES'		=> 'Instalando módulos',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Instalando extensões empacotadas',
    'TASK_NOTIFY_USER'			=> 'Enviar e-mail de notificação',
	'TASK_POPULATE_MIGRATIONS'	=> 'Populando migrações',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'O instalador terminou com sucesso',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Módulo não foi encontrado',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Não foi possível encontrar um módulo porque o serviço, %s, está indefinido.',

	'TASK_NOT_FOUND'				=> 'Tarefa não encontrada',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Não foi possível encontrar uma tarefa porque o serviço, %s, está indefinido.',

	'SKIP_MODULE'	=> 'Ignore “%s” módulo',
	'SKIP_TASK'		=> 'Ignore “%s” tarefa',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Todos os serviços de tarefas do instalador devem começar com "Instalador"',
	'TASK_CLASS_NOT_FOUND'				=> 'A definição do serviço da tarefa do instalador é inválida. Nome do serviço  “%1$s” fornecido, o namespace da classe esperada é “%2$s” para isso. Para obter mais informações, consulte a documentação de task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'O arquivo de configuração do instalador não pode ser gravado.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Instalar phpBB',
	'CLI_UPDATE_BOARD'				=> 'Atualizar phpBB',
 	'CLI_INSTALL_SHOW_CONFIG'		=> 'Mostrar a configuração que será utilizada',
 	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Validar um ficheiro de configuração',
 	'CLI_CONFIG_FILE'				=> 'Arquivo de configuração a ser usado',
 	'MISSING_FILE'					=> 'Não é possível acessar o arquivo %1$s',
 	'MISSING_DATA'					=> 'O arquivo de configuração está faltando dados ou pode conter configurações inválidas.',
 	'INVALID_YAML_FILE'				=> 'Não foi possível analisar o arquivo YAML  %1$s',
	'CONFIGURATION_VALID'			=> 'O arquivo de configuração é válido',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Atualizar instalação do phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Com esta opção, é possível atualizar sua instalação do phpBB para a versão mais recente.<br />Durante o processo, todos os seus arquivos serão verificados quanto à integridade. Você pode rever todas as diferenças e arquivos antes da atualização.<br /><br /> A atualização do arquivo em si pode ser feita de duas maneiras diferentes.</p><h2>Atualização Manual</h2><p>Com Esta actualização só transfere o seu conjunto pessoal de ficheiros alterados para se certificar de que não perde as suas modificações de ficheiros que pode ter feito. Depois de fazer o download deste pacote, você precisa fazer o upload manual dos arquivos para a posição correta no diretório raiz do phpBB. Uma vez feito, você é capaz de fazer a etapa de verificação de arquivo novamente para ver se você moveu os arquivos para o local correto.</p><h2>Atualização automática com FTP</h2><p> Este método é semelhante ao primeiro Um, mas sem a necessidade de baixar os arquivos alterados e enviá-los por conta própria. Isso será feito para você. Para usar este método você precisa saber seus detalhes de login FTP, pois você será solicitado para eles. Uma vez terminado, você será redirecionado para a verificação de arquivo novamente para se certificar de que tudo foi atualizado corretamente.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Anúncio de lançamento</h1>

		<p>Leia o comunicado de lançamento da versão mais recente antes de continuar o processo de atualização, pois ele pode conter informações úteis. Ele também contém links de download completo, bem como o log de alterações.</p>

		<br />

		<h1>Como atualizar sua instalação com o pacote de atualização automática</h1>

		<p>A forma recomendada de atualizar sua instalação listada aqui é válida somente para o pacote de atualização automática. Você também pode atualizar sua instalação usando os métodos listados no documento INSTALL.html. As etapas para atualizar o phpBB3 automaticamente são:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Vá para a <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">página de downloads do phpBB.com </a> E faça o download do arquivo "Automatic Update Package" .<br /><br /></li>
			<li>Descompacte o arquivo.<br /><br /></li>
			<li>Carregue as pastas completas descompactadas "install" e "vendor" para o seu diretório raiz do phpBB (onde está o seu arquivo config.php).<br /><br /></li>
		</ul>

		<p>Uma vez carregado, sua placa ficará off-line para usuários normais devido ao diretório de instalação que você carregou agora presente.<br /><br />
		<strong><a href="%1$s" title="%1$s"> Agora inicie o processo de atualização apontando o navegador para a pasta de instalação</a>.</strong><br />
		<br />
		Você será guiado pelo processo de atualização. Você será notificado assim que a atualização for concluída.
		</p>
	',
	));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Tipo de atualização a ser executada',

	'UPDATE_TYPE_ALL'		=> 'Atualizar sistema de arquivos e banco de dados',
	'UPDATE_TYPE_DB_ONLY'	=> 'Atualizar apenas banco de dados',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Método de actualização de ficheiros',

	'UPDATE_FILE_METHOD'			=> 'Método de actualização de ficheiros',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Transferir ficheiros modificados num arquivo',
	'UPDATE_FILE_METHOD_FTP'		=> 'Atualizar arquivos via FTP (Automático)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Atualizar arquivos via acesso direto ao arquivo (Automático)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Selecionar formato de arquivo de download',

	// FTP settings
	'FTP_SETTINGS'			=> 'Configurações de FTP',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Nenhum diretório de atualização válido foi encontrado, por favor, verifique se você carregou os arquivos relevantes.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'A sua versão está actualizada. Não é necessário executar a ferramenta de atualização. Se você quiser fazer uma verificação de integridade em seus arquivos, verifique se carregou os arquivos de atualização corretos.',
	'OLD_UPDATE_FILES'				=> 'Os arquivos de atualização estão desatualizados. Os arquivos de atualização encontrados são para atualizar de phpBB %1$s para phpBB %2$s mas a versão mais recente do phpBB é %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Os arquivos de atualização encontrados são incompatíveis com a versão instalada. Sua versão instalada é %1$s e o arquivo de atualização é para atualizar phpBB %2$s para %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Atualizar arquivos',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Verificar arquivos a atualizar',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Não foi possível abrir o arquivo %s.',

	'UPDATE_FILE_DIFF'		=> 'Diferindo arquivos alterados',
	'ALL_FILES_DIFFED'		=> 'Todos os arquivos modificados foram difundidos.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Atualizar arquivos',

	'DOWNLOAD'							=> 'Transfira',
	'DOWNLOAD_CONFLICTS'				=> 'Transfira ficheiros com conflitos para fundir',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Procurar por &lt;&lt;&lt; para detectar conflitos',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Transferir ficheiros modificados',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Uma vez baixado, você deve descompactar o arquivo. Você vai encontrar os arquivos modificados que você precisa para carregar para o seu diretório phpBB raiz dentro dele. Por favor, faça o upload dos ficheiros para suas respectivas localizações então. Depois de carregar todos os arquivos, você pode continuar com o processo de atualização.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'O ficheiro já está atualizado.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'O ficheiro não pode ser difundido.',
	'FILE_USED'						=> 'Informações usadas de',			// Single file
	'FILES_CONFLICT'				=> 'Ficheiros de conflitos',
	'FILES_CONFLICT_EXPLAIN'		=> 'Os seguintes ficheiros são modificados e não representam os ficheiros originais da versão antiga. PhpBB determinou que esses ficheiros criam conflitos se eles são tentados a serem mesclados. Por favor investigue os conflitos e tente resolvê-los manualmente ou continue a atualização escolhendo o método de mesclagem preferido. Se você resolver os conflitos, verifique manualmente os ficheiros novamente depois de os modificar. Você também pode escolher entre o método de fuzão preferido para cada arquivo. O primeiro resultará em um ficheiro onde as linhas conflitantes do seu arquivo antigo serão perdidas, o outro resultará em perder as alterações do ficheiro mais recente.',
	'FILES_DELETED'					=> 'Apagar Ficheiros',
	'FILES_DELETED_EXPLAIN'			=> 'Os seguintes ficheiros não existem na nova versão. Estes ficheiros têm de ser eliminados da sua instalação.',
	'FILES_MODIFIED'				=> 'Ficheiros modificados',
	'FILES_MODIFIED_EXPLAIN'		=> 'Os seguintes ficheiros são modificados e não representam os ficheiros originais da versão antiga. O ficheiro atualizado será uma fusão entre suas modificações e o novo ficheiro',
	'FILES_NEW'						=> 'Novos Ficheiros',
	'FILES_NEW_EXPLAIN'				=> 'Atualmente, os ficheiros a seguir não existem na sua instalação. Esses ficheiros serão adicionados à sua instalação.',
	'FILES_NEW_CONFLICT'			=> 'Novos ficheiros conflitantes',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Os seguintes ficheiros são novos dentro da última versão, mas foi determinado que já existe um aficheiro com o mesmo nome dentro da mesma posição. Este ficheiro será substituído pelo novo ficheiro.',
	'FILES_NOT_MODIFIED'			=> 'Ficheiros não modificados',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Os seguintes ficheiros não são modificados e representam os ficheiros phpBB originais da versão da qual você deseja atualizar.',
	'FILES_UP_TO_DATE'				=> 'ficheiros já atualizados',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Os seguintes ficheiros já estão atualizados e não precisam ser atualizados.',
	'FILES_VERSION'					=> 'Versão dos ficheiros',
    'TOGGLE_DISPLAY'				=> 'Ver / Ocultar lista de ficheiros',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Atualizando ficheiros',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'O atualizador de ficheiros “%1$s“ falhou. O instalador tentará retornar para “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'O atualizador de ficheiros falhou. Não estão disponíveis mais métodos alternativos.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Continuar processo de actualização',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Verificar ficheiros novamente',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Atualizar banco de dados',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'A atualização do banco de dados foi bem-sucedida.',

    'TASK_UPDATE_EXTENSIONS'	=> 'Atualizando extensões',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'O conversor especificado não existe.',
	'DEV_NO_TEST_FILE'			=> 'Nenhum valor foi especificado para a variável test_file no conversor. Se você é um usuário deste conversor, não deve estar vendo esse erro, informe essa mensagem para o autor do conversor. Se você é um autor de conversor, você deve especificar o nome de um arquivo que existe na placa de origem para permitir que o caminho para ele seja verificado.',
	'COULD_NOT_FIND_PATH'		=> 'Não foi possível encontrar o caminho para o forum anterior. Verifique as suas definições e tente novamente.<br />» %s  foi especificado como o caminho de origem.',
	'CONFIG_PHPBB_EMPTY'		=> 'A variável de configuração phpBB3 para “%s” está vazia.',

	'MAKE_FOLDER_WRITABLE'		=> 'Certifique-se de que esta pasta existe e é gravável pelo servidor web e tente novamente:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Certifique-se de que estas pastas existem e são graváveis ​​pelo servidor web e tente novamente:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Testar novamente',

	'NO_TABLES_FOUND'			=> 'Nenhuma tabela encontrada.',
	'TABLES_MISSING'			=> 'Não foi possível encontrar essas tabelas<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Verifique o prefixo da tabela e tente novamente.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Continuar a conversão',
	'CONTINUE_CONVERT_BODY'		=> 'Uma tentativa de conversão anterior foi determinada. Agora você pode escolher entre iniciar uma nova conversão ou continuar a conversão.',
	'CONVERT_NEW_CONVERSION'	=> 'Nova conversão',
	'CONTINUE_OLD_CONVERSION'	=> 'Continuar conversão iniciada anteriormente',

	// Start conversion
	'SUB_INTRO'					=> 'Introdução',
	'CONVERT_INTRO'				=> 'Bem-vindo ao phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'A partir daqui, você pode importar dados de outros sistemas de placa (instalados). A lista abaixo mostra todos os módulos de conversão atualmente disponíveis. Se não houver nenhum conversor mostrado nesta lista para o software da placa que você deseja converter, por favor verifique nosso site onde mais módulos de conversão podem estar disponíveis para download.',
	'AVAILABLE_CONVERTORS'		=> 'Conversores disponíveis',
	'NO_CONVERTORS'				=> 'Não há conversores disponíveis para uso.',
	'CONVERT_OPTIONS'			=> 'Opções',
	'SOFTWARE'					=> 'Software do forum',
	'VERSION'					=> 'Versão',
	'CONVERT'					=> 'Converter',

	// Settings
	'STAGE_SETTINGS'			=> 'Configurações',
	'TABLE_PREFIX_SAME'			=> 'O prefixo de tabela precisa ser aquele usado pelo software que você está convertendo.<br />» O prefixo de tabela especificado foi %s.',
	'DEFAULT_PREFIX_IS'			=> 'O conversor não conseguiu encontrar tabelas com o prefixo especificado. Certifique-se de que introduziu os detalhes correctos para a placa que está a converter. O prefixo de tabela padrão para %1$s is <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Especificar opções de conversão',
	'FORUM_PATH'				=> 'Caminho d0 forum',
	'FORUM_PATH_EXPLAIN'		=> 'Este é o caminho <strong>relativo</strong> no disco para o forum anterior a partir da<strong>raiz desta instalação phpBB3</strong>.',
	'REFRESH_PAGE'				=> 'Atualizar página para continuar a conversão',
	'REFRESH_PAGE_EXPLAIN'		=> 'Se definido como Sim, o conversor irá atualizar a página para continuar a conversão após ter terminado uma etapa. Se esta for a sua primeira conversão para fins de teste e para determinar quaisquer erros com antecedência, sugerimos que defina isto como Não.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Conversão em curso',

	'AUTHOR_NOTES'				=> 'Notas do autor<br />» %s',
	'STARTING_CONVERT'			=> 'Iniciando processo de conversão',
	'CONFIG_CONVERT'			=> 'Convertendo a configuração',
	'DONE'						=> 'Feito',
	'PREPROCESS_STEP'			=> 'Executar pré-processamento de funções / consultas',
	'FILLING_TABLE'				=> 'Tabela de preenchimento <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Preenchimento de tabelas',
	'DB_ERR_INSERT'				=> 'Erro ao processar <code>INSERT</code> consulta.',
	'DB_ERR_LAST'				=> 'Erro ao processar <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Erro ao executar <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Erro ao executar <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Erro ao executar <code>SELECT</code> query.',
	'STEP_PERCENT_COMPLETED'	=> 'Etapa <strong>%d</strong> de <strong>%d</strong>',
	'FINAL_STEP'				=> 'Passo final do processo',
	'SYNC_FORUMS'				=> 'Começando a sincronizar fóruns',
	'SYNC_POST_COUNT'			=> 'Sincronizando post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Sincronizando post_counts de <var>entry</var> %1$s to %2$s.',
	'SYNC_TOPICS'				=> 'Começando a sincronizar tópicos',
	'SYNC_TOPIC_ID'				=> 'Sincronizando tópicos de <var>topic_id</var> %1$s to %2$s.',
	'PROCESS_LAST'					=> 'Processando as últimas instruções',
	'UPDATE_TOPICS_POSTED'		=> 'Gerando tópicos de informações postadas',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Ocorreu um erro ao gerar tópicos postados. Pode repetir esta etapa no ACP depois de concluído o processo de conversão.',
	'CONTINUE_LAST'				=> 'Continuar as últimas instruções',
	'CLEAN_VERIFY'				=> 'Limpeza e verificação da estrutura final',
	'NOT_UNDERSTAND'			=> 'Não foi possível entender %s #%d, tabela %s (“%s”)',
	'NAMING_CONFLICT'			=> 'Conflito de nomeação: %s and %s são ambos falso<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Conversão concluída',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Agora você converteu sua forum com sucesso para phpBB 3.2. Agora você pode fazer login <a href="../">acessar ao forum</a>. Certifique-se de que as definições foram transferidas correctamente antes de activar o forum, eliminando o directório de instalação. Lembre-se de que a ajuda sobre o uso do phpBB está disponível on-line através da <a href="https://www.phpbb.com/support/docs/en/3.2/ug/">Documentation</a> e da <a href="https://www.phpbb.com/community/viewforum.php?f=466">support forums</a>.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'O upload de FTP para anexos está ativado no forum antiga. Desative a opção de upload FTP e verifique se um diretório de upload válido é especificado e, em seguida, copie todos os arquivos de anexo para este novo diretório acessível da Web. Depois de ter feito isso, reinicie o conversor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Não há informações de configuração disponíveis para a conversão.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Não é possível obter informações de acesso ao fórum.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Não é possível obter categorias.',
	'CONV_ERROR_GET_CONFIG'				=> 'Não foi possível recuperar a configuração do forum.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Não é possível acessar / ler  “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Não é possível obter informações de autenticação de grupo.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inconsistência na tabela de grupos detectada em in add_bots() - você precisa adicionar todos os grupos especiais se o fizer manualmente.',
	'CONV_ERROR_INSERT_BOT'				=> 'Não foi possível inserir bot na tabela de usuários.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Não foi possível inserir bot na tabela de bots.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Impossível inserir o usuário na tabela user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Erro do analisador de mensagens',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Nota para o desenvolvedor: você deve especificar $convertor[\'avatar_path\'] para usar %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'O caminho relativo para o forum de origem não foi especificado.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Observação para o desenvolvedor: você deve especificar $convertor[\'avatar_gallery_path\'] para usar %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Grupo “%1$s” não foi possível encontrar em %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Observação para o desenvolvedor: você deve especificar $convertor[\'ranks_path\'] para usar %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Observação para o desenvolvedor: você deve especificar $convertor[\'smilies_path\'] para usar %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Observação para o desenvolvedor: você deve especificar $convertor[\'upload_path\'] para usar %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Impossível inserir / atualizar configuração de permissão.',
	'CONV_ERROR_PM_COUNT'				=> 'Não é possível selecionar a pasta pm count.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Não foi possível inserir novo fórum substituindo a categoria antiga.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Não foi possível inserir novo fórum substituindo o antigo fórum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Não é possível obter informações de autenticação do usuário.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Grupo errado “%1$s” definido em %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Esta página recolhe os dados necessários para aceder à placa de origem. Insira os detalhes do banco de dados do seu antigo quadro; O conversor não irá alterar nada no banco de dados abaixo. A placa de origem deve ser desativada para permitir uma conversão consistente.',
	'CONV_SAVED_MESSAGES'				=> 'Mensagens guardadas',

	'PRE_CONVERT_COMPLETE'			=> 'Todas as etapas de pré-conversão foram concluídas com êxito. Agora você pode iniciar o processo de conversão real. Por favor note que você pode ter que fazer manualmente e ajustar várias coisas. Após a conversão, especialmente verificar as permissões atribuídas, reconstruir o índice de pesquisa que não é convertido e também certifique-se de que os arquivos foram copiados corretamente, por exemplo avatars e smilies.',
));