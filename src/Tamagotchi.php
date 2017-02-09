<?php
class Tamagotchi
{
    private $name;
    private $food;
    private $attention;
    private $sleep;

    function __construct($name, $food = 20, $attention = 20, $sleep = 20)
    {
        $this->name = $name;
        $this->food = $food;
        $this->attention = $attention;
        $this->sleep = $sleep;
    }

    function setName($new_name)
    {
        $this->name = (string) $new_name;
    }

    function setFood($new_food)
    {
        $this->food = $new_food;
    }

    function setAttention($new_attention)
    {
        $this->attention = $new_attention;
    }

    function setSleep($new_attention)
    {
        $this->sleep = $new_sleep;
    }

    function getName()
    {
        return $this->name;
    }

    function getFood()
    {
        return $this->food;
    }

    function getAttention()
    {
        return $this->attention;
    }

    function getSleep()
    {
        return $this->sleep;
    }



    function foodButton()
    {
        $_SESSION['food'] += 1;
    }

    function attentionButton()
    {
        $_SESSION['attention'] += 1;
    }

    function sleepButton()
    {
        $_SESSION['sleep'] += 1;
    }

    function timePass()
    {
        $_SESSION['food'] -= 5;
        $_SESSION['attention'] -= 5;
        $_SESSION['food'] -= 5;
        if (($this->food > 0) && ($this->attention > 0) && ($this->sleep > 0)) {
            return true;
            //alive
        } else {
            return false;
            //dead
        }
    }


}
?>
