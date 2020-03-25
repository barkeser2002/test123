<!--
Copyright 2016 Banapple Websites

TERMS OF USE
You may not redistribute this template.
You may not sell this template.
You may not claim this template as your own work.

HELP
Please refer to the Instructions.txt, or contact me on Skype @ TheBanapple, or email jon@thebanapple.com.
If you wish to customize this and are not capible of doing so yourself, get in touch.
I charge a small fee for adding more features to this page

Ver 4.9
-->

<?php

function sanitize_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
        '/[^\S ]+\</s',  // strip whitespaces before tags, except space
        '/(\s)+/s'       // shorten multiple whitespace sequences
    );

    $replace = array(
        '>',
        '<',
        '\\1'
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

ob_start("sanitize_output");

include 'config.php';

$annD = "";
$annC = "";
$ssD = "";
$ssBC = "";
$ssC = "";
$c2cC = "";
$c2cBC = "";
$i1D = "";
$i2D = "";
$i3D = "";
$i4D = "";
$i5D = "";
$i6D = "";
$i7D = "";
$i8D = "";
$i1C = "";
$i2C = "";
$i3C = "";
$i4C = "";
$i5C = "";
$i6C = "";
$i7C = "";
$i8C = "";
$i1IC = "";
$i2IC = "";
$i3IC = "";
$i4IC = "";
$i5IC = "";
$i6IC = "";
$i7IC = "";
$i8IC = "";
$i1ICH = "";
$i2ICH = "";
$i3ICH = "";
$i4ICH = "";
$i5ICH = "";
$i6ICH = "";
$i7ICH = "";
$i8ICH = "";
$i1Di = "";
$i2Di = "";
$i3Di = "";
$i4Di = "";
$i5Di = "";
$i6Di = "";
$i7Di = "";
$i8Di = "";



if ($icon1Display == true) {
	$i1D = "display: block;";
	if ($icon1Image == true) {
		if ($icon1VoteLink == true) {
			$i1Di = '<div class="iconWrap"> <a class="venobox" data-type="iframe" href="pages/vote"> <img class="icon" src="'.$icon1ImageURL.'" /> <span class="montserrat">'.$icon1Name.'</span> </a> </div>';
		} else {
			if ($icon1NewTab ==  true) {
				$i1Di = '<div class="iconWrap"> <a href="'.$icon1Link.'" target="blank"> <img class="icon" src="'.$icon1ImageURL.'" /> <span class="montserrat">'.$icon1Name.'</span> </a> </div>';
			} else {
				$i1Di = '<div class="iconWrap"> <a href="'.$icon1Link.'"> <img class="icon" src="'.$icon1ImageURL.'" /> <span class="montserrat">'.$icon1Name.'</span> </a> </div>';
			}
		}
	} else {
		$i1IC = 'color: '.$icon1IconColour.';';
		$i1ICH = 'color: '.$icon1IconHColour.';';
		if ($icon1VoteLink == true) {
			$i1Di = '<div class="iconWrap"> <a class="venobox" data-type="iframe" href="pages/vote"> <div class="icon fa '.$icon1Type.'"></div> <span class="montserrat">'.$icon1Name.'</span> </a> </div>';
		} else {
			if ($icon1NewTab ==  true) {
				$i1Di = '<div class="iconWrap"> <a href="'.$icon1Link.'" target="_blank"> <div class="icon fa '.$icon1Type.'"></div> <span class="montserrat">'.$icon1Name.'</span> </a> </div>';
			} else {
				$i1Di = '<div class="iconWrap"> <a href="'.$icon1Link.'"> <div class="icon fa '.$icon1Type.'"></div> <span class="montserrat">'.$icon1Name.'</span> </a> </div>';
			}
		}
	}
	if ($icon1Colour !== null) {
		$i1C = "color: ".$icon1Colour.";";
	} else {
		$i1C = "";
	}
} else {
	$i1D = "display: none;";
}



if ($icon2Display == true) {
	$i2D = "display: block;";
	if ($icon2Image == true) {
		if ($icon2VoteLink == true) {
			$i2Di = '<div class="iconWrap"> <a class="venobox" data-type="iframe" href="pages/vote"> <img class="icon" src="'.$icon2ImageURL.'" /> <span class="montserrat">'.$icon2Name.'</span> </a> </div>';
		} else {
			if ($icon2NewTab ==  true) {
				$i2Di = '<div class="iconWrap"> <a href="'.$icon2Link.'" target="blank"> <img class="icon" src="'.$icon2ImageURL.'" /> <span class="montserrat">'.$icon2Name.'</span> </a> </div>';
			} else {
				$i2Di = '<div class="iconWrap"> <a href="'.$icon2Link.'"> <img class="icon" src="'.$icon2ImageURL.'" /> <span class="montserrat">'.$icon2Name.'</span> </a> </div>';
			}
		}
	} else {
		$i2IC = 'color: '.$icon2IconColour.';';
		$i2ICH = 'color: '.$icon2IconHColour.';';
		if ($icon2VoteLink == true) {
			$i2Di = '<div class="iconWrap"> <a class="venobox" data-type="iframe" href="pages/vote"> <div class="icon fa '.$icon2Type.'"></div> <span class="montserrat">'.$icon2Name.'</span> </a> </div>';
		} else {
			if ($icon2NewTab ==  true) {
				$i2Di = '<div class="iconWrap"> <a href="'.$icon2Link.'" target="_blank"> <div class="icon fa '.$icon2Type.'"></div> <span class="montserrat">'.$icon2Name.'</span> </a> </div>';
			} else {
				$i2Di = '<div class="iconWrap"> <a href="'.$icon2Link.'"> <div class="icon fa '.$icon2Type.'"></div> <span class="montserrat">'.$icon2Name.'</span> </a> </div>';
			}
		}
	}
	if ($icon2Colour !== null) {
		$i2C = "color: ".$icon2Colour.";";
	} else {
		$i2C = "";
	}
} else {
	$i2D = "display: none;";
}




if ($icon3Display == true) {
	$i3D = "display: block;";
	if ($icon3Image == true) {
		if ($icon3VoteLink == true) {
			$i3Di = '<div class="iconWrap"> <a class="venobox" data-type="iframe" href="pages/vote"> <img class="icon" src="'.$icon3ImageURL.'" /> <span class="montserrat">'.$icon3Name.'</span> </a> </div>';
		} else {
			if ($icon3NewTab ==  true) {
				$i3Di = '<div class="iconWrap"> <a href="'.$icon3Link.'" target="blank"> <img class="icon" src="'.$icon3ImageURL.'" /> <span class="montserrat">'.$icon3Name.'</span> </a> </div>';
			} else {
				$i3Di = '<div class="iconWrap"> <a href="'.$icon3Link.'"> <img class="icon" src="'.$icon3ImageURL.'" /> <span class="montserrat">'.$icon3Name.'</span> </a> </div>';
			}
		}
	} else {
		$i3IC = 'color: '.$icon3IconColour.';';
		$i3ICH = 'color: '.$icon3IconHColour.';';
		if ($icon3VoteLink == true) {
			$i3Di = '<div class="iconWrap"> <a class="venobox" data-type="iframe" href="pages/vote"> <div class="icon fa '.$icon3Type.'"></div> <span class="montserrat">'.$icon3Name.'</span> </a> </div>';
		} else {
			if ($icon3NewTab ==  true) {
				$i3Di = '<div class="iconWrap"> <a href="'.$icon3Link.'" target="_blank"> <div class="icon fa '.$icon3Type.'"></div> <span class="montserrat">'.$icon3Name.'</span> </a> </div>';
			} else {
				$i3Di = '<div class="iconWrap"> <a href="'.$icon3Link.'"> <div class="icon fa '.$icon3Type.'"></div> <span class="montserrat">'.$icon3Name.'</span> </a> </div>';
			}
		}
	}
	if ($icon3Colour !== null) {
		$i3C = "color: ".$icon3Colour.";";
	} else {
		$i3C = "";
	}
} else {
	$i3D = "display: none;";
}




if ($icon4Display == true) {
	$i4D = "display: block;";
	if ($icon4Image == true) {
		if ($icon4VoteLink == true) {
			$i4Di = '<div class="iconWrap"> <a class="venobox" data-type="iframe" href="pages/vote"> <img class="icon" src="'.$icon4ImageURL.'" /> <span class="montserrat">'.$icon4Name.'</span> </a> </div>';
		} else {
			if ($icon4NewTab ==  true) {
				$i4Di = '<div class="iconWrap"> <a href="'.$icon4Link.'" target="blank"> <img class="icon" src="'.$icon4ImageURL.'" /> <span class="montserrat">'.$icon4Name.'</span> </a> </div>';
			} else {
				$i4Di = '<div class="iconWrap"> <a href="'.$icon4Link.'"> <img class="icon" src="'.$icon4ImageURL.'" /> <span class="montserrat">'.$icon4Name.'</span> </a> </div>';
			}
		}
	} else {
		$i4IC = 'color: '.$icon4IconColour.';';
		$i4ICH = 'color: '.$icon4IconHColour.';';
		if ($icon4VoteLink == true) {
			$i4Di = '<div class="iconWrap"> <a class="venobox" data-type="iframe" href="pages/vote"> <div class="icon fa '.$icon4Type.'"></div> <span class="montserrat">'.$icon4Name.'</span> </a> </div>';
		} else {
			if ($icon4NewTab ==  true) {
				$i4Di = '<div class="iconWrap"> <a href="'.$icon4Link.'" target="_blank"> <div class="icon fa '.$icon4Type.'"></div> <span class="montserrat">'.$icon4Name.'</span> </a> </div>';
			} else {
				$i4Di = '<div class="iconWrap"> <a href="'.$icon4Link.'"> <div class="icon fa '.$icon4Type.'"></div> <span class="montserrat">'.$icon4Name.'</span> </a> </div>';
			}
		}
	}
	if ($icon4Colour !== null) {
		$i4C = "color: ".$icon4Colour.";";
	} else {
		$i4C = "";
	}
} else {
	$i4D = "display: none;";
}




if ($icon5Display == true) {
	$i5D = "display: block;";
	if ($icon5Image == true) {
		if ($icon5VoteLink == true) {
			$i5Di = '<div class="iconWrap"> <a class="venobox" data-type="iframe" href="pages/vote"> <img class="icon" src="'.$icon5ImageURL.'" /> <span class="montserrat">'.$icon5Name.'</span> </a> </div>';
		} else {
			if ($icon5NewTab ==  true) {
				$i5Di = '<div class="iconWrap"> <a href="'.$icon5Link.'" target="blank"> <img class="icon" src="'.$icon5ImageURL.'" /> <span class="montserrat">'.$icon5Name.'</span> </a> </div>';
			} else {
				$i5Di = '<div class="iconWrap"> <a href="'.$icon5Link.'"> <img class="icon" src="'.$icon5ImageURL.'" /> <span class="montserrat">'.$icon5Name.'</span> </a> </div>';
			}
		}
	} else {
		$i5IC = 'color: '.$icon5IconColour.';';
		$i5ICH = 'color: '.$icon5IconHColour.';';
		if ($icon5VoteLink == true) {
			$i5Di = '<div class="iconWrap"> <a class="venobox" data-type="iframe" href="pages/vote"> <div class="icon fa '.$icon5Type.'"></div> <span class="montserrat">'.$icon5Name.'</span> </a> </div>';
		} else {
			if ($icon5NewTab ==  true) {
				$i5Di = '<div class="iconWrap"> <a href="'.$icon5Link.'" target="_blank"> <div class="icon fa '.$icon5Type.'"></div> <span class="montserrat">'.$icon5Name.'</span> </a> </div>';
			} else {
				$i5Di = '<div class="iconWrap"> <a href="'.$icon5Link.'"> <div class="icon fa '.$icon5Type.'"></div> <span class="montserrat">'.$icon5Name.'</span> </a> </div>';
			}
		}
	}
	if ($icon5Colour !== null) {
		$i5C = "color: ".$icon5Colour.";";
	} else {
		$i5C = "";
	}
} else {
	$i5D = "display: none;";
}




if ($icon6Display == true) {
	$i6D = "display: block;";
	if ($icon6Image == true) {
		if ($icon6VoteLink == true) {
			$i6Di = '<div class="iconWrap"> <a class="venobox" data-type="iframe" href="pages/vote"> <img class="icon" src="'.$icon6ImageURL.'" /> <span class="montserrat">'.$icon6Name.'</span> </a> </div>';
		} else {
			if ($icon6NewTab ==  true) {
				$i6Di = '<div class="iconWrap"> <a href="'.$icon6Link.'" target="blank"> <img class="icon" src="'.$icon6ImageURL.'" /> <span class="montserrat">'.$icon6Name.'</span> </a> </div>';
			} else {
				$i6Di = '<div class="iconWrap"> <a href="'.$icon6Link.'"> <img class="icon" src="'.$icon6ImageURL.'" /> <span class="montserrat">'.$icon6Name.'</span> </a> </div>';
			}
		}
	} else {
		$i6IC = 'color: '.$icon6IconColour.';';
		$i6ICH = 'color: '.$icon6IconHColour.';';
		if ($icon6VoteLink == true) {
			$i6Di = '<div class="iconWrap"> <a class="venobox" data-type="iframe" href="pages/vote"> <div class="icon fa '.$icon6Type.'"></div> <span class="montserrat">'.$icon6Name.'</span> </a> </div>';
		} else {
			if ($icon6NewTab ==  true) {
				$i6Di = '<div class="iconWrap"> <a href="'.$icon6Link.'" target="_blank"> <div class="icon fa '.$icon6Type.'"></div> <span class="montserrat">'.$icon6Name.'</span> </a> </div>';
			} else {
				$i6Di = '<div class="iconWrap"> <a href="'.$icon6Link.'"> <div class="icon fa '.$icon6Type.'"></div> <span class="montserrat">'.$icon6Name.'</span> </a> </div>';
			}
		}
	}
	if ($icon6Colour !== null) {
		$i6C = "color: ".$icon6Colour.";";
	} else {
		$i6C = "";
	}
} else {
	$i6D = "display: none;";
}




if ($icon7Display == true) {
	$i7D = "display: block;";
	if ($icon7Image == true) {
		if ($icon7VoteLink == true) {
			$i7Di = '<div class="iconWrap"> <a class="venobox" data-type="iframe" href="pages/vote"> <img class="icon" src="'.$icon7ImageURL.'" /> <span class="montserrat">'.$icon7Name.'</span> </a> </div>';
		} else {
			if ($icon7NewTab ==  true) {
				$i7Di = '<div class="iconWrap"> <a href="'.$icon7Link.'" target="blank"> <img class="icon" src="'.$icon7ImageURL.'" /> <span class="montserrat">'.$icon7Name.'</span> </a> </div>';
			} else {
				$i7Di = '<div class="iconWrap"> <a href="'.$icon7Link.'"> <img class="icon" src="'.$icon7ImageURL.'" /> <span class="montserrat">'.$icon7Name.'</span> </a> </div>';
			}
		}
	} else {
		$i7IC = 'color: '.$icon7IconColour.';';
		$i7ICH = 'color: '.$icon7IconHColour.';';
		if ($icon7VoteLink == true) {
			$i7Di = '<div class="iconWrap"> <a class="venobox" data-type="iframe" href="pages/vote"> <div class="icon fa '.$icon7Type.'"></div> <span class="montserrat">'.$icon7Name.'</span> </a> </div>';
		} else {
			if ($icon7NewTab ==  true) {
				$i7Di = '<div class="iconWrap"> <a href="'.$icon7Link.'" target="_blank"> <div class="icon fa '.$icon7Type.'"></div> <span class="montserrat">'.$icon7Name.'</span> </a> </div>';
			} else {
				$i7Di = '<div class="iconWrap"> <a href="'.$icon7Link.'"> <div class="icon fa '.$icon7Type.'"></div> <span class="montserrat">'.$icon7Name.'</span> </a> </div>';
			}
		}
	}
	if ($icon7Colour !== null) {
		$i7C = "color: ".$icon7Colour.";";
	} else {
		$i7C = "";
	}
} else {
	$i7D = "display: none;";
}




if ($icon8Display == true) {
	$i8D = "display: block;";
	if ($icon8Image == true) {
		if ($icon8VoteLink == true) {
			$i8Di = '<div class="iconWrap"> <a class="venobox" data-type="iframe" href="pages/vote"> <img class="icon" src="'.$icon8ImageURL.'" /> <span class="montserrat">'.$icon8Name.'</span> </a> </div>';
		} else {
			if ($icon8NewTab ==  true) {
				$i8Di = '<div class="iconWrap"> <a href="'.$icon8Link.'" target="blank"> <img class="icon" src="'.$icon8ImageURL.'" /> <span class="montserrat">'.$icon8Name.'</span> </a> </div>';
			} else {
				$i8Di = '<div class="iconWrap"> <a href="'.$icon8Link.'"> <img class="icon" src="'.$icon8ImageURL.'" /> <span class="montserrat">'.$icon8Name.'</span> </a> </div>';
			}
		}
	} else {
		$i8IC = 'color: '.$icon8IconColour.';';
		$i8ICH = 'color: '.$icon8IconHColour.';';
		if ($icon8VoteLink == true) {
			$i8Di = '<div class="iconWrap"> <a class="venobox" data-type="iframe" href="pages/vote"> <div class="icon fa '.$icon8Type.'"></div> <span class="montserrat">'.$icon8Name.'</span> </a> </div>';
		} else {
			if ($icon8NewTab ==  true) {
				$i8Di = '<div class="iconWrap"> <a href="'.$icon8Link.'" target="_blank"> <div class="icon fa '.$icon8Type.'"></div> <span class="montserrat">'.$icon8Name.'</span> </a> </div>';
			} else {
				$i8Di = '<div class="iconWrap"> <a href="'.$icon8Link.'"> <div class="icon fa '.$icon8Type.'"></div> <span class="montserrat">'.$icon8Name.'</span> </a> </div>';
			}
		}
	}
	if ($icon8Colour !== null) {
		$i8C = "color: ".$icon8Colour.";";
	} else {
		$i8C = "";
	}
} else {
	$i8D = "display: none;";
}




if ($annToggle == true) {
	$annD = "display: block;";
	if ($annColour !== null) {
		$annC = "color: ".$annColour.";";
	} else {
		$annC = "";
	}
} else {
	$annD = "display: none;";
}




if ($ssToggle == true) {
	$ssD = "display: block;";
	if ($c2cColour !== null) {
		$c2cC = "color: ".$c2cColour.";";
	} else {
		$c2cC = "";
	}
	if ($ssBackgroundColour !== null) {
		$c2cBC = "background-color: ".$c2cBackgroundColour.";";
	} else {
		$c2cBC = "";
	}
	if ($ssColour !== null) {
		$ssC = "color: ".$ssColour.";";
	} else {
		$ssC = "";
	}
	if ($ssBackgroundColour !== null) {
		$ssBC = "background-color: ".$ssBackgroundColour.";";
	} else {
		$ssBC = "";
	}
	$data = json_decode( file_get_contents( "http://mcapi.ca/query/$ipNumber/players" ), true ); 
	if ($data['status'] == true) {
		$online = "Join ".$data['players']['online']." others at ".$ipDomain."!";
	} else {
		$online = "Server currently offline.";
	}
} else {
	$ssD = "display: none;";
} 




if ($parToggle == true) {
	$par = '<script src="js/jquery.firefly-0.4.js" type="text/javascript">';
	if ($parColour !== null) {
		$parC = $parColour;
	} else {
		$parC = "#c6ffb3";
	}
} else {
	$par = '<script>';
}

$footerC = "color: ".$footerColour.";";
?>

<!DOCTYPE html>
<html>
<head>

	<title><?php echo $title ?></title>

	<link rel="stylesheet" href="css/custom.min.css" />
	<link rel="stylesheet" href="css/animate.min.css" />
	<link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="screen" />
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat' />
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	

	<link rel="icon" href="img/favicon.png" />
	<link rel="image" href="img/favicon.png" />

	<meta property="og:title" content="<?php echo $title ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="img/favicon.png" />
	<meta property="og:description" content="<?php echo $pageDesc ?>"/>
	<meta name="description" content="<?php echo $pageDesc ?>"/>
	<meta name="keywords" content="<?php echo $pageKey ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>

	<style>
		.banner { <?php echo $annD." ".$annC; ?> }
		.content .serverStatus { <?php echo $ssD." ".$ssBC; ?> }
		.content .serverStatus span { <?php echo $ssC; ?> }
		button.c2c { <?php echo $c2cC; ?> }
		button.c2c { <?php echo $c2cBC; ?> }
		.icon1 { <?php echo $i1D; ?> }
		.icon2 { <?php echo $i2D; ?> }
		.icon3 { <?php echo $i3D; ?> }
		.icon4 { <?php echo $i4D; ?> }
		.icon5 { <?php echo $i5D; ?> }
		.icon6 { <?php echo $i6D; ?> }
		.icon7 { <?php echo $i7D; ?> }
		.icon8 { <?php echo $i8D; ?> }
		.icon1 span { <?php echo $i1C; ?> }
		.icon2 span { <?php echo $i2C; ?> }
		.icon3 span { <?php echo $i3C; ?> }
		.icon4 span { <?php echo $i4C; ?> }
		.icon5 span { <?php echo $i5C; ?> }
		.icon6 span { <?php echo $i6C; ?> }
		.icon7 span { <?php echo $i7C; ?> }
		.icon8 span { <?php echo $i8C; ?> }
		.icon1 .icon { <?php echo $i1IC; ?> }
		.icon2 .icon { <?php echo $i2IC; ?> }
		.icon3 .icon { <?php echo $i3IC; ?> }
		.icon4 .icon { <?php echo $i4IC; ?> }
		.icon5 .icon { <?php echo $i5IC; ?> }
		.icon6 .icon { <?php echo $i6IC; ?> }
		.icon7 .icon { <?php echo $i7IC; ?> }
		.icon8 .icon { <?php echo $i8IC; ?> }
		.icon1 .icon:hover { <?php echo $i1ICH; ?> }
		.icon2 .icon:hover { <?php echo $i2ICH; ?> }
		.icon3 .icon:hover { <?php echo $i3ICH; ?> }
		.icon4 .icon:hover { <?php echo $i4ICH; ?> }
		.icon5 .icon:hover { <?php echo $i5ICH; ?> }
		.icon6 .icon:hover { <?php echo $i6ICH; ?> }
		.icon7 .icon:hover { <?php echo $i7ICH; ?> }
		.icon8 .icon:hover { <?php echo $i8ICH; ?> }
		.footer, .footer a { <?php echo $footerC; ?> }

	</style>

	<div class="header animated fadeInDown">
		<div class="banner">
			<?php echo "<span class='montserrat'>$annText</span>"; ?>
		</div>
		<img class="logo animated pulse infinite" src="img/logo.png" />
	</div>

	<div class="content animated fadeInUp">
		<div class="serverStatus">
			<span><?php echo $online; ?></span>
			<button class="c2c">Click to copy!</button>
		</div>
		<div class="navbar">
			<div class="row">
				<?php echo $i1Di; ?>

				<?php echo $i2Di; ?>

				<?php echo $i3Di; ?>

				<?php echo $i4Di; ?>

				<?php echo $i5Di; ?>

				<?php echo $i6Di; ?>

				<?php echo $i7Di; ?>

				<?php echo $i8Di; ?>

			</div>
		</div>
	</div>

	<div class="footer animated fadeInUp">
		<span class="montserrat"><?php echo $footer; ?> | <a href="https://craftilldawn.com/">Icons made by CraftillDawn</a></span>
	</div>
	
	<!-- JAVASCRIPT -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="venobox/venobox.min.js"></script>
	<script type="text/javascript" src="js/clipboard.min.js"></script>
	<?php echo $par; ?></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script>
		$.firefly({
			color: '<?php echo $parColour; ?>',
			minPixel: <?php echo $parMax; ?>,
			maxPixel: <?php echo $parMin; ?>,
			total : <?php echo $parTotal; ?>,
			on: 'body'
		});

		var $c2c = $( "button.c2c" ).html();

		$( "button.c2c" ).click(function() {
			if ($c2c == "Click to copy!") {
				$( "button.c2c" ).html( "Copied!" );
				var clipboard = new Clipboard('button.c2c', {
					text: function() {
						return '<?php echo $ipDomain; ?>';
					}
				});
			} else {
				end();
			};
		});
	</script>
</body>
</html>