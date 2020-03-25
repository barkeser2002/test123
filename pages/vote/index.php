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



include dirname(__FILE__) . "/../../config.php";



if ($vote1Display ==  true) {
	$vote1Name = $vote1Name;
	if ($vote1NewTab == true) {
		$v1T = "_blank";
	} else {
		$v1T = "_self";
	}
} else {
	$vote1Name = "";
}




if ($vote2Display ==  true) {
	$vote2Name = $vote2Name;
	if ($vote2NewTab == true) {
		$v2T = "_blank";
	} else {
		$v2T = "_self";
	}
} else {
	$vote2Name = "";
}




if ($vote3Display ==  true) {
	$vote3Name = $vote3Name;
		if ($vote3NewTab == true) {
		$v3T = "_blank";
	} else {
		$v3T = "_self";
	}
} else {
	$vote3Name = "";
}




if ($vote4Display ==  true) {
	$vote4Name = $vote4Name;
	if ($vote4NewTab == true) {
		$v4T = "_blank";
	} else {
		$v4T = "_self";
	}
} else {
	$vote4Name = "";
}




if ($vote5Display ==  true) {
	$vote5Name = $vote5Name;
	if ($vote5NewTab == true) {
		$v5T = "_blank";
	} else {
		$v5T = "_self";
	}
} else {
	$vote5Name = "";
}




if ($vote6Display ==  true) {
	$vote6Name = $vote6Name;
	if ($vote6NewTab == true) {
		$v6T = "_blank";
	} else {
		$v6T = "_self";
	}
} else {
	$vote6Name = "";
}




if ($vote7Display ==  true) {
	$vote7Name = $vote7Name;
	if ($vote7NewTab == true) {
		$v7T = "_blank";
	} else {
		$v7T = "_self";
	}
} else {
	$vote7Name = "";
}




if ($vote8Display ==  true) {
	$vote8Name = $vote8Name;
	if ($vote8NewTab == true) {
		$v8T = "_blank";
	} else {
		$v8T = "_self";
	}
} else {
	$vote8Name = "";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vote</title>

	<link rel="stylesheet" href="css/custom.min.css" />
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat' />
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

	<meta property="og:title" content="Vote" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="<?php echo $pageDesc ?>"/>
	<meta name="description" content="<?php echo $pageDesc ?>"/>
	<meta name="keywords" content="<?php echo $pageKey ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="title">
		<span>VOTING</span>
	</div>
	<div id="links">
		<p>
			When you are voting you helps the server get more players :) <br />
			Remember to write your Minecraft name! <br />
		</p>

		<p>
			Here is the list of all voting sites. You can vote every 24 hours on each site. <br />
			The most important ones are listed first.<br />
		</p>

		<p>
			How to vote: <br />
			1. Choose a site from below <br />
			2. Put your Minecraft name in the input box <br />
			3. Prove that you are a human <br />
			(Captcha, math, Confident etc.) <br />
			4. Click vote!<br />
		</p>

		<h2>Vote links!</h2>
		<ul>
			<li><a href="<?php echo $vote1Link ?>" target="<?php echo $v1T; ?>"><?php echo $vote1Name ?></a></li>
			<li><a href="<?php echo $vote2Link ?>" target="<?php echo $v2T; ?>"><?php echo $vote2Name ?></a></li>
			<li><a href="<?php echo $vote3Link ?>" target="<?php echo $v3T; ?>"><?php echo $vote3Name ?></a></li>
			<li><a href="<?php echo $vote4Link ?>" target="<?php echo $v4T; ?>"><?php echo $vote4Name ?></a></li>
			<li><a href="<?php echo $vote5Link ?>" target="<?php echo $v5T; ?>"><?php echo $vote5Name ?></a></li>
			<li><a href="<?php echo $vote6Link ?>" target="<?php echo $v6T; ?>"><?php echo $vote6Name ?></a></li>
			<li><a href="<?php echo $vote7Link ?>" target="<?php echo $v7T; ?>"><?php echo $vote7Name ?></a></li>
			<li><a href="<?php echo $vote8Link ?>" target="<?php echo $v8T; ?>"><?php echo $vote8Name ?></a></li>
		</ul>
	</div>
</body>
</html>