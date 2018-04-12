<?php

/**
 * 数据传送
 *
 * 该接口采用单一职责原则从 IPhone 接口处分离 数据传送 职责部分所得
 */
interface IDataTransfer
{
    public function chat(IConnectionManager $cm);
}