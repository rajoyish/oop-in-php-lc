<?php

class Collection
{
  protected array $items = [];


  public function __construct(array $items)
  {
    $this->items = $items;
  }

  public function sum($key): int
  {
    return array_sum(
      array_column($this->items, $key)
    );
  }
}

class VideosCollection extends Collection
{
  public function length(): int
  {
    return $this->sum('length');
  }
}

class Video
{
  public string $title;
  public int $length;

  public function __construct(string $title, int $length)
  {
    $this->title = $title;
    $this->length = $length;
  }

}

$videos = new  VideosCollection([
  new Video('Video 1', 100),
  new Video('Video 2', 200),
  new Video('Video 3', 300),
]);

echo $videos->length() . PHP_EOL;
