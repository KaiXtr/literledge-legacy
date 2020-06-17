<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Arcadism';
			$v = $ltslst[$lts].' - ';
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='banner' style='background-image: url("media/images/banners/<?php echo strtolower($lts); ?>.jpg")'></div>
		<?php echo "<div id='profile'> <h1 id='litername'> ".$ltslst[$lts]." </h1> </div>"; ?>
		<div id='bio'>
			
			
			----

			O Arcadismo foi o principal movimento literário do século XVIII. Outros nomes dados ao estilo são Setecentismo ou Neoclassicismo - a partir deste último, inclusive, percebe-se a relação do Arcadismo com valores da cultura clássica, ou seja, valores gregos, romanos e renascentistas. Os escritores árcades são conhecidos por oporem-se ao estilo barroco, inspirando-se em preceitos do Iluminismo.

			Leia mais: Descubra a origem das influências do Arcadismo.

			Características
			O movimento árcade foi fortemente influenciado pela cultura grega, latina e renascentista. A clareza e a harmonia nos temas e nas formas afastaram das produções literárias a linguagem rebuscada e confusa do Barroco. As antíteses e paradoxos do homem do século XVII passaram a dar lugar ao sujeito racional, que buscava a simplicidade e a racionalidade em suas obras.

			Uma das principais características árcades é a herança da cultura clássica (greco-latina e renascentista). Alguns preceitos latinos que inspiraram os escritores árcades são:

			Inutilia Truncat: Esse preceito dialoga com a necessidade de “tirar o inútil” da poesia, entendendo-se esse inútil como sendo o excesso de rebuscamento formal do movimento Barroco.

			Fugere Urbem: Para os líricos do Arcadismo, a cidade não era o ambiente ideal para viver, pregando-se, portanto, a fuga da urbanidade como meta a ser alcançada.

			Locus Amoenus: Atrelado ao fugere urbem, esse preceito afirma que o campo, o ambiente bucólico, é o ideal para o homem.

			Carpe Diem: Segundo esse preceito, é necessário aproveitar o presente para contemplar a realidade, sem preocupar-se com o futuro.

			Aurea Mediocritas: Segundo essa expressão, o homem mediano é aquele que alcança a felicidade, não se devendo, assim, procurar riquezas e posses em vida.    

			Além do retorno aos clássicos, o Arcadismo também foi muito influenciado pelo Iluminismo, movimento filosófico que compreendia ser a razão o maior valor humano, e pelo desenvolvimento técnico e tecnológico que modernizou os meios de produção da época e produziu um forte êxodo rural e expansão urbana.
			Contexto histórico
			O Arcadismo é o principal movimento literário do século XVIII. Seu contexto é marcado, como dissemos anteriormente, pelo Iluminismo e pelo avanço técnico e tecnológico que produziram a industrialização e o consequente êxodo rural. O período é fundamental para compreender o declínio do absolutismo e a ascensão da burguesia.

			Os autores árcades dialogam, em suas obras, com questões fundamentais da época, tais como a relação entre o homem e a riqueza (aurea mediocritas é um conceito que discute isso, por exemplo) ou como era viver na cidade (os preceitos fugere urbem e locus amoenus são referentes a esse assunto).    

			Diferenças entre Arcadismo e Barroco
			O Arcadismo é o movimento literário que ocorre após o Barroco. Enquanto o Barroco representa um homem em conflito entre o sagrado e o profano (é bom lembrar que nessa época, século XVII, a Contrarreforma havia restaurado vários valores medievais no mundo), o Arcadismo apresenta um sujeito fiel à razão, crente na ciência. Além disso, vale dizer que linguagem do Barroco era rebuscada e cheia de paradoxos, enquanto, no Arcadismo, comunica-se com mais clareza e simplicidade.

			Acesse também: Conheça o Arcadismo brasileiro com maior profundidade.

			Principais autores do Arcadismo no Brasil e em Portugal
			O Arcadismo desenvolveu-se tanto no Brasil quanto em Portugal. Os principais autores são:

			Bocage
			Cláudio Manuel da Costa
			Tomás Antônio Gonzaga
			Santa Rita Durão
			Basílio da Gama
			<br />
			Fonte: <a href='https://brasilescola.uol.com.br/literatura/arcadismo.htm' > Wikipedia </a>
		</div>
		<?php $schl = $lts; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>