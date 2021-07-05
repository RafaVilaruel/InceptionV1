<html>

<head>
	<title><?php echo dirname(__FILE__); ?></title>
	<link rel="stylesheet" type="text/css" href="folderstyle.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	
</head>


<body>

<container class="top-row">

	<div class="window">
		<div class="user">
			<div class="icon"><img src="../../../../img/win95/conf_107.ico"></div>
			<div class="username"><div>User</div></div>
		</div>
		<div class="middle"></div>

		<div class="right-buttons">
			<div class="minimize"><img class="r-btn" src="../../../../img/minimize.png"></div>
			<div class="extend"><img class="r-btn" src="../../../../img/extend.png"></div>
			<div class="close"><img class="r-btn" src="../../../../img/close.png"></div>
		</div>
	</div>

	
		<div class="options">
			<img src="../../../../img/cut.png">
			<img src="../../../../img/copiar.png">
			<img src="../../../../img/paste.png">
			<img src="../../../../img/delete.png">
			<img src="../../../../img/rename.png">
			<img src="../../../../img/more.png">						
		</div>	
	
</container>

<container class="box">

	<div class="left-row">

		<div class="arrows">
			
			<img src="../img/leftarrow.png" onclick="goBack()">
			<img src="../img/rightarrow.png" onclick="goForward()">
			<img src="../../../../img/uparrow.png">

		</div>

		<div class="dirs">

			<a href="../mycomputer/mycomputer.php"><img src="../img/quickacess.png"></a>
			<a href="../../inception.php"><img src="../img/thispc.png"></a>
			<a href="../../inception.php"><img src="../img/localdisk.png"></a>
			<img src="../../../../img/network.png">

		</div>

		<div class="break"></div>

	</div>

	<div class="right-row">
		
		<div class="folderdir">
			<div><?php echo dirname(__FILE__); ?></div>
		</div>

		<div class="filesdir" id="list">
			
			<?php


				// open this directory 
				$myDirectory = opendir(".");


				// get each entry
				while($entryName = readdir($myDirectory)) {
					$dirArray[] = $entryName;
				}

				// close directory
				closedir($myDirectory);

				//	count elements in array
				$indexCount	= count($dirArray);
				

				// sort 'em
				sort($dirArray);

				// print 'em
				

				// loop through the array of files and print them all
				for($index=0; $index < $indexCount; $index++) {
				        if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files
						
						if (strpos($dirArray[$index], 'png') or strpos($dirArray[$index], 'jpg' ) or strpos($dirArray[$index], 'jpeg' )) {
							
							print("<div class=\"file\" id=\"categorie5.1-4\"><div class=\"fullfile\"><a href=\"$dirArray[$index]\"><div class=\"fileicon\"><img src=\"../../img/screenshots.png\"></div><div class=\"name\"><div>$dirArray[$index]</div></div></div></a></div>");

						}
				        elseif(strpos($dirArray[$index], 'mp3') or strpos($dirArray[$index], 'ogv' ))  {

				        	print("<div class=\"file\" id=\"categorie5.1-3\"><div class=\"fullfile\"><a href=\"$dirArray[$index]\"><div class=\"fileicon\"><img src=\"../../img/win95/mmsys_112.ico\"></div><div class=\"name\"><div>$dirArray[$index]</div></div></div></a></div>");
				        }

				        elseif (strpos($dirArray[$index], '.') == false) {

				        	print("<div class=\"file\" id=\"categorie5.1-1\"><div class=\"fullfile\"><a href=\"$dirArray[$index]/$dirArray[$index].php\"><div class=\"fileicon\"><img src=\"../../img/win95/msnp32_FOLDER_ICON.ico\"></div><div class=\"name\"><div>$dirArray[$index]</div></div></div></a></div>");

				        	$nf = fopen("$dirArray[$index]/$dirArray[$index].php", "wb");
				        	$content = "<div style=\"font-size:100px;\">Nothing to see here!</div>";
				        	fwrite($nf, $content);
				        	
				        }

				        elseif (strpos($dirArray[$index], 'mp4') or strpos($dirArray[$index], 'mpg') or strpos($dirArray[$index], 'mkv') or strpos($dirArray[$index], 'flv') or strpos($dirArray[$index], 'avi') or strpos($dirArray[$index], 'wmv') or strpos($dirArray[$index], '3gp')) {
				        		
				        		print("<div class=\"file\ id=\"categorie5.1-5\"><div class=\"fullfile\"><a href=\"$dirArray[$index]\"><div class=\"fileicon\"><img src=\"../../img/win95/mplayer_10.ico\"></div><div class=\"name\"><div>$dirArray[$index]</div></div></div></a></div>");
				        }

				        else {
				        	print("<div class=\"file\" id=\"categorie5.1-6\"><div class=\"fullfile\"><a href=\"$dirArray[$index]\"><div class=\"fileicon\"><img src=\"../../img/win95/iexplore_32539.ico\"></div><div class=\"name\"><div>$dirArray[$index]</div></div></div></a></div>");
				        }

				        //elseif (strpos($dirArray[$index], 'php') || strpos($dirArray[$index], 'ogv') ) {	

				        }

				        	

					//	print("<TR><TD><a href=\"$dirArray[$index]\">$dirArray[$index]</a></td>");
					//	print("<td>");
					//	print(filetype($dirArray[$index]));
					//	print("</td>");
					//	print("<td>");
					//	print(filesize($dirArray[$index]));
					//	print("</td>");
					//	print("</TR>\n");
					
				}
				print("</TABLE>\n");

					
				?>
			
			<!--
			<div class="file">
				<div class="fullfile">
					<div class="fileicon">
						<img src="../../../../img/win95/msnp32_FOLDER_ICON.ico"></div>
						<div class="name"><div>Folder</div></div>
					</div>
			</div>

			<div class="file">
				<div class="fullfile">
					<div class="fileicon"><img src="../../../../img/win95/notepad_1.ico"></div>
					<div class="name"><div>Text File</div></div>
				</div>
			</div>

			<div class="file">
				<div class="fullfile">
					<div class="fileicon"><img src="../../../../img/screenshots.png"></div>
					<div class="name"><div>Image File</div></div>
				</div>
			</div>

			<div class="file">
				<div class="fullfile">
					<div class="fileicon"><img src="../../../../img/win95/mmsys_119.ico"></div>
					<div class="name"><div>Video File</div></div>
				</div>
			</div>

			<div class="file">
				<div class="fullfile">
					<div class="fileicon"><img src="../../../../img/win95/mmsys_118.ico"></div>
					<div class="name"><div>Audio File</div></div>
				</div>
			</div>

			  -->
			

			

		</div>	

	</div>

</container>


</body>

<script src='../jquery.min.js'></script>
  <script src='../jquery-ui.min.js'></script>
  <script  src="../script.js"></script>
  <script type="text/javascript">  	
  	$(document).ready(function() {doSort();});
  	// sort files in the directory´
  </script>

</html>