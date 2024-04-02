<?php
if (!isset($_SERVER['REMOTE_USER'])) {
} else {
    echo "<p>Hello {$_SERVER['REMOTE_USER']}.</p>";
}
?>