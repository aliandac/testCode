<?php


namespace App\Form;


/**
 * Class EavForm
 * @package App\Form
 *
 */
class EavForm
{

    /**
     * @param $name
     * @param $datas
     * @return string
     */
    function select($name, $datas)
    {
        $select = "<select name='$name' >";
        foreach ($datas as $data)
            $select .= "<option value='$data'>$data</option>";
        $select .= "</select>";


        return $select;

    }


    /**
     * @param $type
     * @param $name
     * @param null $value
     * @return string
     */
    function input($type, $name, $value = null)
    {
        return sprintf('<input type="%s" name="%s" value="%s" />', $type, $name, $value);
    }


}