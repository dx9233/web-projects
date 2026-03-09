<?php $projects = loadProjects(); ?>

<h1>Hello, I'm <?= htmlspecialchars($config['author']); ?>!</h1>
<p>I'm a freelancer and developer. Welcome to my website.</p>

<h2>My Projects</h2>
<ul>
  <?php foreach ($projects as $project): ?>
    <li>
      <strong><?= htmlspecialchars($project['title']); ?></strong><br>
      <?= htmlspecialchars($project['desc']); ?>
    </li>
  <?php endforeach; ?>
</ul>
