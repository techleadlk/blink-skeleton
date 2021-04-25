<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

/**
 * @property int $id
 * @property int $article_id
 * @property int $score
 * @property string $ip
 * @property Carbon $created_at
 * @property Article $article
 */
class Vote extends Model
{
    use HasFactory;

    public const CACHE_KEY_TOTAL_COUNT = 'total_votes_count';
    public const DAILY_LIMIT = 10;

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }

    public function setUpdatedAt($value): self
    {
        return $this;
    }

    public static function count(): int
    {
        return Cache::rememberForever(self::CACHE_KEY_TOTAL_COUNT, function () {
            return Vote::query()->count();
        });
    }
}
