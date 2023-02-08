<?php

namespace App\Service;

class HomeService
{
    public static function getRandomNumbers($dirMaxLength){
        $randNumbersArr = [];
        for ($i=0; $i < 3; $i++) {
            $newRandNum = rand(0, $dirMaxLength - 1);
            while(in_array($newRandNum, $randNumbersArr)){
                $newRandNum = rand(0, $dirMaxLength - 1);
            }
            $randNumbersArr[] = $newRandNum;
        }
        return $randNumbersArr;
    }

    public static function excludeRandomNumsFromScreenshotsArray($screenshotsArr, $randNumbersArr){
        foreach($screenshotsArr as $key => $value){
            if(in_array($key, $randNumbersArr)){
                unset($screenshotsArr[$key]);
            }
        }
        return $screenshotsArr;
    }

    public static function saveRandomScreenshots($screenshotsArr, $randNumbersArr){
        $randScreenshots = [];
        foreach($screenshotsArr as $key => $value){
            if(in_array($key, $randNumbersArr)){
                $randScreenshots[] = $screenshotsArr[$key];
            }
        }
        return $randScreenshots;
    }

}
