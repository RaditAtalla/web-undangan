<?php

$conn = mysqli_connect("localhost", "root", "", "web-undangan");

function read($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function create($query)
{
  global $conn;
  mysqli_query($conn, $query);
}
