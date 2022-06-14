<?php

namespace App\Models;

use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AbstractModel
 *
 * Autocomplete the Builder methods (for example where(), get(), find(), findOrFail() etc...)
 *
 * From https://blog.nixarsoft.com/2021/04/05/autocomplete-the-eloquent-builder-methods-in-phpstorm/
 * @mixin Builder
 */
abstract class AbstractModel extends Model
{
    protected $guarded = [];
}
