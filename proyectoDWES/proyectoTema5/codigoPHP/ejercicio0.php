
        <div class="content">
            <?php
            session_start();
            echo '<h3>Variable Session</h3>';
            echo "<pre style='text-align:left;'>";
            print_r($_SESSION);
            echo "</pre>";
            echo '<h3>Variable Cookie</h3>';
            echo "<pre style='text-align:left;'>";
            print_r($_COOKIE);
            echo "</pre>";
            echo '<h3>Variable Server</h3>';
            echo "<pre style='text-align:left;'>";
            print_r($_SERVER) . '<br>';
            echo "</pre>";
            echo '<h3>PHP.ini</h3>';
            phpinfo();
            ?>
        </div>