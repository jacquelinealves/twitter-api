<?php include "twitteroauth/twitteroauth.php";
	$consumer_key = "kXtmyLUdWkGGpEg0VG3e6aaWk";
	$consumer_secret = "7SBlSTJPVzkfMdMAjxJeR0sA8iqXSnTfMQLIafFsJY2JUGDfZV";
	$access_token = "104456697-iE1tW4rcOAoxjBX36B7YhWz4UK28bb9rObajRqtx";
	$access_token_secret = "CLV8FAlh3Xax82DPKff4tO7WnN3xziGk4JJ1xXRP9gici";

	$twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

	$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=%23encosteocarrinho&result_type=recent&count=200');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Twitter API | Homerefill</title>

  <!-- CSS -->
  <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

	<!-- Header -->
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="menu">
          <li class="menu-text">Blog</li>
          <li><a href="#">One</a></li>
          <li><a href="#">Two</a></li>
          <li><a href="#">Three</a></li>
        </ul>
      </div>
    </div>
    <!--// Header -->

	<!-- Content -->
    <div class="callout large primary">
      <div class="row column text-center">
        <h1>Our Blog</h1>
        <h2 class="subheader">Such a Simple Blog Layout</h2>
      </div>
    </div>
    
    <div class="row medium-8 large-7 columns">
      <div class="blog-post">
        <?php foreach ($tweets->statuses as $key => $tweet) { ?>
  	    	<div class="post-topic">
  	    		<img class="image-profile" src="<?=$tweet->user->profile_image_url;?>" /><?=$tweet->text; ?><br>
  	    	</div>
		    <?php } ?>
      </div>
    </div>
    <!--// Content -->

<!-- JS -->
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
  $(document).foundation();
</script>
</body>
</html>