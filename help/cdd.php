<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
			{$v = 'Ajuda - ';}
		else if ($_COOKIE['lang'] == 'en')
			{$v = 'Help - ';}
		else if ($_COOKIE['lang'] == 'es')
			{$v = 'Ayuda - ';}
		include '../design/metadata.php'; ?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/helpbar.php' ?>

		<div class='infocontent help'>
			<h1>Classificação Decimal de Dewey</h1>
			<br />
			<ul>
			<li><a href='help/cdd#000'>Generalidades</a></li>
			<li><a href='help/cdd#100'>Filosofia</a></li>
			<li><a href='help/cdd#200'>Religião</a></li>
			<li><a href='help/cdd#300'>Ciências Sociais</a></li>
			<li><a href='help/cdd#400'>Línguas</a></li>
			<li><a href='help/cdd#500'>Ciências Puras</a></li>
			<li><a href='help/cdd#600'>Ciências Aplicadas</a></li>
			<li><a href='help/cdd#700'>Artes</a></li>
			<li><a href='help/cdd#800'>Literatura</a></li>
			<li><a href='help/cdd#900'>História & Geografia</a></li>
			</ul>
			<br />
			<hr>
			<br />
			<a name='000'></a>
			<h1>Generalidades</h1>
			<br />
			000 – Generalidades <br />
			001 – Conhecimento  / Teoria <br />
			001.4 – Métodos de estudo / Metodologia / Pesquisa <br />
			001.42 – Pesquisa científica <br />
			001.94 – Mistérios e fatos misteriosos / Pirâmides : mistérios, poderes <br />
			001.942 – Discos voadores / Óvnis, etc <br />
			001.944 – Monstros e temas relacionados <br />
			002 – O Livro <br />
			003 – Sistemas <br />
			004 – Ciência da computação <br />
			004.03 – Dicionário de computação <br />
			004.07 – Computação – Estudo e ensino <br />
			004.678 – Internet <br />
			005 – Programação de computadores <br />
			006 – Métodos especiais de computação <br />
			<br />
			010 – Bibliografias
			<br />
			011 – Bibliografias gerais <br />
			012 – Bibliografias e catálogos individuais <br />
			013 – Bibliografias e catálogos de autores por classes específicas <br />
				( por local de residência, por assunto, etc.) <br />
			014 – Bibliografias e catálogos de trabalhos anônimos ou com pseudônimos <br />
			015 – Bibliografia e catálogos de trabalhos de lugares específicos <br />
			016 – Bibliografia e catálogo de trabalhos de  assuntos específicos <br />
			016.981 1 – Bibliografia de BH <br />
			017 – Catálogos de bibliotecas privadas, públicas, leilões, vendas <br />
			018 – Catálogos arranjados por autor, assunto, data, registro. Etc. <br />
			019 – Catálogos dicionário <br />
			          Arquivos e técnicas de arquivo <br />
			020 – Biblioteca e ciência da informação <br />
			          Livro, história, impressão <br />
			021 – Conexão, relacionamento entre bibliotecas, arquivos e centros de <br />
			           informação <br />
			022 – Administração de planta física ( prédios, iluminação, ventilação, <br />
			          aquecimento, ar condicionado, equipamento, mobiliário) <br />
			023 – Administração de pessoal <br />
			025 – Operações e  rotinas de bibliotecas, arquivos e centros de informação <br />
			           Documentação <br />
			025.1 – Administração <br />
			025.2 – Aquisição e desenvolvimento da coleção <br />
			025.3 – Análise bibliográfica e controle ( catalogação, classificação, <br />
			              indexação e armazenamento da informação) <br />
			025.4 – Análises de assuntos e controle  ( CDD / CDU / Library of Congress <br />
			             Classification / Bliss’s Bibliografic Classification / Ranganathan’s <br />
			              Colon  Classification) <br />
			025.5 – Serviços aos usuários ( Referência / Serviços de informação / <br />
			             Disseminação seletiva da informação / Informação cooperativa / <br />
			             Atendimento aos leitores / Instrução de uso e orientação <br />
			             bibliográfica    ) <br />
			025.6 – Serviços de circulação interna e com outras bibliotecas <br />
			025.7 – Preparação e armazenamento / Conservação e restauração <br />
			025.8 – Manutenção e preservação das coleções ( Organização  das coleções, <br />
			             segurança e preservação do acervo) <br />
			026 – Bibliotecas, arquivos, centros de informação voltados para assuntos <br />
			          específicos <br />
			027- Bibliotecas , arquivos e centros de informação em geral <br />
			027.1 – Bibliotecas familiares e privadas <br />
			027.2 – Bibliotecas semi-privadas <br />
			027.3 – Bibliotecas comerciais <br />
			027.4 – Bibliotecas públicas <br />
			027.5 – Bibliotecas governamentais <br />
			027.6 – Bibliotecas para grupos ou organizações específicas <br />
			027.7 – Bibliotecas colegiais e universitárias <br />
			027.8 – Bibliotecas escolares <br />
			028 – Uso de outros meios de informação <br />
			<br />
			028.5 – Literatura infanto-juvenil <br />
			<br />
			030 – Enciclopédias gerais <br />
			031 – Americanas <br />
			032 – Inglesas <br />
			033 – Alemãs <br />
			034 – Francesas <br />
			035 – Italianas <br />
			036 – Espanholas e portuguesas <br />
			036.1 – Enciclopédias em espanhol <br />
			036.9 – Almanaques / Livros do ano / Livros de fatos variados/ Livros de <br />
			          curiosidades./ Guinness  / Enciclopédias gerais em português <br />
			R 036.981 – Brasileiras <br />
			037 – Línguas eslavas <br />
			038 – Línguas escandinavas <br />
			039 – Outras línguas <br />
			<br />
			050 – Publicações seriadas
			<br />
			<br />
			060 – Organizações gerais (academias, fundações, associações, conferências, <br />
			           congressos) <br />
			<br />
			069 –  Museologia <br />
			069.1 – Serviços de organização do acervo <br />
			069.132 – Acervo <br />
			069.15 – Programas educacionais, incluindo leituras, aulas e viagens <br />
			069.16 – Programas recreativos ( programas musicais, apresentações teatrais) <br />
			069.17 –  Serviços especiais para deficientes <br />
			069.2 – Organização da planta física ( localização, planejamento do prédio, <br />
			             salas especiais, sistemas de comunicação, luz, ventilação, etc) <br />
			069.3 – Equipamentos, mobiliário, audiovisual <br />
			069.4 – Preparação das coleções do museu <br />
			069.5 – Exposições e exibições do acervo <br />
			<br />
			070 – Documentários, mídia educacional, jornalismo e publicidade <br />
			070.4 – Jornalismo <br />
			070.403 – Dicionários de jornalismo <br />
			<br />
			080 – Coleções gerais: ensaios, entrevistas, endereços, etc. <br />
			<br />
			090 – Manuscritos , livros raros e outros tipos de materiais raros <br />
			091 – Manuscritos <br />
			092 – Livros manuscritos <br />
			093 – Incunábulos <br />
			094 – Livros impressos ( Primeiras impressões, edições especiais) <br />
			095 – Livros com encadernações raras <br />
			096 – Livros notáveis pelas ilustrações ou materiais com que foram <br />
			          confeccionados <br />
			097 – Livros notáveis pela origem ou por seus proprietários <br />
			098 – Trabalhos proibidos ( ou pela religião ou pelo governo), Falsificações <br />
			099 – Livros famosos pelo formato <br />
			<br />
			<hr>
			<br />
			<a name='100'></a>
			<h1>Filosofia</h1>
			<br />
			100 – Filosofia <br />
			<br />
			101 – História, fundamentos e teoria <br />
			102 – Miscelânea <br />
			103 – Dicionários e enciclopédias de filosofia <br />
			104 – Tópicos especiais <br />
			105 – Publicações seriadas <br />
			106 – Organização e desenvolvimento <br />
			107 – Ensino da filosofia / Educação e pesquisa <br />
			109 – Historia  da filosofia <br />
			<br />
			110 – Metafísica <br />
			111 – Existência / Realidade ( essência, substância, universalidade, finito e <br />
			          infinito) Propriedades do “ser”: unidade, bondade e maldade, beleza) <br />
			113 – Cosmologia ( filosofia da natureza, da vida) <br />
			114 – Espaço <br />
			115 – Tempo <br />
			116 – Escolha <br />
			117 – Estrutura <br />
			118 – Força e energia <br />
			119 – Número e quantidade <br />
			<br />
			120 – Epistemologia, gênero humano, causalidade <br />
			121 – Epistemologia ( teoria do conhecimento) <br />
			121.2 – Possibilidade e limite do conhecimento <br />
			121.3 – Origem, significado do conhecimento (percepção e sensação) <br />
			121.4 – Estrutura do conhecimento <br />
			121.5 – Dúvida e negação <br />
			121.6 – Natureza da indagação (certeza, probabilidade, evidência, critério <br />
			             significado, interpretação, hermenêutica) <br />
			121.7 – Crença <br />
			121.8 – Valores / Teoria dos valores <br />
			122 – Causalidade <br />
			123 – Determinismo e indeterminismo  (contingência) <br />
			123.3 – Probabilidade, possibilidade, oportunidade <br />
			123.5 – Liberdade <br />
			123.7 – Necessidade <br />
			124 – Teleologia <br />
			126 – Ego (personalidade, consciência) <br />
			127 – Inconsciência, subconsciência <br />
			128 – Gênero humano <br />
			128.1 – Alma <br />
			128.2 – Mente, pensamento <br />
			128.3 – Atributos e faculdades (razão, racionalidade, emoção, vontade) <br />
			            (Schopenhauer) <br />
			128.4 – Ações humanas e experiências -  Antropologia filosófica <br />
			128.46 – Amor <br />
			128.5 – Morte <br />
			128.6 – Corpo <br />
			129 – Origem e destino da alma ( imortalidade, encarnação, reencarnação) <br />
			<br />
			130 – Fenômenos paranormais <br />
			131 – Parapsicologia e métodos ocultos para conseguir, bem-estar, felicidade <br />
			          e sucesso <br />
			132 – Psiquiatria alternativa <br />
			133 – Parapsicologia e ocultismo (Magia , símbolos, aparições, adivinhações, <br />
			           numerologia, demonologia, feitiçaria) <br />
			133.5 – Astrologia <br />
			133.54 – Horóscopo <br />
			133.6 – Quiromancia <br />
			133.8 – Fenômenos físicos  (telepatia, clarividência, premonição, hipnose, <br />
			             magnetismo animal, percepção de animais, aura) <br />
			133.9 – Espiritismo / Espiritualismo ( Mediunidade, reencarnação, levitação, <br />
			             materialização) <br />
			133.93 – Obras psicografadas <br />
			135 – Sonhos e mistérios ( Cabalismo, Rosacruz, Hermetismo) <br />
			137 – Psicografia <br />
			<br />
			140 – Escolas filosóficas específicas <br />
			141 – Idealismo <br />
			141.2 – Platonismo <br />
			141.3 – Transcendentalismo <br />
			141.4 – Individualismo <br />
			141.5 – Personalismo <br />
			141.6 – Romancismo <br />
			142 – Filosofia crítica (Kantinismo, fenomenologia) <br />
			142.78 – Existencialismo <br />
			143 – Bergsonismo e intuicionismo <br />
			144 – Humanismo (Pragmatismo, instrumentalismo, utilitarismo) <br />
			145 – Sensacionalismo <br />
			146 –  Naturalismo <br />
			146.3 – Materialismo <br />
			146.4 – Positivismo (Contismo, empiricismo, atomismo, mecanismo, <br />
			             evolucionismo) <br />
			147 – Panteísmo <br />
			148 – Dogmatismo, ecleticismo, liberalismo, sincretismo, tradicionalismo <br />
			149 – Outros sistemas filosóficos : Construtivismo, objetivismo, relativismo <br />
			149.1 –  Nominalismo e Conceptualismo <br />
			149.2 – Realismo <br />
			149.3 – Misticismo <br />
			149.5 – Otimismo <br />
			149.6 – Pessimismo <br />
			149.7 – Racionalismo (Agnosticismo) <br />
			149.8 – Niilismo <br />
			149.9 – Outros : Estruturalismo, Pós-modernismo <br />
			<br />
			150 – Psicologia <br />
			<br />
			150.1 – Teoria e filosofia <br />
			150.195 – Sistemas psicoanalíticos / Psicoanálise <br />
			150.195 2 –  Sistema Freudiano <br />
			150.195 3 – Sistema Adleriano <br />
			150.195 4 – Sistema Jungiano <br />
			150.195 7 – Sistema Neopsicoanalítico <br />
			150.198 – Outros <br />
			150.287 – Testes <br />
			150.3 – Dicionário de psicologia <br />
			150.7 – Psicologia – Estudo e ensino <br />
			150.724 – Pesquisas experimentais <br />
			<br />
			152.1 – Percepção sensorial <br />
			152.3 – Movimentos e função motora ( reflexo, coordenação, locomoção) <br />
			152.4 – Emoções e sentimentos <br />
			152.41 – Amor e afeição <br />
			152.42 – Prazer, felicidade , alegria <br />
			152.43 – Humor <br />
			152.46 – Medo / ansiedade / preocupação <br />
			152.47 – Raiva, frustração, agressão <br />
			152.48 – Ciúme, inveja <br />
			<br />
			153 – Processos mentais e inteligência / Psicologia cognitiva <br />
			153.1 – Memória e aprendizagem <br />
			153.2 – Formação e associação de idéias <br />
			153.3 – Imaginação e criatividade <br />
			153.4 – Intuição, pensamento, valor, julgamento <br />
			153.42 – Pensamento <br />
			153.43 – Raciocínio <br />
			153.44 – Intuição <br />
			153.45 – Valor <br />
			153.46 – Julgamento <br />
			153.6 – Comunicação <br />
			153.7 – Percepção <br />
			153.8 – Vontade, força de vontade <br />
			153.9 – Inteligência e atitudes <br />
			153.93 – Testes de inteligência e personalidade <br />
			153.94 – Testes de aptidão e vocacionais <br />
			<br />
			154 – Subconsciente e estados e processos alterados <br />
			154.2 – Subconsciente ( Id, Ego e Superego) <br />
			154.3 – Sonhos , fantasias , devaneios <br />
			154.4 – Estados alterados da consciência ( por uso de drogas, alucinações) <br />
			154.6 – Fenômenos do sono <br />
			154.63 – Sonhos <br />
			154.64 – Sonambulismo <br />
			154.7 – Hipnotismo <br />
			<br />
			155 – Psicologia diferencial <br />
			155.2 – Psicologia individual  / Personalidade <br />
			155.22 – Diferenças individuais <br />
			155.23 – Traços determinantes de caráter  ou personalidade ( altruísmo, <br />
			                dependência, extroversão, introversão, julgamento moral, <br />
			                perfeccionismo, etc.) <br />
			155.24 – Adaptação e ajustamento ( atitudes em relação ao outro e a si) <br />
			155.25 – Desenvolvimento e modificação de caráter e personalidade <br />
			               ( maturidade, controle próprio, etc. ) <br />
			155.3 – Psicologia sexual <br />
			155.4 – Psicologia infantil   /   do desenvolvimento <br />
			155.413 – Processos mentais /  Inteligência <br />
			155.45 – Crianças excepcionais <br />
			155.5 – Psicologia do adolescente <br />
			155.6 – Psicologia do adulto <br />
			155.632 – Homens <br />
			155.633 – Mulheres <br />
			155.7 – Psicologia evolutiva / Evolução da mentalidade / Comportamento <br />
			             genético <br />
			155.8 – Étnico-psicologia e psicologia nacional <br />
			155.9 – Psicologia – Influencia do ambiente <br />
			155.904 – Stress <br />
			155.91 – Influência de acontecimentos e condições físicas ( estímulos <br />
			               sensoriais, doenças, desfiguramentos, etc) <br />
			155.92 – Influência de acontecimentos sociais <br />
			155.93 – Influência de situações específicas ( divorcio, catástrofes, acidentes) <br />
			155.937 – Psicologia – influencia da morte <br />
			155.94 – Influência da comunidade ou de casa ( comunidades rurais, urbanas) <br />
			155.95 – Influência dos vestuários / Moda, história   /   evolução das roupas <br />
			155.96 – Influência de acontecimentos restritivos como prisões <br />
			              Vida  subterrânea ( em minas, túneis, cavernas) <br />
			              Vida marinha e submarinha – Psicologia marinha <br />
			              Vida aérea – Psicologia da aviação <br />
			              Vida espacial – Psicologia espacial <br />
			<br />
			156 – Psicologia comparada <br />
			<br />
			158 – Psicologia aplicada <br />
			158.1 –  do Comportamento <br />
			              Auto ajuda / Aperfeiçoamento pessoal / Equilíbrio pessoal <br />
			158.125 – Meditação transcendental <br />
			158.128 – Meditação <br />
			158.2 – Relações humanas / Valores éticos (amizade, cooperação, diálogo, <br />
			             respeito, responsabilidade, etc.) <br />
			158.3 – Aconselhamento psicológico <br />
			158.4 – Chefia <br />
			158.5 – Negociação <br />
			158.6 – Interesse vocacional – Orientação vocacional <br />
			158.7 – Psicologia industrial (  Stress do trabalho ) <br />
			158.9 – Sistemas e escolas de psicologia aplicada <br />
			<br />
			160 – Lógica / Dialética <br />
			161 – Indução <br />
			162 – Dedução <br />
			165 – Enganos e origem do erro / Contradição / Ficção e paradoxos <br />
			166 – Silogismo <br />
			167 – Hipóteses <br />
			168 – Argumento e persuasão <br />
			169 – Analogia <br />
			<br />
			170 – Ética / Moral <br />
			171 – Sistemas éticos <br />
			172 – Ética política <br />
			173 – Ética familiar <br />
			174 – Ética profissional / Ocupacional <br />
			174.1 – Clero <br />
			174.2 – Médico <br />
			174.25 – Projeto Genoma – aspectos morais e éticos <br />
			174.3 – Advogado <br />
			174.4 – Negócios <br />
			174.9 – Outras profissões <br />
			175 – Ética da comunicação e recreação <br />
			176 – Ética no sexo e reprodução ( prostituição, pornografia e obscenidade, <br />
			          inclusive na literatura) <br />
			177 – Ética nas relações sociais / Ética social  /  Fofocas <br />
			177.1 – Cortesia, hospitalidade, polidez <br />
			177.2 – Conversação <br />
			177.3 – Verdade, mentira, bajulação, calúnia <br />
			177.4 – Aparência pessoal <br />
			177.5 – Escravidão e trabalho forçado <br />
			177.6 – Amor / Amizade <br />
			178 – Ética no consumo (abstinência, gula, álcool, tabaco, drogas ) <br />
			179 – Outras  (classificar aqui crueldade) <br />
			179.1 –Respeito pela vida e natureza <br />
			179.2 –Tratamento à criança <br />
			179.3 – Tratamento aos animais <br />
			179.4 – Experiências com animais <br />
			179.5 – Blasfêmia, profanação, obscenidade <br />
			179.6 – Coragem , covardia <br />
			179.7 – Respeito e desrespeito à vida humana ( genocídio, homicídio, <br />
			             suicídio, pena de morte, duelo, eutanásia ) <br />
			179.8 – Vícios , faltas e defeitos ( ira, fraude, cobiça, inveja, ódio, aversão, <br />
			             ciúme, desconfiança, orgulho, vaidade e preguiça) <br />
			179.9 – Virtudes / Valores ( alegria, gentileza, gratidão, honestidade, <br />
			              humildade, modéstia, paciência, prudência, autocontrole, <br />
			              autoconfiança, tolerância ) Caráter <br />
			<br />
			180 – Filosofias antiga, medieval e ocidental <br />
			181 – Filosofia oriental (Leste e sul da Ásia, China e Coreia , Japão, Egito, <br />
			          Palestina, Israel, Índia, Irã, Iraque, Síria e Líbano, Arábia) <br />
			181.45 – Yoga <br />
			182 – Filosofia grega pré-Sócrates <br />
			183 – Filosofia grega <br />
			183.2 – Filosofia de Sócrates <br />
			184 – Filosofia de Platão <br />
			185 – Filosofia de Aristóteles <br />
			186 – Filosofia séptica e neoplatônica <br />
			187 – Filosofia epicurista <br />
			188 – Filosofia estóica <br />
			189 – Filosofia medieval ocidental <br />
			190 – Filosofia ocidental moderna <br />
			191 – Filosofia americana e canadense <br />
			192 – Filosofia inglesa <br />
			193 – Filosofia austríaca e alemã ( Schopenhauer, ... ) <br />
			194 – Filosofia francesa ( Rousseau, Jean-Jacques... ) <br />
			195 – Filosofia italiana <br />
			196 – Filosofia espanhola e portuguesa <br />
			197 – Filosofia russa e países soviéticos <br />
			198 – Filosofia escandinava <br />
			199 – Outras <br />
			<br />
			<hr>
			<br />
			<a name='200'></a>
			<h1>Religião</h1>
			<br />
			200 – Religião <br />
			<br />
			200.1 – Valores, princípios <br />
			200.3 – Dicionários e enciclopédias de religiões <br />
			<br />
			200.19 – Psicologia religiosa <br />
			200.71 – Educação <br />
			200.9 – História – Atlas Bíblico <br />
			210 – Filosofia e teoria da religião <br />
			211 – Conceitos de Deus  / Fé ( classificar aqui  trabalhos sobre Deus e a Fé) <br />
				( Panteísmo, Teísmo, Racionalismo, Deísmo, Humanismo, <br />
				Agnosticismo) <br />
			211.8 – Ateísmo <br />
			212 – Existência, conhecimento e atributos  de Deus <br />
			213 – Criação e evolução do homem <br />
			215 – Ciência e religião <br />
			218 – Gênero humano (incluindo imortalidade ) <br />
			<br />
			220 – Bíblia <br />
			220.7 – Estudo da Bíblia <br />
			220.9 – Bíblia – Atlas histórico / Descrição e geografia bíblicas <br />
			220.93 – Arqueologia bíblica <br />
			221 – Antigo Testamento <br />
			222 – Livros históricos do AT ( Pentateuco, Gênesis, Êxodo, Levítico, <br />
			          Números, Deuteronômio, Josué, Juizes, Rute, Samuel, Reis, Crônicas, <br />
			          Esdras, Neemias, Ester) <br />
			223 – Livros poéticos do  AT (Jó, Eclesiastes) <br />
			223.2 – Salmos <br />
			223.7 – Provérbios <br />
			223.9 – Cantos de Salomão (Cântico dos Cânticos) <br />
			224 – Livros proféticos do AT (Isaías, Geremias, Lamentações, Esequiel, <br />
			          Daniel, Oséias, Joel, Amós, Profetas Menores) <br />
			225 – Novo Testamento <br />
			226 – Evangelhos e Atos dos Apóstolos <br />
			226.2 – Evangelho de Mateus <br />
			226.3 – de Marcos <br />
			226.4 – de Lucas <br />
			226.5 – de João <br />
			226.6 – Atos dos Apóstolos <br />
			226.7 – Milagres <br />
			226.8 – Parábolas <br />
			226.9 – Sermão da Montanha <br />
			226.96 – Pai Nosso <br />
			227 – Epístolas <br />
			227.1 – Aos Romanos <br />
			227.2 –Aos Coríntios I <br />
			227.3 – Aos Coríntios II <br />
			227.4 – Aos Gálatas <br />
			227.5 – Aos Efésios <br />
			227.6 – Aos Filipenses <br />
			227.7 – Aos Colossences <br />
			227.8 – Outras epístolas de São Paulo <br />
			227.81 – Aos Tessalonissenses I <br />
			227.82 – Aos Tessalonissenses II <br />
			227.83 – A Timóteo I <br />
			227.84 – A Timóteo II <br />
			227.85 – A Tito <br />
			227.86 – A Filemon <br />
			227.87 –Aos Hebreus <br />
			227.9 – Epístolas católicas <br />
			227.91 – Tiago <br />
			227.92 – Pedro I <br />
			227.93 – Pedro II <br />
			227.94 – João I <br />
			227.95 – João II <br />
			227.96 – João III <br />
			227.97 – Judas <br />
			228 – Apocalípse <br />
			229 – Trabalhos Apócrifos, Pseudoepígrafos, Intertestamentais <br />
			<br />
			230 – Cristianismo / Teologia Cristã / Mitologia cristã <br />
			230.007 – Educação, pesquisa <br />
			231 – Deus  -  Modos do conhecimento de Deus como Fé / Razão /  Tradição <br />
			231.1 – Santíssima Trindade <br />
			232 – Jesus Cristo, sua vida  e sua família  -  Cristologia <br />
			232.1 – Encarnação <br />
			232.3 – Cristo como Redentor <br />
			232.4 – Sacrifício de Cristo <br />
			232.5 – Ressurreição <br />
			232.8 – Divindade e humanidade <br />
			232.9 – Família e vida de Jesus <br />
			232.901 – Vida de Jesus <br />
			232.903 – Caráter e personalidade de Jesus <br />
			232.91 – Maria como Mãe de Jesus ( Mariologia) <br />
			232.911 – Imaculada Conceição <br />
			232.912 – Anunciação <br />
			232.913 – Virgindade <br />
			232.914 – Assunção <br />
			232.915 – Santidade e virtudes – Milagres de Nossa Senhora <br />
			232.92 – Nascimento e infância de Jesus <br />
			232.93 – Família de Maria <br />
			232.932 – José <br />
			232.94 – João Batista <br />
			232.95 – Vida pública <br />
			232.955 – Milagres de Jesus <br />
			232.96 – Paixão e Morte <br />
			232.964 – Sepultamento  / Santo Sudário <br />
			232.97 – Ressurreição <br />
			<br />
			233 – Gênero Humano (Criação , natureza divina, tentação, liberdade de <br />
			          escolha e pecado ) <br />
			234 – Salvação e graça / Santificação <br />
			234.1 – Tipos e significados da graça <br />
			234.16 –  Pelos sacramentos <br />
			234.2 – Fé e esperança <br />
			234.3 – Redenção <br />
			234.4 – Regeneração <br />
			234.5 – Arrependimento e perdão <br />
			234.6 – Obediência <br />
			234.7 – Absolvição <br />
			234.8 – Santificação e santidade <br />
			234.9 – Predestinação e livre arbítrio <br />
			235 – Vida espiritual <br />
			235.2 – Santos <br />
			235.3 – Anjos <br />
			235.4 – Demônio <br />
			236 – Escatologia ( Morte, vida eterna, céu, purgatório, inferno) <br />
			238 – Credos, confissão das faltas  /  Promessas <br />
			239 – Polêmicas (Argumentações sobre dogmas cristãos: virgindade, <br />
			          SS. Trindade, etc.) <br />
			<br />
			240 – Moral cristã e teologia da devoção (Consciência, virtudes, códigos de <br />
			          conduta, vícios, Pecado) <br />
			241 – Teologia moral <br />
			241.1 – Consciência <br />
			241.2 – Leis e bases da moralidade <br />
			241.3 – Pecado e vícios <br />
			241.4 – Virtudes <br />
			241.5 – Códigos de conduta ( Dez Mandamentos, Sermão da Montanha ) <br />
			241.6 – Questões morais específicas  / Ética, moral, sexualidade religiosas <br />
			             (relacionamento conjugal, controle de natalidade, namoro, noivado <br />
			             casamento, família) - ver também 392.4 e 392.5 <br />
			242 – Orações / Preces / Literatura devota / Textos de meditação e <br />
			          contemplação ) <br />
			242.2 – Orações de uso diário <br />
			242.3 – Orações de uso no ano litúrgico / festas religiosas / Símbolos <br />
			242.332 – Advento <br />
			242.335 – Natal <br />
			242.34 – Quaresma <br />
			232.35 – Semana Santa <br />
			242.36 – Páscoa / Ascensão <br />
			242.37 – Outras festas / Dias de Santos <br />
			242.38 – Pentecostes <br />
			242.5 – Preces e meditações baseadas na Bíblia <br />
			243 – Escritos evangélicos para pessoas e para famílias <br />
			246 – Uso da arte no cristianismo <br />
			246.5 – Ícones,  símbolos , incenso, velas, cruzes, crucifixos, cores e luzes <br />
			246.7 – Dramatizações <br />
			246.75 – Músicas <br />
			247 – Mobiliário religioso <br />
			248 – Cristãos: experiência, prática, vida, misticismo, conversão, cultos e <br />
			          testemunhos <br />
			248.2 – Experiências religiosas (Misticismo, conversão) <br />
			248.3 – Cultos, preces, meditações e contemplações <br />
			             Prática religiosa <br />
			            Amor a Deus <br />
			248.4 – Vida e práticas cristãs  /  Reflexões  /  Mensagens / Espiritualidade <br />
			             Guias para a vida familiar cristã <br />
			248.5 - Testemunhos <br />
			248.8 – Guias de vida para cristãos por classes específicas : <br />
			248.82 – Crianças <br />
			248.83 – Jovens <br />
			248.84 – Adultos <br />
			248.842 – Homens <br />
			248.842 1 – Pais <br />
			248.843 – Mulheres <br />
			248.843 1 – Mães <br />
			248.844 – Casais <br />
			248.846 – Pessoas separadas, divorciadas <br />
			248.85 – Velhos <br />
			248.86 – Doentes, deficientes <br />
			248.88 – Classes ocupacionais <br />
			248.894 2 –  Padres  /  Vocações <br />
			248.894 3 – Freiras  /  Vocações <br />
			249 – Observância católica na vida familiar: preces, ritos, cerimônias <br />
			           familiares <br />
			<br />
			250 – Ordens religiosas e igrejas locais <br />
			251 – Práticas <br />
			252 – Sermões <br />
			253 – Trabalho pastoral <br />
			253.78 – Pelo rádio e televisão <br />
			254 – Administração da paróquia <br />
			255 – Congregações religiosas ( p/ homens e p/ mulheres) <br />
			258 – Assistência religiosa / Pastoral <br />
			259 – Campanhas/ Cuidados /Campanha da Fraternidade <br />
			<br />
			260 – Teologia social e eclesiástica / Organização do Cristianismo <br />
			261 – Papel da Igreja na sociedade ( Igreja x Outras religiões / Igreja x <br />
			          Política / Igreja x Problemas sócio- econômicos  como fome, crimes, <br />
			          ecologia, racismo, sexo, guerras, etc. <br />
			261.7 – Cristianismo e política <br />
			              Cristianismo e direitos civis <br />
			261.72 – Liberdade religiosa <br />
			261.73 – Teocracia ( Supremacia da Igreja sobre o governo civil) <br />
			262 – A Igreja <br />
			262.006 – Administração, organização <br />
			262.1 – Função e autoridade dos chefes da Igreja <br />
			262.12 – Bispos, arcebispos, etc.  Conferencias de bispos <br />
			262.13 – Papa ( infabilidade, mandato) <br />
			262.135 – Colégio de cardeais <br />
			262.14 – Clero local / Paróquias <br />
			262.5 – Concílios <br />
			262.7 – Relação de Deus com a Igreja / Comunicação de Santos <br />
			262.9 – Normas e leis e disciplina da Igreja <br />
			262.91 – Encíclicas, decretos papais <br />
			262.92 – Códigos antigos <br />
			262.93 – Códigos novos <br />
			262.94 – Códigos novos <br />
			263 – Observância dos dias e tempos próprios da Igreja / Celebrações <br />
			263.3 – Domingo <br />
			263.9 – Dias e tempos do ano religioso <br />
			263.912 – Advento <br />
			263.915 – Natal <br />
			263.92 – Quaresma <br />
			263.93 – Páscoa e Ascensão <br />
			263.94 – Pentecostes <br />
			263.97 – Outras festas <br />
			263.98 – Dias santos <br />
			264 – Cerimônias / Ritos / Liturgia <br />
			264.023 – Missais - Textos <br />
			264.1 – Preces / Breviários <br />
			264.2 – Músicas  / Cantos / Hinos <br />
			264.3 – Missa  / Eucaristia <br />
			264.36 – Primeira Eucaristia <br />
			265 – Sacramentos <br />
			265.1 – Batismo <br />
			265.2 – Crisma <br />
			265.4 – Ordem <br />                                                                                         
			265.5 –  Matrimônio /Casamento <br />
			265.6 –Penitência / Confissão <br />
			265.7 – Eucaristia <br />
			265.8 – Extrema unção <br />
			265.9 – Outros <br />
			265.94 – Exorcismo <br />                                                  
			266 –Missões / Comunidade   Eclesial de Base / Evangelização <br />
			267 – Grupos de trabalhos religiosos  / Encontro de casais, Jovens, etc. <br />
			268 – Ensino Religioso  /   Catequese     ( Pista – Religião – Estudo e ensino) <br />
			269 – Conversão / Renovação <br />
			<br />
			270 – História do cristianismo e igreja cristã <br />
			270.6 – Reforma protestante com enfoque religioso ( ver tb. 940.23) <br />
			271 – Ordens e congregações na Hist. da Igreja - Para homens: (Católicas) <br />
			271.1 – Beneditinos <br />
			271.125 – Trapistas <br />
			271.2 – Dominicanos <br />
			271.3 – Franciscanos <br />
			271.36 – Capuchinhos <br />
			271.4 – Agostinianos <br />
			271.5 – Cléricos regulares <br />
			271.53 – Jesuítas <br />
			271.6 – Redentoristas e Passionistas <br />
			271.7 – Outras ordens católicas <br />
			271.73 – Carmelitas <br />
			271.76 – Oblatas <br />
			271.77 – Lazaristas <br />
			271.79 – Outras ordens católicas para homens (Ordens militares, Cruz de <br />
			               Malta, Templários) <br />
			271.8 – Ordens não católicas romanas <br />
			271.83 –Anglicanos <br />
			271.9 – Congregações e ordens católicas romanas para mulheres <br />
			271.98 – Ordens não católicas romanas <br />
			272 – Perseguições religiosas na história da Igreja  / Inquisição/ Mártires <br />
			273 – Controvérsias e heresias na história da Igreja <br />
			278 – História da igreja <br />
			<br />
			280 – Denominações e seitas de igrejas cristãs <br />
			282 – Igreja Católica Romana <br />
			282.03 – Dicionários e enciclopédias da doutrina católica <br />
			283 – Igreja Anglicana <br />
			284 – Igreja Protestante <br />
			285 – Igreja Presbiteriana <br />
			286 – Igrejas Batista, Adventista, Discípulo de Cristo, do Sétimo Dia <br />
			287 – Igreja Metodista <br />
			289 – Outras: Universal, Últimos dias, Nova Jerusalém, Quakers, etc <br />
			<br />
			290 – Outras religiões
			291 – Religiões comparadas (Comparações diversas com política, com <br />
			          sociedade, com problemas sócio- econômicos, etc.) <br />
			291.09 – Religiões - História <br />
			291.2 – Doutrinas ( classificar aqui doutrinas polêmicas como espiritismo, <br />
			             animalismo, deuses do mal, do bem, espíritos, etc.) <br />
			291.23 – Escatologia ( incluindo morte, fim do mundo, imortalidade, outros <br />
			               mundos, Ressurreição) <br />
			291.237 – Reencarnação <br />
			<br />
			292 – Religiões clássicas <br />
			292.07 – Religião romana <br />
			292.08 – Religião grega <br />
			292.13 - Mitologia <br />
			293 – Religiões germânicas <br />
			294 – Religiões indianas ( Budismo, Jainismo, Hinduísmo, Sikhismo) <br />
			295 – Zoroastrismo, Mazdaismo, Parseeismo <br />
			296 – Judismo <br />
			297 – Islamismo, Babismo, Crença em Bahai <br />
			299 – Outras religiões :Africanas, asiáticas, nativas, etc <br />
			          (Umbandismo, macumba, Candomblé, Voodooismo, Ras Tafari, etc.) <br />
			<br />
			<hr>
			<br />
			<a name='300'></a>
			<h1>Ciências Sociais</h1>
			<br />
			300 – Ciências sociais <br />
			<br />
			<pre>
			300.3 – Dicionários e enciclopédias de ciências sociais
			300.7 – Ciências Sociais – Estudo e ensino
			301 – Sociologia  - Antropologia - Política cultural / ideologia      
			          ( Sociologia educacional   ver    370.19)
			301.03 – Dicionários e enciclopédias de sociologia
			301.15 – Propaganda ideológica
			               Psicologia social
			302 – Interação social
			302.072 – Pesquisa
			302.1 – Tópicos gerais  de interação social
			302.12 – Conhecimento social ( atribuições)
			302.13 – Escolha social ( atração, influência)
			302.14 – Participação social ( Grupos de encontro, de ajuda, de conterrâneos,
			               etc.)
			302.15 – Teoria da posição, da função / teoria da exclusão (na vida social)
			302.17 – Disfunções sociais   (afetando grupos sociais ) Incluindo apatia,
			               medo, pânico .
			               Classificar aqui psicoanálise
			302.2 – Comunicação / Comunicação social
			302.203 – Dicionários e enciclopédias de comunicação
			302.22 – Tipos, símbolos, verbal, oral, escrita
			302.23 – Mídia  / Meios de comunicação
			302.232 – Impressa
			302.2322 –  Jornais
			302.2324 – Revistas / periódicos
			302.234 – Comunicação eletrônica  / Mídia
			302.2343 –  Filmes
			302.2344 –  Rádio
			302.2345 –  Televisão
			302.235 – Telefone
			302.3 – Interação social dentro de grupos  /  Dinâmica / Negociação/ Decisão
			302.4 – Interação social entre grupos
			302.5 – Relações individuais com a sociedade ( Tb. Desvios, alienação,
			             isolamento)

			303 – Processos sociais
			303.3 – Coordenação e controle ( Polícia, força)  Poder
			303.32 – Socialização (aprendizado, conformidade)
			303.323 – Em família
			303.324 – Na escola
			303.325 – Em grupos religiosos
			303.33 – Controle social
			303.34 – Liderança, cooperação, influência, persuasão
			303.35 – Controle utilitário ( uso de recompensas e incentivos)
			303.36 – Coerção (uso de autoridade, punição, detenção, ameaça)
			303.37 – Métodos normativos ( uso da ética, justiça, valores, propaganda,
			               censura)
			303.38 – Opinião pública
			303.4 – Escolha social ( crescimento e desenvolvimento, deterioração e
			             decadência, causas de mudanças e contato entre culturas)
			303.483 – Desenvolvimento da ciência e tecnologia ( transporte,
			                 comunicação, computação)
			303.485 – Catástrofes  ( terremotos, epidemias, guerras)
			303 49 – Prevenção social (previsões, futurologia)
			303.6 – Conflitos (violência urbana, desordens sociais, revoltas, distúrbios)
			303. 64 – Guerras civis  /  Revoluções   (Cubana, Chinesa e Russa  )                                    
			303.66 – Guerras  /  Paz   (sociologia)
			303.69 – Resoluções de conflitos ( mediação, desenvolvimento de conflitos)

			304 – Fatores que  afetam a conduta social – Problemas sociais, realidade
			           social
			304.2 – Ecologia humana.  antropologia ecológica, geografia humana,
			              fatores climáticos, biológicos, conseqüências de poluição
			304.25 – Fatores climáticos que afetam o comportamento social
			304.5 – Fatores genéticos ( sociobiologia, bases genéticas da conduta social
			             humana)
			304.6 – População
			304.61 – Características
			304.62 – Aumento e declínio
			304.63 – Natalidade ( fertilidade, tamanho das famílias)
			304.64 – Mortalidade ( expectativa de vida)
			304.66 – Efeitos demográficos de controle da população
			304.663 – Genocídios
			304.666 – Planejamento familiar
			304.667 – Abortos
			304.668 – Infanticídio
			304.681 – Povos imigrantes para o Brasil
			304.8 – Movimentação  dos povos  / Migração (interna) / Causas
			304.809 – Emigração internacional (saída)
			304.83 – Imigração internacional (entrada)
			304.89 812 – Migração interna

			305 – Grupos sociais
			305. 2 – Por idade
			305.232 – Bebês
			305.233 – Crianças (3 aos 5 anos)
			305.234 – Crianças (6 aos 11 anos)
			305.235 – Adolescentes ( 12 aos vinte anos)
			305.24 – Adultos
			305.26 – Terceira idade
			305.3 – Homem e Mulher
			305.31 – Homens
			305.4 - Mulheres
			305.42 – Feminismo / Emancipação da mulher
			305.5 – Classes sociais  /  Briga de classes
			305.52 – Classe alta
			305.55 – Classe média
			305.552 – Intelectuais
			305.553 – Classes profissionais / Profissões e ocupações
			305.555 – Fazendeiros
			305.556 – Colarinho branco ( balconistas , escriturários e homens de negócio)
			305.56 – Classe baixa  /Proletariado /Lavradores / Minorias / Excluídos  /
			               Alienados / Pobres / Mendigos / Favelas / Meninos de rua
			305.6 – Grupos religiosos
			305.7 – Grupos por línguas
			305.8 – Grupos étnicos, raciais / Racismo / Anti-semitismo / Neonazismo
			305.892 4 – Judeus
			305.9 – Grupos ocupacionais e outros

			306 – Cultura e instituições / Cultura popular / Antropologia cultural /
			           História da cultura ( Cultura  hispano-americana, ...
			306.089 – Grupos indígenas
			306.1 – Subculturas
			306.2 – Sociologia política
			             Instituições políticas ( mantenedoras da paz, patrocinadoras, etc.)
			             Instituições legislativas, executivas, judiciais, políticas e militares)
			306.3 – Instituições econômicas ( Sistema de propriedade, produção, trocas,
			             livre iniciativa, cooperação, sindicalismo, sistemas agrícolas, de
			             trabalho, aposentadoria)
			306.342 - Capitalismo
			306.4 – Aspectos específicos da cultura
			306.42 – Sociologia do conhecimento( da vida intelectual, da informação)
			306.43 – Sociologia educacional / Educação ( Antropologia educacional)
			               Escola e sociedade, incluindo  relacionamento entre professores,
			               pais, colégios, universidades e  sociedade
			306.44 – Língua  / sociolinguística
			306.446 – Bilinguismo, multilinguismo 306.449 – Orientação e planejamento lingüístico 306.45 – Ciência  306.46 – Tecnologia 306.461 – Medicina 306.47 – Arte 306.48 – Recreação ( jogos, esporte, música, dança, teatro) 306.485 – Filmes, rádio , televisão / Informação e cultura na TV 306. 6 – Instituições religiosas / Sociologia da religião 306.7 – Instituições relacionadas com o sexo ( Celibato, namoro, coabitação,               relações extraconjugais, casamentos gay) 306.74 – Prostituição 306.76 – Orientação sexual (heterosexualidade, bisexualidade,                 homosexualidade) 306.77 – Práticas sexuais 306.8 – Casamento e família 306.81 – Casamento 306.83 – Tipos de sistemas familiares ( matriarcal, patriarcal, etc.) 306.84 – Tipos de casamento ( monogamico, poligamico, etc.) 306.85 – Família ( rural, urbana, etc.) 306.87 –  Relações familiares ( pai-filho/ mãe-filho/ pai-mãe/ avós-netos,                  irmãos ente si, incesto, etc..)  306.89 – Separação e divorcio 306.9 – Instituições relativas à morte  307 – Comunidade 307.1 – Planejamento e desenvolvimento de comunidades  307.2 – Movimentação de, para e entre comunidades   (rural/urbana  –               urbana/rural)                                                          
			             Classificar aqui Êxodo rural
			307.3 – Estrutura ( Assentamento físico, uso industrial, comercial, recreativo,
			             residencial, guetos)
			307.7 – Tipos específicos de comunidades ( rural, suburbana, tribal,
			             comunas, kibutz)
			307.76 – Comunidades urbanas / Cidades

			310 – Estatística

			Estatística geral

			Trabalhos com análise de dados estatísticos, classificar em 001.422

			Métodos de apresentação de dados estatísticos, classificar em 001.4226

			Classificar estatística  de assuntos específicos, no assunto, mais notação 021 da Tabela 1.


			Ex.:   Estatística de mortes por crimes violentos 364.15021

			310.3 - Dicionários e enciclopédias de estatística

			314 – 319 – Estatística de países, continentes, localidades específicas
			                    Somar a 31 a notação da Tabela 2
			                    Exemplos: Estatística da França  -  314.4
			                                      Estatística do Brasil   -   318.1
			                                      Estatística da Espanha  - 314.6

			320 – Ciência política

			320.01 – Teoria e filosofia
			320.03 - Dicionários e enciclopédias de política
			320.1 – O Estado ( teoria e filosofia , teorias de origem (classificar aqui
			             contrato social)
			320.12 – Território / Fronteiras /Atlas geopolíticos
			320.15 – Soberania


			320.4 – Estrutura e funções dos governos / Trabalhos dos diversos ramos do
			             governo/ Relação do governo  com jurisdições regionais e locais.
			             Organização social e política ( exceto livros didáticos)
			              ver tb. 372.832
			320.5 – Ideologias políticas
			320.51 – Liberalismo
			320.52 – Conservadorismo
			320.53 – Coletivismo e fascismo
			320.531 - Socialismo
			320.531 5 – Ideologia marxista
			320.532 – Comunismo
			320.533 – Fascismo
			320.54 – Nacionalismo
			320.55 – Ideologias orientadas pela religião
			320.56 – Racismo
			320.57 – Anarquismo
			320.6 – Política ( planejamento, formulação de programas propostas, estudos)
			320.8 – Governo local ( rural e urbano) Incluindo governo do país, estados,
			              municípios, etc.
			320.9 – Situação e condição política ( tratamento histórico e geográfico )

			321 – Sistemas de governos  e Estados
			321.01 – Relacionamento de partes com o conjunto
			321.02 – Federações, confederações, províncias e sua relação com o governo
			               federal
			321.03 – Impérios
			321.05 – Nações-estados
			321.06 – Pequenos estados ( cidades estados, miniestados)
			321.07 – Estados ideais (utopias)
			321.09 – Troca no sistema de governo ( Revoluções)
			321.1 – Governo familiar
			321.3 –  Feudalismo
			321.5 – Elitismo
			321.6 – Monarquia   absoluta                                                                            
			321.8 – Democracia
			321.804 3 - Parlamentarismo
			321.86 – República
			321.87 – Monarquia limitada (Monarquia constitucional)
			321.9 – Governos autoritalistas /  Ditadura
			321.92 – Comunismo
			321.94 – Fascismo ( nazismo)
			322 – Relações do estado com grupos organizados que não sejam os partidos:
			          religiosos, de trabalho, negócios e indústria e grupos de ações políticas
			          ( revolucionários, subversivos, reformistas, pressionadores, militares)

			323 – Política e direitos civis   /  Direitos humanos / Tortura
			323.1 – Direitos de grupos civis e políticos não dominantes (raciais, étnicos )
			323.3 – Direitos de outros grupos civis e políticos ( mulheres, idosos, jovens)
			             Trabalho do menor / Direitos da criança e do adolescente
			323.4 – Direitos civis específicos  ( direitos iguais perante a lei, segurança
			              pessoal, liberdade de ação, religiosa e de pensamento, liberdade da
			              palavra, da imprensa , direito de privacidade, de propriedade)
			323.49 – Limitação e suspensão dos direitos civis
			323.5 – Direitos políticos
			323.6 – Cidadania e tópicos relacionados ( cidadania por nascimento,
			              aquisição da cidadania, naturalização, duas nacionalidades,
			              nacionalidade adquirida por casamento expatriação e repatriação)
			              Impostos e obrigações  / Passaportes e vistos

			324 – O processo político
			324.13 – Organizações internacionais de partidos da direita
			324.14 – Organizações internacionais de partidos conservadores
			324.15 –Organizações internacionais de partidos centristas
			324.16 – Organizações internacionais de partidos liberais
			324.17 –Organizações internacionais de partidos esquerdistas ( social   democráticos,  socialistas, comunistas, trabalhistas)
			324.18 – Outros
			324.2 – Partidos políticos
			324.204 – Relações com o governo
			324.21 – Tipos de partidos
			324.22 – Lideranças
			324.23 – Programas e ideologias
			324.3 – Organizações auxiliares dos partidos ( clubes políticos, organizações
			             da mulher ,etc.)
			324.4 – Grupos interessados e pressionadores
			324.5 – Indicação de candidatos
			324. 6 – Eleições
			324.63 – Sistemas eleitorais ( eleições diretas, indiretas, colégios eleitorais)
			324.64 – Registro de eleitores
			324.65 – Procedimento de votação
			324.66 – Fraude eleitoral
			324.68 – Recontagem

			324.7 – Conduta na campanha eleitoral (estratégia, uso da mídia, parte
			              financeira)
			324.9 – Tratamento histórico e geográfico

			325 – Migração internacional e colonização
			325.1 – Imigração
			325.2 – Emigração
			325.21 – Refugiados
			325.3 – Colonização
			325.32 – Imperialismo
			326 -  Escravidão
			326.8 – Emancipação ( abolicionismo, movimentos abolicionistas)

			327 – Política externa /Internacional
			327.1 – Política internacional e tópicos específicos
			327.111 – Atividades econômicas /  Ajuda estrangeira
			327.116 – Alianças ( Segurança coletiva)
			327.117 – Uso de força, boicotes e sanções
			327.12 – Espionagem e subversão
			327.14 – Propaganda e guerra de nervos
			327.16 – Conflitos internacionais
			327.17 – Política e cooperação internacional
			327.172 – Promoção da  paz e ordem internacionais
			327.174 – Desarmamento nuclear /  / Controle de armamentos / Controle de
			                  guerra biológica e química
			327.2 – Diplomacia
			327.3-.9 – Diplomacia por países específicos .
			                 Ex.: Relações internacionais do Brasil – 327.81
			                         Relações entre Brasil e França – 327.81044 ( Colocar o  “0”
			                         entre os países )

			328 – Processo legislativo
			328.1 – Regras e procedimentos  do legislativo
			328.22 – Atividades
			328.23 – Plebiscito
			328.3 – Tópicos específicos do legislativo
			328.304 – Reforma legislativa
			328.31 –  Câmaras Superiores
			328.32 – Câmaras
			328.331 – Trabalho e atividades individuais dos membros
			328.334 – Bases de representação
			328.34 – Poder, privilégios, restrições, poder financeiro, força
			                extra legislativa, poder de investigação, poder judicial, eleitoral,
			               diplomático.    Imunidade legislativa
			328.35 – Sessões
			328.36 – Organização e disciplina interna ( escritórios, lideranças, comitês)
			328.37 – Decretos ( origem, votação, aprovação, etc.)
			328.38 – Obtenção de votos para aprovação de um projeto

			 330 – Economia

			330.01 – Teoria e filosofia
			330.03 - Dicionários e enciclopédias de economia
			330.12 – Sistemas
			330.122 – Capitalismo / Livre iniciativa
			330.124 –  Economia planejada
			330.126 – Economia  mista
			330.15 – Escolas  ( Clássicas, mercantilismo, metodológica, e outras)
			330.16 – Teorias de enriquecimento
			330.17 – Teorias de prosperidade
			330.9 – Política econômica / Capital / Subdesenvolvimento
			330.903 4 – Revolução industrial – História econômica  -  ver tb. 909.81
			330.91 – Globalização / Geografia econômica
			330.981 – Economia -Brasil

			331.11 – Recursos humanos
			331.114 – Qualificação e características pessoais ( capacidade física, mental,
			                  pelo nível de educação, experiência, prática)
			331.117 – Sistemas de trabalho ( trabalho livre, forçado, escravo)
			331.118  - Trabalho produtivo
			331.119 – Força de trabalho da indústria
			331.12 – Força de trabalho ( política governamental)
			331.123 - Demanda
			331.124 – Oportunidades de trabalho
			331.125 –  Vagas
			331.128 – Agencia de empregos, colocação
			331.129 – Mercado de trabalho na industria
			331.13 – Subempregos, trabalhadores mal ajustados, discriminação
			               Programas de ajustamento no emprego
			331.136 – Deficiência e excesso de trabalho
			331.137 – Desemprego ( ciclos, causas, efeitos, prevenção)
			331.2 – Condições de emprego
			331.21 – Salário  (tipos: por hora, semana, mês / incentivos / diferenciação)
			331.23 – Planos de cargos e salários
			331.25 – Outras condições do emprego  ( condições físicas: ventilação,
			                espaço / facilidades, qualidade de vida, etc. )
			331.252 – Pensão, benefícios, reforma, planos de saúde)
			331.257 – Horário ( dia, noite, meio, etc.)
			331.259 – Treinamento, segurança do trabalho, etc.)
			331.3 – Trabalhadores por idade
			331.31 – Crianças
			331.34 – Jovens
			331.394 – Meia idade
			331.399 – Velhos
			331.4 – Trabalho de mulheres
			331.5 – Categorias especiais
			331.51 – Prisioneiros
			331.52 – Veteranos
			331.53 – Gays
			331.54 – Trabalhadores em situações especiais ( por contrato, migrantes,
			               ocasional)
			331.55- Aprendizes
			331.59 – Deficientes e doentes
			331.6 – Trabalhadores por categorias como : racial, étnica, origem
			              (indígenas, imigrantes, etc.)
			331.7 – Trabalho por indústria ou ocupação
			331.702 – Escolha de vocação
			331.71 – Profissional e de administração
			331.76 – Ocupações específicas na indústria ( em geral, da construção,
			               manufatureira, extrativa, etc.)
			331.79 – Grupos específicos de ocupações  ( empresários, industriais,
			                serviçais, servidores públicos)
			331.8 – Movimentos trabalhistas
			331.87 – Organizações de trabalhadores
			331.88 – Sindicatos  /  Sindicalismo
			331.89 – Administração trabalhista
			331.891 – Trabalhismo (contratos de trabalho, mediações, conciliações)
			331.892 – Greves, paralisações
			331.893 – Boicotes, sabotagens, etc.
			331.894 – Medidas para controle

			332 – Economia financeira
			332.024 – Finanças pessoais ( aplicações, perdas, etc.)
			332.041 – Capital / Dinheiro ( formação, aplicação. Financiamentos, etc.)
			332.042 – Finanças internacionais
			332.1 – Bancos ( tipos e serviços, depósitos, investimentos, etc.)
			332.2 – Instituições bancárias especializadas(Poupança, de investimentos, etc)
			332.3 – Instituições de crédito e empréstimos
			332.4 – Dinheiro
			332.404 – Formas e unidades ( ouro, papel moeda, moedas, etc.)
			332.41 – Valor do dinheiro /Inflação / Deflação / Estagnação/ Fatores que
			                influenciam a flutuação do valor )
			332.42 – Padrão monetário
			332.45 – Câmbio / Taxas de câmbio
			332.5 – Outros modos de intercâmbio
			332.6 – Investimentos / Casas de corretagem / Formas de investimento /
			             Títulos diversos / Bancos de investimentos / Investimentos
			             domésticos e internacionais
			332.7 – Crédito / Crédito agrícola / Crédito residencial, comercial, mercantil /
			             Letras promissórias / Cartões de crédito
			332.8 – Ações,  ágio, agiotagem
			332.9 – Falsificações

			333.1 – Propriedade pública de terras ( aquisição, incluindo Desapropriação)
			333.2 – Propriedade  de terras por grupos não governamentais
			333.3 – Propriedade particular de terras
			333.31 – Reforma Agrária - Redistribuição e assentamento de  agricultores
			333.33 – Transferência de posse e direito de uso ( avaliação, preço, venda)
			333.4 – Ausência de proprietário
			333.5 – Arrendamento e aluguel de terras
			333.7 – Recursos  naturais e Energia  Reservas, utilização, abuso,
			              administração e controle, desenvolvimento, conservação e proteção)
			333.72 – Conservação e proteção
			333.73 – Terra, incluindo rios, montanhas, dunas, etc.
			                Terras áridas e semi- áridas  /  Desertificação
			333.74 – Pastagens
			333.75 – Florestas
			333.76 – Terras rurais e de agricultura / Terras com minas
			333.77 – Terras urbanas
			333.78 – Áreas de recreação e áreas selvagens / Parques ( lagos, rios,
			                reservatórios)
			333.79 – Energia ( formas primárias de energia)
			333.792 3 – Energia solar
			333.792 4 – Energia nuclear
			333.793 – Formas secundárias de energia
			333.793 2 – Energia elétrica ( aspectos financeiros e preço)
			333.794 – Renovação de recursos energéticos / Recursos alternativos
			333.796 – Energia para usos específicos ( em prédios, residências,
			                  instituições, industrias, agricultura, processamento de alimentos,
			                  transporte e comercio)
			333.8 – Recursos subterrâneos ( fósseis, carvão, petróleo e gás natural,
			              minerais, energia geotérmica)
			333.9 – Outros recursos / Conservação
			333.91 – Recursos hídricos /Água (Rios, lagos, oceanos e mares, litoral)
			333.9164  -  Recursos  marinhos
			333.92 – Recursos gerados pelo ar ( vento como gerador de energia,
			               eletricidade)
			333.94 – Espaço
			333.95 – Recursos biológicos ( biodiversidade, biosfera / espécies raras e em
			                extinção /plantas, animais, invertebrados, corais,  peixes, répteis e
			                anfíbios, pássaros, mamíferos)

			334 – Cooperativas ( bancárias  e de crédito, domésticas, de consumo, de produção, beneficentes )   Cooperativismo

			335 -  Socialismo    e  sistemas  relacionados
			335.1 – Sistemas de origem inglesa ( Socialismo utópico, Fabian, Guild)
			335.2 – Sistemas de origem francesa ( Saint-Simonismo , Fourierismo)
			335.3 – Sistemas de origem americana                                                                            
			335.4 – Sistemas marxistas
			335.412 – Conceitos econômicos
			335.43 – Comunismo ( Marxismo-Leninismo)
			335.5 – Socialismo democrático
			335.6 – Fascismo
			335.7 – Socialismo cristão
			335.8 – Outros sistemas ( Sindicalismo, anarquismo)

			336 – Finança pública
			336.006 – Organização e administração
			336.01 – Finança  pública em nível governamental
			336.02 – Rendimentos, taxas e impostos
			336.1 – Rendimentos não taxados
			336.2 – Impostos  ( impostos federais, estaduais e municipais / impostos de
			             renda, propriedade, de negócios, seguridade social, importação,
			             exportação, selo, produtos, serviços e industrias)
			336.3 – Impostos de empréstimos, débitos e gastos públicos

			337 – Economia internacional
			337.1 – Cooperação econômica multilateral
			337.14 – Cooperação econômica na Europa
			337.142 – Comunidade Européia
			                 Comunidade Econômica Européia
			                 Mercado Comum Europeu
			337.18 – Cooperação econômica  no  Mercosul

			338 – Produção industrial
			338.01 – Fatores de produção
			338.02 – Produtos e serviços
			338.06 – Produtividade industrial
			338.09 – Indústria - História
			338.1 – Agricultura ( Localizada: 338.1 + 9 + País)
			338.13 – Aspectos financeiros
			338.14 – Fatores que afetam a produção ( pragas, distribuição, estocagem,
			               secas, etc.)
			338.16 – Produção eficiente  ( Mecanização, métodos, colheita)
			338.17 – Produtos  / Produção
			338.1731 – Cereais – Aspectos econômicos
			338.17315 – Milho - Aspectos econômicos
			338. 17318 – Arroz - Aspectos econômicos
			338.1733 – Leguminosas - Aspectos econômicos
			338.173372 – Feijão - Aspectos econômicos
			338.1734 – Soja - Aspectos econômicos
			338.1735 – Fibras - Aspectos econômicos
			338.17351 – Algodão - Aspectos econômicos
			338.17352 – Linho - Aspectos econômicos
			338.173577 – Sisal - Aspectos econômicos
			338.17361 – Cana de açúcar - Aspectos econômicos
			338.17362 – Sorgo - Aspectos econômicos
			338.1737 – Alcalóides - Aspectos econômicos
			338.17371 – Fumo - Aspectos econômicos
			338.17372 – Chá - Aspectos econômicos
			338.17373 – Café - Aspectos econômicos
			338.17374 – Cacau - Aspectos econômicos
			338.1738 – Polpas, essências para industrialização - Aspectos econômicos
			338.17381 – Essências para perfumes - Aspectos econômicos
			338.17388 – Plantas medicinais - Aspectos econômicos
			338.173895 – Borracha - Aspectos econômicos
			338.18 – Política agrícola ( Crédito agrícola, preços, subsídios, doação de
			                terras, ajuda contra a seca) Programas governamentais
			338.1881 – Política agrícola no Brasil
			338.19 –  Estoque de comida
			338.2 – Extração de minerais ( aspectos financeiros, produção, produtos)
			338.27282 – Petróleo – extração e recursos econômicos
			338.3 – Outras indústrias extrativas(produtos da pesca, caça, pesca de baleias)
			338.4 – Indústrias e serviços secundários ( aspectos financeiros )
			             Produtividade industrial, automação industrial
			338.479 1 – Indústria do turismo
			338.5 – Economia de produção em geral ( riscos, custos, preços, flutuação de
			              preços, etc.)
			338.6 – Organização da produção  ( empresas públicas, particulares,
			              pequenas, grandes, domésticas)
			338.7 – Empresas de negócios
			338.8 – Conglomerados (  fusões, monopólios , trusts, holdings, organizações
			              informais )
			338.88 – Multinacionais / Empresas internacionais
			338.9 – Desenvolvimento e crescimento econômico (subsídios,
			              nacionalização, privatização, política de informação, tecnologia
			              apropriada)
			338.91 – Desenvolvimento e crescimento internacional ( Ajuda internacional
			                por grupos específicos)
			338.92 – Políticas específicas ( Subsídios e doações, nacionalização,
			               privatização, política de informação, tecnologia )

			339 – Macroeconomia
			339.01 – Teoria e filosofia
			339.2 – Distribuição de salários e riquezas
			339.3 – Produção nacional
			339.4 – Fatores que afetam a produção, salário e riqueza  nacional
			339.46 – Pobreza – aspectos econômicos
			339.5 – Política de macroeconomia ( política fiscal, de preços, de gastos,
			              impostos )

			340 – Direito  /  Jurisprudência / Justiça

			342.07 – Código Eleitoral
			342.5981 – Código de Defesa do Consumidor – Brasil
			343.0946 – Código de Transito

			340.03 – Dicionários e enciclopédias de direito
			340.07 – Direito – Estudo e ensino
			340.1 – Teoria e filosofia
			340.2 – Comparação entre tipos de direito
			340.5 – Sistemas de direito ( Leis antigas, romanas, medievais, orientais,
			              islâmicas )
			341 – Direito internacional
			341.026 – Tratados
			341.1 – Fontes de direito internacional  ( Tratados, decisões judiciais, prática,
			             princípios )
			341.2 – Comunidade mundial
			341.22 – Liga das Nações
			341.23 – Nações Unidas
			341.24 – Organizações regionais ( nas diversas partes do mundo )
			341.242 2 – Comunidade Econômica Européia (CEE)
			                    Mercado Comum Europeu
			                    União Européia
			341.3 – Relações entre países / Leis diplomáticas, consulares, tratados )
			341.4 – Relações jurisdicionais entre países ( Território, águas, rios, lagos,
			             canais, mares, espaço aéreo, espaço extraterrestre)
			341.481 – Direitos humanos / Direitos civis
			341.5 –  Disputas e conflitos entre países ( mediação de paz, cortes judiciais,
			           ultimatos, coerções, sanções, intervenções)

			341.6 – Leis de guerra ( agressões, hostilidades, início de guerra )
			                                     ( neutralidade, tratamento de prisioneiros, término )
			341.69 – Crimes de guerra
			341.7 – Cooperação internacional ( Defesa civil, forças de paz, missões
			              militares, paz e desarmamento )
			341.73 – Paz  (direito internacional / conferências para a paz )
			341.734 – Controle de armas nucleares
			341.735 – Controle de armas químicas e biológicas
			341.736 – Controle de armas estratégicas em tempo de paz
			341.75 – Direito econômico internacional
			341. 751 – Direito financeiro internacional
			341.752 – Investimentos
			341.753 – Condições de negócios  ( monopólios, contratos )
			341.754 – Comércio / Tarifas / Turismo
			341.756 – Transportes ( aéreo, naval, fluvial , rodoviário e ferroviário )
			341.757 – Comunicações ( postal, telecomunicação, comunicação por
			                  satélites )
			341.758 – Propriedade intelectual / industrial / marcas / licenças / franchising  
			                 /copyright / design / patentes )
			341.759 – Desenvolvimento social e econômico
			341.76 – Relações sociais e culturais ( Seguridade social / UNICEF /
			               Controle  da saúde / ecologia / saúde pública / ajuda internacional )
			341.77 – Legislação criminal internacional
			341.773 – Terrorismo
			341.775 – Tráfico de drogas
			341.778 – Genocídio
			341. 78 – Cooperação judicial internacional

			342 – Direito constitucional e administrativo
			342.02 – Instrumentos básicos de governo  -  Constituição
			342.0281 -  Constituição do Brasil
			342.03 – Reformas constitucionais
			342.04 – Poder e função do governo ( conduta em relação a outros países,
			                jurisdição  fora do território, colônias, força policial para controle
			               da segurança nacional, saúde pública, etc., níveis de governo )
			342.05 – Poder legislativo
			342.06 – Poder executivo
			342.07 – Legislação eleitoral
			342.08 – Jurisdição sobre pessoas  ( incluindo censura)
			342.082 – Entrada e saída do país / Emigração, imigração, passaportes ,vistos 342.083 – Cidadania,   nacionalidade  (incluindo direito de asilo )
			342.084 – Aborto
			342.085 – Direitos e atividades individuais ( religiosas, liberdade de
			                  informação, da palavra, de opinião, de imprensa, opinião política,
			                  privacidade)
			342.087 – Grupos sociais ( índios, grupos pela raça, etnia, nacionalidade,
			                  homens, mulheres)
			342.088 – Responsabilidade do governo ( incluindo responsabilidade por
			                 abuso de poder, corrupção, etc. )
			342.09 – Governo municipal ( corporações )
			342.1 – Regiões sócioeconômicas
			342.3-9 – Jurisdições e áreas  (Tab. 2)
			                 Ex.: Lei eleitoral na Austrália : 342.9407

			343.01 – Direito militar / Defesa / Segurança nacional / Legislação de
			                emergência e de guerra  
			- Veteranos ( legislação, pensão, educação e treino, empregos,
			      planos de saúde e reabilitação , compensação por doenças)
			343.012 – Força humana ( exército) Alistamento, destacamentos.
			343.013 – Serviço militar
			343.014 – Disciplina e conduta ( procedimentos legais)
			343.02 – Legislação de propriedade  - pública  e pessoal ( aquisição, controle,
			               uso, venda e transmissão )
			343.03 –  Legislação das finanças públicas ( política monetária, orçamento,
			                receita, gastos, etc. )
			343.04 – Legislação fiscal / Impostos (  municipal, estadual e federal)
			343.05 – Tipos de impostos  (imposto de renda, profissão, capital,
			                investimentos , mercadorias , taxas, serviços, selos, etc.)
			343.07 – Regulamentação das atividades econômicas(proteção ao
			               consumidor/ espionagem industrial  /  Lei antitrust  / fixação de
			               preços,  etc. )
			343.74 - Assistência econômica doméstica, desenvolvimento rural, regional,
			343.75 –  Controle de produção
			343.76 – Agricultura e indústrias agrícolas
			343.77 – Indústrias minerais
			343.78 – Indústrias secundárias e serviços
			343.08 – Regulamento do comércio ( incluindo garantias e warranties) Preços
			                / Marketings/ Comodities / Publicidade
			343.087 – Comércio internacional / Importação / Exportação
			343.09 – Controle de empresas públicas
			343.091 – Em geral
			343.092 – Água e energia
			343.092 4 – Água
			343.092 5 – Energia nuclear
			343.092 6 – Petróleo e gás
			343.092 7 – Carvão
			343.092 8 – Energia solar
			343.092 9 – Energia elétrica
			343.093 – Transporte ( incluindo oleodutos) Frete/ carga / passageiros /
			                  transporte de ambulância
			343.094 – Transporte rodoviário ( estradas, veículos, transporte comercial,
			                 ônibus, caminhões )
			343.095 – Transporte ferroviário ( linhas, estações ferroviárias, trens, vagões,
			                  serviços de passageiros e carga )
			343.096 – Transporte marítimo / Em oceanos, rios, passageiros, carga , portos
			343.097 – Transporte aéreo / aeroportos, cargas e passageiros, vôos espaciais
			343.098 – Transporte local / ruas, pedestres, ônibus, metrôs, carros
			343.099 – Comunicações / correio, telégrafo, telefone, computador, rádio,
			                televisão, imprensa
			343.3-9 – Jurisdições e áreas ( Tabela 2 )
			                 Ex.: Impostos na Austrália: 343.0594

			344 – Direito trabalhista
			344.010 1 – Teoria e filosofia
			344.02 – Seguro social(seguros de acidentes, doenças, maternidade,
			                idade,etc)
			344.03 – Serviço social (ajuda alimentação, instituições penais)
			344.041 – Problemas sociais e serviços ( pessoal médico e suas atividades,
			               dentistas, enfermeiros, farmacêuticos, problemas na prática da
			               medicina incluindo aborto, experimentação com pessoas, eutanásia)
			344.042 – Controle de produtos ( comida, remédios, produtos químicos) 344.043 – Controle de doenças ( vacinação, campanhas, quarentena)
			344.044 - Controle de doenças mentais e abuso de substâncias ( alcoolismo,
			                 drogas)
			344.045 – Controle de mortalidade
			344.046 – Proteção ao meio ambiente ( desperdício/ reciclagem/ poluição de
			                 rios, mares, terra, ar/ poluição sonora/ poluição industrial e            
			                 sanitária)
			344.047 – Segurança  (pública, divertimentos, recreação)
			344.048 – Controle da população ( controle de natalidade )
			344.049 – Controle público de saúde veterinária
			344.05 –  Controle policial / segurança pública em relação à moral e
			                costumes
			344.07 – Legislação em educação  /  Lei de Diretrizes e Bases /
			               Legislação em relação a educação pública, particular currículos,
			               estudantes, professores)
			344.09 – Cultura e religião (Legislação referente a comemorações  históricas
			               e patrióticas, bibliotecas, arquivos, museus e galerias, preservação
			               de monumentos, ciência e tecnologia, religião, divertimentos)
			344.3-9 – Jurisdições e áreas  ( Tabela 2 )
			                Ex.: Lei trabalhista  na Austrália:344.94

			345 – Direito penal
			345.01 – Cortes criminais
			345.02 – Crimes
			345.03 – Criminosos ( incluindo delinqüência  juvenil)
			345.04 – Responsabilidade, criminalidade ( capacidade de cometer crime,
			                intenção, defesa )
			345.05 – Procedimento criminal ( Processos, defesa, investigação ,
			               extradição,  assistência judicial, busca e captura, detenção, direitos (
			                incluindo habeas corpus)
			345.06 - Evidencias, confissões
			345.07 - Julgamentos, disposições finais ( perdão, reabilitação), sentenças,
			               penas
			345.08 – Tribunal do Júri / JURIS - Procedimentos, julgamentos, detenções,
			               etc., para delinqüentes juvenis- Tribunal de Justiça
			345.3-9 – Jurisdição e áreas ( Tabela 2 )
			                 Ex.: Evidência criminal na Austrália :345.9406

			346 – Direito privado
			346.001 – Teoria e filosofia
			346.012 – Pessoas e relações domésticas ( capacidade, atributos, pessoas com
			                 doenças, grupos raciais, étnicos, econômicos, escravos, mulheres,
			                 menores (incluindo maioridade )
			346.015 -  Relações familiares, casamento, direitos dos cônjuges, divorcio,
			                 anulação separação
			346.017 – Pais e filhos, parentesco, paternidade, adoção,  guarda, custódia,
			                  legitimação, direito de visitas)
			346.02 – Contratos em geral, públicos, de serviço
			346.03 – Responsabilidades (incluindo de empregados, diretores, hospitais) /
			                negligencia ( acidentes e mortes) / delitos ( assaltos, invasões de
			                privacidade, erro médico,  falso testemunho, difamação, delitos
			               envolvendo propriedade ( fraude, incomodo)
			346.04 – Propriedade ( terra, casa, direito de água, condomínios, aluguel,
			               compra, venda, transferencia , etc.) Propriedade pública e privada
			346.048 – Propriedade intangível ( propriedade intelectual, industrial,
			               copyright, design, marcas)
			346.05 – Herança, sucessão, custódia, testamento
			346.06 – Organizações, associações, sociedades, fundações
			                (criação,contabilidade, negócios, organização, direção,
			                 desenvolvimento, organizações governamentais)
			346.064 – Legislação para criação e funcionamento de organizações não
			                 profissionais, de caridade, fundações, etc.
			346.07 – Direito comercial
			               Legislação comercial (venda, empréstimo, apólices, fianças,
			               créditos)
			346.08 – Bancos e seguros
			346.09 – Financeiras / instrumentos de segurança, garantia, aval, fiança,
			               títulos e obrigações, valores, etc
			346.3-9 – Jurisdição e áreas ( Tab. 2 )
			                 Ex. : Lei de propriedade na Austrália : 346.9404

			347 – Direito civil
			347.01 – Tribunais
			347.012 –  Decisões / erros judiciais / revisões
			347.013 –  Administração das cortes
			347.014 – Juizes
			347.016 –  Outros oficiais / oficiais de justiça
			347.017 – Ajuda legal
			347.02 – Tribunais ( municipais, estaduais, federais)
			347.03 – Tribunais de apelação
			347.04 – Tribunais com jurisdição especializada
			347.05 – Procedimentos
			347.06 – Evidencias ( admissibilidade, testemunhos)
			347.08 – Procedimentos de apelação
			347.09 – Debates, argumentações e resoluções,
			347. 3-9 – Jurisdições e áreas ( Tabela 2)
			                  Ex.:  Lei de evidências na Austrália:     347.9406

			348 – Legislação, regulamentos, causas
			348.01 – Materiais preliminares ( audiências, históricos, estatísticas,
			                relatórios, provas)
			348.02 – Estatutos e regulamentos
			348.023 – Códigos, seleção de leis , citações
			               (incluindo arranjo em ordem alfabética)
			348.04 – Pastas com relatórios e informativos nacionais, estaduais, regionais,
			              decisões de tribunais
			348.05 – Decisões de tribunais superiores
			348.3-9 – Jurisdições e áreas ( Tabela 2 )
			                 Ex.: Seleção de leis da Austrália : 348.94.024

			350 – Administração Pública e Ciência Militar

			351- Administração pública
			352.11 – Administração internacional
			352.112 – Liga das Nações ( Administração) ver tb 341.22
			352.113 – Nações Unidas ( Administração e Secretaria) ver tb  341.23
			352.13 – Administração estadual e federal
			352.16 – Administração  municipal
			352.17 – Administração rural
			352.19 – Administração de distritos especiais
			352.2 – Organização da administração
			352.23 - Presidentes, primeiros ministros, monarcas ( poderes e privilégios,
			              escritórios, regras, mensagens, discursos)
			- Para abuso de poder  353.46
			352.24 – Conselhos executivos, ministeriais, secretariados, etc.
			352.29 – Organização e estrutura dos departamentos
			352.3 -  Administração executiva
			352.4 – Administração financeira e orçamento
			352.5 – Propriedades da administração, contratos, procurações
			352.6 – Recursos humanos / administração de pessoal / Burocracia
			             Criatividade administrativa
			352.7 – Administração de formas de assistência em geral ( Assistência
			             financeira, cultural ( museus e exibições), educacional ( bibliotecas,
			             cursos) urbana, rural.
			352.8 – Administração de formas de controle em geral ( inspeções, licenças,
			             certificados, registros, controle de preços, racionamentos, etc.)

			353 – Campos específicos da administração
			353.1 – Administração da segurança de negócios nacionais e externos
			             Relações diplomáticas / Inteligência ( espionagem, subversão)
			353.3 – Administração de serviços relacionados à ordem interna
			             Serviço policial, pessoal treinado, correções, incluindo prisões,
			             regulamentação da conduta pessoal ( incluindo controle do álcool,
			            drogas, jogos de azar, pornografia, prostituição , sexo )
			353.4 – Administração da justiça ( matérias criminais, civis, corrupção, abuso
			             de poder, violação dos direitos humanos, conflitos de interesse)
			             Investigações públicas, inquéritos, exercício de cidadania e direitos,
			             serviços de imigração e naturalização.
			353.5 – Administração do bem estar social ( Programas para certos tipos de
			             pessoas, famílias, pobres, pessoas da periferia, pessoas de áreas
			             rurais, vitimas de crimes, de opressão, preconceitos, homens,    
			             mulheres, crianças, velhos, deficientes ) Pensões para grupos
			             ocupacionais específicos, funcionários públicos / Casa própria, cestas
			             básicas / Certidões de nascimento, de óbito, controle de natalidade,
			             de mortalidade
			353.6 – Administração de serviços de saúde  ( Serviços de reabilitação,    
			             fisioterapia, /planos de saúde, campanhas e cursos para disseminação
			            de informações,/ instituições especiais para doenças específicas
			            (câncer, aids, doenças contagiosas / serviços de saúde mental/ para
			            deficientes físicos e mentais, etc. )
			353.7 – Administração da cultura e atividades relacionadas  ( Bibliotecas
			              públicas, artes, ofícios, teatros, celebrações, preservação histórica,
			              recreação, parques, esportes , caça e pesca.
			353.8 – Administração de departamentos para suporte e controle da educação
			             ( administração financeira, educação de adultos, educação superior )
			353.9 – Administração  da segurança, sanitária, desperdício ( incluindo
			              poluição, reciclagem) epidemias, catástrofes, incêndios, enchentes,
			              secas,  desemprego, segurança no trabalho, transportes, maquinários
			              e produtos perigosos ( incluindo instrumentos médicos, segurança de
			              alimentos ( pureza, limpeza, nutrientes) remédios, drogas, produtos
			              radioativos. Segurança pública
			354 – Administração pública da economia e meio ambiente em geral
			354.3 – Administração de recursos naturais
			354.4 – Administração de energia e indústrias relacionadas a energia
			354.5 – Administração da agricultura
			354.6 – Administração de construções, manufaturas, serviços industriais
			354.73 –  Administração do comércio
			354.75 – Administração das comunicações
			354.76 – Administração do transporte
			354.8 – Administração de instituições financeira, dinheiro e crédito
			354.9 – Administração do trabalho e profissões

			355 – Ciência Militar

			355.001 – Teoria e filosofia
			355.02 -  Considerações sobre  guerra, militarismo, guerra nuclear, guerra
			                civil, guerrilha, revoluções, revoltas,  resistência,  causas,
			                ocupações  militares, defesa.
			355.03 – Situação militar e policial, missões, ataques, assistência,
			               capacitação, etc.
			355.1 – Vida e costumes militares ( Duração do serviço, promoções,
			             desligamento, moral, condições de vida, conduta regulamentos,
			             recompensas, punições, prêmios, uniformes cores, cerimonias)
			355.2 – Recrutamento militar, preparação, qualificação, trabalho, materiais,
			              transporte , desmobilização,  avaliação
			355.3 – Organização e pessoal das forças armadas / Organização das
			              unidades, regimentos, esquadras, distritos, hierarquia, pessoal  na
			              ativa e na reserva, saúde, religião, recreação treinamento expedições,
			              mercenários, forças internacionais, unidades femininas, legião
			              estrangeira.
			355.4 – Operações militares – Ataque, defesa, combate, estratégia, suporte de
			              operações, acampamento, táticas, operações nucleares, ocupação.
			355.5 – Treinamento – Básico, defesa, de oficiais, manobras de evacuação de
			             população, com armas, técnico.
			355.6 – Administração militar – pessoal administrativo, de treinamento,
			              especializado, administração financeira, inspeções, salários, etc.
			355.7 – Instalações militares -  Quartéis, Bases, fortes, reservas, etc.
			355.8 – Equipamentos militares – Roupas, botas, comidas, equipamento de
			              campo,  armas, artilharia, peças de armamentos, transporte de
			              armamentos, equipamento de comunicação, equipamentos médicos.
			355.82 – Material bélico e armas pequenas
			356 – Tipos específicos de forças militares e guerras
			356.1 –  Exército / Infantaria ( força terrestre)
			357 – Cavalaria  ( força montada)
			358 – Aeronáutica
			358.1 – Artilharia, mísseis
			358.2 – Engenharia militar
			358.3 – Guerra química, biológica e radiológica
			358.8 – Forças espaciais
			359 – Marinha / Forças navais ( vida em navios, marinheiros, operações e
			          treinamento naval, administração naval,  instalações,  equipamento ,
			          forças especiais de combate, engenharia naval

			360 – Serviço social / Assistência social

			361 – Problemas e bem estar social
			361.02 – Assistência grátis, paga , material e guias
			361.1 – Problemas sociais
			361.2 – Ação social
			361.25 – Cidadania / contra violência
			                Pela infância
			361.3 – Trabalho social  incluindo voluntariado
			361.4 – Grupos de trabalho
			361.6 – Ação governamental ( política social, valores, prioridades, etc.)
			361.7 – Ações privadas Organizações voluntárias, religiosas, internacionais,
			              etc.
			361.8 – Ações comunitárias
			362 – Bem estar social / Problemas e serviços
			           Seguridade social
			362.1 – Saúde pública como problema social  - Doenças físicas – tratamento
			362.10981 – Problema social da saúde pública no Brasil
			362.2 – Doenças mentais e emocionais
			362.3 – Atraso mental / Deficiência mental
			362.4 – Problemas e serviços com pessoas com doenças físicas / Deficiência
			              física
			362.5 – Com os pobres
			362.6 – Com velhos
			362.7 – Com jovens
			362.76 – Violências contra crianças / maus tratos
			362.8 -  Com outros grupos ( famílias, veteranos, trabalhadores, viúvas,
			              vítimas de crimes, opressões, estupro, refugiados, etc.)
			363 – Saúde pública e outros problemas
			363.1 – Programas de saúde pública  ( trabalhos, ocupações, recreações,
			              materiais, máquinas, produtos, indústrias  e serviços domésticos
			              perigosos)
			363.11 – Segurança do trabalho em indústrias
			363.2 - Serviços policiais (serviços de controle do bem estar social ,        
			             patrulhas, investigações , controle  de tráfego, localização de pessoas
			363.3 – Outros aspectos de saúde pública :censura da informação
			             - Controle da violência e terrorismo
			             - Controle de explosivos e armas de fogo
			             - Calamidades, resgates, seca inundação, vulcões, terremotos,
			 guerras, fogo, incêndios
			363.35 – Defesa civil
			363.4 – Aspectos contra a moral e os costumes ( alcoolismo, jogos de azar,
			              prostituição, trafico de drogas, aborto, pornografia,
			              homossexualismo)
			363.5 – Moradia
			363.6 – Utilidade pública ( suprimento de água, gás, parques e recreação)

			363.69 – Preservação histórica / Tombamento de monumentos históricos
			               (Ver  tb.   720.288)
			363.690981 – Preservação histórica e tombamento no Brasil
			363.7 – Problemas ambientais
			363.72 - Saneamento
			363.73 – Poluição em geral ( de tráfego, etc.) (saneamento)
			363.738 6 – Chuva ácida  (saneamento)
			363.738 75 – Ozônio no ar
			363.739 2 – Poluição do ar
			363.739 4 – Poluição da água
			363.739 6 – Poluição do solo
			363.74 – Poluição sonora
			363.8 – Aspectos sociais da fome ( incidência,  controle, ações)
			363.9 – Problemas da população ( quantidade, qualidade, controle da
			              natalidade, esterilização, etc. )

			364 – Criminologia ( Crimes,  crimes de guerra, genocídio, suicídio,
			           assassinatos, estupros, assaltos, causas, delinqüência, prevenção,  
			           penalidades)
			364.155 – Violências contra pessoas  como crime
			365 – Prisões  / Instituições penais ( tipos, prédios, disciplina, trabalho, etc.)
			366 – Associações / Maçonaria
			367 – Clubes em geral  ( sociais, de estudo, para tipos de pessoas, profissões)
			368 – Segurança
			368.001 – Teoria e filosofia
			368.006 - Organização e desenvolvimento de companhias de seguro
			368.01 – Princípios gerais ( seguros, avaliação e estimativa do risco )
			368.06 – Riscos em propriedades
			368.07 – Riscos com pessoas
			368.08 – Outros riscos
			368.1 – Seguros contra dano e prejuízo da propriedade
			368.11 – Seguro contra fogo
			368.121 – Seguro de safras e produções
			368.122 – Seguro contra calamidades
			368.125 – Seguro contra tumultos, etc.
			368.14 – Seguro contra risco de guerra
			368.2 – Seguro de transporte:
			368.22 – Seguro contra acidentes marítimos
			368.23 – Seguro contra acidentes em rios
			368.232 – Seguro contra acidentes em veículos motorizados  /  Automóveis
			368.233 – Seguro contra acidentes ferroviários
			368.24 – Seguro contra acidentes aéreos
			368.32 – Seguros de vida
			368. 36 – Tipos especiais de seguros(industrial, membros das forças armadas)
			368.366 – Seguro funeral
			368.37 – Anuidades
			368.38 – Seguros médicos  -  saúde, acidente, doença, dental, farmacêutico,
			                saúde mental, hospital, catástrofes)
			368.4 – Seguros de responsabilidade do governo (trabalhadores, acidentes e
			             saúde, velhice, crimes violentos)
			368.424 – Seguro maternidade
			368.44 – Seguro desemprego
			368.5 – Seguros de responsabilidade ( Comercial, contratual, elevadores,
			             profissionais, poluição, erros médicos, transporte de passageiros)
			368.7 – Seguros contra acidentes industriais ( falências, arrombamentos,
			             furtos, fianças garantias investimentos, depósitos bancários, créditos)
			368.9 – Seguros por países, continentes, etc. (ver Tabela 2)
			             Ex.: Seguro  na América do Sul 368.98
			369 – Associações  variadas
			369.1 – Associações dos Estados Unidos
			369.2 – Sociedades militares, patrióticas
			369.3 – Clubes étnicos e raciais
			369.4 – Sociedades de  jovens
			369.5 – Clubes de serviços ( Lions, Rotary, etc. )                            

			370 – Educação
			    R
			370.03 – Dicionários e enciclopédias de educação
			370.09 – Histórico
			370.1 – Teoria e filosofia da educação  /  Filosofia educacional
			              Sociologia educacional ver 306.43
			370.11 – Educação com objetivos e finalidades específicas
			370.111 – Educação fundamental ( preparação de estudantes para vida em
			                 comunidade)
			                 Educação básica infantil ( casa/ comunidade/ escola, etc.)
			370.112 – Educação humanística ( liberal)

			370.113 – Educação vocacional ( treinamento ocupacional, escolas
			                 vocacionais)
			370.114 – Moral e ética na educação
			370.115 – Educação para responsabilidade social /      Educação popular
			                 (visando transformação sócio econômica) Defesa civil
			370.117 – Educação bilingüe e multicultural
			370.118 – Educação para criatividade
			370.119 – Educação para o desenvolvimento do lazer
			370.12 – Classificação e fundamentos filosóficos ( idealismo, pragmatismo e
			                realismo)
			370.13 – Valor da educação / Controle de qualidade
			370.14 – Linguagem e comunicação
			370.15 – Psicologia educacional /  Piaget
			370.151 – Psicologia diferencial
			370.152 – Inteligência / Cognição / Pensamento crítico
			370.152.2 – Memória
			370.152 3 – Aprendizagem / Motivação
			370.152 4 – Raciocínio
			370.153 – Emoção e comportamento( modificação do comportamento,
			                  introversão, extroversão, personalidade, processos subconscientes)
			370.154 – Motivação para aprender / Interação ente aprendizagem cotidiana e
			                 escolar
			370.155 – Processos sensoriais e psicomotores na aprendizagem
			370.157 – Criatividade e imaginação ( psicológica)
			370.158 – Ajustamento psicológico à educação / Ajuda familiar à educação
			370.21 – Estatística educacional

			370.7 – Educação, pesquisa e tópicos relacionados
			370.71 – Formação de professores - Estágios
			370.8 – História de pessoas em educação
			370.82 – A mulher na educação
			370.9 – Tratamento histórico e geográfico / Educação – História
			370.946 – Educação na Espanha - História

			371 – A escola e suas atividades  /  Educação especial  /  Métodos /
			371.001 – Teoria e filosofia das escolas
			371.006 – Projetos educacionais / Administração e organização de escolas
			371.01 – Tipos específicos de educação / Escola pública
			371.02 – Escola particular
			371.03 – Escola comunitária
			371.04 – Escola alternativa ( em casa, religiosa, cristã e outras)
			371.07 – Escolas religiosas
			371.1 – Professores e atividades relacionadas
			371.102 – Ensino (comunicação - relação professor / aluno , professor / pais )
			371.104 – Liberdade na educação
			371.11 – Características pessoais / Currículo diferenciado de acordo com
			               características de cada aluno
			371.12 – Qualificação de professores
			371.14 – Organização do quadro de professores ( interino, substituto,
			                ajudante, pago ou voluntário, etc. )
			                Avaliação de professores
			371.15 – Contrato de efetivação
			371.19 – Relação escola / comunidade – Pais / escola  - Indústria / escola

			371.2 – Administração escolar
			371.201 – Administração de pessoal
			371.203 – Supervisão escolar
			371.206 – Administração financeira
			371.207 – Planejamento de administração escolar
			371.21 – Matrícula
			371.22 – Ajuda ao aluno e cooperação
			371.225 – Empregos para estudantes ( incluindo serviços à comunidade)
			371.23 – Ano escolar ( calendário escolar)
			371.24 –Horário escolar
			371.25 – Séries do ensino
			371.26 – Planejamento de testes e avaliações / Provas ( inclusive oral)
			371.27 – Testes e avaliações em classe
			371.271 –  Conselho de classe
			371.28 – Promoção / Reprovação
			371.29 – Freqüência / Graduação / diplomas / transferências
			                Falta às aulas ( matar aula)

			371.3 – Didática - Métodos de ensino instrução e estudo– Pedagogia
			              Ensino fundamental – didática
			              Uso do dicionário em sala de aula
			371.302 8 – Planejamento e avaliação do ensino
			371.302 81 –  Métodos de estudo (para casa, livro de anotações, relatórios
			                       escritos e gravados)
			371.32 –  Uso de livros de texto
			371.33 – Equipamento e material de ensino  / Experiências / Avaliação
			               através de materiais de uso do aluno      
			371.333 – Rádio, som,  material  de áudio
			371.334 – Processamento de dados / Educação por computador
			371.335 – Equipamentos e materiais visuais (mapas, globo,etc)  e  áudio
			                 visuais ( slides, filmes, etc )
			371.335 8 – Educação por Tv
			371.337 – Jogos educacionais / brinquedos  (ver tb. 790.1)
			371.35 – Educação à distancia  
			371.356 – Cursos por correspondência
			371.358 – Cursos eletrônicos ( incluindo teleconferência )
			371.37 –  Seminários, palestras, congressos
			371.38 – Métodos fora de sala de aula
			371.382 – Laboratório
			371.384 – Aulas fora de sala de aula  /  viagens
			371.39 – Outros
			371.392 – Montessori
			371.396 – Método por conferências
			371.397 – Jogos e simulações / Recreação / Jogos educativos
			371.399 – Teatro

			371.4 – Aconselhamento e orientação educacional / Psicopedagogia
			371.425 – Orientação vocacional e profissional
			371.46 – Aconselhamento pessoal ( estudantes com problemas pessoais,
			               emocionais e sociais )

			371.5 – Disciplinas escolares e atividades relacionadas : regulamentos /
			              punições / suspensões / expulsões / delinqüência, vandalismo /
			              violência / Monitores

			371.6 –  Projetos de prédios escolares (plantas) / Administração de materiais
			371.62 – Prédios  e salas específicos
			371.623 – Laboratórios
			371.63 – Mobiliário escolar
			371.67 – Equipamentos e materiais
			371.68 – Serviços de manutenção

			371.7 –  Serviços visando o bem estar social do aluno / Ajuda mental /
			              Escolas  sociais / Escolas para ensino vivenciado como controle da
			              natalidade,  higiene sexual
			371.716 – Alimentação, incluindo programas de Merenda escolar
			371.78 – Programas de ajuda relacionados à crimes, drogas e abuso sexual

			371.8 – Estudantes / Atividades extracurriculares  / Vida estudantil
			371.81 – Movimentos estudantis ( ativismo, protestos)
			371.82 – Escolas para tipos específicos de estudantes
			371.822 – Educação para mulheres
			371.829 – Educação de estudantes diferenciados por nacionalidade, raça
			371.83 – Organizações de estudantes
			371.87 – Moradia e transporte
			371.89 – Várias atividades ( competições, jornais, revistas, etc.)

			371.9 – Educação especial -  Alunos excepcionais / doentes / deficientes /
			            delinqüentes
			371.91 – Estudantes com doenças físicas
			371.92 – Estudantes com doenças mentais
			371.93 – Delinqüentes e estudantes com problemas
			371.94 – Estudantes com distúrbios emocionais
			371.95 – Estudantes bem dotados

			372 – Educação elementar/ Fundamental ( Pré /1ª a 8ª /Ensino médio-2ºgrau )
			372.011 – Educação elementar com objetivos específicos
			372.1 – Organização e atividades na educação fundamental / Currículo
			372.2 – Níveis específicos em educação
			372.21 – Pré-escola
			372.216 – Creches
			372.218 – Jardim de infância
			372.241 – Nível baixo ( 1ª a 2ª séries)
			372.242 – Nível alto  (  3ª a 4ª séries)

			372.3 a 372.8 –  Assuntos específicos
			372.3 – Currículo – Nível elementar
			372.34 – Computação / Internet
			372.35 – Ciência e tecnologia
			372.357 – Ciências naturais / Biologia / Educação ambiental
			                  Reciclagem (ensino)
			372.358 – Tecnologia
			372.37 – Higiene e saúde / Alimentação / Nutrição
			372.372 – Educação sexual
			372.4 – Leitura
			372.41 – Alfabetização
			372.416 – Métodos
			372.42 – Motivação
			372.44 – Desenvolvimento do vocabulário
			372.48 – Avaliação
			372.486 – Testes diagnósticos
			372.5 – Educação artística / Trabalhos manuais e arte
			372.6 – Português / Linguagem / Comunicação / Literatura ( Travalínguas,
			             advinhas, etc. usados na aprendizagem )
			             Contar histórias
			372.61 – Gramática
			372.62 – Expressão escrita e falada
			372.622 – Falada  / Pronuncia
			372.623 – Redação
			372.63 – Ortografia  e caligrafia
			372.632 – Ortografia
			372.634 - Caligrafia
			372.64 – Literatura
			372.65 – Línguas estrangeiras
			372.66 – Teatro
			372.7 – Matemática
			372.8 – Outros ( Química, Física, etc)  / Jogos com ritmos, música, etc.
			372.82 – Economia doméstica
			372.83 – Estudos sociais / Educação para o trânsito
			372.832 – Organização Social e Política (OSPB)  /  Educação Moral e
			                 Cívica  (livros de educação elementar e livros do professor)
			                 Símbolos nacionais
			372.84 – Religião
			372.86 – Educação física
			372.868 – Dança
			372.87 – Música
			372.89 – Geografia / História
			372.891 – Geografia
			372.9 – Tratamento histórico e geográfico
			372.946 – Parâmetros curriculares -Espanha
			372.981 – PCN  / Parâmetros Curriculares Nacionais - Brasil

			373 – Ensino Secundário
			373.01 – Teoria e filosofia
			373.02 –  Equipamento e material
			373.06 – Organização
			373.08 – História
			373.082 – A mulher no ensino secundário
			373.09 – Tratamento histórico e geográfico
			373.1 – Organização e atividades
			373.11 -  Organização e atividades na escola secundária
			373.19 – Currículo
			373.2 – Programas específicos
			373.21 – Escolas comunitárias, alternativas ou religiosas
			373.222 – Escolas particulares
			373.224 – Escolas públicas
			373.23 – Níveis específicos
			373.236 – Nível baixo ( 5ª a 8ª séries)
			373.238 –Nível alto ( 2º grau)
			373.241 – Escolas modernas
			373.242 – Escolas clássicas ( com ênfase em grego e/ou latim)
			373.243 – Escolas militares
			373.246 – Escolas vocacionais
			373.3-.9 –Educação secundária em países . cidades ou localidades específicas
			                  Usar 373 +  notação 3-9 da Tabela 2
			                  Ex.: da Austrália – 373.94

			374 – Educação de adultos
			374.001 – Teoria e filosofia
			374. 01 – Educação com objetivos específicos
			374.012 –  Educação básica  /  Alfabetização de adultos
			374.013 – .019 – Educação vocacional , moral, ética, social, etc.
			                  Usar 374.01 + notação igual a 370.113-.119
			                  Ex.: Educação de adultos para o lazer 374.019
			374.1 – Organização e atividades
			374.2 – Uso de grupos, computadores, etc.  /  Educação pela TV
			374.4 – Educação à distância  / Cursos por correspondência
			374.8 – Instituições específicas para educação de adultos ( centros
			             comunitários,  cursos de férias, etc. )

			375 – Currículo – Nível superior
			375.001 – Desenvolvimento do currículo
			375.006 – Avaliação do currículo

			377 – Escola e Religião

			378 – Cursos Superiores  / Universidade  /  História e organização
			378.81 – Ensino Superior no Brasil
			378.001 – Teoria e filosofia
			378.006 – Organização
			378.008 2 – Mulheres no Curso Superior

			378.01 – Por objetivos específicos
			               Usar 378.01 + notação igual  370.111 - .119
			378.013 –  Educação profissional
			378.03 – Universidades alternativas ( experimental, livres, abertas, sem sala
			              de aula, etc. )
			378.04 – Universidades particulares
			378.05 – Universidades públicas
			378.052 – Municipais
			378.053 – Estaduais
			378.055 – Federais
			378.07 – Universidades religiosas
			378.1 – Organização e atividades
			378.101 – Administração ( política, regulamentos, cooperação,
			                 desenvolvimento financeiro, planejamento, etc. )
			378.11 – Administração de pessoal
			378.12 – Ensino  / Status acadêmico
			378.122 – Organização do quadro de professores
			378.15 – Níveis de graduação
			378.155 – Graduação  /  incluindo cursos de pós graduação
			378.158 – Cursos noturnos
			378.16 – Administração das atividades acadêmicas
			378.161 – Vestibulares / Exames de admissão em universidades
			378.17 – Métodos de instrução , ensino e estudo
			378.19 – Planta física dos prédios / bem estar / disciplina
			378.199 – Currículo
			378.2 – Níveis acadêmicos ( cursos, residência, teses, etc. )
			378.3 – Ajuda aos estudantes e tópicos relacionados ( Bolsas, ajudas,
			             cooperações)
			378.4-.9 – Tratamento histórico e geográfico
			                  Usar 378 + notação da Tabela 2
			                  Ex.: Educação universitária no México  -  378.72
			378.81 – Ensino Superior no Brasil
			379 – Política da educação pública e seus problemas
			379.1 – Elementos para suporte e controle da educação pública
			              (financiamento, locais, currículos, etc. )
			379.2 – Problemas específicos na educação pública ( educação compulsória,
			              ensino de religião na escola, etc.)
			379.3 – Problemas específicos na educação particular ( suporte e controle
			             governamentais,  financiamentos, etc.)
			379.4-.9 – Tratamento histórico e geográfico
			                  Usar  379 + notação da tabela 2
			                  Ex.: Política da educação pública nos EUA – 379.73

			380 – Comércio, comunicação e transportes
			380.1 – Comércio
			380.13 – Política comercial
			380.141 – Produtos agrícolas
			380.142 – Produtos da indústria mineral
			380.143 – Produtos de outras indústrias extrativas ( vertebrados,
			                 invertebrados, insetos, caça e pesca)
			380.144 – Comércio humano (de escravos )
			380.145 – Produtos de indústrias secundárias e serviços

			381 – Comércio interno
			381.1 – Compras / Vendas à varejo ( incluindo vendas por telefone, TV ,
			              lojas deconveniência , cadeias de lojas, franchising, lojas de
			             departamentos, correio, supermercados, feiras. )
			381.2 – Vendas por atacado
			381.3 – Política comercial  /  Problemas com consumidor, consumismo /
			             Movimentos e informação ao consumidor  /  Proteção ao consumidor
			381.4 – Produtos e serviços específicos
			381.5 – Comercio interestadual e inter-regionais

			382 – Comércio internacional
			382.01 – Teoria e filosofia
			382.1 – Generalidades / Teoria
			382.17 – Balança de pagamento
			382.3 – Política comercial
			382.4 – Comércio internacional  de produtos e serviços ( consumo como
			              medida de volume, valor e tipo de comércio de produtos específicos)
			382.5 – Importação  / Cotas de importação  / Embargos à importação  /
			             Licenças de importação
			382.6 – Exportação  / Subsídios / Controle / Restrições / Licenças / Inspeção  382. 7 –Tarifas ( incluindo isenção para fins educacionais, médicos, turísticos
			382.9 – Acordos comerciais
			382.93-.99 – Acordos comerciais com países específicos
			                  Usar 382.9 + notação de 3 – 9 da Tabela 2
			                  Ex.: Acordo comercial do Reino Unido  -  382.941
			                          Acordo bilateral : Acordo  Reino Unido e França  -      
			                          382.941044  (colocar um “ 0 ”  entre os dois países )

			383 – Comunicação Postal
			383.1 – Correio manual ( cartas, jornais, revistas, material impresso)
			383.14 – Sistema de coleta, transporte, distribuição
			383.2 – Aspectos econômicos ( custos, selos)
			383.4 – Organização postal ( interna e internacional / convenções )

			384 – Comunicações  / Telecomunicações
			384.1 – Telégrafo
			384.3 – Comunicação por computadores / telex / vídeotelex )
			384.5 – Comunicações através de ondas ( Por satélite / radiotelégrafos /
			              radiotelefone )
			384.55 – Televisão ( estações, serviços, programas, TV livre e TV paga,    
			                canais, antenas, circuitos fechados, vídeos)
			384.6 – Telefone(serviços, fax, centrais telefônicas, conferências via telefone)
			384. 8 – Filmes ( aspectos, serviços, tipos, etc. )

			385 – Transporte ferroviário
			385.1 – Aspectos econômicos da produção
			385.2 – Atividades e serviços (passageiros, cargas, fretes)
			385.3 – Facilidades ( Estações, vagões, locomotivas, trilhos)
			385.5 – Trens especiais ( monotrilho, e outros incluindo os usados em
			              industrias)
			385.6 – Teleféricos e funiculares
			385.7 – Outros

			386 – Transportes na água ( em lugares dentro do continente)
			386.1 – Aspectos econômicos
			386.2 – Atividades, serviços e facilidades
			386.22 – Navios
			386.242 – Transporte de passageiros
			386.244 – Transporte de cargas
			386.3 – Transporte fluvial
			386.4 – Transporte em canais
			386.5 – Transporte em lagos
			386.6 – Transporte em balsas
			386.8 - Portos

			387 – Transporte na água, ar e espaço
			387.1 – Portos ( tipos, serviços, atividades, etc.)
			387.2 – Navios
			387.5 – Transporte marítimo ( tipos, rotas, atividades, serviços, passageiros e
			             cargas)
			387.7 – Transporte aéreo  ( tipos, rotas, atividades, serviços, passageiros e
			              cargas)
			387.736 – Aeroportos
			387.8 – Transporte espacial

			388 –  Transporte terrestre
			388.1 – Estradas ( tipos, custos, etc.)
			388.3 – Transporte em rodovias  /  Controle de tráfego / Uso / informações
			              aos usuários / Volume de tráfego
			388.32 –  Serviços
			388.322 – Ônibus
			388.324 – Caminhões de carga
			388.33 – Paradas, estações, terminais
			388.34 – Veículos ( gasolina, diesel, gás natural, de tração, de neve)
			                Motos  /  Bicicletas
			388.4 – Transporte local
			388.41 – Tráfego de pedestres e veículos
			388.411 – Ruas
			388.413 – Atividades e serviços ( Ônibus, taxis, etc, )
			388.42 – Transporte local em trilhos ( Metrô, bondes, etc.)
			388.44 – Sistemas elevados ( monorail, etc. )
			388.47 – Terminais, estações, estacionamentos
			388.5 –  Oleodutos ( petróleo, gás, carvão )

			389 –  Metrologia e padronização
			389.1 – Metrologia  (Sistemas de medidas : Sistema métrico ( internacional) /
			              Sistema imperial ( Inglaterra) / Sistema de tempo
			              Pesos e medidas
			389.6 – Padronização  (Quantidade e tamanho e qualidade)
			                                                   
			390– Costumes, trajes, etiqueta, folclore

			390.08 – História e descrição de costumes e condições sociais de tipos de
			                pessoas
			390.0981 – Usos e costumes do Brasil
			390.1 – Costumes pelo status econômico
			390.2 – Costumes pela classe social
			390.22 – Realeza
			390.23 – Nobreza
			390.24 – Povo
			390.25 – Servos e escravos
			390.4 – Costumes por ocupação
			               Usar Tabela 7
			               Ex.: Costumes de advogado  -  390.4344

			391 - Trajes e aparência pessoal
			391.1 –  De homens
			391.2 – De mulheres
			391.3 – De crianças
			391.4 – De vestuário e acessórios ( roupas, sapatos, chuteiras, luvas,  etc.)
			391.434 – Máscaras
			391.5 – Estilos de cabelos
			391.6 -  Aparência  pessoal ( uso de cosméticos, perfumes, material de
			             higiene pessoal, banho)
			391.65 – Tatuagens e incisões /  piercings
			391.7 – Jóias

			392 – Costumes relativos à vida doméstica
			392.0981 – Usos e costumes na vida doméstica no Brasil
			392.1 – Aniversários  /  puberdade  / maioridade
			392.3 – Habitação e artes domésticas
			392.30981 – Religiões e crenças no Brasil
			392.4– Namoro e noivado
			392.5– Casamento
			392.6 – Relação entre os sexos

			393 - Costumes sobre morte
			393.1 – Enterro
			393.2 – Cremação
			393.3 – Embalsamamento
			393.4 – Velório
			393.9  - Luto

			394 – Costumes gerais
			394.1 – Alimentos / comidas / bebidas / uso de drogas / bebidas alcóolicas
			             Tabus sobre comidas
			394.2 – Datas comemorativas  / Ocasiões especiais / Aniversários  /
			             Celebrações / Lançamentos de livros / Festas nos colégios (SEA)
			394.20981 – Festas tradicionais no Brasil
			394.25 –  Carnaval
			394.26 – Feriados /Dia da Independência / Dia da Pátria
			394.261 – Feriados  de Dez./Jan./Fev : Ano novo / São Valentin, etc
			394.262 – Feriados de Mar./Abr./ Maio : Dia das mães, etc.
			394.263 – Feriados de Jun./Jul./Ago. : 4 de Julho, Queda da Bastilha, etc.
			394.264 – Feriados de Set./Out./Nov. : Oktoberfest, Halloween, Ação de
			                Graças. Etc.
			394.265 – Feriados  religiosos
			394.266 – Feriados religiosos cristãos
			394.2663 –  Natal
			394.2667 –  Páscoa
			394.267 – Feriados judáicos
			394.4 – Creimônias oficiais / Inaugurações / Jubileus
			394.6 – Dança /Costumes de recreação / Jogos, etc.
			394.30981 – Danças e jogos tradicionais do Brasil
			394.5 – Procissões / Paradas / Cortejos
			394.6 – Feiras / Mercados / Exposições
			394.7 – Cavalaria
			394. 8 – Duelos e suicídios
			394.9 – Canibalismo

			395 – Etiqueta
			395.1 – Para grupos de idade e sexo (crianças, adultos, homens e mulheres)
			395.2 – Para etapas no ciclo da vida ( namoro, casamento, funerais, etc.)
			395.3 – Para ocasiões especiais ( Danças, hospitalidade, festas, etc. )
			395.6 – Para correspondência social ( convites, cartas, etc. )
			395.7 – Em situações diversas ( na escola, nos esportes, nos negócios, nas
			             igrejas, nos teatros, nas lojas, em conversas, à mesa, etc. )

			398 – Folclore / Adivinhações / Lendas

			398.03 – Dicionários e enciclopédias de folclore
			398.2 – Literatura folclórica /     Festas juninas / Carnaval
			398.209 3 - .209 9 – Tratamento específico por países
			              Usar 398.209 + notação de lugar da Tabela 2
			              Ex.: Folclore francês  - 398.20944 ( sem espaço)
			398.20946 – Folclore espanhol
			398.2098 – Folclore da América Latina
			398.20981 – Folclore brasileiro  /  Folclore MG / Carrancas

			398.21 – Histórias de bruxas, centauros, fadas, duendes, deuses, sereias,
			                ogres, vampiros, feiticeiros, mágicos
			398.22 – Mitologia e lendas ( heróis, reis, etc. )
			398.23 – Histórias de lugares e tempos
			398.234 – Histórias de lugares legendários ( ex.: Atlântida )
			398.236 – Histórias de tempos ( Estações, feriados)
			398.24 – Histórias de plantas e animais
			398.242 – Plantas
			398.245 – Animais
			398.2454 – Histórias de animais legendários ( Dragões, fênix, unicórnios,
			                   lobisomens )
			398.25 – Histórias de fantasmas
			398.26 – Histórias de fenômenos físicos ( fogo, água, minerais, coisas
			               celestes, tempo: temporal, vento, chuva, etc. )
			398.27 – Histórias da vida humana ( acontecimentos históricos, aniversários,
			               amor, casamento, ocupações, recreação, comidas, moradias )
			398.3 – Fenômenos naturais e físicos ( lugares, tempos, etc.)
			398.352 – Pessoas com forças paranormais
			398.353 – Pessoa humana : personalidade, qualidades, atividades, amizade,
			                 insanidade, sexo, sucesso)
			398.354 – Ciclos da vida ( nascimento, aniversário, casamento, amor, morte)
			398.355 – Temas sociais ( comércio, crime, comida, lei ,ocupações,
			                  recreação, violência )
			398.356 – Temas técnicos ( engenharia, vôos,  navios, etc.)
			398.357 – Temas artísticos e literários ( livros, música pintura, etc.)
			398.358 – Temas históricos e políticos ( nacionalismos, guerras,
			                  acontecimentos históricos)
			398.36 – Temas científicos / Fenômenos físicos ( tempo, água, fogo, terra,
			               minerais, plantas, animais, etc.)
			398.4 – Fenômenos legendários e paranaturais ( cidades, plantas, animais,
			             superstições, vampiros, centauros, etc.)
			             Mágica
			398.47 – Fantasmas
			398.5 – Literatura de cordel
			              Livros de bolso ou folhetos com histórias e músicas populares
			398.6 – Enigmas  / Travalíngua / Advinhações / Parlendas

			398.8 – Ritmos, danças, jogos, poesia folclórica, cantos folclóricos
			             Ex.: Poesia folclórica espanhola – 398.846 (46 = Espanha)
			                     Cantos folclóricos  espanhóis – 398.8746 ( 46= Espanha)
			398.9 – Provérbios
			                        Usar 398.9 + notação Tabela 6
			                        Ex.: Provérbios em português 398.969
			                               Provérbios em francês 398.941
			399 – Costumes de guerra e diplomacia

			400 – Filologia

			401 – Teoria e filosofia
			401.3 – Línguas  internacionais ( línguas universais, diplomáticas)
			401.4 – Línguas e comunicação (classificar aqui lexicologia)
			401.43 – Semântica
			410 – Lingüística
			410.1 – Teoria e filosofia
			410.2 – Linguagem de computador
			411 – Sistemas de escrita ( alfabeto, Braille, abreviaturas, pontuação, etc.)
			412 –Etimologia /  Nomes próprios - significado
			413 – Dicionários
			413.028 – Dicionários  ( técnicas, procedimentos, equipamentos, materiais)
			                 Elaboração de dicionários
			                 Lexicografia
			413.1 – Dicionários especializados incluindo de abreviaturas
			414 – Fonologia e fonética
			415 – Gramática
			415.03 – Dicionários  e enciclopédias de gramática
			415.82 – Verbos (geral)
			417 – Dialetologia
			418.007 – Linguagem / Línguas – Estudo e ensino
			418.02 – Tradução e interpretação
			419 – Outras linguagens que não as escritas e faladas – Linguagem de sinais

			420 – 490 – Línguas Específicas
			420 – Língua inglesa
			423 – Dicionários
			423.69 -  Dicionário inglês/português/inglês  (69 = português)
			425 – Gramática / Literatura usada para ensino do inglês
			428.24 – Inglês básico aplicado, inclusive termos estrangeiros

			430 – Língua alemã
			433 – Dicionários
			433.69 - Dicionário alemão/português/alemão – (69 = português)
			435 – Gramática alemã

			440 – Língua francesa
			443 – Dicionários  
			443.69 – Dicionário de francês/ português
			445 – Gramática

			450 – Língua italiana
			453 – Dicionários
			453.69 – Dicionário de italiano/português
			455 – Gramática

			460 – Língua espanhola
			460.143 - Semântica
			460.98 – Língua espanhola na América Latina
			461 – Escrita
			461.1 – Sistemas de escrita ( alfabeto, Braille, etc)
			461.5 – Fonologia.
			461.52 – Ortografia e pronuncia ( Soletrar)
			461.58 – Fonética
			461.6 – Entonação
			462 – Etimologia e formas de linguagem
			462.4 – Elementos estrangeiros (ex.: Palavras francesas no espanhol 462.441)
			463 – Dicionários
			463.028 – Língua espanhola - Lexicografia
			463.1 – Dicionários especializados
			463.2 - .9 – Dicionários bilíngües ( ex.: Dic.Espanhol / Inglês – 463.21 )
			463.69 – Dicionário espanhol/português
			465 – Gramática  / morfologia / sintaxe /  verbos
			          Ensino de Espanhol ( Todos os colégios, com exceção do Espanhol, -
			          Observação: Classificar aqui literatura infanto-juvenil em espanhol,
			          usada para ensino da língua – 465 )
			465.82 - Verbos
			467 – Variações históricas e geográficas ( dialetos, etc)
			467.98 – Dialetos da América Latina Espanhola
			468 – Lingüística aplicada
			468.1 – Palavras ( significado, pronúncia e dicção)
			468.2 – Estrutura das expressões
			             Vocabulário
			468.3 – Uso correto da expressões ( prática)
			468.4 – Leitura
			468.6 – Textos para prática da linguagem
			             Manual de leitura
			             Leitores

			469 – Língua portuguesa
			 
			469.02 – Miscelânea
			469.0469 – Redação
			469.07 – Estudo e ensino
			469.076 – Problemas e exercícios
			469.09 – História
			469.11 – Pontuação
			469.15 – Fonologia
			469.152 – Ortografia
			469.2 – Etimologia / Inclusive elementos estrangeiros
			469.3 –  Dicionários da língua portuguesa
			469.3028 – Lexicologia
			469.321 - Dicionários  português/ inglês
			469.341 - Dicionários  português/ francês
			469.351 - Dicionários  português/ italiano
			469.361 - Dicionários  português/ espanhol
			469.5 – Gramática da língua portuguesa
			469.53 – Análise sintática / Etimologia
			469.582 – Verbos / regência verbal
			469.7 – Gírias
			469.709 – Variações regionais
			469.8 – Lingüística / Textos
			469.802 - Traduções
			469.83 – Erros

			470 – Língua latina
			473 – Latim – Dicionários

			480 – Língua grega

			490 – Outras línguas
			491.2 – Sanscrito
			491.5 – Línguas iranianas
			491.7 – Russo
			492.4 – Hebraico
			492.7 – Árabe
			495.1 – Chinês
			495.6 – Japonês
			495.7 – Coreano
			496 – Línguas africanas
			497 – Línguas nativas Norte Americanas
			498 – Línguas nativa Sul Americanas
			498.382 – Guarani
			498.3829 – Tupi


			500 – Ciências naturais

			500.81 – Homens cientistas  ( 500.8 + Tab. 1)
			500.82 – Mulheres cientistas
			501 – Teoria / Filosofia / Métodos científicos de pesquisa
			502 – Manuais / Experiências / Microscópios
			503 – Dicionários e enciclopédias de ciências naturais
			          Dicionários e enciclopédias de ciências físicas e biológicas
			507 – Estudo e ensino / tópicos relacionados / Pesquisas / Equipamento para
			          estudo e ensino
			507.8 – Experiências na escola, experiências para crianças                                            
			508 – História natural
			508.2 – Períodos  (Épocas específicas)
			509 – Tratamento histórico, geográfico e pessoal

			510 – Matemática

			510.03 -   Dicionários e enciclopédias de matemática
			510.07 – Matemática – Estudo e ensino
			510.1 – Teoria e filosofia  
			510.7 – Teoria numérica  
			511 – Princípios gerais da matemática
			511.2 – Sistemas matemáticos : intuitivo, indutivo, dedutivo
			511.3 – Lógica : axiomas, hipóteses, postulados, operações lógicas, etc.
			511.32 – Conjuntos
			511.33 – Funções
			511.4 – Aproximações e expansões
			511.5 – Teoria e construção de gráficos
			511.6 – Análise combinatória
			511.8 – Modelos matemáticos
			512 – Álgebra e teoria numérica
			512.1 – Álgebra combinada com outros ramos da matemática
			512.2 – Grupos e teoria dos grupos
			512.3 – Campos
			512.4 – Círculos
			512.5 – Álgebra linear, multilinear, multidimensional
			512.7 – Teoria numérica
			512.9 – Fundamentos de álgebra
			512.92 – Operações algébricas
			512.922 – Exponentes e logaritmos
			512.94 – Teoria das equações
			512.943 – Determinantes / Matrizes
			513 – Aritmética
			513.1 – Aritmética combinada com outros ramos da matemática
			513.2 – Operações
			513.26 – Frações
			513.4 – Progressões
			513.5 – Sistemas numerais ( Binário (2), octal (8), decimal (10),
			            duodecimal (20), hexadecimal (16)
			513.6 – Sistemas não  medidos
			513.9 – Cálculos rápidos, mentais, etc.
			514 – Topologia
			515 – Análises
			515.3 Cálculos e equações diferenciados
			515.4 – Cálculos e equações integrais
			515.5 – Funções  especiais
			515.6 – Outros métodos analíticos
			515.7 – Funções analíticas
			515.8 – Funções de variáveis reais
			515.9 – Funções de variáveis complexas
			516 – Geometria
			516.1 – Aspectos  gerais da geometria
			516.2 – Geometria  Euclidiana
			516.24 – Trigonometria
			516.3 – Geometria analítica
			519 – Matemática aplicada
			519.2 – Probabilidades / estimativas
			519.5 – Estatística matemática

			520 – Astronomia
			520.3 - Dicionários e enciclopédias de astronomia
			521 – Mecânica celeste. Equilíbrio, movimento, gravitação, órbita (lei de
			          Kepler), perturbações, precessão, mutação
			522 – Técnicas, procedimentos, equipamentos e materiais
			           Astrometria, astronomia posicional e prática
			522.1 – Observatórios
			522.2 – Instrumentos  / Telescópios, etc.
			522.6 – Métodos de observação
			522.7 – Astronomia esférica
			522.8 – Técnicas e procedimentos auxiliares
			522.9 – Correções ( de aberrações, refrações astronômicas, precisão, erros de
			              instrumentos)
			523 – Fenômenos e corpos celestes específicos
			          Inclusive Zodíaco
			523.01 – Astrofísica ( Calor, luz, radiações, eletricidade, magnetismo, física
			                molecular, atômica e nuclear, cosmoquímica)
			523.1 – O Universo, galáxias, quasars / Cosmologia
			523.113 – Via láctea
			523.18 – Teorias e expansão do universo
			523.19 – Teorias de fim do universo

			523.2 – Sistema solar
			523.3 – Lua  ( dimensões, campos eletromagnéticos, radioativos, fenômenos,
			             órbita, movimento, eclípses)
			523.4 – Planetas
			523.41- Mercúrio
			523.42 – Vênus
			523.43 – Marte
			523.44 – Asteróides e planetóides
			523.45 – Júpiter
			523.46 – Saturno
			523.47 – Urano
			523.48 – Planetas Trans-uranianos
			523.481 – Netuno
			523.482 – Plutão
			523.5 – Meteoros / Vento solar / Luz zodíaca / Materiais interplanetários e
			             trabalhos sobre meteoros e asteróides
			523.51 – Meteoros, meteorítos , estrelas cadentes
			523.6 – Cometas
			523. 642 – Cometa de Halley’s
			523.7 – Sol ( tamanho, brilho, fenômenos, energia e radiação solar,
			             movimentos, rotação, interior solar e eclipses)
			523.8 – Estrelas ( tamanho, fenômenos, radiação estrelar, movimentos,
			             agregações e variações, etc.)
			523.9 – Satélites ou luas (anéis, eclipses, ocultação, trajetória)

			525 – Terra ( dimensões, propriedades, orbita e movimentos, estações e
			          zonas de latitude, aurora e crepúsculo, etc.)

			526 – Geografia matemática / Cartografia
			526.022 1 – Desenho de mapas
			526.1 – Geodésia ( relativo à forma da terra
			526.3 – Posição geográfica e astronômica ( latitude, longitude, gravidade,
			             projeções em mapas ( para leitura de mapas ver 912.014),
			             levantamento topográfico
			527 – Navegação celeste ( latitude, longitude, posição, direção)
			527.03 - Dicionários e enciclopédias náuticos
			528 – Efemérides ( almanaques e guias astronômicos e náuticos)

			529 - Cronologia
			529.1 – Dias / manhã, tarde e noite
			529.2 – Intervalo de tempo ( anos, meses, semanas)
			529.3 – Calendários / calendários de outras religiões
			529.4 – Calendários ocidentais ( cristão, juliano, gregoriano, Igreja católica) 529.5 – Reforma de calendários
			529.7 – Horologia (achando e medindo o tempo)

			530 – Física

			530.01 – Teoria e filosofia
			530.07 – Física – Estudo e ensino
			530.1 – Teoria e física matemática
			530.11 – Teoria da relatividade
			530.12 – Teoria da quantidade (mecânica matriz, representação Heisenberg,
			               mecânica das ondas, mecânica estatística e de quantidade)
			530.124 – Ondas
			530.14 –Teoria de ondas e campos eletromagnéticos
			530.15 – Física matemática
			530.3 - Dicionários e enciclopédias de física
			530.4 – Estados da matéria : sólida, líquida, gasosa , plasma (inclusive
			             estrutura, propriedades, tipos, fases de transformação, difusão
			              e transferência de massa ,superfícies , estado líquido, estado fluido,
			              estado gasoso, cristais líquidos etc.)
			530.7 – Instrumentos para medida, controle , etc.
			530.8 – Medidas / Unidades de medida : métrica, britânica etc.
			531 – Mecânica / Mecânica sólida
			531.1 – Dinâmica, estática, massa e gravidade, partículas,  pressão
			531.11 – Dinâmica
			531.112 – Cinemática
			531.113 – Cinética, ondas, deformação e corrente, viscosidade e fricção
			531.12 – Estática
			531.14 – Massa e gravidade
			531.16 – Partículas mecânicas
			531.163 - Dinâmica
			531.2 – Estática  dos sólidos ( estática gráfica )
			531.3 - Dinâmica dos sólidos (cinemática sólida, cinética sólida, vibrações,
			            ocilações, movimentos de pendulo, ondas, movimento de rotação,
			            centrifugação, deformação, tensão, esforço, elasticidade, plasticidade)
			531.4 – Fricção e viscosidade dos sólidos
			531.5 – Massa e gravidade dos sólidos; projéteis
			531.6 – Energia, transformações
			532 – Mecânica dos fluidos / Mecânica dos líquidos / Hidráulica, estática,
			          flutuação dinâmica, fluxo, corrente, ondas  (dinâmica, fluxos,
			          propriedades, líquidos, etc.)
			532.2 – Hidrostática
			532.4 – Massa, densidade, gravidade dos líquidos
			532.5 – Hidrodinâmica
			533 – Mecânica do gás (pneumática) ( estática, massa, densidade, gravidade
			          específica, dinâmica, fluxo, ondas, vácuos, aeromecânica , teorias)
			534 – Som (geração, transmissão, características, freqüência, vibrações)
			535 – Luz / infravermelha/ ultravioleta ( teorias, ótica física, transmissão,
			          absorção, emissão de luz, reflexão, luminescência, fluorescência,
			          dispersão, feixes, cores, etc.)
			          Ótica
			535.6 – Cores  ( no geral)
			536 – Calor (teorias, transferência, condução, radiação, efeitos na matéria,
			          contração e expansão da matéria, gases, temperatura, termodinâmica)
			          Fogo
			536.3 – Radiação
			536.5 – Temperatura
			536.7 – Termodinâmica
			537 – Eletricidade (teoria, eletrostática, etc.)
			537.5 – Eletrônica (Ionização de gazes, emissões térmicas,  descargas através
			             de gases , ondas de rádio  e microondas, raio X, fenômenos
			              fotoelétricos) 537.6 – Eletrodinâmica ( correntes elétricas) e
			               termoeletricidade
			538 – Magnetismo
			539 – Física moderna
			539.1 – Estrutura da matéria
			539.2 – Radiação/ Usinas nucleares
			539.6 – Física molecular
			539.7 – Física atômica e nuclear / Energia nuclear
			539.76 - Átomo

			540 – Química

			540.03 – Enciclopédias e dicionários
			540.1 – Teoria e filosofia           Problemas e exercícios
			540.3 - Dicionários e enciclopédias de química
			540.7 – Alquimia
			541 – Química física e teórica
			541.2 – Física teórica
			541.22 – Estrutura molecular
			541.24 – Estrutura atômica  /  Átomo
			541.26 – Estequiometria
			541.28 – Química quantitativa
			541.3 – Química física ( química de superfície : absorção, adesão, coesão
			              tensão / propriedades/ soluções,/fotoquímica )
			541.34 – Soluções químicas
			541.36 – Termoquímica ( combustão / fases de transformação / dissociação
			               térmica / reações a temperaturas extremas  e termodinâmica )
			541.37 – Eletroquímica ( soluções eletrolíticas : ions, semicondutores,
			              química magnética )
			541.38 – Rádioquímica ( química nuclear, radiações químicas, isótopos)
			541.39 – Reações químicas
			541.7 – Atividades óticas
			542 – Técnicas, procedimentos, equipamentos e materiais ( laboratórios,
			           receptáculos e acessórios) ( Testes e medições, técnicas de testes,
			           processamentos e uso de equipamentos) Fervendo e destilando /
			            Filtragem e diálise
			542.7 – Produção, processamento e medição de gás
			543 – Química analítica
			543.01 – Reagentes
			543.02 – Preparação
			543.07 – Instrumentação
			543.08 – Métodps específicos ( microanálise e semimicroanálise / métodos
			               mecânicos / métodos óticos / análise térmica / métodos
			               eletromagnéticos / análise rádioquímica / análise cromotográfica )
			544 – Análise quantitativa ( Reagentes, preparação, instrumentos, separações
			           sistemáticas, análises térmicas análises de gases, análises de disfusão,
			           spectroscopia, microanálises )
			          Outros métodos:  cromatografia / métodos mecânicos, bioquímicos,
			          óticos, fotométricos, refratométricos e interferométricos / polarimetria
			          Métodos eletromagnéticos / Análises radioquímicas
			545 – Análises quantitativas  ( gravimétricas, volumétricas, métodos
			          eletromagnéticos , análises térmicas, com gases, outros métodos, etc.)
			546 – Química inorgânica/ Hidrogênio e seus componentes/ Metais e seus
			           componentes
			547 – Química orgânica
			547.001 – Teoria e filosofia
			547.01 – Tipos de compostos identificados por seus elementos :
			                hidrocarbonos / holocarbonos /óxidos e hidróxidos ( álcoois, éter,
			                acetonas, ácidos, sulfatos e hidrosulfatos )
			547.1 – Química física e teórica
			547.2 – Sínteses e reações orgânicas variadas
			547.3 – Química analítica
			547.4 – Componentes alipáticos ( hidrocarbonos, parafinar, acetilenos, etc)
			547.5 – Componentes cíclicos
			547.6 – Componentes aromáticos
			547.7 – Macromoléculas e afins ( alcalóides, esteróides, hormônios,ácidos
			             biliares, vitaminas, proteínas, enzimas, antibióticos, lipídios,
			             carboidratos, açucares, ácidos nucléicos, etc
			547.8 – Outras substâncias orgânicas : substâncias fósseis  (petróleo /  gás
			             natural ),  látex, borracha, resinas,  pigmentos
			547.83 – Petróleo
			548 – Cristalografia  ( propriedades, estrutura, medição , disfração,
			          cristalografia ótica)
			549 – Mineralogia / Metais ( determinação de tipos , minerais nativos,
			          localização de minerais, etc.
			549.6 – Argila                                                                                      

			550 – Geologia / Recursos Minerais / Rochas

			551 – Geologia
			551.1 – Terra / Estrutura e propriedades da terra
			551.2 – Vulcões, crateras, águas termais , gases, terremotos
			551.3 – Processos subterrâneos ou de superfície e seus agentes ( erosão,
			             sedimentação, formações de solos, movimento de massa terrestres,
			             movimentação de gelo, geleiras, icebergs,  lagos e rios gelados , etc.)
			551.4 – Geomorfologia e hidrosfera
			551.415 Desertos e terras áridas
			551.42 – Ilhas ,recifes, atols

			551.43 – Elevações, montanhas, platôs, chapadas, etc.
			551.430981 – No Brasil
			551.44 – Depressões, vales, buracos , canyons, etc.
			551.45 – Regiões planas ( pampas, planícies, estepes, tundras, deltas, regiões
			                costeiras, praias, etc.
			551.46 – Hidrosfera / Oceanografia / Mares /Oceanos
			551.461 – Oceano Atlântico
			551.462 – Mar Mediterrâneo
			551.463 – Golfo do México e Mar do Caribe
			551.465 – Oceano Pacífico
			551.467 – Oceano Índico
			551.468 – Oceano Ártico (Polo Norte )
			551.469 – Oceano Antártico (Polo Sul)
			551.47 – Dinâmica dos oceanos ( correntes, ondas etc.)
			551.48 – Hidrologia
			551.482 –Lagos e lagoas
			551.483 – Rios e córregos
			551.484 – Cachoeiras, quedas, cascatas
			551.489 – Enchentes
			551.49 – Lençóis subterrâneos
			551.5 – Meteorologia / Tempo
			551.51 – Atmosfera
			551.518 – Ventos
			551.5142 – Ozônio, Camada de  (Meteorologia)
			551.52 – Termodinâmica / Atmosfera / Temperaturas /Radiações / Pressão
			               atmosférica
			551.55 –Distúrbios e formações atmosféricas ( Chuvas, tempestades,
			              ciclones, furacões, tornados, tempestades de neve ) Para tempestades
			              como catástrofes ver tb.363.3492
			551.56 – Eletricidade atmosférica ( raios, etc.)
			551.57 – Hidrometeorologia ( umidade, evaporação, condensação, fog,
			               nevoeiro, nuvens, chuva)
			551.578 – Neve, chuva de granizo, avalanches
			551.6 – Clima / Tempo (tipos,  previsões,  instrumentos para medição e
			             previsão, controle e modificação artificial do clima)
			551.7 – Geologia histórica  / Eras geológicas. Para paleontologia ver 560
			551.8 – Geologia estrutural (estratificações e modificações geológicas)
			551.9 – Geoquímica
			552 – Petrologia ( tipos de rochas: ígneas, vulcânicas, plutônicas,
			          sedimentadas, etc.)
			553 – Geologia econômica
			553.1 – Formação e estrutura de depósitos geológicos
			553.2 – Materiais carbonáceos / Carvão
			553.28 – Poços de petróleo , óleo, gás natural
			553.3 – Minas de ferro
			553.4 – Minas de metais e semimetais ( ouro, metais preciosos, prata, platina,
			             e outros)
			553.5 – Minas de pedras para estruturas e esculturas ( mármore, granito, etc.)
			553.6 –Outros ( incluindo minerais industriais
			553.7 – Minas de água / gelo / água salgada, água mineral / nascentes
			             subterrâneas e de superfície
			553.8 - Pedras preciosas (todas ) e semipreciosas
			553.9 – Gases inorgânicos ( hidrogênio, nitrogênio, oxigênio, gases nobres,
			              hélio)
			554 a 559 Geologia por países ( 55+ número do lugar
			                  Ex: Japão – 555.2
			                        Brasil – 558.1              -        Minas Gerais – 558.151

			560 – Paleontologia

			561 – Paleobotânica /Microorganismos fósseis.( Fósseis de pólen, sporos,
			          frutas, sementes, árvores petrificadas e outras plantas)
			562 – Fósseis de invertebrados
			563 – Fósseis de animais marinhos invertebrados
			564 – Fósseis de moluscos
			565 – Fósseis de artrópodes (crustáceos)
			567 – Fósseis de vertebrados ( repteis, anfíbios, etc.) e peixes
			567.9 – Animais pré-históricos / Dinossauros
			568 – Fósseis de aves
			569 – Fósseis de mamíferos
			569.9 – Fósseis humanos

			570 – Biologia

			570.1 – Teoria e filosofia
			570.7 – Estudo, pesquisa e correlatos
			571 – Fisiologia / Seres vivos
			571.1 – Fisiologia animal
			571.2 – Fisiologia de plantas e microorganismos
			571.3 – Anatomia e morfologia comparada
			571.4 – Biofísica
			571.6 – Célula / Citologia ( em geral : animal, vegetal, etc)
			571.7 – Controle biológico e secreções ( de animais, plantas,
			             microorganismos / Controle de processos fisiológicos como por
			             exemplo a hibernação de alguns animais / secreções glandulares que
			             não sejam hormônios)
			571.74 - Hormônios
			571.8 – Reprodução, desenvolvimento e crescimento
			571.86 – Embriologia / Sexualidade
			571.9 – Doenças e Patologia / Generalidades
			571.95 – Toxicologia
			571.96 – Imunologia (resistência a doenças, sistema imunológico, antígenos)
			571.97 – Doenças diversas ( alergias, autoimunizantes, deficiência de
			                imunidade, deformações, tumores, doenças transmissíveis, doenças
			                causadas por microorganismos, doenças causadas por parasitas)
			572 – Bioquímica
			572.3 – Tópicos gerais
			572.4 – Metabolismo
			572.58 - Vitaminas
			572.6 – Proteínas
			572.7 – Enzimas
			572.8 – Bioquímica genética / Genética molecular / Biologia molecular/
			             Citogenética / Ácido nucléico
			572 86 – DNA
			573 – Sistemas fisiológicos específicos em animais
			573.1 – Sistema circulatório
			573.2 – Sistema respiratório
			573.3 – Sistema digestivo
			573.4 – Sistemas endocrinológico e excretor
			573.5 – Pele, pêlo  (cor, cor de cabelo, pena, pêlo)
			573.6 – Sistema reprodutivo
			573.7 – Sistema músculo-esquelético
			573.8 – Sistema nervoso
			573.87 – Sistema sensorial / Sentidos
			573.875 – Tato
			573.877 – Olfato
			573.878 – Paladar
			573.88 – Visão
			573.89 – Audição
			573.9 – Sistemas e órgãos diversos ( sistema vocal, laringe, etc. )
			573.995 – Cabeça
			573.996 – Tórax
			573.997 – Abdômen
			573.998 – Membros
			575 – Partes específicas do sistema fisiológico das plantas ( folhas, caule,
			         flores, órgãos reprodutores , etc.)
			576 – Genética e evolução  (ver tb. 599.935)
			576.5 – Genética ( leis da genética, variações, mutações, genética ecológica)
			576.8 – Evolução
			576.801 – Teoria e filosofia
			576.82 – Teorias da evolução (de Darwin, seleção natural e outras)
			576.827 - Hereditariedade
			576.83 – Origem da vida
			576.839 – Vida extraterrestre
			576.84 – Ciclos de evolução
			576.85 – Fatores que afetam a evolução / Fatores sexuais, etc.

			577 – Ecologia / Meio ambiente / Biodiversidade

			577.09 – História da ecologia
			577.1 – Ecosistemas específicos
			577.14 – Bioquímica ecológica
			577.2 – Fatores específicos que afetam a ecologia / queimadas / objetos não
			             biodegradáveis
			577.27 – Efeitos humanos na ecologia - Lixo
			577.273 – Poluição da agricultura
			577.274 – Poluição causada pela guerra / Incluindo guerra nucleares
			577.276 – Poluição do ar / Efeito estufa/ Camada de ozônio / Chuva ácida
			577.277 – Poluição radioativa
			577.279 – Poluição por pesticidas
			577.3 – Ecologia nas florestas
			577.309 13 –  Florestas tropicais / preservação
			577.4 – Ecologia no campo
			577.5 – Ecologia / Natureza / Ameaças ao meio ambiente
			577.51 – Litoral, costa
			577.52 – Ilhas
			577.53 – Montanhas, alpes
			577.54 – Desertos
			577.55 – Coisas feitas pelo homem (beirada de estradas, jardins, etc)
			               Ecologia na agricultura  / Jardins
			577.56 – Ecologia urbana
			577.57 – Ecologia do solo
			577.584 – Ecologia de cavernas
			577.6 – Ecologia aquática / Água / Ciclo da água / Poluição das águas
			577.64 – Ecologia em rios; lagos
			577.7 – Ecologia marinha
			577.8 – Aspectos ecológicos da sociobiologia ( comunidades ecológicas, etc.)
			578 – História natural dos organismos e assuntos relacionados
			         Classificação, técnicas, equipamentos, pesquisas, museus, coleções, etc.
			578.73 – Vida nas florestas ( microorganismos, animais e plantas)
			578.754 – Vida nos desertos (microorganismos, animais e plantas)
			578.7554 - Vida nos jardins (microorganismos,  animais e plantas)
			578.756 - Vida nas cidades (microorganismos, animais e plantas)
			578.7584 – Vida nas cavernas (microorganismos, animais e plantas)
			578.76 – Vida aquática (microorganismos, animais e plantas)
			578.77 – Vida marinha (microorganismos, animais e plantas)
			579 – História natural de tipos específicos de organismos
			579.1 – Microorganismos, fungos e algas
			579.2 – Vírus
			579.3 – Bactérias
			579.4 – Protozoários
			579.5 – Fungos
			579.8 – Algas

			580 – Botânica
			580.3 - Dicionários e enciclopédias de botânica
			580.7 – Estudo , pesquisa e tópicos relacionados ( museus, coleções, etc.)
			581 – Tópicos específicos em história natural das plantas
			581.3 – Genética e evolução
			581.7 – Arborização de cidades
			582 – Plantas com características e flores específicas
			582.12 – Plantas herbáceas  / Plantas sem flor
			582.13 – Plantas com flores
			582.16 – Árvores
			582.17 – Arbustos
			582.18 – Videiras
			583/588 – Plantas de grupos específicos

			590 – Zoologia / Animais domésticos   -  ver tb. 636

			590.3 - Dicionários e enciclopédias de zoologia
			590. 7 – Zoologia -Educação, pesquisa e tópicos relacionados / Estudo e
			              ensino
			590.73 -  Zoológicos / Animais de zoológicos
			591 – Animais selvagens
			591.03 – Enciclopédias de animais selvagens
			591.3 – Genética, evolução, filhotes
			591.4 – Adaptação física ( tamanho, peso, tipo, características sexuais,
			             camuflagem, patas, etc.)
			591.5 – Comportamento  ( instinto, inteligência, aprendizagem,
			             sono,(classificar hibernação em 591.565) predadores, comportamento
			             sexual, familiar)
			591.518 – Animais noturnos
			591.564 – Construção de habitações ( ninhos, abrigos, tocas, etc.)
			591.568 – Migrações de animais
			591.6 – Zoologia econômica
			591.63 – Animais benéficos ( incluindo animais para esportes e jogos)
			591.65 – Animais perigosos e venenosos
			591.68 – Animais raros e espécies em extinção
			591.7 – Ecologia animal e características de acontecimentos específicos
			591.77 – Animais marinhos
			591.9 – Animais de lugares específicos
			591.911 – Animais de zonas frias ( geladas)
			591.9143 – Animais de montanhas
			591.9152 – Animais das florestas
			591.9153 – Animais das savanas e lugares relvados
			591.9154 – Animais do deserto
			591.9162 – Animais de estuários ( desembocaduras dos rios no mar)
			591.91693 – Animais dos rios
			592 – Invertebrados (minhoca, besouros, lagartixa,...)
			593 – Invertebrados marinhos (Esponja, estrela, ouriço. corais, algas, água-
			          viva, plâncton...)
			594 – Moluscos
			595 – Artrópodes
			595.3 – Crustáceos
			595.44 - Aranhas
			595.7 – Insetos
			595.78 – Borboleta
			595.796 – Formigas
			595.799 – Abelhas
			596 – Vertebrados
			597 – Peixes
			597.3 – Tubarão
			597.8 – Anfíbios (cobra cega, salamandra)
			597.87 – Sapos, rãs
			597.9 – Répteis ( cobra, tartaruga,  jacaré)
			597.92 – Tartarugas
			597.96 - Cobras
			598 – Aves
			598.47 – Pingüins
			598.6 – Galináceos / Pombas
			598.7 – Pássaros
			598.9 – Falcões
			599 – Mamíferos
			599.2 – Marsupiais
			599.222 – Canguru
			599.25 – Coala
			599.276 - Gambá
			599.352 – Ratos
			599.4 – Morcegos
			599.5 – Cetáceos / Baleias
			599.6 – Animais de casco ( suínos, hipopótamos, camelos, lhamas)
			             Ruminantes ( girafas, bovinos, bisões, caprinos, ovelhas,
			             cervos, alces, eqüinos, zebras, rinocerontes, elefantes, etc.)
			599.64 – Antílopes
			599.642 – Bois
			599.665 - Cavalos
			599.7 – Carnívoros ( hienas, felinos, panteras, leões, tigres, minks, martas,
			             lontras, cães, lobos, ursos, focas, elefantes marinhos, , etc.)
			599.75 - Gatos
			599.77 – Cães
			599.784 – Ursos
			599.786 – Urso polar
			599.789 – Urso panda gigante
			599.8 – Primatas ( macacos, gorilas, etc.)
			599.9 – Homo sapiens / Genética, evolução (dentro da zoologia),
			             características pessoais e psicológicas, raças, diferenças raciais.
			             ( ver tb. 576 )

			600 – Tecnologia (Ciências Aplicadas)

			601 – Teoria e filosofia
			603 – Dicionários e enciclopédias
			604.2 – Desenho técnico / Plantas, projetos
			              Normas técnicas
			              Diagramas elétricos – desenhos
			604.7 – Tecnologia de materiais perigosos ( extração, processamento,
			             utilização, transporte, estocagem de gases, explosivos, corrosivos,
			             inflamáveis, radioativos, tóxicos
			605 – Publicações técnicas seriadas
			606 – Organizações
			607 – Estudo, pesquisa e assuntos relacionados    
			608 – Invenções e patentes
			609 – Tratamento histórico e geográfico (história das invenções)

			610 – Medicina

			610.3 - Dicionários e enciclopédias de medicina
			610.6 – Organizações, profissões
			610.65 – Grupos práticos
			610.69 – Pessoal médico
			610.7 – Estudo, pesquisa, enfermagem e tópicos relacionados
			610.72 – Pesquisas experimentais
			610.73 – Enfermagem ,assistentes e auxiliares
			610.734 – Cruz Vermelha
			610.7340981 – Cruz Vermelha no Brasil

			611 – Anatomia humana  (forma) Embriologia, citologia, histologia
			611.018 – Citologia e biologia celular
			611.01816 – Genética fisiológica (Genética molecular humana) Genoma
			             humano
			611.1 – Órgãos cardiovasculares
			611.12 – Coração
			611.13 – Veias e artérias                                                                      
			611.12 – Coração
			611.2 – Órgãos respiratórios ( nariz, laringe, pleura, diafragma, pulmões, etc.)
			611.3 – Órgãos do trato digestivo ( boca, dentes, palato, glândula salivar,
			              estômago, intestino, reto, pâncreas, etc.)
			611.4 – Órgãos linfáticos e glandulares (tireóide, , etc.) / Endocrinologia
			611.6 – Órgãos urogenitais (ureta, bexiga, testículos, ovários, pênis, vagina,
			              etc.)
			611.61 -  Rins ( anatomia)
			611.7 – Sistema ósseo/muscular ( ossos, articulações, músculos, tendões,
			             cabelos e unhas)
			611.71 – Ossos
			611.72 – Articulações
			611.73 – Músculos
			611.78 – Cabelos e unhas
			611.8 – Órgãos do sistema nervoso e sensitivo
			611.81 – Cérebro, nervos
			611.84 – Olhos
			611.85 – Ouvidos
			611.86 – Órgãos do olfato
			611.87 – Órgãos do paladar
			611.88 – Órgãos do tato
			611.9 – Cabeça, face , pescoço
			611.94 – Tórax
			611.95 – Abdômen
			611.96 – Períneo e região pélvica
			611.97 – Membros superiores ( braços)
			611.98 – Membros inferiores ( pernas)

			612 – Fisiologia humana (função) Corpo Humano ( Pista- Sistema.......)
			612.015 – Bioquímica humana
			612.1 – Sangue  /  Circulação sanguínea
			612.17 - Coração
			612.2 – Aparelho respiratório
			612.3 – Aparelho digestivo
			612.31 – Boca e esôfago
			612.311 – Dentes
			612.312 – Língua
			612.313 – Glândulas salivares e Saliva
			612.39 - Metabolismo
			612.4 – Sistema de secreção, excreção e funções relacionadas
			612.463 -  Rins (fisiologia)
			612.46 – Sistema urinário
			612.6 –Sistema reprodutor / Gravidez / Parto
			612.662 – Menstruação
			612.7 – Sistema músculo-esquelético / Aparelho locomotor
			612.74 -  Músculos
			612.75 – Ossos, articulações
			612.78 – Voz e fala
			612.79 – Pele
			612.799 – Cabelos e unhas
			612.8 – Sistema nervoso e sensorial
			612.81 – Nervos
			612.82 – Cérebro
			612.83 – Coluna,  medula
			612.84  - Olhos e visão
			612.85  - Ouvido e audição
			612.86  - Nariz e olfato
			612.87 – Língua e paladar
			612.88  - Outros, incluindo tato

			613 – Saúde / nutrição – Prevenção  - Programas de saúde
			613.1 –  Fatores que influem : clima, tempo, etc.
			613.2 – Alimentação sadia / Dietas / Dietéticos (ver tb. 641)
			613.23 -  Calorias
			613.24 – Dietas para engordar
			613.25 – Dietas para emagrecer
			613.26 – Dietas específicas
			613.262 – Dietas vegetarianas
			613.263 – Dietas com fibras
			613.264 – Dietas macrobióticas
			613.269 – Dietas com leite materno
			613.28 – Elementos nutritivos específicos
			613.282 – Proteínas
			613.283 – Carboidratos
			613.284 – Gorduras e óleos
			613.285 – Minerais
			613.286 – Vitaminas
			613.287 – Água
			613.4 – Higiene pessoal ( banhos, roupas, cosméticos, etc.)  Dentes - Saúde
			613.5 – Ambiente  ( casa, escritório, temperatura, ar condicionado, etc.)
			613.6 – Prevenção de acidentes contra a saúde (no trabalho, indústrias,
			            viagens, prestação de socorro a acidentados, etc.)
			613.69 –  Sobrevivência depois de acidentes e desastres e outras  
			               circunstâncias desfavoráveis
			613.7 – Aptidão física / Exercícios físicos e esporte para a saúde
			613.704 2 – Exercícios físicos para crianças
			613.704 3 – Exercícios físicos para jovens de 12 a 20 anos
			613.704 4 – Exercícios físicos para adultos
			613.704 6 – Yoga
			613.71 – Exercícios / Esportes
			613.711 – Treinamento para esportes
			613.713 – Levantamento de peso
			613.714 8 – Exercícios de artes marciais
			613.715 – Aeróbica
			613.716 – Exercícios aquáticos e natação
			613.717 – Caminhadas e corrida
			613.78 – Postura correta
			613.79 – Relaxamento / Sono
			613.8 – Drogas / uso, abuso – Psicotrópicos
			613.81 -  Álcool
			613.83 – Narcóticos  /  Alucinógenos
			613.835 – Maconha
			613.84 – Estimulantes / Cocaína
			613.85 – Fumo
			613.9 – Controle da natalidade, higiene sexual, tecnologia da reprodução,
			613.95 - Educação sexual
			613.951 – Jovens
			613.952 – Adultos

			614 -  Saúde pública / Medicina preventiva / Prevenção contra epidemias
			614.52 – Doenças eruptivas
			614.53 – Doenças provocadas por protozoários

			615 – Farmacologia
			          Medicina alternativa
			615.1 - Remédios
			615.321 – Remédios de plantas medicinais
			615.328 – Vitaminas
			615.365 – Insulina
			615.366 – Hormônios sexuais
			615.372 – Vacinas
			615.4 – Farmacologia prática (preparados, soluções, manipulações, pílulas,
			            etc.)
			615.5 – Terapêutica ( alopatia, homeopatia, remédios naturais, com drogas)
			             Terapêutica pediátrica, geriátrica
			615.6 – Métodos de administração de medicamentos
			615.7 – Farmacodinâmica  ( Ação fisiológica e terapêutica dos remédios)
			615.8 – Terapias específicas ( Físicas, mecânicas, fototerapia, termoterapia,
			             radioterapia, eletroterapia, mental, música, dança, arte, ocupacional,
			             etc.)
			615.822 – Massagem
			615.831 – Cromoterapia / Massagens orientais / Do-In
			615.9 – Toxicologia / Prevenção ( venenos, tóxicos, ácidos, etc.)

			616 – Doenças
			616.025 2 – Primeiros socorros
			616.047 – Sintomas de doenças, incluindo febre, edema, gangrena, infecções,
			                 choques
			616.0472 – Dor
			616.0473 – Inflamação
			616.079 – Imunologia humana
			616.1 – Doenças do sistema cardiovascular
			616.2 – Doenças do sistema respiratório
			616.212 – Rinite
			616.3 – Doenças do sistema digestivo
			616.4 – Doenças do sangue, linfáticas, glandulares, endocrinológicas
			616.462 – Diabetes
			616.5 – Doenças dermatológicas, dos cabelos e unhas
			616.6 – Doenças do sistema urogenital e urinário
			616.7 – Doenças do sistema múculoesqueletico
			616.8 – Doenças do sistema nervoso e desordens mentais
			616.81 – Doenças cérebro-vasculares
			616.82 – Doenças da meninge / meningite
			616.83 – Hemiplegia
			616.831 – Mal de Alzheimer
			616.832 – Encefalite
			616.833 – Mal de Parkinson
			616.834 – Esclerose múltipla
			616.835 – Poliomelite
			616.837 - Paraplegia
			616.84 – Manifestações neurológicas e desordens mentais – Patologias,
			               diagnósticos, tratamentos de sintomas, tonteiras e vertigens,
			                convulsões, paralisias, distúrbios do sono, insônia.
			616.8491 – Dores de cabeça
			616.85 – Sistema nervoso – Doenças diversas
			616.852 – Neuroses
			616.8522 – Ansiedades, fobias, neuroses obsessivo compulsivas
			616.8524 – Neuroses histéricas
			616.8525 – Hipocondrismo
			616.8526 Desordens alimentares
			616.85262 – Anorexia
			616.85263 - Bulimia
			616.8527 – Neuroses depressivas / Depressão
			616.853 – Epilepsia
			616.855 – Desordens da fala
			616.857 – Enxaqueca
			616.858 – Desordens da personalidade
			616.85822 – Violência e abuso em família
			616.8583 – Distúrbios sexuais e homosexualidade
			616.8584 – Distúrbios neuróticos sociopáticos, impulsos compulsivos
			                   (suicidas, homicidas, cleptomania, piromania, compulsão de
			                   compras, jogos, etc)
			616.8585 – Narcisismo
			616.8588 – Deficientes mentais
			616.858842 – Síndrome de Down
			616.858843 – Hidrocefalia
			616.858844 – Microcefalia
			616.8589 - Hiperatividade
			616.86 -  Abuso de drogas, remédios, tranqüilizantes, estimulantes.
			616.861 – Alcoolismo
			616.863 – Outros: narcóticos, alucinógenos, maconha
			616.865 - Fumo
			616.87 – Doenças do crânio, coluna, neuroses puerperais, distúrbios de olfato
			               e paladar, neuralgias, ciática
			616.88 – Doenças do sistema nervoso
			616.89 – Psiquiatria :desordens mentais, terapias de choque, psicoterapias,
			                terapia cognitiva, psicoterapia de grupo ou família, psicodrama,
			                terapias mentais, terapias com drogas, psicoses maníacos
			               depressivas, paranóias, , esquizofrenias, autismo, demência senil
			616.9 –Outras ( eruptivas,  por bactérias, dengue, varíola, viroses, tétano,
			            difteria, botulismo, sarampo, catapora , malária, erisipela, rubéola,
			             cólera, etc.)
			            Doenças contagiosas
			616.9363 – Doença de chagas
			616.951 – Doenças sexualmente transmissíveis
			616.96 - Parasitologia
			616.979 2 – Aids
			616.98 - Stress
			616.99 – Tumores e câncer/ leucemia
			616.995 – Tuberculose
			616.998 – Lepra

			617 – Vários campos da medicina / Cirurgia
			617.001 – Teoria e filosofia
			617.008 – História
			617.1 –  Ferimentos e fraturas ( emergências, reabilitação, tratamento, etc.)
			617.1027 – Medicina esportiva  /  Lesões no esporte
			617.2 – Resultados de ferimentos
			617.4 – Cirurgias específicas
			617.5 – Medicina e cirurgia regional
			617.564 – Dor lombar / dor nas costas
			617.6 – Odontologia / Dentista
			617.7 – Oftalmologia
			617.8 –  Otologia e audiologia ( ouvido)
			617.9 – Cirurgias ( técnicas, equipamentos, material )
			617.96 – Anestesiologia

			618 – Outros ramos da medicina
			618.1 – Ginecologia
			618.2 – Obstetrícia
			618.24 – Gravidez - Cuidados
			618.3 – Doenças e complicações da gravidez
			618.4 – Parto
			618.92 – Pediatria  / Doenças infantis
			618.97 – Geriatria

			619 – Medicina experimental ( Experiências com animais)

			620 – Engenharia

			620.001 – Teoria e filosofia
			620.003 – Dicionários e enciclopédias de engenharia
			620.004 2 – Desenho técnico
			620.009 2 - Engenheiro
			620.1 – Engenharia mecânica e de materiais  ( tb. Testes)
			             Energia de deformação
			             Fadiga
			             Grafostática
			             Máquinas, construção
			             Materiais  - Propriedades, resistência, cálculos  (metais, cimento,
			              concreto, madeira, vidro, etc.
			              Transferência
			620.2 – Som /Acústica / Vibrações
			620.3 – Vibrações mecânicas
			620.4 -  Engenharia para tipos específicos de ambientes ( superfície,
			              subterrânea, aquática, etc.)
			620.8 – Fator humano e saúde na engenharia



			621 – Física aplicada

			621.1 – Tecnologia  Força /Energia /Vapor
			621.2 – Tecnologia Força / Hidráulica ( água, hidráulica dos fluidos, turbinas,
			              acumuladores, bombas, moinhos d’água, carneiros)

			621.3 – Engenharia elétrica
			621.3121 – Geração e transmissão de força e energia elétrica  /  Plantas
			621.312134 – Hidroelétricas  /  Barragens e açudes
			621.314 – Transformadores
			621.315 – Capacitores
			621.317 – Potência
			621.319  – Transmissão  / Sistemas elétricos
			621.319 2 – Circuitos elétricos
			621.319 24 – Instalações elétricas
			621.319 25 – Iluminação elétrica externa
			621.319 3 – Equipamentos e componentes
			621.32 – Iluminação
			621.326 – Iluminação incandescente
			621.327 – Iluminação à vapor
			621.327 3 – Iluminação fluorescente
			621.327 5 – Iluminação a neon
			621.33 –Transmissão de força para ferrovias
			621.34 – Engenharia magnética
			621.35 – Supercondutividade
			621.36 – Tecnologia ótica / Spectroscopia / Laser / Tecnologia de raios
			               ultravioleta e infravermelho / Fibras óticas, etc.
			621.37 – Medição de energia elétrica / instrumentos de medição
			               Medição do valor de potência
			621.381 – Eletrônica
			621.381 2 – Circuitos eletrônicos
			621.381 5 – Eletrônica digital
			621.381 51 – Componentes
			621.381 522 – Diodos
			621.381 528 – Transistores/ Circuitos,  fototransistores, transistores bipolares
			621.382 – Engenharia de telecomunicações
			621.384 – Rádio e radar
			621.386 – Telefone / Equipamentos e transmissões
			621.388 – Televisão
			621.389 – Sistemas de segurança / Sistemas de reprodução de sons
			                 Sonar
			621.39 – Engenharia de computadores
			621.395 – Circuitos / Micros / Memórias / Periféricos
			621.4 –Engenharia do calor / Termodinâmica / Turbinas / Diesel / Geração
			            de eletricidade com moinhos de vento
			621.46 – Motores elétricos
			621.47 – Energia solar
			621.48 – Engenharia nuclear
			621.483 – Usinas nucleares / reatores / Fusão termonuclear / Propulsão
			                 nuclear
			621.5 –Tecnologia pneumática / Vácuo
			621.56 –Tecnologia de baixa temperatura /  Refrigeração / Criogenia
			621.6 – Bombas /ventiladores
			621.8 – Engenharia de máquinas
			621.815 – Desenho de máquinas
			621.816 – Manutenção e reparo  de  máquinas / Válvulas / Pistons
			621.85 – Sistemas de transmissão de força
			621.89 – Lubrificação, métodos
			621.9 – Ferramentas
			621.91 – Mecânica fresadora
			621.923 – Rebolo
			621.942 – Tornos mecânicos

			622 – Engenharia de minas

			622.1 – Prospeção
			622.2 – Técnicas de escavação
			622.3 – Minas de materiais específicos
			622.338 – Poços de petróleo, gás natural, óleo
			622.34 – Minas de metais ( ferro, ouro, prata, platina, metais não ferrosos ,
			               outros.
			622.4 – Tecnologia de exploração de minas ( ventilação, drenagem,
			              transporte, elevadores, vestimentas
			622.8 – Segurança e saúde em minas (controle de gases e explosões / resgate)

			623 – Engenharia militar e náutica
			623.1 – Fortificações / demolições
			623.3 – Engenharia de defesa
			623.4 – Artilharia ( armas e explosivos)
			623.5 – Balística e armamento
			623.6 – Tecnologia de transporte militar
			623.7 – Comunicações, veículos, engenharia sanitária e de saúde,
			             camuflagens.
			623.8 – Engenharia náutica e marinha / Projetos, tecnologia de construção de
			             navios, equipamentos náuticos, tecnologia de navegação
			623.81 – Canoas e navios

			624 – Engenharia civil
			624.1 –Construções subterrâneas e estruturas ( projetos, materiais, etc.)
			624.2 - Pontes
			625 – Engenharia de estradas e ferrovias
			625.1 – Ferrovias  ( tipos: permanentes, um ou dois trilhos, etc..)
			625.2 – Tipos veículos: passageiros, carga, etc. / Locomotivas, vagões de
			             passageiros, vagões de carga, etc.
			625.5 – Tipos especiais de ferrovias: Inclinada para montanhas, aéreas, de
			              cabos, funicular, etc.)
			625.7 – Estradas, auto estradas  ( tipos)
			625.73 – Projetos , construção, manutenção e reparos
			625.8 – Material de pavimentação ( concreto, cimento, terra, etc.)
			627 – Engenharia hidráulica
			627.1 – Canais, rios, como vias
			627.2 – Portos, estrutura de proteção
			627.5 – Irrigação, drenagem, diques, reservatórios, etc.
			627.8 – Usinas hidroelétricas
			628 – Engenharia sanitária, proteção ambiental
			628.1 – Suprimento de água
			628.2 – Canalização
			628.3 –Tratamento de água de esgoto
			628.4 – Tecnologia para evitar desperdício, banheiros públicos/ Tecnologia
			              do lixo
			628.4458 – Reciclagem de lixo
			628.5 – Controle de poluição e engenharia sanitária industrial
			628.7 – Engenharia sanitária em áreas rurais e áreas super populosas
			628.9 – Outros ramos de engenharia sanitária e municipal ( controle de
			              incêndios/ iluminação pública / controle de epidemias
			629 – Outros ramos da engenharia
			629.04 – Engenharia de transportes
			629.1 – Engenharia aeroespacial
			629.133 34 – Aviões
			629.133 352 – Helicópteros
			629.2 – Engenharia de veículos motores de terra / Automóvel / Bicicletas
			629.255 – Óleos , lubrificantes
			629.287 – Manutenção e reparos / Retífica, etc.
			629.3 – Engenharia de veículos de almofadas de ar
			629.4 –Astronáutica  / Engenharia espacial / Vôos espaciais
			629.8 – Engenharia de controles automáticos ( hidráulicos, elétricos,
			             pneumáticos)
			629.89 – Engenharia de controles computadorizados
			629.892 – Robótica / robôs
			629.895 – Processos de controle computadorizados

			630 – Agricultura

			630 – Fazendas / Campo
			630.3 - Dicionários e enciclopédias de agricultura
			630.7 – Ecologia na agricultura
			631 – Técnicas específicas , equipamentos, material
			631.3 – Ferramentas, maquinário
			631.4 – Estudo do solo
			631.5 – Plantação, colheita e estocagem
			631.52 – Biotecnologia na agricultura
			631.6 Cuidados com a terra ( drenagem, adubação)
			631.8 – Fertilizantes /Agroquímicos / agrotóxicos
			632 – Doenças de plantas
			632.19 – Poluição na agricultura
			632.95 – Pesticidas
			633 – Plantações e colheitas ( cereais, legumes, açúcar e outros)
			634 – Culturas de frutas
			635 – Jardins, folhagens, flores
			636 – Criação de animais / Animais domésticos e de fazendas
			636.089 – Medicina veterinária / Doenças de animais / Raiva canina
			636.1 – Eqüinos  / Cavalos
			636.2 – Ruminantes / Bovinos / Gado
			636.3 – Pequenos ruminantes / carneiros
			636.4 – Suínos
			636.5 – Aves domésticas / Galinhas
			636.6 – Pássaros
			636.7 – Cachorros
			636.8 – Gatos
			636.9 – Outros mamíferos
			637 – Processamento de produtos  ( leite, manteiga, queijo, ovos, sorvetes)

			638 – Cultura de insetos
			638.1 – Apicultura
			638.2 – Bicho da seda
			638.3 – Outros insetos
			639 – Caças, pescas,  tecnologia / conservação
			          Caça e pesca para comercialização
			639.4 –  Cultura de peixes, moluscos crustáceos
			              Tecnologias usadas para cultura
			639.9 – Conservação dos recursos biológicos

			640 – Economia doméstica e vida familiar

			640.3 - Dicionários e enciclopédias de economia doméstica
			640.4 – Aspectos específicos da vida doméstica
			640.42 – Controle  financeiro
			640.43 – Controle do tempo
			640.46 – Controle de empregados ( da escolha ao treinamento)
			640.49 – Reservas alimentares ( inclusive reservas para emergências e
			               catástrofes)
			640.7 – Guias de avaliação  e controle do consumidor/ Educação do
			             consumidor
			641 – Comidas e bebidas
			641.2 – Bebidas alcóolicas ( vinhos, saquê, cervejas, destilados, whisky,
			             licores, rum, gim, absinto, etc.)
			641.26 – Bebidas não alcóolicas
			641.3 – Alimentos
			641.302 – Saudáveis
			641.303 – Alimentos derivados de plantas
			641.306 – Alimentos derivados de animais
			641.31 – Manuais de consumidores
			641.33 – Alimentos cultivados ( verduras, etc.)
			641.34 - Frutas
			641.36 – Carnes
			641.37 – Laticínios
			641.371 – Leite
			641.38 – Mel
			641.39 – Carnes de caça e pesca
			641.4 – Preservação e conservação de alimentos ( preparação, congelamento,
			             pasteurização, técnicas usando o frio/quente, uso de aditivos
			641.48 – Estocagem de alimentos
			641.5 – Culinária
			641.5083 – Culinária para crianças e jovens
			641.5084 – Culinária para adultos
			641.5087 – Culinária para pessoas com incapacidades
			641.509 – Receitas específicas
			641.512 – Aprendizagem / Crianças cozinhando
			641.514 – Gourmets
			641.52 – Café da manhã
			641.53 – Almoço
			641.54 – Jantar
			641 55 – Aproveitamento de alimentos
			641.56 – Cozinha por motivos especiais ( por idades, por motivo de saúde,
			               dieta,, vegetariana, para estações do ano, por regras religiosas,
			               ocasiões especiais: natal, aniversários, festas, etc.)
			641.57 – Comida fora de casa ( na escola, hotéis, restaurantes, viagens,
			               churrascos, campings, hospitais)
			641.58 – Uso específico para cozinha : gás, óleo, eletricidade / Utensílios de
			               cozinha
			641.59 – Características específicas de cozinha : por países, etc.
			641.6 – Cozinha com materiais específicos ( congelados, bebidas, carnes,
			             verduras, caça, pesca, etc.)
			641.636 – Uso de açúcar ( na cozinha)
			641.671 – Uso de leite (na cozinha)
			641.7 – Técnicas para cozinhar ( assados, frituras cozidos, etc.)
			641.8 – Pratos específicos ( molhos, aperitivos, patês, fondues, sopas, pratos
			             principais, entradas, sobremesas, bolos, tortas, etc.)
			642 – Comidas para situações específicas ( casa, festas, banquetes, etc.)
			642.6 – Tipo de serviço de mesa ( à americana, à francesa, etc.)
			642.7 – Utensílios de mesa ( pratos, talheres, copos, etc.

			643 – Moradia ( escolha, compra, aluguel, etc.)
			643.2 – Tipos de moradia ( casa, apto, motohouses, etc.)
			644 – Ventilação, força, luz, água, gás, etc.
			645 – Mobiliário de salas, quartos, escritórios, cozinhas, banheiros, etc.)

			646 – Vida pessoal e familiar
			646.1 – Roupas, roupas de cama, mesa e banho, cortinas, etc.
			646.3 – Confecção de roupas e acessórios
			646.7 – Vida familiar e arrumação pessoal ( higiene, cuidados com o físico)
			646.77 – Escolha do companheiro
			646.78 – Guias para relacionamento familiar incluindo a terceira idade
			647 – Vida social e empregos
			648 – Serviços domésticos (lavar, passar cozinhar, arrumar, etc.)    
			649 – –Educação das crianças
			649.1 – Puericultura  / Cuidados e educação de crianças ( por pais, parentes,
			             irmãos mais velhos, baby sitters)
			649.12 – Por idade
			649.13 – Por sexo
			649.14 – Por status, tipo, relacionamento, parentesco
			649.15 – Crianças excepcionais
			649.3 –Cuidados com a alimentação das crianças,
			            roupas, saúde, atividades física, recreativas, culturais.
			649.5 – Atividades e recreação para crianças
			649.6 –Treinamento de atividades básicas como vestir-se , higiene, disciplina,
			            obediência, educação sexual, educação escolar ( ver tb. 371.042 /pela
			            escola e 371.30281 /pelos pais)
			649.7 – Moral e caráter ( ver tb. –Religião 291.44 e em casa 248.845)
			649.8 – Cuidados com pessoas idosas, doentes e deficientes ( ver tb.
			              362.1/362.4  - ou Enfermagem 610.73)

			650 – Administração e serviços auxiliares

			651 – Serviços de escritório
			651.54 – Técnicas de arquivo
			651.75 – Redação comercial e oficial
			652 – Processos de comunicação escrita
			653 - Taquigrafia
			655 – Imprensa / Jornalismo
			657 – Contabilidade
			658 – Administração em geral /Organização e normas
			          Direção  de  empresas
			658.001 – Teorias administrativas
			658.1 – Finanças e organização
			658.152 – Análise de investimentos
			658.2 – Administração de prédios, equipamentos, etc.
			658.23 – Layout
			658.3 – Administração de pessoal
			658.31 – Administração de recursos humanos                                                
			               Psicologia aplicada à administração
			658.314 – Criatividade como promoção de desenvolvimento pessoal
			658.315 – Relações empregado / empregador
			658.4 – Administração executiva
			             Gerência
			658.403 2 – Método PERT-COM
			658.403 6 – Decisões através de grupos ou comissões
			658.407 14 – Criatividade
			658.408 – Responsabilidade
			658.5 – Administração de produção
			658.562 – Controle de qualidade  / Solução de problemas
			658.7 – Administração de materiais
			658.8 – Marketing
			658.9 – Administração de empreendimentos e atividades específicas de
			             empresas e indústrias
			              Planejamento para implantação de indústrias e empresas
			659 – Meios de comunicação
			          Publicidade e Propaganda
			659.2 – Relações públicas

			660 – Engenharia química

			660.6 -  Biotecnologia
			660.65 – Engenharia genética  /  Alimentos transgênicos
			661 – Tecnologia de industrias químicas ( componentes inorgânicos, ácidos,
			           sais, alcalinos, amoníacos, sulfúricos, nitrogênio, )
			661.1 – Vidro ( na química)
			661.8 – Química orgânica
			661.804 – Petroquímica
			662 – Tecnologia de explosivos, combustíveis e produtos correlatos
			662.1 – Fogos de artifício
			662.2 – Explosivos
			662.4 – Detonadores
			662.5 – Estopins
			662.6 – Combustíveis
			662.7 – Carvão
			662.8 – Outros combustíveis
			662.9 – Carbonos não combustíveis

			663 – Tecnologia de bebidas
			663.1 – Alcóolicas ( material, preparação, fermentação, destilação,
			              engarrafamento)
			663.2 – Vinhos
			663.3 – Bebidas fermentadas e maltadas ( materiais, processos, operações)
			663.4 – Cervejas, saquê
			663.5 – Destilados ( whisky, tequila, vodka, brandy, rum )
			663.6 – Bebidas não alcóolicas (sucos, refrigerantes, minerais, , etc.)
			663.9 – Café, chá, etc.
			663.92 – Chocolate

			664 – Tecnologia em  alimentos
			664.01 – Materiais, processos, operações, etc.
			664.1 – Açúcar e produtos derivados / Fabricação
			664.2 – Amidos e agentes gelatinosos
			664.3 – Gorduras e óleos
			664.4 –  Sais
			664.5 – Temperos
			664.6 – Comidas especiais ( comidas para bebês, não calóricas, compostas,  
			              comidas para animais)
			664.7 – Grãos, semente e produtos derivados
			664.8 – Frutas e vegetais
			664.9 – Carnes e derivados

			665 – Tecnologia da indústria de óleos,  gorduras, graxas
			665.1 – Graxas
			665.2 – Gorduras e óleos animais
			665.3 – Gorduras e óleos vegetais
			665.4 – Graxas e óleos minerais
			665.5 – Petróleo
			665.7– Gás natural e manufaturado
			665.8 – Outros gases industriais

			666 –  Cerâmica / Refratários
			666.1 – Vidro
			666.2 – Esmalte
			666.3 – Cerâmica
			666.4 – Materiais de cerâmica, equipamentos e processos
			666.5 – Porcelana
			666.6 – Artigos de barro e pedra
			666.7 – Refratários
			666.8 – materiais sintéticos e artificiais
			666.9 – Adesivos de alvenaria

			667 – Clareamento, colorido, pintura e tecnologias relacionadas
			667.6 – Tintas, pinturas

			668 – Tecnologia de outros produtos orgânicos
			668.12 – Fabricação de sabão
			668.2 – Glicerina
			668.3 – Adesivos
			668.4 – Plásticos
			668.5 – Perfumes e cosméticos
			668.9 – Produtos químicos para agricultura

			669 – Metalurgia ( extração , processos, etc.)
			669.1 –  Metais ferrosos
			669.142 – Siderurgia – Produção de aço
			669.2 – Metais preciosos, raros
			669.2931 - Urânio
			669.3 – Cobre
			669.4 – Chumbo
			669.5 – Zinco
			669.6 – Estanho
			669.7 – Outros metais não ferrosos
			669.8 – Tecnologia de fornos metalúrgicos
			669.9 – Física e química metalúrgica

			670 – Indústria / Manufaturados / Engenharia de
			          Produção

			670.1 – Engenharia operacional, materiais, processos, equipamentos e
			             técnicas
			671 – Processos de fundição e produtos primários de metal
			671.52 – Soldagem
			672 – Siderurgia / Metais ferrosos/  Ferro, aço
			673 – Metais não ferrosos
			674 – Carpintaria e serraria
			674.88 – Molduras
			675 – Couro
			676 – Papel
			677 – Têxtil
			678.2  – Borracha
			679 – Outros produtos de materiais específicos ( marfim, penas, fibras,
			          tabaco)
			679.72 – Cigarros
			680 – Indústrias para usos específicos
			681 – Instrumentos de precisão
			681.145 – Calculadora
			681.766 5 – Equipamentos de processamento do petróleo
			682 – Miniaturas
			683 – Ferragens
			683.3 – Serralheria
			683.4 – Armas pequenas ( fabricação)
			683.8 – Utensílios domésticos
			684 – Mobílias
			685 – Produtos de couro
			686 – Impressão gráfica e serviços relacionados
			686.2 – Impressão
			686.3 – Encadernação
			686.4 – Fotocópias
			687 – Roupas e acessórios
			688 – Outros produtos ( jóias, acessórios para fumantes, acessórios pessoais
			          como barbeadores elétricos, etc., veículos não motorizados, e
			          equipamentos recreativos, brinquedos, jogos, equipamentos para
			          equitação , equipamentos para pesca e caça.
			688.8 - Tecnologia de embalagens

			690 – Construção
			690.028 – Técnicas, equipamentos
			690.1 – Elementos estruturais
			690.2 – Atividades gerais
			691 – Materiais de construção (madeira, pedras, concreto, cerâmicas,
			          alvenaria, vidro, ferro e aço, metais, plásticos, laminados, material pré-
			         fabricado, adesivos.)
			692 – Práticas auxiliares de construção (plantas e desenhos, especificações,
			          planejamento e provisão de materiais)
			693 – Construções com tipos específicos de material e propósitos específicos
			          (alvenaria,, tijolos, adobe, e outros, barro, blocos de concreto, brita,
			          concreto, estuque, metais)
			693.9 – Construções de outros materiais (gelo, vidro, materiais  pré-
			             fabricados e outros)
			694 – Construções de madeira / Carpintaria
			695 – Telhas ( Telhado de madeira 694.2 )
			696 – Utilidades
			696.1 – Encanamentos / Tubulações ( drenagem de água, suprimento de água
			             para banheiros e lavatórios, lavanderia, cozinha.
			696.2 – Encanamentos de gás, vapor, água quente
			697.1 – Aquecimento
			697.8 – Chaminés
			697.9 – Ventilação
			697.93 – Ar condicionado
			698 – Acabamentos ( pintura, de madeira, janelas, vidraças, papel de parede,
			          carpetes, etc.)

			700 – Artes

			700.1 – Teoria e filosofia ( efeitos das condições sociais, da humanidade, da
			             ciência e tecnologia e outros conceitos sobre as artes)
			700.48297 – Arte islâmica ( tendência religiosa)
			700.7 – Arte – Estudo e ensino
			700.9 – Tratamento histórico e geográfico
			701 – Filosofia e teoria das belas artes
			701.1 – Aspectos apreciativos ( apreciação da arte  através da historia, teoria,
			              técnica,  incluindo ajuda audiovisual
			701.15 – Criatividade
			701.17 – Estética
			701.18 – Criticismo e apreciação
			701.8 – Aspectos (perspectivas, cores, composição, luz, forma, movimento,
			             espaço, estilo, etc.)
			701.85 – Cores
			702 – Técnicas ( de reprodução, execução, identificação)
			          Procedimentos (reproduções e cópias, alterações, manutenção e
			          restauração)
			          Equipamentos e materiais
			702.88 – Restauração
			703 – Dicionários, enciclopédias de artes
			704 – Tópicos de artes decorativas  /  Artes decorativas
			704.0398 – Arqueologia brasileira
			704.9 – Iconografia
			704.94 – Assuntos específicos ( figura humana, natureza e natureza morta,
			               arquitetura, simbolismo e alegoria, mitologia e lendas, religião,
			              outros)
			704.948 – Arte Sacra
			707 – Estudo, pesquisa e tópicos relacionados
			708 – Galerias, museus, coleções privadas ( Tratamento geográfico: Ex.:
			          Galerias, museus, coleções privadas na América do Norte :708.97)
			708.46 – Museus na Espanha
			709 – História da arte / Museus
			709.01 – Arte pré-histórica, arte antiga / até ano 499
			709.02 – Arte do ano 500 a 1499 / Inclusive arte medieval
			709.021 – Primeiras artes cristãs
			709.021 4 – Arte bizantina
			709.0216 –  Arte românica
			709.022 – Arte gótica
			709.024 – Arte renascentista
			709.03 – Período moderno de 1500 a 1899
			               Arte decorativa do séc. XIX
			709.032 – Arte  barroca do séc. XVII
			709.033 – Arte barroca do séc. XVIII
			709.033 2 – Arte rococó
			709.034 – Neoclassissismo/ Romancismo / Naturalismo e Realismo /
			                 Impressionismo / Simbolismo / Art nouveau
			709.04 – Período de 1900 a 1999  /  Arte moderna
			709.05 – Período de 2000 a 2099  /  Arte pós-moderna
			709 1 – Tratamento por área, região, lugar
			709.182 1 – Arte ocidental
			709.2 – Pessoas  ( Críticas, biografia, descrições)
			709.32 – Arte egípcia antiga
			709.376 – Arte romana
			709.38 – Arte grega antiga 
			709.4 – Arte italiana
			709.42 – Arte Inglesa
			709.43 – Arte alemã
			709.44 – Arte francesa
			709.46 – Arte espanhola / flamenga
			709.469 – Arte portuguesa
			709.5 – Arte oriental
			709.62 – Arte egípcia
			709.73 – Arte americana
			709.81 – Arte brasileira
			709.861 – Arte colombiana e pré-colombiana
			709.492 – Arte holandesa
			709.51 – Arte chinesa
			709.52 – Arte japonesa
			709.95 – Arte grega

			711 -  Urbanismo / Planejamento urbano

			711.028 – Técnicas, equipamento, materiais
			711.1 – Procedimentos e aspectos sociais ( dados , preparação, plantas, etc.)
			711.13 – Fatores sociais que afetam o planejamento
			711.14 – Fatores econômicos que afetam o planejamento
			711.4 – Planejamento  de cidades, baseados no clima, topografia, tamanho,
			            função (industrial, residencial, etc.)
			711.5 – Planejamento por áreas específicas ( quarteirões, praças, áreas
			             administrativas, comerciais, industriais, médicas, hotéis,
			             restaurantes,recreação, prisões, religiosas, culturais, residenciais, etc.)
			711.6 – Elementos estruturais, / construções
			711.7 – Facilidades em transporte (estacionamentos, bicicletas, trens,
			            pedestres, etc.
			711.8 – Utilidades ( água, esgoto, gás, eletricidade, meios de comunicação,
			             controle sanitário de águas, etc.)

			711.981 – Cidades brasileiras

			712 – Paisagismo

			712.01 – Teoria e filosofia
			712.028 – Técnicas, procedimentos materiais e equipamentos
			712.03 - Dicionários e enciclopédias de paisagismo
			712.2 – Princípios ( estética, estilo, composição)
			712.3 – Prática profissional e procedimentos técnicos ( dados, preparação e
			             apresentação do projeto, supervisão da operação)
			712.5 – Paisagismo de áreas públicas ( praças, parques, jardins, etc.)
			712.6 – Áreas particulares
			712.7 Áreas semi-privadas ( Igrejas, clubes, hospitais, hotéis, indústrias,
			          escolas, etc.)
			713 – Paisagismo de estradas e ruas
			714 – Paisagismo com projetos incluindo água (fontes, lagos, piscinas, etc.)
			715 – Paisagismo com plantas, árvores, etc.
			          Topiaria ( podar plantas com formatos variados e formas definidas)
			716 – Flores e grama
			717 – Paisagismo para estruturas prediais ( jardins suspensos, terraços,
			          acessórios ornamentais, etc.)
			718 – Paisagismo para cemitérios
			719 – Paisagismo para parque de preservação natural, florestas, reservas, etc.

			720 – Arquitetura

			          Patrimônio Histórico, Preservação
			720.1 – Teoria e filosofia
			720.2 – Ilustrações modelos, maquetes, miniaturas
			720.3 - Dicionários e enciclopédias de arquitetura
			720.28 – Técnicas e procedimentos, equipamento, material
			               Desenhos, remodelações, manutenção e reparos
			720.288 – Restauração e preservação histórica ( parte da engenharia)      
			                 (Ver tb. 363.69)
			720.4 – Tópicos especiais ( arquitetura e meio ambiente, prédios baixos e
			             altos, lojas, escritórios, etc.)
			720.8 – Arquitetura para diversos tipos de pessoas ( velhos, debilitados,
			             doentes, deficientes, etc.)
			720.9 – Tratamento histórico e geográfico
			721 –  Elementos estruturais ( fundações, paredes, colunas, pilares,
			           construções curvas e detalhes, arcadas , abóbadas, galerias, cúpulas,
			           nichos, telhados, tetos, assoalhos, portas, , janelas, elevadores,
			          varandas.)
			722 – Arquitetura dos primeiros tempos até o ano 300
			722.7 – Arquitetura romana
			723 – Arquitetura do ano 300 a 1399
			724.1 – Arquitetura à partir de 1400  a 1800
			724.2 – Arquitetura clássica
			724.3 – Arquitetura gótica
			724.5 – Arquitetura  á partir de 1800 a 1899 / Arquitetura religiosa
			724.6 – Arquitetura de 1900 a 1999 / Incluindo art nouveau, expressionismo.
			724 7 – Arquitetura a partir de 2000
			725 – Estruturas públicas  (prédios governamentais, comerciais, de
			          comunicação, transporte, armazenagem, industrias, saúde, instituições
			          correcionais, repouso, parques, recreação e outras.
			725.74 – Piscinas em geral
			726 – Edifícios religiosos  ( templos, mesquitas, sinagogas, templos judaicos,
			         catedrais, mosteiros, capelas mortuárias e túmulos e outros)
			727 – Edifícios para educação e pesquisa(escolas de todos os níveis escolares
			          universidades,escolas profissionais, prédios para pesquisa, laboratórios,
			          observatórios, museus, galerias de arte, bibliotecas e outros )
			728 – Construções residenciais
			728.962 – Piscinas dométicas
			728.4 – Clubes
			728.5 –  Hotéis
			728.6 – Casas de fazendas
			728.7 – Casas de campo, praia, de botes, cabines, casas móveis
			728.8 – Castelos, palácios
			728.9 – Acessórios domésticos (prédios em fazendas, jardins, celeiros, decks,
			             pátios, piscinas, garagens, viveiros)
			729 – Desenhos e decoração de estruturas e acessórios (desenhos em planos
			          verticais, horizontais, composição, proporção, iluminação, acústica,
			          interiores) Decoração com pinturas, relevos, incrustações, mosaicos
			         vidros ornamentais.

			730 – Escultura
			730.028 – Técnicas, equipamentos, materiais
			730.9 – História da escultura
			731 – Processos, formas e temas de esculturas
			731.4 – Técnicas e procedimentos  (em metal, modelagem em barro,
			             materiais plásticos, moldes, fundição, cimento, bronze, etc.)
			             Manutenção e reparos.
			731 .5 – Formas ( em relevo, em portais, monumentos, bustos, máscaras)
			731.8 – Iconografia
			732 – Escultura de antes do ano 500 / Esculturas antigas
			733 – Esculturas gregas, etruscas, romanas
			734 – Esculturas do ano 500 a 1399
			735 – Esculturas à partir de 1400
			735.21 – Barroco
			736 – Entalhe em madeira, pedra, e outros
			736.982 – Origami

			737 - Numismática   / medalhas / totens / moedas / sinetes / selos
			                                                                         
			738 – Cerâmica
			738.2 – Porcelana / Louça
			738.5 – Mosaico

			739 – Arte em metal / Esmalte
			739.1 – Metais , técnicas de trabalho
			739.2 – Metais preciosos, técnicas de trabalho

			740 – Desenho e decoração / Artesanato

			741 – Desenho
			741.01 – Teoria e filosofia
			741.018 – Cores  (no desenho)
			741. 028 8 – Conservação e restauração
			741.074 – Museus
			741.092 – Artistas individuais
			741.2 – Técnica , procedimentos, equipamento e material de desenho
			741.21 – Técnica de reprodução e conservação
			741.217 – Reprodução ( execução e identificação)
			741.22 – Desenho à carvão
			741.23 –  Crayon e giz
			741.235 – Pastel
			741.24 – Lápis
			741.26 – Tinta ( Com pincel, caneta de desenho, escova, etc.
			741.29 – Esboço / Riscado / Pistola de ar comprimido
			741.5 – Caricaturas, desenho animado, cômico, fotonovelas  /  Quadrinhos
			             ( Pista : Anedotas brasileiras)
			741.6 – Desenho gráfico, ilustrações, arte comercial
			741.64 – Ilustrações de livros
			741.65 – Revistas e jornais
			741.67 – Posters, publicidade, anúncios
			741.672 – Desenho de moda
			741.674 – Desenhos comerciais
			741.68 – Calendários, cartões postais, de negócios, de congratulações
			741.69 – Rótulos, etiquetas, letreiros. marcas, caixas, etc.
			741.7 – Silhuetas
			741.9 – Coleções de desenhos
			742 – Perspectiva / Teoria, princípios e métodos
			743 – Desenho por assunto
			743.4 – Figuras humanas ( retratos, esqueleto, sistema muscular, partes do
			             corpo ( anatomia)
			743.5 – Desenho em tecidos, tapetes, cortinas, etc.
			743.6 – Desenhos de animais
			743.7 – Desenho de plantas, flores, frutos
			743.8 – Outros
			743.9 – Iconografia ( desenho de caráter biográfico, histórico ou geográfico)

			745 – Arte decorativa / Arte folclórica / Arte popular
			745.0981 – Arte popular no Brasil
			745.1 – Antiga ( reprodução e cópia) / Reparação
			745.2 – Design  e arte  industrial ( para produção em massa)
			745.4 – Design aplicado e decoração
			745.44 – Tratamento histórico, geográfico e pessoal
			745.5 – Artesanato  /  Bricolagem
			745.51 – Artesanato em madeira
			745.53 – Artesanato em couro/ peles
			745.54 – Artesanato em papel, reciclagem / papier-maché
			745.55 – Artesanato com conchas, cascos, cascas, sementes
			745.56 – Artesanato em metal
			745.57 – Artesanato em plástico / borracha / resina
			745.58 – Artesanato  com contas, massas, gesso, fundidos, barro
			745.59 – Artesanato de objetos específicos e materiais diversos: flores,
			               instrumentos musicais, etc.
			745.592 – Artesanato de bonecos, miniaturas, fantoches, etc.
			745.594 – Artesanato de objetos decorativos: bijuterias, objetos de época :  
			                   ( enfeites de natal, ovos de páscoa), etc.
			745.6 – Caligrafia, desenho de brasões, ilustração de manuscritos antigos
			745.67 – Iluminismo
			745.7 – Decoração ( Pintura em geral, laqueado, verniz, decalcomania,
			             douração)
			745.8 – Cenários / 3D
			745.9 – Arte floral, arranjos ( de frutas, de flores, de plantas) / Para ocasiões (
			             casamentos, funerais, igrejas)
			746 – Arte em tecidos  - Tapeçaria, bordados, crochê, tricô, pintura.  
			         Cestaria / Junco / Palha
			746.662 – Batik
			747 – Decoração de interiores
			748 – Decoração com vidro

			750 – Pintura

			750.1 – Teoria e filosofia
			750.3 - Dicionários e enciclopédias de pintura
			750.118 – Crítica e apreciação
			751.2 – Materiais ( telas, fixadores, solventes, pincéis,  pigmentos aerógrafos)
			751.3 – Equipamentos / modelos
			751.4 – Técnicas e procedimentos
			751.42 –  Uso de água como solvente
			751.422 – Aquarela, guache,
			751.425 – Tinta ( cobrir com tinta)
			751.426 – Pintura  acrílica
			751.43 -  Tempera
			751.44 – Afresco
			751.45 – Pintura à óleo
			751.46 – Pintura encáustica (cera, parafina, betume) 
			751.49 – Outros métodos ( pastel, envelhecimento, com dedo, rolo, lixa,
			                colagem, pistola de ar comprimido )
			             Mosaico ver 738.5
			751.5 – Técnicas de reprodução
			751.6 – Manutenção e reparo / Restauração
			751.7 – Formas específicas ( murais, afrescos, grafitagem. Paisagens,
			            cicloramas, dioramas, 3D, cenários, pinturas em vidros, miniaturas)
			            Iluminismo ver 745.67
			752 – Simbolismo, alegoria, mitologia, lendas
			754 – Gêneros de pintura
			755 – Simbolismo religioso  /  Pintura sacra
			757 – Figura humana
			758 – Outros assuntos ( paisagens, marinas, animais, natureza morta, flores,
			          plantas, temas arquitetônicose de cidades, temas técnicos e industriais.)
			759 – Tratamento histórico, geográfico e pessoal
			759.01 – Do tempo das cavernas até 499
			759.02 – De 500 a 1399 ( Pinturas bizantinas e românicas)
			759.03 –  De 1400 a1599 ( Renascentistas)
			759.04 – De 1600 a1799
			759.046 – De 1600 a1699 ( Barroco )
			759.047 – De 1700 a1799 ( Rococó)
			759.05 – De 1800 a1899
			759.052 – Romantismo
			759.054 - Impressionismo
			759.06 – De 1900 a 1999 (Moderna)
			               Semana da Arte Moderna (1922) 
			759.0663 – Surrealista
			759.07 – De 2000 a 2099

			759.1 a 9 – Pintores

			759.1 – América
			759.1 – Pintores  América do Norte
			759.11 – Canadá
			759.13 - EUA
			759.2 a 8 – Europa
			759.21 – Inglaterra / Ilhas Britânicas
			759.29 – Escócia / Irlanda / Gales
			759 3 a 8 – Outros da Europa  
			759.43 – Pintores alemães
			759.44 – Pintores  franceses (Monet, Claude / Rousseau, Henri, Toulouse-
			               Lautrec, Henri de / )
			759.45 – Pintores italianos  ( Michelangelo, ...)
			759.46 – Pintores espanhóis (Picasso, Pablo Ruiz / Miró/ El Greco/
			              Velazquez, Dalí)
			759.47 – Pintores russos (Kandinsky / Chagall,...)
			759.49 – Pintores do resto da Europa (Van Gogh, Vincent ( holandês),...)
			759.494 – Pintores suíços
			759.9 – Outros países  / 759.9 + Tabela 2 ( tudo junto)
			759.981 – Pintores brasileiros                                                            

			760 – Artes gráficas

			760.1 – Teoria e filosofia
			760.2 – Técnicas procedimentos, equipamento, materiais
			760.7 – Educação, pesquisa
			760.8 – Historia e descrição de impressores e impressões
			761 – Processos em relevo ( madeira, metal, linóleo)
			763 – Litografia
			764 – Cromolitografia e serigrafia
			765 – Gravura em metal
			767 – Água-forte
			769 – Gravuras impressas / Coleções e reproduções / Iconografia / Formas de
			          impressão
			769.9 – Tratamento histórico e geográfico
			       
			770 – Fotografia  
			770.1 – Teoria e filosofia
			770.2 – Fotografia como profissão, ocupação e hobby
			771 – Técnicas, procedimentos, equipamento e material ( estúdios,
			          laboratórios, quarto escuro, câmeras, lentes, filtros, filmes)
			771.4 – Procedimentos no laboratório e quarto escuro
			771.5 – Materiais químicos
			772 – Processos de revelação
			773 – Processos de impressão e cópias
			774 – Holografia

			778 – Cinema  (Parte técnica) ver tb.  791.43
			778 – Tipos e campos especiais de fotografia, cinematografia, produção de
			          vídeos
			778.2 – Projeção fotográfica ( filmes, slides)
			778.3 – Tipos especiais de fotografias ( telefotografia, close-up,
			             infravermelho, aérea e espacial, panorâmica, alta precisão)
			778.5 – Cinematografia, produção de vídeos ( tipos, técnicas, materiais)
			778.6 – Fotografia colorida
			778.7 – Fotografia sob determinadas condições ( ao ar livre, de dia, de noite,
			             com luz artificial, submarina, sob extremas condições climáticas)
			778.8 – Efeitos especiais
			778.9 – Fotografias de assuntos específicos
			779 – Fotógrafos

			780 – Música

			780.1- Teoria e filosofia
			780.2 – Sinópses, listas, inventários, catálogos
			780.3 - Dicionários e enciclopédias de música
			780.262 – Manuscritos
			780.263 – Músicas impressas
			780.264 – Apresentações de orquestras ou partes
			780.266 – Gravações
			780.267 – Vídeo
			780.28 – Técnicas, equipamentos e material
			780.285 – Uso do computador
			780.7 – Ensino, estudo e pesquisa
			780.8 – História da música e de pessoas
			780.9 – Tratamento histórico e geográfico
			780.9 – Tropicalismo
			780.92 - Compositores  (todos inclusive brasileiros)                                                                          
			               Alemanha  (Brahms,  Johannes / Schumann, Robert /   Haendel,
			                            Georg  Friedrich )
			               Áustria  (Haydn, Joseph /   Mozart, Wolfgang Amadeus )                
			               Polônia  (Chopin, Frederic )
			781 – Princípios gerais e formas , tipos e técnicas musicais
			781.1 – Princípios básicos
			781.2 – Elementos da música ( tempo, som, melodia, harmonia, tom, textura)
			781.3 – Composição
			781.4 – Técnicas
			781.5 – Tipos de música
			781.52 – Música para tempos específicos  ( para dia, para noite, estações do
			                ano, etc)
			781.53 – Música em lugares específicos
			781.532 – Música ao ar livre
			781.534 – Música em  ambientes fechados ( em casa, teatro, etc)
			781.599 - Hinos
			781.6 – Músicas tradicionais
			781.62 – Músicas folclóricas
			781.63 – Músicas populares
			781.64 – Músicas country / Blues / Soul / Ragtime / Reggae / Rap
			781.65 – Jazz
			781.66 – Rock
			781.68 – Música clássica
			781.7 – Música sacra
			781.723 – Músicas natalinas
			781.8 – Formato musical ( binário, ternário, variações, etc)
			782 – Música vocal ( Óperas, formas seculares, vozes femininas, masculinas,
			         de crianças, etc.)
			          Karaokê
			782.27 – Hinos
			782.5 – Coral vocal /  Canto orfeônico
			782.42 – Canções
			783 – Música para vozes simples ( Combinadas, solos, soprano, tenor, baixo)
			784 – Instrumentos, conjuntos instrumentais e sua música ( Orquestras,
			          música de câmara, música mecânica, eletrônica, bandas de percussão,
			          jazz, bandas)
			784.0981 – Música popular brasileira
			784.18 – Coral instrumental
			784.19 – Instrumentos
			785 – Conjuntos com um só instrumento por parte
			786 – Instrumentos musicais mecânicos, eletrônicos, de percussão
			787 – Instrumentos de corda
			788 – Instrumentos de sopro

			790 – Recreação
			790.1 – Atividades recreativas
			790.133 – Brinquedos
			790.15 – Oficinas de arte
			790.1922 – Jogos e recreação infantis
			790.2 – Representações  em geral
			791 – Representações públicas ( Shows, circos, filmes, rádios, tv,
			          apresentações de animais )
			791.34 – Circos
			791.409 – Cinema - História
			791.43 – Exibição de Filmes / Cinema  ( como diversão)  ver tb. 778
			791.437 – Crítica de filmes específicos
			791.44 – Rádio
			791.45 – Televisão
			792 – Teatro
			792.02 – Técnicas
			792.022 – Tipos ( amador, pequeno, de verão, de arena)
			792.022 6 – Infantil
			792.023 – Supervisão, produção, direção, programação
			792.024 – Efeitos especiais
			792.025 – Cenário, iluminação
			792.026 – Guarda roupa
			792.027 – Maquiagem
			792.028 – Encenação, performance, improviso, personificação, expressão,
			                gestos
			792.029 – Tratamento humorístico , audiovisual e comercial ( preços,
			                  prospectos, catálogos)
			792.09 – Tratamento histórico e geográfico.
			               Classificar aqui críticas, avaliação, etc.
			792.0973 – Teatro americano
			792.1 –  Tragédias e dramas
			792.2 –  Comédias e melodramas
			792.3 –  Pantomimas / Fantoches
			792.5 – Formas vocais / Ópera
			792.6 – Musicais
			792.7 – Show de variedades e dança teatral
			792.8 – Ballet e dança moderna
			792.9 – Produção artística ( Scripts, guias, descrições, críticas.)
			793 –  Recreação  interna ( festas, danças sociais, folclóricas e nacionais,
			           jogos de brincadeiras (como pagar prendas),  jogos sem
			           ação (quebra-cabeças), mágicas, vetriloguismo, jogos de guerra,
			           aventura, fantasias, jogos de computador)
			793.4 – Jogos de ação
			793.8 – Mágicas
			794 – Jogos de habilidade ( xadrez, dama, dardo, boliche, bola, jogos
			          eletrônicos, jogos de computador)
			795 – Jogos de azar / sorte ( Jogos de dados, roleta, cartas, dominó, loteria,
			          bingo)

			796 – Educação Física / Esporte
			796.01 – Teoria e filosofia
			796.03 - Dicionários e enciclopédias de educação física e esportes
			796.019 – Psicologia no esporte
			796.042 – Esportes amadores
			796.043 – Esportes colegiais
			796.044 – Esportes profissionais
			796.045 – Variações de esportes e jogos para participação de deficientes
			796.06 – Organização / facilidades / administração
			796.07 – Educação, estudo e pesquisa
			796.077 – Educação física - treinamento
			796.08 – História e descrição de esportes e jogos para tipos específicos de
			               pessoas / Planejamento (Infantis / Adolescentes /  etc.)
			796.087 – Para pessoas com deficiências, doenças e dotados
			796.1 – Miscelânea de jogos ( com danças e cantos / controle remoto  / pipas)
			796.13 – Jogos de canto e dança  /  Cantigas de roda
			796.152 – Nautimodelismo
			796.154 – Aeromodelismo
			796.156 – Automodelismo
			796.2 – Atividades que requerem equipamento (disco/ ioiô/ patim / skate/
			             malha )
			796.3 – Com bolas
			796.312 – Handebol – Handebol de praia – regras
			796.315 – Boliche
			796.323 – Basquetebol – regras
			796.325 – Voleibol – regras
			796.332 – Futebol americano – Regras
			796.333 – Rugby
			796.334 – Futebol  ( nosso)  - Regras
			796.334 668 – Copas do mundo
			796.3348 – Futsal  -  Regras
			796.34 – Jogos com raquetes
			796.342 – Tênis
			796.343 – Squash
			796.346 – Ping-pong
			796.352 – Golf
			796.353 – Polo
			796.354 – Croquet
			796.357 – Baseball
			796.358 - Cricket

			796.4 – Alongamento / Exercício de barras / Ginástica / Ioga/ Musculação
			796.41 – Levantamento de peso / força
			796.42 – Atletismo / corrida
			796.425 2 – Maratona
			796.425 7 – Triatlon
			796.426 – Barreiras e obstáculos
			796.427 – Revezamento
			796.43 – Salto / vara / arremesso
			796.44 – Ginásticas
			796.45 – Capoeira
			796.46 – Trapézio e similares ( para circo ver 791.34)
			796.47 – Acrobacias / contorcionismo / exercícios  de solo
			796.48 – Jogos Olímpicos   (atuais) ( para Jogos Olímpicos de Inverno
			              ver 796.98)
			796.4809 – Jogos Olímpicos - História

			796.5 – Esportes ao ar livre
			796.51 – Caminhadas
			796.522 – Alpinismo / Montanhismo
			796.525 – Exploração de cavernas
			796.53 – De praia
			796.54 – Camping
			796.58 – Esportes de orientação ( ver tb. 912.014)
			796.6 – Ciclismo ( corridas, mountain bike, ciclismo como lazer )
			796.7 –  Veículos a motor
			796.72 – Automobilismo / corridas
			796.73 – Rallies
			796.75 – Corrida de motos
			796.756 – Motocross
			796.76 – Kart
			796.77 – Dirigir como lazer
			796.78 – Dirigir carro da família como lazer
			796.79 – Viajar com casa móvel / Motohouse / Trailler

			796.8 – Esporte de combate / Artes marciais (Box, Judo, Karatê, Esgrima,
			             Sumô, etc.)
			796.9 – Esportes de neve ( todos os tipos) Esportes de inverno

			797 – Esportes aquáticos
			797.1 – Canoagem / iatismo / caiaque / etc.
			797.14 – Corridas e regatas
			797.2 – Natação / nado sincronizado / mergulho / salto ornamental
			797.3 – Outros esportes aquáticos ( surf / windsurf / esqui aquático / jet ski )

			797.5 – Esportes aéreos ( incluindo bungie junping / corridas / acrobacias )
			797.51 – Balonagem
			797.56 – Paraquedismo

			798 – Esportes eqüestres / Equitação
			798.4 – Corridas
			798.8 – Corridas de cães

			799.1 – Pescaria                                                                            
			799.2 – Caça
			799.3 - Tiro

			800 – Literatura          (autobiografia – colocar em Biografia)
			                                                           Toda literatura  “.8 ” = Coletânea
			801 -  Teoria e filosofia
			801.02 – Criatividade literária
			801.3 – Valor, influência e efeito
			801.9 – Natureza e caráter
			801.92 – Psicologia
			801.95 – Análise e crítica
			803 - Dicionários e enciclopédias de literatura
			808 – Teoria literária
			808.04 – Técnicas de redação literária
			808.0469 –  Retórica
			808.07 – Literatura – Estudo e ensino
			808.1 – Retórica da lit. de poesia
			808.103 – Vocabulário de poesias
			808.2 – Retórica da lit.de teatro
			808.3 – Retórica da lit.da ficção e do romance
			808.4 – Retórica da lit. do ensaio
			808.5 – Retórica da expressão oral ou do discurso
			808.53 – Retórica dos debates e discussões públicas
			808.54 – Retórica da recitação
			808.55 – Retórica do coral falado
			808.56 – Retórica da conversação
			808.6 – Retórica das cartas
			808.7 – Retórica do humor e sátira
			808.8 – Retórica de coleção de textos variados ( com mais de uma língua,
			             mais de um autor ou estilos variados) /    Coleção de fábulas
			808.81 – Coleção de poesias
			808.82 – Coleção de teatro
			808.83 – Coleção de ficção
			808.84 – Coleção de ensaios
			808.85 – Coleção de discursos
			808.86 – Coleção de cartas
			808.87 – Coleção de humor e sátira / citações / piadas
			808.88 – Coleção de escritos variados
			808.882 – Col. de literatura de anedotas e jogos
			808.883 – Col. de literatura em forma de diários, jornais, reminiscências
			808.887 – Col. de literatura sem forma específica
			808.888 – Col. de literatura em prosa
			808.889 – Col. de literatura de e por pessoas específicas
			809 – Escolas / Estilos/ História

			810 – Literatura americana e canadense ( em inglès)
			811 – Poesia
			812 – Teatro
			813 – Romance

			820 – Literatura inglesa        
			821 – Poesia
			822 – Teatro
			823 – Romance

			Ir820 – Literatura  irlandesa

			830 – Literatura alemã
			831 – Poesia
			832 – Teatro
			833 – Romance

			839.3 – Literatura holandesa

			839.5 – Literatura escandinava

			839.81 – Literatura dinamarquesa

			839.82 – Literatura norueguesa


			840 – Literatura francesa e canadense ( em francês)
			841 – Poesia
			842 – Teatro
			843 – Romance

			848.1 – Literatura norueguesa
			848.5 – Literatura sueca
			848.9 – Literatura dinamarquesa
			848.97 – Literatura finlandesa
			849.12 – Literatura islandesa
			849.2 – Literatura holandesa
			849.3 – Literatura belga
			849.4 – Literatura suíça

			850 – Literatura  italiana
			851 – Poesia
			852 – Teatro
			853 – Romance

			860 – Literatura espanhola e Hispano-americana
			         América Latina: Class. Específica com letras – Ex. Argentina  Ar860
			860.1 – Lit. até 1369
			860.2 – Lit. de 1369/ 1516
			860.3 – Lit. da Idade de Ouro – 1516/ 1699
			860.4 – Lit. de 1700/ 1799
			860.5 – Lit. de 1800/ 1899
			860.6 – Lit. de 1900/ 1999
			860.62 – Lit. de 1900/1945
			860.64 – Lit. de 1945/ 1999
			860.7 – Lit. de 2000.................
			860.9 – Literatura espanhola e hispano-americana –Teoria, análise e crítica
			             História da Literatura Espanhola
			              Antologia literária

			860 - Siglas da América Latina Espanhola
			AC860 –Literatura em espanhol de outros países da América
			Ar860 – Literatura em espanhol da Argentina
			B860 – Literatura em espanhol da Bolívia
			C860 – Literatura em espanhol de Cuba
			Ch860 – Literatura em espanhol do Chile
			Co860 – Literatura em espanhol da Colômbia
			E860 – Literatura em espanhol do Equador
			G860 – Literatura em espanhol da Guatemala (guatemalense)
			M860 – Literatura em espanhol do México
			N860 – Literatura em espanhol da Nicarágua
			Ou860 – Literatura em espanhol de outras partes do mundo
			P860 – Literatura em espanhol do Perú
			Pa860 – Literatura em espanhol do Paraguai
			RD860 – Literatura em espanhol da República Dominicana
			U860 – Literatura em espanhol do Uruguai
			V860 – Literatura em espanhol da Venezuela

			861 – Poesia
			862 – Teatro
			863 – Romance / Ficção, crônicas,novelas etc
			864 – Ensaios
			865 – Discursos
			866 – Cartas
			868 – Miscelânea / Coletânea

			869 – Literatura portuguesa
			869.1 – Poesia
			869.2 – Teatro
			869.3 – Romance
			869.41 – Ensaios
			869.8 – Coletânea / miscelânea

			B869 – Literatura brasileira  

			B869.03 – Dicionário de literatura brasileira                                                                      

			B869.092 –Escritores brasileiros (Tabela 1)

			B869.91 – Poesia      (Literatura brasileira - Poesia )
			B869.92 – Teatro     ( Literatura brasileira – Teatro)
			B869.929 – Crítica  (Literatura brasileira – Crítica teatral)
			B869.93 – Romance      (Literatura brasileira – Romance)
			                  Crônica, conto, novela, cartas
			B869.939 – Crítica   ( Literatura brasileira – Crítica literária)

			870 – Literatura latina
			871 – Poesia
			872 – Teatro
			873 – Poesia e ficção épicas
			874 – Poesia lírica clássica
			875 – Discursos  clássicos
			876 – Cartas clássicas
			877 – Humor e sátira clássicos
			878 – Miscelânea de escritos clássicos
			879 – Literatura de outras línguas itálicas

			880 – Literatura grega
			881 – Poesia clássica
			882 – Poesia e teatro dramático
			883 – Poesia e ficção épicas
			884 – Poesia lírica clássica
			885 – Discursos clássicos
			886 – Cartas clássicas
			887 – Humor e sátira clássicos
			888 – Miscelânea de escritos clássicos
			889 – Literatura grega moderna

			890 – Outras literaturas
			891 – Literatura da Europa oriental e Literatura celta
			891.1 – Literatura indo-iraniana
			891.2 - Literatura sânscrita
			891.3 – Literatura indiana antiga                                                                
			891.4 – Literatura indiana moderna
			891.497 – Literatura romena
			891.5 – Literatura iraniana /    Literatura  afegã
			891.6 – Literatura celta e gaulesa  /  Escócia / Bretanha
			891.7 – Literatura russa
			891.09 – Literatura russa - História
			891.73 – Literatura russa - Romance
			891.8 – Literatura eslava
			891.81 – Literatura búlgara
			891.82 – Literatura servo-croata
			891.84 – Literatura slovena / Bósnia / Hercegovina ( Saraievo)
			891.85 – Literatura polonesa
			891.86 – Literatura tcheca
			891.87 – Literatura slovaca
			891.9 – Literatura báltica e indo-européia
			892 – Literatura afro-asiática semita
			892.2 – Literatura aramaica
			892.3 – Literatura Síria
			892.4 – Literatura hebraica
			892.6 – Literatura cananéia
			892.7 – Literatura libanesa  (Kalil Gibran) / Lit. árabe/ maltesa
			892.8 – Literatura etíope
			894.97 – Literatura iuguslava
			893 – Literatura afro-asiática não semita
			893.1 – Literatura egípcia
			893.4 – Literatura hebraica /Israel
			893.7 – Literatura árabe  e maltesa
			893.9 – Literatura etíope
			894.511 – Literatura húngara
			895.1 – Literatura chinesa
			895.4 – Literatura tibetana
			895.6 – Literatura japonesa
			895.7 – Literatura coreana
			895.9 – Literatura siamesa / laociana / vietcong / vietnamita / cambojana
			896 – Literatura africana
			897 – Literatura nativa norte americana
			897.415 2 – Literatura maia/Yucatec
			897.452 – Literatura asteca
			898 – Literatura nativa sul americana
			898.382 – Literatura guarani
			898.382 9 – Literatura tupi
			899 – Literatura da Oceania ( Java, Malásia, Hawai, Maori, Samoa, Basque,
			          Suméria )
			899.992 – Literatura em Esperanto



			900 – Geografia e História

			901 - Teoria e filosofia da história
			903 – Dicionários e enciclopédias de História Geral
			904 -  Acontecimentos e eventos na Historia ( tipo catástrofes, etc)

			907 – História geral – Estudo e ensino

			909 – História geral    ( Em geral, sem especificar regiões)
			       OBS.  Classificar história do mundo antigo de 499 a C. em 930
			                  Classificar história de continentes, países e localidades do mundo
			                   moderno em 940-990

			909.07 – 500 a..C. – 1450/1500 / Idade Média / Cruzadas
			909.08 – História moderna ( 1450/1500 – até....)
			Períodos históricos específicos (gerais, sem especificação de lugar)
			909.1 – História de 500-1199 (séc. VI a XII)
			909.17671 – História do Islamismo
			909.2 – 1200-1299 (séc XIII)
			909.3 – 1300-1399 (séc. XIV)
			909.4 – 1400-1499 (séc.XV)
			909.5 – 1500-1599 (séc.XVI)
			909.6 – 1600-1699 (séc.XVII)
			909.7 – 1700-1799 (séc.XVIII)
			909.8 – 1800-...
			909.81 – 1800-1999 (séc.XIX)
			               Revolução industrial – ver tb. 330.9034
			909.82 – 1900-1999 (séc.XX)
			909.83 – 2000- 2099 (séc.XXI)

			OBS. Primeira Guerra Mundial  ver 940.3
			         Segunda Guerra Mundial ver 940.53


			910 – Geografia geral / Viagens

			910.01 – Teoria e filosofia de geografia e viagens
			910 .02 –   A  Terra / Geografia física da  Terra
			910.021 –Geografia física : Relevo /  Vegetação  /  Florestas          

			910.021 –  Classificação por área e  regiões, paises, localidades  ( + país
			                  Tab. 2)
			                   Ex.: Geografia física da Espanha 910.02146 (46 = Espanha)
			                           Relevo da Espanha 910.021 46
			                           Vegetação da Espanha 910.021546
			910.021 1 – Zonas frias  (relevo, vegetação,etc)
			910.021 2 – Zonas temperadas  ( relevo, vegetação, etc)
			910.021 3 – Zonas tórridas  / Trópicos, desertos, etc) (relevo, vegetação, etc)
			910.021 4 – Terras e formações de terra
			910.021 5 – Regiões por tipo de vegetação
			910.021 52 – Florestas
			910.021 6 – Ar e Água
			910.012 7 – Regiões sócio econômicas
			910.021 8 Outras regiões terrestres
			910.021 9 – Espaço
			910.3 – Enciclopédias e dicionários de geografia
			910.4 – Narrativas de viagens
			910.7 – Geografia – Estudo e ensino
			910.92 – Grandes viagens, viajantes, exploradores, geógrafos
			911 –  Atlas Histórico  /  Geografia histórica
			                                          Geografia humana
			                                          Geografia econômica
			911.3 -  Mapas históricos do mundo antigo
			912 – Atlas Geográfico / Mapas.
			912.014 – Leitura de mapas / Orientação/ Escalas, símbolos e abreviaturas
			                de mapas
			912.3 – Mapas geográficos do mundo antigo

			913 – Geografia do mundo antigo

			914 - Geografia da Europa     - Descrições e Viagens
			          Ex.:  914.2 – Inglaterra (Tab. 2)
			              914.6 – Espanha – descrição e viagens – Geografia
			              914.6091732 – Regiões urbanas na Espanha - Cidades
			                      (914.6 + 09 (áreas, regiões,etc) + 1732 (reg. Urbanas  – Tab. 2)

			914.1 – Ilhas Britânicas
			914.11 – Escócia
			914.15 – Irlanda
			914.16 – Irlanda do Norte (Ulster)
			914.17 – República da Irlanda  (Eire)

			914.2 – Inglaterra
			914.21 – Londres
			914.29 – Gales ( Grã- Bretanha)

			914.3 – Alemanha
			914.3155 – Berlim
			914.36 – Áustria
			914.37 – República Checa
			914.373 – Slováquia
			914.38 – Polônia
			914.39 – Hungria

			914.4 – França
			914.4361 – Paris
			914.49 – Mônaco
			914.5 – Itália ,  Península Italiana e Ilhas adjacentes
			914.56 – Vaticano
			914.563 – Roma

			914.6 – Geografia  Península Ibérica /Espanha
			914.6 – Espanha - Geografia / Descrições e viagens
			914.641 – Madrid - Geografia / Descrições e viagens

			914.61/914.68  -  Geografia da Espanha
			914.61 – Noroeste da Espanha   /  Galícia
			914.611 – Província  La Coruña  / Incluindo Santiago de Compostela
			914.613 – Prov. Lugo
			914.615 – Prov. Orense
			914.617 – Prov. Pontevedra
			914.619 – Prov. Asturias (antiga  Prov. Oviedo)  /  Oviedo

			914.62 – Oeste da Espanha   /  Léon  / Castela-Léon
			914.621 – Prov.  Léon
			914.622 – Prov. Palencia
			914.623 – Prov.  Valladolid
			914.624 – Prov. Zamora
			914.625 – Prov. Salamanca
			914.626 – Extremadura ( Comunidade Autônoma)
			914.627 – Prov. Badajoz  /  Mérida
			914.628 – Prov. Cáceres  /
			                 Classificar aqui Rio Tagus ( dentro da Espanha)

			914.63 – Castela
			914.635 – Região Castela Velha
			914.635 1 – Prov. Cantábria ( antiga Prov. Santander) / Santander
			914.635 3 – Prov. Burgos
			914.635 4 – Prov. La Rioja ( antiga Prov. Logroño) / Logroño
			914.635 5  - Prov. Soria
			914.635 7 – Prov. Segóvia  /  Segóvia
			914.635 9 – Prov. Ávila

			914.64 – Região Nova Castela  / Comunidade Castela-La Mancha / La
			                Mancha
			914.641 - Prov. Madrid  /  Madrid
			914.643 – Prov. Toledo / Toledo
			914.645 – Prov.  Cidade Real
			914.646 – Prov. Albacete
			914.647 – Prov. Cuenca
			914.649 – Prov. Guadalajara


			914.65 – Nordeste da Espanha
			                Classificar aqui Montanhas Pireneus e Rio Ebro
			914.652 – Prov. Navarra / Pamplona
			914.655 – Aragão
			914.655 1 – Prov. Teruel
			914.655 3  - Prov. Zaragoza  / Zaragoza
			914.655 5 – Prov. Huesca

			914.66 – País Basco (antigo Prov. Basca, Vascongadas)
			               Classificar aqui o território do povo Basco
			914.661 - Guipúzcoa  / San Sebastian
			914.663 – Vizcaya (Biscay)  /  Bilbao
			914.665 – Alava  /  Vitoria
			914.667 – Treviño
			914.669 – Orduña

			914.67 – Leste da Espanha e Andorra  /  Cataluña (antiga Catalonia)
			914.671 – Prov. Gerona
			914.672 – Prov. de Barcelona  /  Barcelona
			914.673 - Prov. Tarragona
			914.674 – Prov. Lérida
			914.675 – Baleares  /  Ilhas Baleares
			914.675 2 – Minorca
			914.675 4 – Maiorca
			914.675 42 - Palma de Maiorca
			914.675 6  - Formentera  /  Ibiza
			914.676 – Valência
			914.676 1 – Prov. Castellón
			914.676 3 – Prov. Valência  / Valência
			914.676 5 – Prov. Alicante
			914.677 – Prov. Múrcia  / Cartagena
			                 Classificar aqui antiga Região Múrcia
			914.679 –  Andorra

			914.68 – Andaluzia e Gibraltar  /  Classificar aqui Rio  Guadalquivir
			914.681 – Prov. Almería
			914.682 – Prov. Granada  /  Granada
			914.683 – Prov. Jaén
			914.684 – Prov. Córdoba  / Córdoba
			914.685 – Prov. Málaga  /  Málaga
			914.686 – Prov. Sevilha  /  Sevilha
			914.687 – Prov. Huelva
			914.688 – Prov. Cadiz
			914.689 – Gibraltar

			914.69 – Portugal
			914.69425 – Lisboa

			914.7 – Rússia
			914.731 – Moscou

			914.8 – Escandinávia
			914.81 – Noruega
			914.85 – Suécia
			914.89 – Dinamarca
			914.897 – Finlândia

			914. 9 – Outras partes da Europa
			914.92 – Holanda
			914.93 - Bélgica
			914.94 – Suíça
			914.95 – Grécia
			914.96 – Península Balcã
			914.97 – Iugoslávia
			914.971 – Sérvia
			914.972 – Croácia
			914.973 – Slovenia
			914.974 – Bósnia e Hercegovina
			914.98 – Romênia
			914.99 – Bulgária

			915 – Geografia da Ásia
			915.1 – Extremo Oriente :
			915.1 – China
			915.1156 – Pequim
			915.125 – Hong Kong
			915.17 – Mongólia
			915.18 – Manchúria
			915.19 – Coréia
			915.2 – Japão
			915.2135 – Tóquio

			915.3 – Península Arábica
			915.31 – Península do Sinai
			915.33 – Iêmen
			915.357 – Emirados Árabes
			915.36 – Golfo Pérsico
			915.367 – Kuwait
			915.38 – Arábia Saudita

			915.4 – Índia
			915.4147 – Calcutá
			915.456 – Nova Delhi

			915.5 – Irã
			915.525 – Teerã

			915.6 - Oriente Médio
			915.61 – Turquia
			915.67 – Iraque
			915.674 – Mesopotâmia
			915.691 – Síria
			915.692 – Líbano
			915.694 – Palestina / Israel
			915.6944 – Jerusalén
			915.6954 – Jordânia / Rio Jordão

			915.7 – Sibéria / Rússia Asiática

			915.8 – Ásia Central
			915.81 – Afeganistão
			915.84 – Turquestão
			915.86 – Tadjiquistão
			915.87 – Uzbequistão

			915.9 – Sudeste da Ásia
			915.93 – Tailândia ( Sião)
			915.94 – Laos
			915.95 – Malásia
			915.96 – Camboja
			915.97 – Vietnã
			915.98 – Indonésia
			915.99 – Filipinas

			916 – Geografia da África
			           Ex.: 916.21 – Egito (Tab. 2)
			916.11 – Tunísia
			916.12 – Líbia
			916. 21 – Egito / Rio Nilo
			916.216 – Cairo
			916.24 – Sudão
			916.32 – Etiópia
			916.35 – Eritréa

			916.4 – Costa Noroeste da África e Ilhas adjacentes
			916.42 – Marrocos
			916.49 – Ilhas Canárias
			916.5 – Algéria

			916.6 – Oeste da África e Ilhas adjacentes
			              Deserto do Saara
			916.61 – Mauritânia
			916.623 – Mali
			916.626 – Niger
			916.63 – Senegal
			916.64 – Serra Leoa
			916.651 – Gâmbia
			916.652 – Guiné
			916.657 – Guiné Bissau
			916.658 – Cabo Verde
			916.662 – Libéria
			916.668 – Costa Ivory
			916.67 – Gana
			916.681 – Togo
			916.683 – Benin
			916.69 – Nigéria

			916.7 – África Central e Ilhas adjacentes
			916.711 – Cameroom
			916.715 – São Tomé e Príncipe
			916.718 – Guiné Equatorial
			916.721 – Gabão
			916.724 – República do Congo
			916.73 – Angola
			916.741 – República Central da África
			916.743 – Chad
			916.751 – Zaire
			916.7571 – Ruanda
			916.7572 – Burundi
			916.761 – Uganda
			916.762 – Quênia
			916.773 – Somália
			916.78 – Tanzânia

			916.8 –  África Meridional
			916.82 – República da África do Sul
			916.87 – Cabo da Boa Esperança
			916.881 – Namíbia
			916.885 – Lesoto
			916.891 – Zimbabe
			916.894 – Zâmbia
			916.897 – Malawi

			916.9 – Ilhas do Oceano Indico Sul
			916.91 – Madagascar
			916.982 – Ilhas Mauricio

			917 – Geografia da América do Norte e  “Américas”
			               Ex.: 917.3 – EUA (Tab. 2)                 917.291 – Geografia de Cuba

			917.1 –  Canadá
			917.13 – Ontário
			917.14 – Quebec
			917.2 – México
			917.253 – Cidade do México

			917.28 – Geografia da América Central
			917.281 –  Guatemala
			917.282 – Belize
			917.283 – Honduras
			917.284 – El Salvador
			917.285 – Nicarágua
			917.286 – Costa Rica
			917.287 – Panamá

			917.29 – Antilhas / Bermudas / Caribe
			917.291 – Cuba
			917.292 – Jamaica e Ilhas Cayman
			917.293 – República Dominicana
			917.294 – Haiti
			917.295 – Porto Rico
			917.296 – Bahamas
			917.297 – Ilhas Leeward (Pequenas Antilhas /Sotavento) : Curaçao, Aruba,
			                 Bonaire, Nova Esparta
			917.298 – Ilhas Windwar (Pequenas Antilhas /Barlavento) : Martinica,
			                 Barbados, Trinidade Tobago
			917.299 – Bermudas

			917.3 – Estados Unidos - Geografia / Descrições e viagens
			917.4 – Nordeste dos EUA
			917.4461 – Boston
			917.47 – Nova York
			917.4721 – Long Island
			917.5 – Sudeste dos EUA
			917.53 – Washington
			917.59 –  Flórida
			917.6 – Centro Sul dos EUA / Costa do Golfo
			917.64 – Texas
			917.7 – Centro Norte dos EUA / Grandes Lagos
			917.8 – Oeste dos EUA
			917.9 – Costa do Pacífico
			917.94 – Califórnia
			917.9494 – Los Angeles
			917.98 - Alasca

			918 – Geografia da América do Sul
			               Ex.: 918.2 – Argentina (Tab.2) 918.61 – Geografia da Colômbia

			918.1 –  Geografia do Brasil
			918.103 – Dicionários e enciclopédias de geografia do Brasil 918.11 –Região  Norte / Amazônia   / Rio Amazonas 918.111 – Rondônia 918.112 – Acre 918.113 – Amazonas 918.114 – Roraima 918.115 – Pará 918.116 – Amapá 918.117 – Tocantins 918.121 – Maranhão 918.122 – Piauí 918.13 – Região Nordeste                Caatinga  /  Seca 918.131 – Ceará 918.132 – Rio Grande do Norte 918.133 – Paraíba 918.134 – Pernambuco  /  Fernando de Noronha 918.135 – Alagoas 918.141 – Sergipe
			918.14 2 – Bahia   /    Rio São Francisco
			918.15 – Região Leste
			918.151 – Minas Gerais  /  Belo Horizonte
			918.152 – Espírito Santo
			918.153 – Rio de Janeiro / Rio de Janeiro
			918.16 – Região Sul
			918.161 – São Paulo  /  São Paulo       / Rio Paraná
			918.162 – Paraná
			918.164 – Santa Catarina
			918.165 – Rio Grande do Sul
			918.17 – Região Centro Oeste
			918.171 – Mato Grosso do Sul / Pantanal
			918.172 – Mato Grosso
			918.173 – Goiás
			918.174 – Distrito Federal

			918.2 – Argentina
			918.21 – Buenos Aires
			918.27 – Patagônia
			918.273 – San Carlos de Bariloche
			918.276 – Terra do Fogo

			918.3 – Chile
			918.3315 – Santiago

			918.4 – Bolívia
			918.412 – La Paz

			918.5 – Peru
			918.525 – Lima

			918.61 – Colômbia
			918.6148 – Bogotá

			918.66 – Equador
			918.6613 – Quito

			918.7 – Venezuela
			918.77 – Caracas

			918.81 – Guianas
			918.82 – Guiana Francesa
			918.83 – Suriname


			918.92 – Paraguai
			918.92121 – Assunção


			918.95 – Uruguai
			918.9513 - Montevidéo



			919 – Geografia de outras áreas
			           Ilhas do Pacífico / Ilha da Páscoa - Viagens
			919.3 –  Nova Zelândia
			919.36 - Wellington
			919.4 – Austrália
			919.441 – Sidney
			919.451 – Melbourne
			919.46 – Tasmânia
			919.471 – Canberra
			919.5 – Oceania
			919.51 - Nova Guiné
			919.53 – Papua
			919.58 – Arquipélago Bismarck
			919.59 – Outras partes da Milanésia
			919.6 – Outras partes do Pacífico/ Polinésia
			919.611 –  Fiji
			919.612 – Tonga
			919.613 – Samoa
			919.6211 – Tahiti
			919.65 – Micronésia
			919.691 – Havaí
			919.692 – Maui
			919.6931 – Honolulu
			919.7 – Ilhas do Atlântico
			919.711 – Malvinas

			919.8 – Regiões Polares
			919.81 – Ilhas do Ártico
			919.82 – Groenlandia
			919.89 – Antártica

			919.9 – Mundos Extraterrestres
			919.91 –  Lua
			919.92 – Planetas do Sistema Solar e seus satélites
			919.921 – Mercúrio
			919.922 – Vênus
			919.923 – Marte
			919.924 – Asteróides / Planetóides
			919.925 – Júpiter
			919.926 – Saturno
			919.927 – Urano
			919.928 – Netuno
			919.919 – Plutão
			919.93 – Meteoros e cometas
			919.94 – Sol


			920 – Biografia, genealogia, heráldica
			920.02 – Coleções de biografias ( sem limites de tempo, lugar, tipo, etc)
			920.03 – Dicionários e enciclopédias de biografias
			920.71 – de homens
			920.72 – de mulheres
			920.9 – de pessoas associadas a algum assunto ( ex.: guerrilheiros,
			             revolucionários, etc )
			921 – de filósofos
			922 – de religiosos
			922.2 – de católicos romanos
			922.21 – de papas
			922.22 – de santos
			922.2246 – de santos espanhois
			923.1 – de  reis, rainhas, presidentes
			923.181 – Biografias de presidentes do Brasil
			923.2 – de legisladores, diplomatas, nobres, políticos
			923.3 – de economistas e líderes
			923.4 –  de criminosos ou advogados
			923.5 – de  administradores públicos, militares
			923.6 – de  filantropos, humanistas, reformadores
			923.7 – de  educadores
			923.8 – de pessoas do comércio, das comunicações e transportes
			923.9 – de pioneiros, exploradores, geógrafos                                                                          
			924 – de  filologistas
			925 – de cientistas
			926 – de inventores / Pessoas na tecnologia
			926.1 – Biografias de médicos
			926.1073 – de enfermeiros
			926.2 – Biografias de engenheiros
			926.2913 – Biografias de aviadores / Santos Dumont
			927 – de pessoas na arte, esportes e recreação
			          ( Completar este número pelo 710/790, sem o 7 inicial)
			           Ex.: Jogadores de basquete 927.96357 =   927 + 796.357 )
			927.1 – de urbanistas
			927.2 – de arquitetos
			927.3 – de escultores
			927.3521 – de Aleijadinho / de escultores barrocos
			927.4 – de desenhistas
			927.5 – de pintores
			927.6 – de gráficos
			927.7 – de fotógrafos
			927.8 – de músicos / compositores / cantores

			927.96 – de atletas
			                ( ver subdivisão no 790, excluindo o 7)
			927.96325 – de jogadores de vôlei
			927.96334 – de jogadores de futebol
			927.96342 – de jogadores de tênis
			927.972 – de nadadores
			928 – de escritores  ( + Tabela 6 – língua que escreveu)
			          e personagens históricos
			928.1 – Escritores  e personagens históricos americanos
			928.21 – Escritores e personagens históricos ingleses
			928.29 – Escritores ingleses antigos
			928.31 – Escritores  e personagens históricos alemães
			928.35 – Escritores suíços ( em língua alemã)
			928.41 – Escritores  e personagens históricos franceses
			928.51 – Escritores  e personagens históricos  italianos
			928.61 – Escritores  e personagens históricos espanhóis
			928.69 – Escritores  e personagens históricos portugueses
			928.6981 – Escritores e personagens históricos  brasileiros
			928.71 – Escritores  e personagens históricos latinos
			928.81 – Escritores e personagens históricos gregos
			928.9 – Escritores e personagens históricos de outras línguas

			929.1  – Genealogia
			929.2 -  Histórias de famílias
			929.4 -  Nomes de famílias
			929.5 – Registros de cemitérios / Epitáfios
			929.6 – Heráldica ( Brasões) incluindo escudos
			929. 7 – Casas reais / Nobreza / Títulos
			929.8 – Prêmios, ordens, condecorações, autógrafos
			929.9 – Insígnias e identificações ( Bandeiras, Nomes de casas)
			929.92 – Bandeiras



			930 – História antiga   (até  Idade Média)
			              (especificando lugares/ países)
			           
			               Pré-história (mais ou menos até 3000aC) (Em lugares específicos)
			               Idade Antiga (3000aC/476dC)
			               Idade Média (476dC/1492)  

			930.03 – Enciclopédias e dicionários de história geral
			930.0981 – Pré-história no Brasil
			930.1 – Arqueologia
			931 – História da China Antiga -  Revolução Chinesa 1911 - 1949
			932 – História do Egito
			933 – História da Palestina / Exodo
			934 – História da Índia
			935 – História da Mesopotâmia / Irã
			936 – História  do Norte  da Europa
			936.4 – Celtas - Civilização
			937 – História da Península Italiana / de Roma
			938 – História da Grécia / Tróia - Civilização
			939 – Outras ( Ásia, África, Oceania, Regiões Polares etc)
			939.4 – Oriente antigo até o ano 640
			939.6 – História da antiga Ásia Central e pré-Russia / Citas - Civilização

			940 – História Moderna e Contemporânea  /  História
			          da Europa
			               Idade Moderna (1492/1789)
			               Idade Contemporânea  (1789/ ...)

			940.14 – Feudalismo
			940.18 – Cruzadas (1100/1299)
			940.21 – História do Renascimento
			940.23 -  História da Reforma protestante ( ver tb. 270.6)
			940.24 – Guerra dos Trinta Anos 1618/1648
			940.2526 – Guerra da Sucessão Espanhola (1701/1714)
			940.2532 – Guerra da Sucessão da Áustria (1740/1748)
			940.2534 – Guerra dos Sete Anos ( 1756/1763)
			940.27 – Guerra Napoleônica
			940.3 – Primeira Guerra Mundial (1914/1918)
			940.53 –  Segunda Guerra Mundial (1939/1945)
			940.5318 – Holocausto
			941 – História Grã-Bretanha  / Ilhas Britânicas
			941.1 – Hist. Escócia
			941.5 – Hist. da Irlanda
			941.6 -  Hist.  de Ulster – Irlanda do Norte
			941.7 – Hist. da República da Irlanda / Eire
			941.8 – Hist. de Leinster
			941.9 – Hist. de Munster
			942 – Hist. da Inglaterra /  País de Gales
			942.017 –  Saxões
			943 – Hist. da Europa Central  /  Alemanha
			943.6 – Hist. da Áustria / Liechtenstein
			943.7 – Hist. da República Tcheca e Slováquia
			943.8 – Hist. da Polônia
			943.9 – Hist. da Hungria
			944 – História da França  /  França e Mônaco
			944.04 – Revolução francesa / revoluções burguesas
			944.9 – Hist. de Mônaco e  Provence
			945 – Hist. da Itália
			945.6 – Hist. do Vaticano
			946 – História da Península Ibérica  /  Espanha

			946.01/946.08 – Períodos históricos da Espanha

			946.01 – História antiga  até o ano 711
			               Classificar aqui o período da dominação Visigota (anos 415/711)

			946.02 – Período da conquista das dinastias Mouras (711/1479)

			946.03 – Reinado de Fernando V e Isabel I (1479/1516)
			                Incluindo união de Castela e Aragão

			946.04 – Período da Casa de Habsburgo (1516/1700)
			946.042 – Reinado de Carlos I (1516/1556)
			946 043 – Reinado de Felipe II (1556/1598)

			946.05 - Último período da Casa de Habsburgo  e período da Casa de
			                Bourbon   (1589-1808)
			946.051 – Último período da Casa de Habsburgo (1598/1700)
			                 Incluindo o Reinado de Felipe III (1598/1700)
			946.052 – Reinado de Felipe IV (1621/1665)
			946.053 – Reinado de Carlos II (1665/1700)
			946.054 – 1700/1808
			946.055 – Reinado de Felipe V (1700/1746)  /  Guerra de Sucesión
			                  Incluindo a Guerra Anglo-Espanhola (1739/1741)
			946.056 – Reinado de Fernando VI (1746/1759)
			946.057 – Reinado de Carlos III ( 1759/1788)
			946.058 – Reinado de Carlos IV (1788/1808)

			946. 06 – Período da Guerra Peninsular e regime de José Bonaparte
			                 (1808/1814)Guerra de la Independencia

			946.07 – História contemporânea da Espanha   -   1814/1931
			946.072 – Reinado de Fernando VII e Isabel II (1814/1868)
			                 Incluindo a primeira restauração dos Bourbons

			946.073 – 1868/1874   -  Incluindo a Revolução de 1868/1871, a segunda
			                  restauração dos  Bourbons (1871/1873) e a primeira república
			                   (1873/1874)
			946.074 – Reinados de Afonso XII e Afonso XIII (1874/1931)

			946.08 – 1931 /... Classificar aqui século XX : para 1900/1931 ver 946.074
			946.081 – Período da Segunda república  (1931/1939)
			                 Classificar aqui a Guerra Civil (1936/1939)
			946.082 – Período de Francisco Franco (1939/1975)
			946.082 4 – 1939/1949
			946.082 5 – 1950/1959
			946.082 6 – 1960/1969
			946.082 7 – 1970/1975
			946.083 – Reinado de Juan Carlos I (1975/...)

			946.7 – História do Leste da Espanha
			946.79 – História de Andorra
			                Classificar história antiga como 936.6

			946.8 – História da Andaluzia
			946.89 – História de Gibraltar
			               Classificar história antiga como 936.6

			946.9 – História de Portugal
			947 – História do Leste Europeu  /   Rússia
			947.0854 – Hist. da Rússia no período de 1982/1991 - Perestroika
			948 – Hist. da Escandinávia
			948.02 – Vikings - Civilização
			948.1 – Hist. da Noruega
			948.5 – Hist. da Suécia
			948.9 – Hist. da Dinamarca e Finlândia
			949 – Outros
			949.1 – Hist. da Islândia
			949.2 – Hist. da Holanda
			949.3 – Hist. da Bélgica
			949.4 – Hist. da Suiça                                                                      
			949.5 – História  da Grécia
			949.6 – Hist. da Península dos Bálcãs
			949.7 – Hist. da Iugoslávia, Croácia, Slovênia, Bósnia, Hercegovina,
			             Macedônia
			949.8 – Hist. da Romênia
			949.9 – Hist. da Bulgária
			948.97 – História da Finlândia
			950 – Hist. Geral da Ásia, Oriente, Extremo Leste
			951 – Hist. da China
			952 – Hist. do Japão
			953 – Hist. da Península  Arábica ( Sinai, Yemen,Emirados Árabes, Pérsia,
			          Arábia Saudita)
			954 – Hist. do  Sul da Ásia /   Índia
			954.9 – Hist. de outros: Paquistão, Bangladesh, Sri Lanka
			955 – Hist. do Irã
			956 – História do Oriente Médio ( Turquia, Iraque, Síria, Líbano, Israel,
			          Jordão)
			956.94 – Hist. da Terra Prometida
			956.940 52 – Guerra árabe – israelense
			957- Hist. da Sibéria  / Rússia Asiática
			958 – Hist. da Ásia Central (Afeganistão, etc.)
			959 – Hist. do Sudeste da Ásia ( Tailândia, Laos, Malásia, Indonésia,
			          Vietnan,  Filipinas)
			960 – História da África
			961 – Hist. da Tunísia e Líbia
			962 – História do Egito e Sudão
			964- Hist. da Costa  Noroeste e ilhas adjacentes  /  Marrocos
			965 – Hist, da Argélia
			966 – Hist. do Oeste da África e ilhas adjacentes
			967 – Hist. África Central
			968 – Hist. do Sul da África  /  República da África do Sul
			969 – Hist. das Ilhas do Sul do Oceano Índico

			970 – História das Américas
			970 – História da América do Norte
			970.015 –  História da América Pré-Colombiana
			971 – História do Canadá
			972 – Hist. do México
			972.01 – Maias
			972.018 – Astecas
			972.019 – Incas
			972.8 – Historia da América Central
			972.802 – Hist. da América pré-colombiana
			972.81 – Hist. da Guatemala
			972.82 – Hist. de Belize
			972. 83 – Hist. de Honduras
			972.84 – Hist. El Salvador
			972.85 – Hist. Nicarágua
			972.86 – Hist. Costa Rica
			972.87 – Hist. Panamá
			972.9 – Hist. Antilhas e Bermudas
			972.91 – Hist. Cuba
			972.92 – Hist. Jamaica e Cayman
			972.93 – Hist. República Dominicana
			972.94 – Hist. Haiti
			972.95 – Hist. Porto Rico
			972.96 – Hist. Bahamas
			972.97 – Hist. Ilhas  Leewwards
			972.98 – Hist. Barbados, Martinica, Trindade Tobago
			973 – Hist. dos  Estados Unidos
			979.8 – Hist. Alaska
			980 – História da América do Sul
			          Índios da América do Sul

			980 – História da América Latina


			981 – História do Brasil
			          Carta de Pero Vaz de Caminha
			          Engenhos
			981.003 – Dicionários e enciclopédias de história do Brasil
			981.00498 – Índios no Brasil
			981.01 – Descobrimento
			981.03 – Período colonial (1500/1822)
			981.031 – Período da exploração européia (1500/1533)
			981.032 – Período das capitanias hereditárias (1533/1762)
			                 Invasão holandesa na Bahia (1624/1625)
			                 Invasão holandesa em Pernambuco (1630/1654)
			                 Invasão francesa no Rio de Janeiro (1555/1567)
			                 Bandeiras e bandeirantes (1628/1725)
			                 Batalha dos Guararapes (1648-1649)
			                 Revolta dos Emboabas (1708/1709)
			                 Guerra dos Mascates (1710)
			                 Revolta de Felipe dos Santos (1720)
			981.033 – (1762/ 1822)
			                 Inconfidência Mineira (1789)
			981.036 – Zumbi dos Palmares
			981.04 – De 1822 a 1889 - Primeiro e segundo Império                                              
			                                            Escravidão no Brasil / Quilombos
			                                            Independência (1822)
			                                            Cabanagem (1833-1836)
			                                            Farroupilha (1835-1845)
			                                            Sabinada (1837-1838)
			                                            Balaiada (1838-1841)
			                                            Praieira (1848-1850)
			                                            Guerra do Paraguai (1865-1870)
			981.05 – De 1889 a 1930 – Proclamação da República  /República Velha
			                                            Greve dos Cocheiros (1900)
			                                            Guerra  do Contestado (1912-1916)
			                                            Cangaço (1870-1940)
			                                            Canudos (1870-1897)
			                                             Primeira Guerra Mundial (1914-1918)
			                                             Revolta dos Tenentes  (1923-1924)
			                                             Coluna Prestes (1925)
			981.06 – Depois de 1930  - 2a República                                    
			981.061 – Período Getúlio Vargas (1930/1954) Revolução anos 30
			                 Estado Novo (1937/1945)
			                 Segunda Guerra Mundial ( 1939- 1945)
			                 Eurico Gaspar Dutra
			981.062 – 1954/1964    -     Golpe de 1964
			                 Juscelino Kubitschek (1956/1961)
			                 Jânio Quadros (31/01/1961 – 25/08/1961
			                 João Goulart (1961/1964)
			981.063 – Revoluções anos 60 / Período Militar(1964 / 1985)
			981.064 – 1985...
			                 José Sarney
			                Movimentos estudantis

			981.1 – Hist. da Região Norte /  Amazônia  /  Rio Amazonas
			981.11 – Hist. da Rondônia
			981.12 – Hist. do Acre
			981.13 – Hist. do amazonas
			981.14 – Hist. de Roraima
			981.15 – Hist do Pará
			981.16 – Hist. do Amapá
			981.17 – Hist. do Tocantins
			981. 21 – Hist. do Maranhão
			981.22 – Hist. do Piauí
			981.3 – Hist. da Região Nordeste
			981.31 – Hist. do Ceará
			981.32 – Hist. do Rio Grande do Norte
			981.33 – Hist. da Paraíba
			981.34 – História de Pernambuco  /  Fernando de Noronha
			981.35 – Hist. de Alagoas
			981.41 – Hist. de Sergipe
			981.42 – Hist. da Bahia  /  Rio São Francisco
			981.5 – Hist. da Região Leste

			981.51 - História de MG
			                História de B. Horizonte                                                        
			                Presépio do Pipiripau

			981.52 – Hist. do Espírito Santo
			981.53 – Hist. do Rio de Janeiro  /  Cidade do Rio de Janeiro
			981.6 – Hist. da Região Sul
			981.61 – Hist. de São Paulo / Cidade de São Paulo  / Rio Paraná
			981.62 – Hist. do Paraná
			981.64 – Hist. de Santa Catarina
			981.65 – História do Rio Grande do Sul
			981.7 – Hist. da Região Centro Oeste
			981.71 – Hist. do Mato Grosso do Sul
			981.72 – Hist. do Mato Grosso
			981. 73 – Hist. de Goiás
			981.74 – Hist. do Distrito Federal  /  Brasília

			982 – Hist. da Argentina
			983 – Hist. do Chile
			984 – Hist. da Bolívia
			985 – Hist. do Peru  
			985.019 – Incas    
			 
			986.1 – Hist. da Colômbia
			986.6 – Hist. do  Equador
			987 – Hist. da Venezuela
			988 – Hist. das Guianas
			989.2 – Hist. do Paraguai
			989.5 – Hist. do Uruguai
			989.205 – Guerra do Paraguai

			990 – Hist. de outras partes da terra

			993 – Hist. Nova Zelândia
			994 – Hist. da Austrália
			995 – Hist. da Oceania
			996 – Hist. Polinésia
			997 – Hist. Ilhas do Oceano Atlântico
			998 – Hist. de Ilhas do Ártico e Antártica
			998.2 – Groenlândia
			999 – Hist. de Mundos extraterrestres
			</pre>
			<div class='manlan' lang='pt'> <button class='btpress' onClick='top_scroll()'> Voltar ao topo </button> </div>
			<div class='manlan' lang='en'> <button class='btpress' onClick='top_scroll()'> Go back to top </button> </div>

		</div>

		<?php include '../design/footer.php' ?>
	</body>
</html>