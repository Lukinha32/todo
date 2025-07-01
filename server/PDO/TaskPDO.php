<?php
require_once(__DIR__ . '/../models/task.php');

class TaskPDO
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create (Task $task): void
    {
        $sql = "INSERT INTO  tasks (description, done) VALUES(:descrption,:done)";
        $comand = $this->pdo->prepare($sql);

        $comand->execute([
            'deescription' => $task->description,
            'done'         => $task->done
        ]);
    }

    public function get_all(): array
    {
        $sql = 'SELECT id, description, done FROM tasks';
        $comand = $this->pdo->query($sql);


        return $comand->fetchAll();
    }

    public function get_id(int $id)
    {

    }

    public function update(Task $task): void
    {

    }





}















