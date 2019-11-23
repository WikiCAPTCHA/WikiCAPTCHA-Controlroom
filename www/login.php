<?php
// load everything
require '../load.php';

// this is the homepage (the business logic of this page it's in this class)
$page = new PageLogin();

// print site header
$page->printHeader();
?>

	<form method="post">

		<?php form_action( 'do-login' ) ?>

		<!-- username -->
		<p>
			<label for="user-uid"><?= esc_html( __( "Username" ) ) ?></label>
			<br />
			<input id="user-uid" name="user_uid" />
		</p>

		<!-- password -->
		<p>
			<label for="user-pwd"><?= esc_html( __( "Password" ) ) ?></label>
			<br />
			<input id="user-pwd" name="user_password" />
		</p>

		<!-- submit button -->
		<p><button><?= esc_html( __( "Login" ) ) ?></button></p>

	</form>

<?php
$page->printFooter();
