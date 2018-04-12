<?php

/**
 * 电话
 *
 * 该接口包含了两个职责：一个是协议管理、一个是数据传送
 * dial() 和 hangup() 两个方法实现的是协议管理，分别负责拨号接通和挂机
 * chat() 实现的是数据传送
 *
 * @see IConnectionManager
 */
interface IPhone
{
    // 拨通电话
    public function dial(string $phoneNumber);

    // 通话
    public function chat($o);

    // 通话完毕，挂电话
    public function hangup();
}