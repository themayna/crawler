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

    public function doCurl($url, $decode = false)
    {
        try {
            set_time_limit(0);
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT ,0);
            curl_setopt($curl, CURLOPT_TIMEOUT, 400); //timeout in seconds

            $htmlContent = curl_exec($curl);

            $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            if ($status !== 200) {
                throw new \Exception($status . ':' . curl_error($curl));
            }
            curl_close($curl);
            if ($decode) {
                return json_decode($htmlContent);
            }

            return $htmlContent;
        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }
}