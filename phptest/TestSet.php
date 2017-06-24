<?php

class Fruit {

    private $color;
    private $weight;

    public function __get($name) {              // 这里$name是属性名
        $getter = 'get' . $name;              // getter函数的函数名
        if (method_exists($this, $getter)) {
            return $this->$getter();          // 调用了getter函数
        } elseif (method_exists($this, 'set' . $name)) {
            throw new InvalidCallException('Getting write-only property: '
            . get_class($this) . '::' . $name);
        } else {
            throw new UnknownPropertyException('Getting unknown property: '
            . get_class($this) . '::' . $name);
        }
    }

// $name是属性名，$value是拟写入的属性值
    public function __set($name, $value) {
        $setter = 'set' . $name;             // setter函数的函数名
        if (method_exists($this, $setter)) {
            $this->$setter($value);          // 调用setter函数
        } elseif (method_exists($this, 'get' . $name)) {
            throw new InvalidCallException('Setting read-only property: ' .
            get_class($this) . '::' . $name);
        } else {
            throw new UnknownPropertyException('Setting unknown property: '
            . get_class($this) . '::' . $name);
        }
    }

    public function setColor($value) {
        if (trim($value)) {
            $this->color = $value;
        }
    }

    public function getColor() {
        return 'The color is ' . $this->color;
    }

}

$f = new Fruit();
$f->colord = 'dsd';
echo $f->color;