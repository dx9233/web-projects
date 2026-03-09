<?php
// Processing routes from .htaccess
$route = $_GET['route'] ?? 'home';
$currentCategory = $_GET['category'] ?? null;

// Depending on the route, we connect different pages
/* switch ($route) {
    case 'blog':
        // We continue executing the current code for the blog page.
        break;
        
    case 'post':
        // Code for displaying a single article
        $slug = $_GET['slug'] ?? '';
        // Here you can attach a file to display the article.
        break;
        
    case 'about':
        // Code for the "About Me" page
        include 'about.php';
        exit;
        
    case 'home':
        // Code for the main page
        include 'home.php';
        exit;
        
    default:
        // 404 error
        header("HTTP/1.0 404 Not Found");
        include '404.php';
        exit;
} */

// The rest of the code for the blog page...

// Configuration
define('CONTENT_DIR', __DIR__ . '/../content/blog/');
define('COMPONENTS_DIR', __DIR__ . '/../includes/');

// Connect the category filter component
require_once COMPONENTS_DIR . 'category_filter.php';

// Load articles from Markdown files
function loadMarkdownPosts() {
    $posts = [];
    
    if (!is_dir(CONTENT_DIR)) {
        return $posts;
    }
    
    $files = glob(CONTENT_DIR . '*.md');
    
    foreach ($files as $file) {
        $content = file_get_contents($file);
        
       // Parse front matter (YAML format between ---)
        $pattern = '/^---\s*\n(.*?)\n---\s*\n(.*)$/s';
        if (preg_match($pattern, $content, $matches)) {
            $frontMatter = parseYaml($matches[1]);
            $bodyContent = $matches[2];
            
            $slug = pathinfo($file, PATHINFO_FILENAME);
            
            $posts[] = [
                'slug' => $slug,
                'data' => [
                    'title' => $frontMatter['title'] ?? '',
                    'date' => $frontMatter['date'] ?? '',
                    'categories' => $frontMatter['categories'] ?? [],
                    'image' => $frontMatter['image'] ?? null,
                    'description' => $frontMatter['description'] ?? ''
                ],
                'content' => $bodyContent
            ];
        }
    }
    
    return $posts;
}

// A simple YAML parser for front matter
function parseYaml($yaml) {
    $result = [];
    $lines = explode("\n", trim($yaml));
    
    foreach ($lines as $line) {
        $line = trim($line);
        
        // Skip empty lines and comments
        if (empty($line) || $line[0] === '#') {
            continue;
        }
        
        // Process key: value
        if (preg_match('/^([^:]+):\s*(.+)$/', $line, $matches)) {
            $key = trim($matches[1]);
            $value = trim($matches[2]);
            
            // Remove quotes if there are any
            if (($value[0] === '"' && substr($value, -1) === '"') || 
                ($value[0] === "'" && substr($value, -1) === "'")) {
                $value = substr($value, 1, -1);
            }
            
            // Processing arrays (format: [item1, item2])
            if (preg_match('/^\[(.*)\]$/', $value, $arrayMatches)) {
                $items = explode(',', $arrayMatches[1]);
                $result[$key] = array_map('trim', $items);
            } else {
                $result[$key] = $value;
            }
        }
    }
    
    return $result;
}

// Sort by date (newest first)
function sortPostsByDate($posts) {
    usort($posts, function($a, $b) {
        $dateA = strtotime($a['data']['date']);
        $dateB = strtotime($b['data']['date']);
        return $dateB - $dateA;
    });
    return $posts;
}

// Getting unique categories
function getUniqueCategories($posts) {
    $categories = [];
    
    foreach ($posts as $post) {
        $postCategories = $post['data']['categories'] ?? [];
        
        if (is_string($postCategories)) {
            $postCategories = [$postCategories];
        }
        
        if (is_array($postCategories)) {
            foreach ($postCategories as $category) {
                if (!empty($category)) {
                    $categories[$category] = true;
                }
            }
        }
    }
    
    return array_keys($categories);
}

// Function to get the current category from URL
function getCurrentCategory() {
    $path = $_SERVER['REQUEST_URI'] ?? '';
    
    // Check URLs of the form /blog/category/category-name
    if (preg_match('/\/blog\/category\/([^\/?]+)/', $path, $matches)) {
        return urldecode($matches[1]);
    }
    
   // Check the GET parameter
    if (isset($_GET['category'])) {
        return $_GET['category'];
    }
    
    return null;
}

// Basic logic
$posts = loadMarkdownPosts();
$currentCategory = getCurrentCategory();

// Filter by category if necessary
if ($currentCategory) {
    $filteredPosts = [];
    foreach ($posts as $post) {
        $postCategories = $post['data']['categories'] ?? [];
        
        if (is_string($postCategories)) {
            $postCategories = [$postCategories];
        }
        
        if (is_array($postCategories) && in_array($currentCategory, $postCategories)) {
            $filteredPosts[] = $post;
        }
    }
    $posts = $filteredPosts;
}

