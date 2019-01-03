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
                    'January',
                    'February',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'September',
                    'October',
                    'November',
                    'December'
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
                    'Yanvar',
                    'Fevral',
                    'Mart',
                    'Aprel',
                    'May',
                    'İyun',
                    'İyul',
                    'Avqust',
                    'Sentyabr',
                    'Oktyabr',
                    'Noyabr',
                    'Dekabr'

                ];
                break;
            default:
                return [
                    'January',
                    'February',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'September',
                    'October',
                    'November',
                    'December'
                ];
        }
    }


}