<?php
$projectsPath = __DIR__ . '/../data/projects.json';

if (!file_exists($projectsPath)) {
    die('projects.json not found');
}

$projects = json_decode(file_get_contents($projectsPath), true);
$projects = is_array($projects) ? $projects : [];

$activeFilter = $_GET['filter'] ?? 'all';

$filteredProjects = array_filter($projects, function ($project) use ($activeFilter) {
    return $activeFilter === 'all' || $project['stack'] === $activeFilter;
});

// Filters
$filters = [
    'all' => 'All',
    'Wordpress' => 'Wordpress',
    'React' => 'React',
    'Astro' => 'Astro'
];

// Active Filter
$activeFilter = $_GET['filter'] ?? 'all';

// Filters
$filteredProjects = array_filter($projects, function ($project) use ($activeFilter) {
    if ($activeFilter === 'all') {
        return true;
    }
    return $project['stack'] === $activeFilter;
});
?>

<section class="projects">
  <div class="container">

    <!-- Filters -->
    <div class="filters">
      <?php foreach ($filters as $value => $label): ?>
        <a
          href="?filter=<?= $value ?>"
          class="<?= $activeFilter === $value ? 'filter-active' : 'filter-btn' ?>"
        >
          <?= $label ?>
        </a>
      <?php endforeach; ?>
    </div>

    <!-- Projects -->
    <div class="projects-grid">
      <?php foreach ($filteredProjects as $project): ?>
        <div class="project-card">

          <div class="project-image">
            <img src="<?= $project['img'] ?>" alt="<?= htmlspecialchars($project['title']) ?>">
          </div>

          <div class="project-content">
            <h3><?= htmlspecialchars($project['title']) ?></h3>
            <p><?= htmlspecialchars($project['description']) ?></p>

            <div class="project-meta">

              <!-- Tags -->
              <div class="tags">
                <?php foreach (explode(',', $project['stack']) as $tag): ?>
                  <span><?= trim($tag) ?></span>
                <?php endforeach; ?>
              </div>

              <!-- Icons -->
              <div class="tech-icons">
                <?php
                $icons = is_array($project['icons']) ? $project['icons'] : [$project['icons']];
                foreach ($icons as $icon):
                ?>
                  <div class="tech-icon">
                    <img src="<?= $icon ?>" alt="icon">
                  </div>
                <?php endforeach; ?>
              </div>

              <!-- Links -->
              <div class="links">
                <?php if (!empty($project['demo'])): ?>
                  <a href="<?= $project['demo'] ?>" target="_blank">🔗</a>
                <?php endif; ?>

                <?php if (!empty($project['github'])): ?>
                  <a href="<?= $project['github'] ?>" target="_blank">🐙</a>
                <?php endif; ?>
              </div>

            </div>
          </div>

        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<style>
  .projects {
  color: black;
  padding: 40px 20px;
}

.projects-title {
  font-size: 26px;
  font-weight: bold;
  margin-bottom: 30px;
}

.projects-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 30px;
}

.project-card {
  background: rgb(243, 241, 241);
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
  transition: transform 0.3s ease;
}

.project-card:hover {
  transform: translateY(-5px);
}

.project-image img {
  width: 100%;
  height: auto;
  display: block;
}

.project-content {
  padding: 20px;
}

.project-content h3 {
  font-size: 18px;
  margin: 10px 0;
}

.project-content p {
  font-size: 14px;
  margin-bottom: 15px;
}

.tags {
  margin-bottom: 15px;
  display: none;
}

.tags span {
  display: inline-block;
  background: red;
  color: white;
  font-size: 12px;
  padding: 5px 10px;
  border-radius: 6px;
  margin: 3px;
}

.links {
  display: flex;
  gap: 20px;
}

.icon {
  color: black;
  font-size: 25px;
  text-decoration: none;
}

.icon:hover {
  color: red;
  transform: scale(1.2);
}

.project-meta {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}

.tech-icons {
  display: flex;
  flex-direction: row;
  gap: 5px;
}

.tech-icon img {
  height: 20px;
}

/* Filter */

.filters {
  display: flex;
  gap: 1rem;
  margin-bottom: 2rem;
  justify-content: center;
  flex-wrap: wrap;
}

.filter-btn {
  padding: 0.5rem 1rem;
  border: 2px solid gray;
  border-radius: 25px;
  background: transparent;
  color: black;
  font-size: 0.9rem;
  cursor: pointer;
  transition: all 0.3s ease;
}

.filter-btn:hover {
  background: red;
  color: #fff;
}

.filter-active {
  padding: 0.5rem 1rem;
  background: red;
  color: #fff;
  border: 2px solid white;
  border-radius: 25px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

@media (min-width: 300px) {
  .projects-grid,
  .filters {
    grid-template-columns: repeat(1, 1fr);
    padding: 3px 3px;
  }
}

@media (min-width: 768px) {
  .projects-grid,
  .filters {
    grid-template-columns: repeat(2, 1fr);
    padding: 3px 3px;
  }
  .icon {
    font-size: 20px;
  }
  .tech-icons {
    height: 15px;
  }
}

@media (min-width: 1024px) {
  .projects-grid,
  .filters {
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  }
}
</style>