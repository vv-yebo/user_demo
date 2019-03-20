<?php
/**
 * Created by PhpStorm.
 * User: yebo
 * Date: 2019/3/20
 * Time: 下午1:43
 */

namespace app\Union\Alipay;

class AlipayUnion
{

    public function __construct()
    {
    }

    /**
     * 获取微信联合登录URL
     *
     * @param $type 0
     */

    public function getUnionUrl($status = 1, $type = 0)
    {

    }

    /**
     * 获取微信联合登录code
     */

    public function getCode($status = 1, $type = 0)
    {

    }

    /**
     * 通过code获取access token
     */

    public function getAccessToken($status = 1, $type = 0)
    {

    }

    /**
     * 通过access token 请求接口获取user info
     */

    public function getUserInfo($status = 1, $type = 0)
    {

    }

}