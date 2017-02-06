<?php
/**
 * Created by PhpStorm.
 * User: mainericiangel
 * Date: 2/7/17
 * Time: 1:04 AM
 */

namespace AppBundle\Services;


class CurlService
{
    const serviceName = 'curlService';

    public function doCurl($url)
    {
        try {
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $htmlContent = curl_exec($curl);

            $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            if ($status !== 200) {
                throw new \Exception($status);
            }
            curl_close($curl);

            return $htmlContent;
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }
}