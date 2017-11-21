<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/22
 * Time: 1:24
 */
namespace  echoBallon\Md5Hash;
class Md5
{
    /**
     * @param $value
     * @param array $options
     * @return string
     */
    public function make($value, array  $options=[]){
       $salt = isset($options['salt'])?$options['salt']:'';
       return hash('md5',$value.$salt);
   }

    /**
     * @param $value
     * @param $hashvalue
     * @param array $options
     * @return bool
     */
    public function check($value, $hashvalue, array $options=[]){
       $salt = isset($options['salt'])?$options['salt']:'';

        return hash('md5',$value.$salt) ==$hashvalue;
   }
}