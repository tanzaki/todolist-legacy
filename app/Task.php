<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 7/15/2017
 * Time: 8:47 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * @package App
 * @mixin \Eloquent
 * @property int id
 * @property string title
 * @property string is_done
 */
class Task extends Model
{

}
