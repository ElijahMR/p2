<?php

namespace Elijah;

class AgeCalculate
{
    private $date;
    private $today;

    public function __construct()
    {
        $this->today = time();
    }

    public function calculate($timeScale)
    {
        $result = $this->today - $this->date;
        if ($timeScale == 'secs') {
            return 'You are approximately ' . $result . ' seconds old.';
        } else if ($timeScale == 'mins') {
            $result = bcdiv($result, 60, 0);

            return 'You are approximately ' . $result . ' minutes old.';

            return $this->today - $this->date;
        } else if ($timeScale == 'hours') {
            $result = bcdiv($result, 3600, 0);

            return 'You are approximately ' . $result . ' hours old.';
        } else if ($timeScale == 'days') {
            $result = bcdiv($result, 86400, 0);

            return 'You are approximately ' . $result . ' days old.';
        } else if ($timeScale == 'weeks') {
            $result = bcdiv($result, 604800, 0);

            return 'You are approximately ' . $result . ' weeks old.';
        } else {
            $weeks = bcdiv($result, 604800, 0);
            $days = bcdiv(bcmod($result, 604800), 86400, 0);
            $hours = bcdiv(bcmod(bcmod($result, 604800), 86400), 3600, 0);
            $mins = bcdiv(bcmod(bcmod(bcmod($result, 604800), 86400), 3600), 60, 0);
            $secs = bcmod(bcmod(bcmod(bcmod($result, 604800), 86400), 3600), 60);

            return 'You are approximately ' . $weeks . ' weeks ' . $days . ' days ' . $hours . ' hours ' . $mins . ' minutes and ' . $secs . ' seconds old.';
        }
    }

    public function leapYearCalculator($day)
    {
        $day = substr($day, 0, 4);
        $numberOfLeapYears = 0;

        for ($i = intval($day); $i < 2019; $i++) {
            if ($i % 4 != 0) {
                continue;
            } else if ($i % 100 != 0) {
                $numberOfLeapYears++;
                continue;
            } else if ($i % 400 != 0) {
                continue;
            } else {
                $numberOfLeapYears++;
                continue;
            }
        }

        return 'There have been ' . $numberOfLeapYears . ' leap years since your birth year.';
    }

    public function hasErrors($day)
    {
        $this->date = strtotime($day);

        if (!$this->date) {
            return 'The date field must contain a date. The date must also be after 1901-12-14';
        } else if ($this->date > strtotime('2018-02-01')) {
            return 'The date must be between 1901-12-13 and 2018-02-01';
        } else {
            return '';
        }
    }
}