<?php

namespace VahidIrn\Gateway\Eghtesadnovin;

class EghtesadnovinResult
{

    private static $results = array(
        array(
            'code' => 'erAAS_UseridOrPassIsRequired',
            'message'=>'failed',
            'fa' => 'کد کاربری و رمز الزامی هست',
            'en' => 'ًUser id or password is required',
            'retry' => false
        ),
    );

    /**
     * return response
     *
     * @param int $code
     * @param string $message
     * @return null
     */
    public static function codeResponse($code,$message)
    {
        $code = intval($code);

        foreach(self::$results as $v) {
            if ($v['message'] == $message && $v['code'] == $code)
                return $v;
        }

        return null;
    }
}
