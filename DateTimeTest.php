<?php

/**
 * What will output this code?
 */
class DateTimeTest
{
    const FORMAT = 'd-m-Y';
    private $date;

    public function __construct($immutable = false)
    {
        $this->date = ($immutable) ? new DateTimeImmutable() : new DateTime();
    }

    public function today()
    {
        return $this->date->format(self::FORMAT);
    }

    public function addDays($days)
    {
        return $this->date->add(new DateInterval('P'. $days . 'D'))->format(self::FORMAT);
    }

    public function severalDays($day1, $day2, $day3)
    {
        $date1 = $this->addDays($day1);
        $return  = $date1 . PHP_EOL;
        $date2= $this->addDays($day2);
        $return .= $date2 . PHP_EOL;
        $date3 = $this->addDays($day3);

        return $return . $date3;
    }
}

$dateTimeTest = new DateTimeTest();
echo $dateTimeTest->today() . PHP_EOL, $dateTimeTest->addDays(2) . PHP_EOL;
echo $dateTimeTest->severalDays(1, 5, 8);
