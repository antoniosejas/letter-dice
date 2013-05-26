	<?php 
				$letras=array(
					'a',
					'b',
					'c',
					'd',
					'e',
					'f',
					'g',
					'h',
					'i',
					'j',
					'k',
					'l',
					'm',
					'n',
					'ñ',
					'o',
					'p',
					'q',
					'r',
					's',
					't',
					'u',
					'v',
					'w',
					'x',
					'y',
					'z',
					);
	?><html>
		<head>
		<title>Dado de letras</title>
			<style>
			* {
				margin: 0;
				padding: 0;
			}
			body {
				height: 100%;
				width: 100%;
			}

			 #letra {
				width: 100%;
				height: 50%;
				position: relative;
				top: 50%;
			}
			h1 {
				text-align: center;
				font-size: 13em;
				cursor: pointer;
			}
			</style>		
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<meta name="apple-touch-fullscreen" content="YES">
			<meta name="apple-mobile-web-app-capable" content="yes">

		</head>
		<body>
			<div id="letra">
				<h1 onclick="document.location.reload(true)"> <?php echo strtoupper($letras[rand(0,count($letras)-1)]); ?></h1>
			</div>
		</body>
	</html>