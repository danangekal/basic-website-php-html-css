<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="asset/css/tema.css">
	<link rel="stylesheet" type="text/css" href="asset/css/responsive.css">
</head>
<body>
	<header>
		<img src="asset/img/logo.png" class="logo">
	</header>
	
	<nav id="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</nav>
	
	<div id="slider"></div>

	<section id="herotext">
		<h1>Welcome to My Website</h1>
		<h3>Here's you will find more about me</h3>
	</section>

	<section id="content" class="container">

		<article id="artikel">
			<h2 class="judul">My Great Article That Ever Posted Here</h2>
			<figure>
				<img src="asset/img/jalanan.jpg" alt="Jalan Sepi London" width="390" height="244">
				<figcaption>Jalan Sepi, London</figcaption>
			</figure>
			<div class="isi-artikel">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
				<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
				<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
				<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
				<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
			</div>
		</article>

		<aside id="sidebar">
			<?php include 'module/select.php'; ?>
			<?php foreach ($row as $data) { ?>
				<div class="item">
					<h3 class="title"><?php echo $data['judul'];?></h3>
					<p class="description"><?php echo $data['isi'];?></p>
					<a class="readmore" href="detail.php">Read More</a>
				</div>
			<?php } ?>
		</aside>

	</section>

	<footer id="footer">
		<h3 class="title">Contact Me</h3>
		<p>
			+62 812 345 678 90<br />
			myemail@gmail.com
		</p>
		<div class="copyright">Copyright &copy; Websaya.com. All Right Reserved</div>
	</footer>
	
</body>
</html>