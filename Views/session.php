
<a class="btn btn-primary" href="start-session.php">Start Session</a>
<a class="btn btn-primary" href="protected-content.php">Protected Content</a>

<h2>Welcome: <?php echo isset($_SESSION['admin']) ? $_SESSION['admin'] : 'Invited' ?></h2>