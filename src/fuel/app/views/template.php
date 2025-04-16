<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<style>
		body { margin: 40px; }
	</style>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <?php if (\Auth::check()): ?>
                        <li><a href="<?php echo Uri::create('auth/logout'); ?>">ログアウト</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo Uri::create('auth/login'); ?>">ログイン</a></li>
                        <li><a href="<?php echo Uri::create('auth/register'); ?>">新規作成</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
	<div class="container">

		<div class="col-md-12">
			<h1><?php echo $title; ?></h1>
			<hr>
<?php if (Session::get_flash('success')): ?>
			<div class="alert alert-success">
				<strong>Success</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
				</p>
			</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
			<div class="alert alert-danger">
				<strong>Error</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
				</p>
			</div>
<?php endif; ?>
		</div>
		<div class="col-md-12">
<?php echo $content; ?>
		</div>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="https://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
			</p>
		</footer>
	</div>
</body>
</html>
