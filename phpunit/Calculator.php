<?php

// ประกาศคลาส Calculator
class Calculator
{

    // ฟังก์ชันสำหรับการบวก
    public function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    // ฟังก์ชันสำหรับการลบ
    public function subtract($num1, $num2)
    {
        return $num1 - $num2;
    }

    // ฟังก์ชันสำหรับการคูณ
    public function multiply($num1, $num2)
    {
        return $num1 * $num2;
    }

    // ฟังก์ชันสำหรับการหาร
    public function divide($num1, $num2)
    {
        return $num1 / $num2;
    }
}
