<?php

$json = array();
foreach ($project_tree as $project) {
  $data = array();

  $data['id']       = (int)$project['id'];
  $data['name']       = h($project['name']);
  $data['identifier']       = h($project['identifier']);
  $data['description']       = h($project['description']);
  $data['created_on']       = $project['created_on'];
  $data['updated_on']       = $project['updated_on'];
  $data['is_public']       = false;
  $json[] = $data;
}

echo json_encode(array('projects' => $json,"total_count"=>count($project_tree),"limit"=>count($project_tree),"offset"=>0));