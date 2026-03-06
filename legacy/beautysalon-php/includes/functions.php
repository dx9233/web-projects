<?php
function loadProjects() {
    $json = file_get_contents(__DIR__ . '/../data/projects.json');
    return json_decode($json, true) ?? [];
}
