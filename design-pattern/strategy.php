<?php

# Es un patrón de diseño donde se tiene una familia de algoritmos con diferente implementación
# o distintas maneras de hacer las cosas
# donde podemos elegir cuál es la mejor dependiendo del escenario

interface IStrategy
{
    public function get() : array;
}

class ArrayStrategy implements IStrategy
{
    private array $data = [ "Title 1", "Title 2", "Title 3" ];

    public function get() : array
    {
        return $this->data;
    }
}

class InfoPrinter
{
    private IStrategy $strategy;

    public function __construct(IStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function print()
    {
        $content = $this->strategy->get();
        foreach ($content as $item){
            echo $item . "<br>";
        }
    }
}

class UrlStrategy implements IStrategy
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function get(): array
    {
        $data = file_get_contents($this->url);
        $arr = json_decode($data, true);
        return array_map(fn($item) => $item["title"], $arr);
    }
}

$arrayStrategy = new ArrayStrategy();
$urlStrategy = new UrlStrategy("https://jsonplaceholder.typicode.com/posts");
//$infoPrinter = new InfoPrinter($arrayStrategy);
$infoPrinter = new InfoPrinter($urlStrategy);
$infoPrinter->print();
