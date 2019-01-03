<?php

namespace Seymuromarov\Dater;

use Carbon\Carbon;

class DaterOperator
{

    public function convert($date, $formatOf, $lang = "en")
    {
        $language = $this->languageArray($lang);
        $date = Carbon::parse($date);
        $formatOfDates = explode(' ', $formatOf);
        $result = "";
        foreach ($formatOfDates as $formatOfDate) {
            switch ($formatOfDate) {
                case "d":
                    $result = $result . $date->day . " ";
                    break;
                case "y":
                    $result = $result . $date->year . " ";
                    break;
                case "m":
                    $result = $result . $language[$date->month - 1] . " ";
                    break;
            }
            if (str_contains($formatOfDate, '-')) {
                $month = explode('-', $formatOfDate);
                $result = $result . substr($language[$date->month - 1],0, $month[1]) . " ";
            }

        }
        return $result;


    }


    public function languageArray($lang)
    {
        switch ($lang) {
            case "en":
                return [
                    'january',
                    'february',
                    'march',
                    'april',
                    'may',
                    'june',
                    'july',
                    'august',
                    'september',
                    'october',
                    'november',
                    'december'
                ];
                break;
            case "ru":
                return [
                    'января',
                    'февраля',
                    'марта',
                    'апреля',
                    'мая',
                    'июня',
                    'июля',
                    'августа',
                    'сентября',
                    'октября',
                    'ноября',
                    'декабря'
                ];
                break;
            case "az":
                return [
                    'yanvar',
                    'fevral',
                    'mart',
                    'aprel',
                    'may',
                    'iyun',
                    'iyul',
                    'avqust',
                    'sentyabr',
                    'oktyabr',
                    'noyabr',
                    'dekabr'

                ];
                break;
            default:
                return [
                    'january',
                    'february',
                    'march',
                    'april',
                    'may',
                    'june',
                    'july',
                    'august',
                    'september',
                    'october',
                    'november',
                    'december'
                ];
        }
    }


}