$posts = sortPostsByDate($posts);
$categories = getUniqueCategories($posts);

// Dictionary for translating category names (optional)
$catDict = [
    'php' => 'PHP',
    'javascript' => 'JavaScript',
    'vue' => 'Vue.js',
    'react' => 'React',
    'разработка' => 'Разработка',
    'дизайн' => 'Дизайн',
    // Add other categories as needed
];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Блог | Dmitry Lean</title>
</head>
<body>
    <!--<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">Dmitry Lean</a>
                <div class="navbar-nav">
                    <a class="nav-link" href="/">Главная</a>
                    <a class="nav-link active" href="/blog">Блог</a>
                    <a class="nav-link" href="/about">Обо мне</a>
                </div>
            </div>
        </nav>
    </header> -->

    <?php
    // Display the category title if a category is selected
    if ($currentCategory): ?>
        <div class="container category-header">
            <a href="/blog" class="back-link mb-2 d-inline-block">← Назад ко всем статьям</a>
            <h1>
                Категория: <?php echo isset($catDict[$currentCategory]) 
                    ? htmlspecialchars($catDict[$currentCategory]) 
                    : htmlspecialchars($currentCategory); ?>
            </h1>
            <p class="text-muted">Статей в категории: <?php echo count($posts); ?></p>
        </div>
    <?php endif; ?>

    <!-- Display the category filter component -->
    <?php renderCategoryFilter($categories, $catDict); ?>

    <section class="blog">
        <div class="container">
            <?php if (count($posts) > 0): ?>
                <div class="row g-4">
                    <?php foreach ($posts as $post): ?>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <article class="post-card h-100">
                                <?php if (!empty($post['data']['image'])): ?>
                                    <a href="/blog/<?php echo $post['slug']; ?>">
                                        <img src="<?php echo htmlspecialchars($post['data']['image']); ?>" 
                                             alt="<?php echo htmlspecialchars($post['data']['title']); ?>"
                                             class="post-image">
                                    </a>
                                <?php endif; ?>

                                <div class="post-content d-flex flex-column h-100">
                                    <?php if (!empty($post['data']['categories'])): ?>
                                        <?php 
                                        $postCategories = is_array($post['data']['categories']) 
                                            ? $post['data']['categories'] 
                                            : [$post['data']['categories']];
                                        ?>
                                        <div class="mb-2">
                                            <?php foreach ($postCategories as $category): ?>
                                                <a href="/blog/category/<?php echo urlencode($category); ?>" 
                                                   class="category text-decoration-none">
                                                    <?php echo isset($catDict[$category]) 
                                                        ? htmlspecialchars($catDict[$category]) 
                                                        : htmlspecialchars($category); ?>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>

                                    <h2 class="post-title">
                                        <a href="/blog/<?php echo $post['slug']; ?>" class="text-decoration-none text-dark">
                                            <?php echo htmlspecialchars($post['data']['title']); ?>
                                        </a>
                                    </h2>
                                    
                                    <?php if (!empty($post['data']['description'])): ?>
                                        <p class="flex grow"><?php echo htmlspecialchars($post['data']['description']); ?></p>
                                    <?php endif; ?>
                                    
                                    <div class="post-meta mt-auto">
                                        <span class="text-muted">
                                            <?php 
                                            $date = $post['data']['date'];
                                            if ($date) {
                                                $timestamp = strtotime($date);
                                                $months = [
                                                    'января', 'февраля', 'марта', 'апреля', 'мая', 'июня',
                                                    'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'
                                                ];
                                                echo date('d', $timestamp) . ' ' . $months[date('n', $timestamp) - 1] . ' ' . date('Y', $timestamp);
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-5">
                    <p class="lead">
                        <?php if ($currentCategory): ?>
                            В категории "<?php echo htmlspecialchars($currentCategory); ?>" пока нет статей
                        <?php else: ?>
                            Пока нет статей
                        <?php endif; ?>
                    </p>
                    <a href="/blog" class="btn btn-primary">Посмотреть все статьи</a>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <p>&copy; <?php echo date('Y'); ?> Dmitry Lean. Все права защищены.</p>
        </div>
    </footer> -->

    <script>
        // Add the active class to the current category
        document.addEventListener('DOMContentLoaded', function() {
            const currentCategory = "<?php echo addslashes($currentCategory); ?>";
            const categoryLinks = document.querySelectorAll('.categories-list a');
            
            categoryLinks.forEach(link => {
                const url = new URL(link.href);
                const pathParts = url.pathname.split('/');
                const categoryFromUrl = pathParts[pathParts.length - 1];
                
                if (categoryFromUrl === currentCategory) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>