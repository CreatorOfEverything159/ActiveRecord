<?php

namespace Post;

use PDO;

class Post extends ActiveRecord
{
    private ?int $id;
    private string $postName;
    private string $postContent;
    private string $datetime;

    public function __construct($postName, $postContent, $datetime, $id = null)
    {
        $this->id = $id;
        $this->postName = $postName;
        $this->postContent = $postContent;
        $this->datetime = $datetime;
    }

    public function save(): bool { return true; }

    public static function remove($id): void {}

    public static function getById($id) {}

    public static function getByFields($task, $datetime) {}

    public function add(): bool { return true; }

    public static function getAll(): array { return []; }

    public static function getConnection(): PDO
    {
        return self::$connection;
    }

    public function getId(): int { return 1; }

    public function getDatetime(): string { return ''; }

    public function getPostName(): string { return ''; }

}