<?php

/**
 * 协议管理
 *
 * 该接口采用单一职责原则从 IPhone 接口处分离 协议管理 职责部分所得
 */
interface IConnectionManager
{
    // 拨通电话
    public function dial(string $phoneNumber);

    // 通话完毕，挂断
    public function hangup();
}