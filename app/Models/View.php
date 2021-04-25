<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int $article_id
 * @property string $ip
 * @property Carbon $created_at
 */
class View extends Model
{
    use HasFactory;

    public function setUpdatedAt($value): self
    {
        return $this;
    }
}
