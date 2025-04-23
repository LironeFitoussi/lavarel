<?php
// index.php - Directory Listing Navigation

// Get the current path from query string or default to current directory
$path = isset($_GET['path']) ? $_GET['path'] : '.';
$realPath = realpath($path);
$baseDir  = realpath(__DIR__);

// Prevent directory traversal
if (strpos($realPath, $baseDir) !== 0) {
    die('Invalid Path');
}

// Scan directory
$items = scandir($realPath);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index of <?php echo htmlspecialchars($path); ?></title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 20px; }
        .container { max-width: 800px; margin: auto; background: #fff; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        h1 { margin-top: 0; }
        ul { list-style: none; padding: 0; }
        li { margin: 6px 0; }
        a { color: #3498db; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .icon { width: 1.2em; display: inline-block; }
    </style>
</head>
<body>
<div class="container">
    <h1>Index of <?php echo htmlspecialchars($path); ?></h1>
    <ul>
        <?php if ($path !== '.'):
            $parent = dirname($path);
        ?>
            <li><a href="?path=<?php echo urlencode($parent); ?>">
                <span class="icon">⬆️</span> Parent Directory
            </a></li>
        <?php endif; ?>

        <?php foreach ($items as $item):
            if ($item === '.' || $item === '..') continue;
            $itemPath = $path . '/' . $item;
            $safeName = htmlspecialchars($item);
        ?>
            <li>
                <?php if (is_dir($itemPath)): ?>
                    <a href="?path=<?php echo urlencode($itemPath); ?>">
                        <span class="icon">📁</span> <?php echo $safeName; ?>
                    </a>
                <?php else: ?>
                    <a href="<?php echo htmlspecialchars($itemPath); ?>" target="_blank">
                        <span class="icon">📄</span> <?php echo $safeName; ?>
                    </a>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>
