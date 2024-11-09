<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @property int $id
 * @property string $github
 * @property string $linkedin
 * @property string $fiverr
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SocialsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Socials newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Socials newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Socials query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Socials whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Socials whereFiverr($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Socials whereGithub($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Socials whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Socials whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Socials whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Contact extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFactory> */
    use HasFactory;

    protected $guarded = [];

}
