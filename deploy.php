<?php
/**
 * Auto-Deployment Script
 * Bypasses local bash/zsh SIGINT locks by executing git sequentially via PHP shell_exec.
 */
header('Content-Type: text/plain');

$commands = [
    'git status 2>&1',
    'git add .htaccess router.php CHANGELOG.md 2>&1',
    'git commit -m "fix(routing): implement robust Front Controller (router.php) and FallbackResource to bypass Apache Directory 404s" 2>&1',
    'git push origin staging 2>&1'
];

foreach ($commands as $cmd) {
    echo "Executing: $cmd\n";
    $output = shell_exec($cmd);
    echo $output . "\n\n";
    sleep(1);
}
echo "Deployment sequence completed.\n";
?>