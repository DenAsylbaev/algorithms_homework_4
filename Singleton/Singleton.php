<?php


final class Singleton
{
    private static $instance;
    private int $n;

    // Получение объекта (создаётся при первом вызове)
    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __construct() {/* приватный */}
    private function __clone() {/* приватный */}
    private function __wakeup() {/* приватный */}

    /**
     * @return int
     */
    public function getN(): int
    {
        return $this->n;
    }

    /**
     * @param int $n
     */
    public function setN(int $n): void
    {
        $this->n = $n;
    }



}

// Создание Одиночки
$n1 = Singleton::getInstance();
$n1->setN(6);
echo $n1->getN();

$n2 = Singleton::getInstance();
echo $n2->getN();
